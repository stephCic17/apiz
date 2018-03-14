<?php

namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;
use League\Monga;

class AdminController extends AppController
{
	public function initialize()
	{
		session_start();
		if ($_SESSION['login'] != 'admin' || $_SESSION['passwd'] != 'admin')
		{
			$this->redirect('api');
		}
	}
	public function index()
	{
	}
}