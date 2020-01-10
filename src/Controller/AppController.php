<?php

declare(strict_types=1);

namespace App\Controller;

use Cake\Controller\Controller;

class AppController extends Controller
{
  
    public function initialize(): void
    {
        parent::initialize();

        $this->loadComponent('RequestHandler');
        $this->loadComponent('Flash');
        // $this->loadComponent('Auth', [
        //     'authorize' => ['Controller'],
        //     'loginRedirect' =>[
        //         'controller'=>'Users',
        //         'action'=>'index'
        //     ],
        //     'logoutRedirect'=>[
        //         'controller'=>'Users',
        //         'action'=>'login'
        //     ]
        // ]);
        /*
         * Enable the following component for recommended CakePHP form protection settings.
         * see https://book.cakephp.org/4/en/controllers/components/form-protection.html
         */
        //$this->loadComponent('FormProtection');
    }

    // public function isAuthorized($user = null)
    // {
    //     $_SESSION['Auth']['User'] = $this->Auth->user();
    //     return true;
    //     // Default deny
    //     return false;
    // }
}
