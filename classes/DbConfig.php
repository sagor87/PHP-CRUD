<?php
class DbConfig  {	

	private $_host = 'localhost';
	private $_username = 'root';
	private $_password = '';
	private $_database = 'curd_user';
	
	public $link;
	
	public function __construct() {
		if (!isset($this->link)) {
			
			$this->link = new mysqli($this->_host, $this->_username, $this->_password, $this->_database);
			
			if (!$this->link) {
				echo 'Cannot connect to database server';
				exit;
			}			
		}	
		
		return $this->link;
	}
}
?>
