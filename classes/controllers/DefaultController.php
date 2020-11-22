<?php


namespace classes\controllers;

use classes\Config;
use classes\models\RoleModel;
use classes\Request;
use Tracy\Debugger;


/**
 * Class DefaultController
 * @package classes\controllers
 */
class DefaultController extends BaseController
{


    private $roleModel;


    /**
     * DefaultController constructor.
     * @param Request $request
     * @throws \ReflectionException
     */
    public function __construct(Request $request)
    {
        parent::__construct($request);
        $this->roleModel = new RoleModel();
        $this->manageAction();
    }


    /**
     * Metoda volá jednotlivé action metody podle Requestu klienta
     * @throws \ReflectionException
     */
    public function manageAction()
    {
        $action = $this->getAction();

        if ($action === Config::DEFAULT_ACTION) {
            $this->actionDefault();
        } elseif ($action === 'insert') {
            // Volej metodu actionInsert
            // $this->actionInsert();
        }

        $this->render();
    }




    public function actionDefault()
    {
        $this->title = 'Defaultní akce';
        //$this->addVarToTemplate('text', 'Zkouška');
        $roles = $this->roleModel->getRoles();
        Debugger::barDump($roles, 'rolesData');
        // Predejte do sablony vysledek volani z radku vyse
         $this->addVarToTemplate('roles', $roles);
    }

}