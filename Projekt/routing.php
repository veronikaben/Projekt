<?php

use core\App;
use core\Utils;

App::getRouter()->setDefaultRoute('Strona'); // akcja/ścieżka domyślna
App::getRouter()->setLoginRoute('login'); // akcja/ścieżka na potrzeby logowania (przekierowanie, gdy nie ma dostępu)

Utils::addRoute('panel',            'PanelCtrl', ["Admin"]);
Utils::addRoute('dodajShow',        'DodajCtrl', ["Admin"]);
Utils::addRoute('dodaj',            'DodajCtrl', ["Admin"]);
Utils::addRoute('index',            'indexCtrl');
Utils::addRoute('zamowienia',       'indexCtrl', ["User", "Admin"]);
Utils::addRoute('koszyk',           'koszykCtrl', ["User", "Admin"]);
Utils::addRoute('RegisterShow',     'RegisterCtrl');
Utils::addRoute('Register',         'RegisterCtrl');
Utils::addRoute('loginShow',        'LoginCtrl');
Utils::addRoute('login',            'LoginCtrl');
Utils::addRoute('logout',           'LoginCtrl');
Utils::addRoute('Strona',           'LoginCtrl');
Utils::addRoute('zamowienieDelete', 'PanelCtrl', ["Admin"]);