<?php


namespace classes\controllers;

use classes\Config;
use classes\Request;


/**
 * Class RegisterController
 * @package classes\controllers
 */
class RegisterController extends BaseController
{


    /**
     * DefaultController constructor.
     * @param Request $request
     */
    public function __construct(Request $request)
    {
        parent::__construct($request);
        $this->title = 'Registrace';
        $this->render();
    }


}