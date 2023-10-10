<?php

namespace app\controllers;

use core\App;
use core\Utils;
use core\RoleUtils;
use core\ParamUtils;
use core\SessionUtils;
use app\forms\MagazynForm;

class KoszykCtrl {

    private $Zamowienia;
    private $User;
    private $data;
    private $magazyn;
    private $idProduktu;
    private $Produkty;

    public function validate() {
        $this->User = SessionUtils::loadObject("User", true);
        // $this->data = date("Y-m-d");
    }

    public function __construct() {
        $this->magazyn = new MagazynForm();
    }

    public function obiekty() {
        $this->validate();
        $this->magazyn->obiekty =  App::getDB()->query("
            SELECT id_Zamówienia
            FROM zamówienia
            WHERE id_User = ". $this->User->id
        )->fetchAll();
    }

    public function iloscObiektow() {
        $this->obiekty();
        $this->magazyn->MAX = 2;
        $reszta = count($this->magazyn->obiekty) % $this->magazyn->MAX;
        $this->magazyn->liczbaStron = (count($this->magazyn->obiekty) - $reszta) / $this->magazyn->MAX;
        if($reszta > 0) {
            $this->magazyn->liczbaStron++;
        }
        $this->magazyn->produkty = array_fill(0, $this->magazyn->liczbaStron, 0);
        for($i=0; $i<count($this->magazyn->produkty); $i++) {
            $this->magazyn->produkty[$i] = $i+1;
        }
    }

    public function offset() {
        $this->iloscObiektow();
        $Strona = ParamUtils::getFromCleanURL(1, true);
        if(empty($Strona)){
            $this->magazyn->offset = 0;
        } else {
            if($Strona == 1) {
                $this->magazyn->offset = 0;
            } else {
                $this->magazyn->offset = $Strona * $this->magazyn->MAX - $this->magazyn->MAX;
            }
        }
    }

    public function Wyswietl() {
        $this->offset();
        $this->Produkty = App::getDB()->query("
            SELECT zamówienia.data, statusy.Status, produkty.Nazwa, rodzaje.Rodzaj, rodzaje.zdjecie
            FROM zamówienia
            INNER JOIN statusy ON zamówienia.id_Statusu = statusy.id_Statusu
            INNER JOIN produkty ON zamówienia.id_Produktu = produkty.id_Produktu
            INNER JOIN rodzaje ON produkty.id_Rodzaju = Rodzaje.id_Rodzaju
            WHERE zamówienia.id_User = ". $this->User->id ."
            LIMIT ". $this->magazyn->MAX ." OFFSET ".$this->magazyn->offset
        )->fetchAll();
    }

    public function action_zamowienia() {
        $this->validate();
        App::getDB()->insert("zamówienia", [
            "data" => $this->data,
            "id_User" => $this->User->id,
            "id_Produktu" => $this->idProduktu,
        ]);
        App::getRouter()->redirectTo("index");
    }

    public function action_koszyk() {
        $this->generateView();
    }

    public function generateView() {
        $this->Wyswietl();
        App::getSmarty()->assign("Zamowienia",$this->Produkty);
        App::getSmarty()->assign("magazyn",$this->magazyn);
        App::getSmarty()->assign('User',SessionUtils::loadObject('User', true));
        App::getSmarty()->display('koszyk.tpl');
    }
}
