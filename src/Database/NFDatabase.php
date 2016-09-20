<?php

namespace NFWP\Database;

use NFWP\Database\DBManager;

class NFDatabase
{
    public function __construct($plugin_file = __FILE__)
    {

        $manger = DBManager::getInstance();

        if (method_exists($this, 'up')) {
            register_activation_hook($plugin_file, [$this, 'up']);
        }
        if (method_exists($this, 'down')) {
            register_uninstall_hook($plugin_file, [$this, 'down']);
        }
    }
}
