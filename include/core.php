<?php
require_once("connect_BD.php");

class CP_Core extends CP_DB{
	function CP_Core(){
		$this->connectBD();
	}
}

