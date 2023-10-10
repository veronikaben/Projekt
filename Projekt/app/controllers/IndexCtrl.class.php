<?php

namespace app\controllers;

use core\App;
use core\Utils;
use core\RoleUtils;
use core\ParamUtils;
use core\SessionUtils;
use app\forms\MagazynForm;

class IndexCtrl {

    private $Produkty;
    private $Zamówienie;
    private $User;
    private $idProduktu;
    private $data;
    private $magazyn;

    public function validate() {
        $this->User = SessionUtils::loadObject("User", true);
        $this->idProduktu = ParamUtils::getFromCleanURL(1, true);
        $this->data = date("Y-m-d");
    }

    public function __construct() {
        $this->magazyn = new MagazynForm();
    }

    public function obiekty() {
        $this->magazyn->obiekty = App::getDB()->query("
            SELECT id_Produktu
            FROM produkty
        ")->fetchAll();
    }

    public function iloscObiektow() {
        $this->obiekty();
        $this->magazyn->MAX = 3;
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
            SELECT produkty.id_Produktu, produkty.Nazwa, rodzaje.zdjecie, produkty.id_Dostępny
            FROM produkty
            INNER JOIN rodzaje ON produkty.id_Rodzaju = rodzaje.id_Rodzaju
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

    public function action_index() {
        $this->generateView();
    }

    public function generateView() {
        $this->Wyswietl();
        App::getSmarty()->assign("Produkty",$this->Produkty);
        App::getSmarty()->assign("magazyn",$this->magazyn);
        App::getSmarty()->assign('User',SessionUtils::loadObject('User', true));
        App::getSmarty()->display('index.tpl');
    }

    public function log($data) {
        $output = $data;
        if (is_array($output))
        $output = implode(',', $output);

        echo "<script>console.log('Debug Objects: " . $output . "' );</script>";
    }

}
