<?php


namespace classes\models;


use classes\Config;


/**
 * Zakladni trida modelu ze ktere budou dedit dcerine modely
 * Class BaseModel
 * @package classes\models
 */
abstract class BaseModel
{

    /** @var \mysqli */
    protected $db;

    /** @var \mysqli_result */
    protected $last;


    /**
     * Metoda vrati pripojeni k db podle konfigurace
     * Pokud jestli pripojeni neexistuje - tak je provede
     * @return \mysqli
     */
    protected function getDb(): \mysqli
    {
        if (!$this->db) {
            $this->db = new \mysqli(Config::$dbConnParams['host'], Config::$dbConnParams['user'], Config::$dbConnParams['pass'], Config::$dbConnParams['db']);
            \mysqli_set_charset($this->db, 'utf8');

            if (\mysqli_connect_errno()) {
                trigger_error('Chyba při připojování k hostiteli. '.$this->db->error, E_USER_ERROR);
            }
        }
        return $this->db;
    }


    /**
     * Metoda prevezme SQL dotaz a odesle jej do db
     * Vysledek si ulozime do chranene vlastnosti self::last
     * @param $sql
     */
    protected function executeQuery($sql): void
    {
        $this->last = $this->getDb()->query($sql);
    }


    /**
     * Metoda 'vytahne' z posledniho provedeho vysledku volani SQL do Db radky v asociativnim poli
     * @return mixed
     */
    protected function getRows()
    {
        return $this->last->fetch_all(MYSQLI_ASSOC);
    }


    /**
     * Metoda 'vytahne' z posledniho provedeho vysledku volani SQL do Db radek v asociativnim poli
     * @return array|null
     */
    protected function getRow()
    {
        return $this->last->fetch_assoc();
    }
}