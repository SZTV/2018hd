<?php
/**
 *    秘密信息
 *    
 *   sql异常处理类
 */
if(!defined('IN_CUTVSYS')) {
	exit('Access Denied');
}

class DbException extends Exception{

	public $sql;

	public function __construct($message, $code = 0, $sql = '') {
		$this->sql = $sql;
		parent::__construct($message, $code);
	}

	public function getSql() {
		return $this->sql;
	}
}
?>