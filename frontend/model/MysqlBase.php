<?php



/**
 *
 * @author huofenghuang
 *        
 */
class MysqlBase {
	public $handle;//datebase link cache pool
	
	/**
	 */
	function __construct() {
		
		if(empty($this->handle)){
			$handle = new mysqli('localhost','root','','lottery',3306);
			if($handle->connect_errno){
				echo "Fail connect to Mysql:",$handle->connect_errno," ",$handle->connect_error;
			}
		}
		echo $handle->host_info;
	}
	
	/**
	 */
	function __destruct() {
		
		// TODO - Insert your code here
	}
}

?>