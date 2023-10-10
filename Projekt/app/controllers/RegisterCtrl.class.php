<?php

namespace app\controllers;

use core\App;
use core\Utils;
use core\RoleUtils;
use core\ParamUtils;
use app\forms\LoginForm;

class RegisterCtrl {

    private $form;
    private $User;
    private $UserExists;

    public function __construct() {
        //stworzenie potrzebnych obiektów
        $this->form = new LoginForm();
    }

    public function validate() {
        $this->form->Imie = ParamUtils::getFromRequest('Imie');
        $this->form->Nazwisko = ParamUtils::getFromRequest('Nazwisko');
        $this->form->Login = ParamUtils::getFromRequest('Login');
        $this->form->Hasło = ParamUtils::getFromRequest('Hasło');

        //nie ma sensu walidować dalej, gdy brak parametrów
        if (!isset($this->form->Imie))
            return false;

        // sprawdzenie, czy potrzebne wartości zostały przekazane
        if (empty($this->form->Imie)) {
            Utils::addErrorMessage('Nie podano imienia');
        }
        if (empty($this->form->Nazwisko)) {
            Utils::addErrorMessage('Nie podano nazwiska');
        }
        if (empty($this->form->Login)) {
            Utils::addErrorMessage('Nie podano loginu');
        }
        if (empty($this->form->Hasło)) {
            Utils::addErrorMessage('Nie podano hasła');
        }

        //nie ma sensu walidować dalej, gdy brak wartości
        if (App::getMessages()->isError())
            return false;

        return !App::getMessages()->isError();
    }

    public function action_RegisterShow() {
        $this->generateView();
    }

    public function action_register() {
        if ($this->validate()) {

            $this->UserExists = App::getDB()->get("Users", [
                "Login",
            ], [
                "Login" => $this->form->Login,
            ]);

            if(empty($this->UserExists)) {
                $this->User = App::getDB()->insert("Users", [
                    "Imie" => $this->form->Imie,
                    "Nazwisko" => $this->form->Nazwisko,
                    "Login" => $this->form->Login,
                    "Hasło" => $this->form->Hasło,
                ]);
                App::getRouter()->redirectTo("loginShow");
            } else {
                Utils::addErrorMessage("Taki użytkownik już istnieje");
                $this->generateView();
            }
        } else {
            //niezalogowany => pozostań na stronie logowania
            Utils::addErrorMessage("Nie udało się zalogować");
            $this->generateView();
        }
    }

    public function generateView() {
        App::getSmarty()->assign('form', $this->form); // dane formularza do widoku
        App::getSmarty()->display('Register.tpl');
    }

}
