<?php

namespace app\controllers;

use core\App;
use App\transfer\User;
use core\Utils;
use core\RoleUtils;
use core\ParamUtils;
use app\forms\LoginForm;
use core\SessionUtils;

class LoginCtrl {

    private $form;
    private $User;
    private $UserExists;

    public function __construct() {
        //stworzenie potrzebnych obiektów
        $this->form = new LoginForm();
    }

    public function validate() {
        $this->form->Login = ParamUtils::getFromRequest('Login');
        $this->form->Hasło = ParamUtils::getFromRequest('Hasło');

        //nie ma sensu walidować dalej, gdy brak parametrów
        if (!isset($this->form->Login))
            return false;

        // sprawdzenie, czy potrzebne wartości zostały przekazane
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

    public function action_loginShow() {
        $this->generateView();
    }

    public function action_login() {
        if ($this->validate()) {

            $this->UserExists = App::getDB()->get("Users", [
                "Login",
            ], [
                "Hasło" => $this->form->Hasło,
            ]);

            if(!empty($this->UserExists)) {
                $this->User = App::getDB()->get("Users", [
                    "[><]role" => ["id_Roli"=>"id_Roli"]
                ], [
                    "Users.id_User",
                    "Users.Login",
                    "Role.Rola",
                ], [
                    "Users.Login" => $this->form->Login,
                    "Users.Hasło" => $this->form->Hasło,
                ]);

                RoleUtils::addRole($this->User["Rola"]);
                $this->User = new User($this->User["id_User"], $this->User["Login"], $this->User["Rola"]);
                SessionUtils::storeObject("User", $this->User);
                App::getRouter()->redirectTo("index");
            } else {
                App::getRouter()->forwardTo("loginShow");
            }
            //zalogowany => przekieruj na główną akcję (z przekazaniem messages przez sesję)
        } else {
            //niezalogowany => pozostań na stronie logowania
            $this->generateView();
        }
    }

    public function action_Strona() {
        $User = SessionUtils::loadObject("User", true);
        if(empty($User)) {
            $rola = "Guest";
            $User = new User(null, null, $rola);
            SessionUtils::storeObject("User", $User);
            RoleUtils::addRole($rola);
        }
        App::getRouter()->redirectTo("index");
    }

    public function action_logout() {
        // 1. zakończenie sesji
        session_destroy();
        // 2. idź na stronę główną - system automatycznie przekieruje do strony logowania
        App::getRouter()->redirectTo('index');
    }

    public function generateView() {
        App::getSmarty()->assign('User',SessionUtils::loadObject('User', true));
        App::getSmarty()->assign('form', $this->form); // dane formularza do widoku
        App::getSmarty()->display('Login.tpl');
    }
    public function log($data) {
        $output = $data;
        if (is_array($output))
        $output = implode(',', $output);

        echo "<script>console.log('Debug Objects: " . $output . "' );</script>";
    }


}
