<?php

namespace app\controllers;

use core\App;
use core\Utils;
use core\RoleUtils;
use core\ParamUtils;
use core\SessionUtils;
use app\forms\MagazynForm;

class DodajCtrl {

    private $User;
    private $form;

    public function __construct() {
        $this->form = new  MagazynForm();
    }

    public function validate() {
        $this->User = SessionUtils::loadObject("User", true);
        $this->form->Nazwa = ParamUtils::getFromPost("Nazwa", true);
        $this->form->Rodzaj = ParamUtils::getFromPost("Rodzaj", true);
    }

    public function Rodzaje() {
        $this->form->Rodzaje = App::getDB()->select("rodzaje", [
            "id_Rodzaju",
            "Rodzaj",
            "zdjecie"
        ]);
    }

    public function action_dodaj() {
        $this->validate();
        App::getDB()->insert("produkty", [
            "Nazwa" => $this->form->Nazwa,
            "id_Rodzaju" => $this->form->Rodzaj,
        ]);
        $this->action_dodajShow();
    }
    
    public function action_dodajShow() {
        $this->Rodzaje();
        $this->generateView();
    }

    public function generateView() {
        App::getSmarty()->assign('Rodzaje', $this->form->Rodzaje);
        App::getSmarty()->assign('User',SessionUtils::loadObject('User', true));
        App::getSmarty()->display('dodaj.tpl');
    }
}
