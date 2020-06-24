<?php

use core\App;
use core\Utils;

App::getRouter()->setDefaultRoute('Home'); #default action
App::getRouter()->setLoginRoute('LoginShow');

Utils::addRoute('Home', 'HomeCtrl');
Utils::addRoute('Order', 'OrderCtrl', ['user', 'admin', 'sprzedawca']);
Utils::addRoute('Profile', 'ProfileCtrl', ['user', 'admin', 'sprzedawca']);
Utils::addRoute('login', 'LoginCtrl');
Utils::addRoute('LoginShow', 'LoginCtrl');
Utils::addRoute('Logout', 'LoginCtrl');
Utils::addRoute('RegiSave', 'RegiCtrl');
Utils::addRoute('RegiShow', 'RegiCtrl');
Utils::addRoute('AddItem', 'AddItemCtrl', ['sprzedawca']);