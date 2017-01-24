<?php
 
class Database {
	static protected $_instance = null;
	protected $_db;
 
	static public function getInstance() {
    if (!(self::$_instance instanceof self))
      self::$_instance = new self();

    return self::$_instance;
	}
	public function query($sql){
	}
	public function prepare($sql){
	}
	protected function __construct() {
	}
}
?>