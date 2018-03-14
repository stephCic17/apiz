use CakeMonga\MongoCollection\BaseCollection;

class StatCollection extends BaseCollection
{
	public function getStat()
	{
		return $this->find('all');
	}
}

// We can retrieve this UsersCollection by using the static ::get() method on CollectionRegistry
use CakeMonga\MongoCollection\CollectionRegistry;

$stat_collection = CollectionRegistry::get('stat');