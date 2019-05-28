<?php

	function array_get($array,$key,$default = null)
	{
		return $array[$key];
	}
	
	function e($value)
	{
		return htmlspecialchars($value);
	}
	
	
	function save_file($path,$contents)
	{
		$dir = dirname($path);
		if (!file_exists($dir))
		{
			mkdir($dir,0777,true);
		}
		file_put_contents($path,$contents);
	}
	
