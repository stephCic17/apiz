use Hayko\Mongodb\ORM\Table;
App::uses('AppModel', 'Model');

class StatTable extends Table {

	public function initialize(array $config)
	{
		parent::initialize($config);
		$this->table('stat');
	}
}