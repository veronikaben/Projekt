<?php

namespace app\controllers;

use core\App;
use core\Utils;
use core\RoleUtils;
use core\ParamUtils;
use core\SessionUtils;
use app\forms\LoginForm;

class PanelCtrl {

    private $User;
    private $Zamowienia;
    private $data;

    public function validate() {
        $this->User = SessionUtils::loadObject("User", true);
    }

    public function action_zamowienieDelete() {
        $id =ParamUtils::getFromCleanURL(1, true);
        App::getDB()->delete("zamówienia", [
            "id_Zamówienia" => $id,
        ]);
        App::getRouter()->redirectTo("panel");
    }

    public function action_panel() {
        $this->validate();
        
        $this->Zamowienia = App::getDB()->query("
            SELECT zamówienia.id_Zamówienia, produkty.Nazwa, users.Login, statusy.Status, zamówienia.data, rodzaje.zdjecie
            FROM zamówienia
            INNER JOIN users ON zamówienia.id_User = users.id_User
            INNER JOIN statusy ON zamówienia.id_Statusu = statusy.id_Statusu
            INNER JOIN produkty ON zamówienia.id_Produktu = produkty.id_Produktu
            INNER JOIN rodzaje ON produkty.id_Rodzaju = rodzaje.id_Rodzaju
        ")->fetchAll();

        $this->generateView();
    }

    public function generateView() {
        App::getSmarty()->assign('Zamowienia', $this->Zamowienia);
        App::getSmarty()->assign('User',SessionUtils::loadObject('User', true));
        App::getSmarty()->display('panel.tpl');
    }
}
