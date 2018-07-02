<?php

namespace vanscalc;

require_once 'config.php';

class bd {
	private static function init(){
		return new \mysqli(MYSQLSERVER, MYSQLUSER, MYSQLPASS, MYSQLBASE);
	}
	//Выполнить запрос к БД
	public static function query($query){
		$base = self::init();
		if (!$base->connect_errno){
			return mysqli_fetch_array($base->query($query));
		}else{
			return false;
		}
	}
	//Количество записей
	public static function countLines($table){
		return self::query('SELECT COUNT(1) FROM `'.MYSQLBASE.'`');
	}
}