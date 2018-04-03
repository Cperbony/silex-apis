<?php
/**
 * Created by PhpStorm.
 * User: Claus Perbony
 * Date: 03/04/2018
 * Time: 14:22
 */

namespace Code\Sis\DB;

use PDO;

class Connection
{
    public static $instance;

    public function __construct()
    {
        if (!isset(self::$instance)) {
            try {
                self::$instance = new PDO('mysql:host=localhost;dbname=silex_api', 'root', 'root', array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
                self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                return $this->getInstance();
            } catch (\PDOException $ex) {
                die("message" . $ex->getMessage());
            }
        }
    }

    public function getInstance()
    {
        return self::$instance;
    }
}