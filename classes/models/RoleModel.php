<?php


namespace classes\models;


/**
 * Třída modelu - vrstva zpracovani dat v MVC
 * Class RoleModel
 * @package classes\models
 */
class RoleModel extends BaseModel
{


    /**
     * Metoda vrati vsechny radky z tabulky role
     * @return mixed
     */
    public function getRoles()
    {
        $sql = "SELECT * FROM role";
        $this->executeQuery($sql);
        return $this->getRows();
    }
}