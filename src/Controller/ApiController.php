<?php

namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;
use League\Monga;

class ApiController extends AppController
{
	public function initialize()
	{
		session_start();
		$_SESSION['login'] = 'toto';
		$_SESSION['passwd'] = 'toto';
		$connection = Monga::connection("mongodb://192.168.1.237:27017");
		$database = $connection->database('test');
		$collection = $database->collection('answer');
		$Arrstat = $collection->find();
		$stat = json_encode($Arrstat->toArray());
		$this->set(compact('stat'));
	}
	public function index()
	{

	}
	public function login()
	{
		if ($_POST['login'] == 'admin' && $_POST['password'] == 'admin')
		{
		$_SESSION['login'] = 'admin';
		$_SESSION['passwd'] = 'admin';
		$this->redirect('admin');
		}
		else
					$this->redirect('api');

	}
			// add statistic from application
	public function addStat($add) {
		$addArr = explode("&", $add);
		$connection = Monga::connection("mongodb://192.168.1.237:27017");
		$database = $connection->database('test');
		$i = rand() % 256;
		$collection = $database->collection('stat');
		$insertIds = $collection->insert(
			[
				'key' => $i, 
				'idUser' => $addArr[4],
				'idQuestion' => $addArr[3],
				'type' => $addArr[0],
				'title' => $addArr[1],
				'timestamp' => $addArr[2]
			]);
		$this->set(compact('stat'));
	}
			// add answer from application
	public function addAnswer($add) {
		$addAnswer = explode("&", $add);
		$connection = Monga::connection("mongodb://192.168.1.237:27017");
		$database = $connection->database('test');
		$i = rand() % 256;
		$collection = $database->collection('answer');
		$insertIds = $collection->insert(
			[
				'key' => $i,
				'idUser' => $addAnswer[0],
				'idTable' => $addAnswer[1],
				'id' => $addAnswer[2],
				'answerUser' =>$addAnswer[3],
				'answerUser1' =>$addAnswer[4],
				'answerUser2' =>$addAnswer[5],
				'answerUser3' =>$addAnswer[6],
				'answerUser4' =>$addAnswer[7],
				'answerUser5' =>$addAnswer[8],
				'answerUser6' =>$addAnswer[9],
				'answerUser7' =>$addAnswer[10],
				'answerUser8' =>$addAnswer[11],
				'answerUser9' =>$addAnswer[12],						
				'answerUser10' =>$addAnswer[13],
				'answerUser11' =>$addAnswer[14],
				'answerUser12' =>$addAnswer[15],
				'answerUser13' =>$addAnswer[16],
				'timestamp' => $addAnswer[17]
			]);
		$this->set(compact('addAnswer'));
	}
	public function addCgu($add) {
		$addArr = explode("&", $add);
		$connection = Monga::connection("mongodb://192.168.1.237:27017");
		$database = $connection->database('test');
		$i = rand() % 256;
		debug($add);
		$collection = $database->collection('cgu');
		$insertIds = $collection->insert(
			[
				'key' => $i, 
				'idUser' => $addArr[0],
				'timestamp' => $addArr[1]
			]);
		debug($insertIds);
		$this->set(compact('cgu'));
	}
	public function getCgu($id) {
		$connection = Monga::connection("mongodb://192.168.1.237:27017");
		$database = $connection->database('test');
		$collection = $database->collection('cgu');
		$id = explode('&', $id);
		$tab = [];

		$i = 0;
		while ($i < 35)
		{
			$finds = $collection->find(
				[
					'idUser'=> $id[0],
				],
				[
					'_id' => 0
				]
			)->sort(
				[
					'timestamp' => -1
				]
			)->limit(1);
			if ($finds->toArray())
			{
				$save = $finds->toArray();
			}
			else
			{
				$save = $finds->toArray();
				$save[0]['idUser'] = "error";
			}
			$findt = json_decode(json_encode($save));
			array_push($tab, $findt);
			$i++;
		}
		$this->autoRender = false;
		$this->response->expires('now'); 
		$this->response->body(json_encode($tab));
	}

			// get answer with id and question

	public function getAnswer($id) {
		$connection = Monga::connection("mongodb://192.168.1.237:27017");
		$database = $connection->database('test');
		$collection = $database->collection('answer');
		$id = explode('&', $id);
		$tab = [];
		$i = 0;
		while ($i < 35)
		{
			$finds = $collection->find(
				[
					'idUser'=> $id[1],
					'idTable' => (string)$i
				],
				[
					'_id' => 0
				]
			)->sort(
				[
					'timestamp' => -1
				]
			)->limit(1);
			if ($finds->toArray())
			{
				$save = $finds->toArray();
			}
			else
			{
				$save = $finds->toArray();
				$save[0]['idTable'] = "error";
			}
			$findt = json_decode(json_encode($save));
			array_push($tab, $findt);
			$i++;
		}
		$this->autoRender = false;
		$this->response->expires('now'); 
		$this->response->body(json_encode($tab));
	}










	public function getToto($id) {
		$connection = Monga::connection("mongodb://192.168.1.237:27017");
		$database = $connection->database('test');
		$collection = $database->collection('answer');
		$id = explode('&', $id);
		$tab = [];
		$i = 0;
		while ($i < 35)
		{
			$finds = $collection->find(
				[
					'idUser'=> $id[1],
					'idTable' => (string)$i
				],
				[
					'_id' => 0
				]
			)->sort(
				[
					'timestamp' => -1
				]
			)->limit(1);
			debug($finds->toArray());
			if ($finds->toArray())
			{
				$save = $finds->toArray();
			}
			else
			{
				$save = $finds->toArray();
				$save[0]['idTable'] = "error";
			}
			$findt = json_decode(json_encode($save));
			array_push($tab, $findt);
			$i++;
		}
		debug($tab);


		$this->autoRender = false;
		$this->response->body(json_encode($tab));
	}


}
