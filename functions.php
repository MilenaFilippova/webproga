<?php

	function array_get($array,$key,$default = null)
	{
		return $array[$key];
	}
	
	function e($value)
	{
		return htmlspecialchars($value);
	}
	
	/*
	function get_from_request($keys)
	{
		$data=[];
		foreach($keys as $key)
		{
			$data[$key]=trim(array_get(get_post(),$key,''));
		}
		return $data;
	}*/
	
	function save_file($path,$contents)
	{
		$dir = dirname($path);
		if (!file_exists($dir))
		{
			mkdir($dir,0777,true);
		}
		file_put_contents($path,$contents);
	}
	
	
	function get_post()
	{
		return $_POST;
	}