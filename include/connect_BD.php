<?php

class CP_DB
{
	public $host = 'localhost';
	public $username = 'root';
	public $password = 'root';
	public $dbname = 'eurologistikinfo';

	public $mysqli;

	function connectBD()
	{
		$this->mysqli = new mysqli($this->host, $this->username, $this->password, $this->dbname);
	}

	function SQLSelect($query, $i = 1)
	{
		$this->connectBD();
		$res = $this->query($query);
		$recs = $this->storeData($res);
		return $recs;
	}

	function storeData($res)
	{
		$result = array();

		while ($row = @mysqli_fetch_assoc($res)) {
			foreach ($row as $key => $val) {
				$dat[$key] = $val;
			}
			$result[] = $dat;
		}
		return $result;
	}

	function query($sql)
	{
		$result = mysqli_query($this->mysqli, $sql);
		return $result;
	}
}

