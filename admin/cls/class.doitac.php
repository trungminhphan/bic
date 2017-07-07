<?php
class DoiTac {
	const COLLECTION = 'doitac';
	private $_mongo;
	private $_collection;
	
	public $id = '595f300ca40183401f00002d';
	public $banner = array(); //array('filename', 'aliasname', link);

	public function __construct(){
		$this->_mongo = DBConnect::init();
		$this->_collection = $this->_mongo->getCollection(DoiTac::COLLECTION);
	}

	public function edit(){
		$query = array('$set' => array(
			'banner' => $this->banner
		));
		$condition = array('_id' => new MongoId($this->id));
		return $this->_collection->update($condition, $query);
	}

	public function get_one(){
		$query = array('_id' => new MongoId($this->id));
		return $this->_collection->findOne($query);
	}

	public function edit_banner(){
		$query = array('$set' => array(
			'banner' => $this->banner
		));
		$condition = array('_id' => new MongoId($this->id));
		return $this->_collection->update($condition, $query);
	}
}

?>