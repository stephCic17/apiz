<?php

namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;
use League\Monga;

class StatMarketController extends AppController
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
		$connection = Monga::connection("mongodb://192.168.1.237:27017");
		$database = $connection->database('test');


		// launch app find
		$launch = [];
		$launchRes = $database->collection('stat')->find([ 'title' => 'launch App' ]);
		$launchResponse = $launchRes->toArray();
		$nblaunch = count($launchResponse); 
		$this->set(compact('nblaunch'));
		foreach ($launchResponse as $key => $value) {

			array_push($launch, array( 'key' => $value['key'],  'idUser' => $value['idUser'], 'title' => $value['title'], 'timestamp' => $value['timestamp']));
		}

		// cgu find nb
		$cgu = [];
		$cguRes = $database->collection('cgu')->find();
		$cguResponse = [];
		$cguResponse = $cguRes->toArray();
		$nbcgu = count($cguResponse); 
		$this->set(compact('nbcgu'));
		foreach ($cguResponse as $key => $value) {

			array_push($cgu, array( 'key' => $value['key'],  'idUser' => $value['idUser'], 'timestamp' => $value['timestamp']));
		}

		
		//access to result
		$result = [];
		$resultRes = $database->collection('stat')->find([ 'title' => 'result' ]);
		$resultResponse = $resultRes->toArray();
		$nbresult = count($resultResponse); 
		$this->set(compact('nbresult'));
		foreach ($resultResponse as $key => $value) {

			array_push($result, array( 'key' => $value['key'],  'idUser' => $value['idUser'], 'title' => $value['title'], 'timestamp' => $value['timestamp']));
		}
		
		// finishing test
		$endTest = [];
		$endTestRes = $database->collection('stat')->find([ 'title' => 'clic next' ]);
		$endTestResponse = $endTestRes->toArray();
		$nbendTest = count($endTestResponse); 
		$this->set(compact('nbendTest'));
		foreach ($endTestResponse as $key => $value) {

			array_push($endTest, array( 'key' => $value['key'],  'idUser' => $value['idUser'], 'title' => $value['title'], 'timestamp' => $value['timestamp']));
		}


}
public function DetailsCgu()
{

}
public function DetailsOpeningApp()
{

}
}