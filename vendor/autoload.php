<?php

define('CLASSES_DIR', dirname(__FILE__) . '/');


class PAMIAutoloader
{
	public static function PAMIDefaults($class_name)
	{
		$file = CLASSES_DIR . str_replace('\\', '/', $class_name) . '.php';
		echo $file . "\n\n";

		if (file_exists($file))
		{
			require_once $file;
		}
		else
		{
			echo "$file Could not be included because it was not found.\n";
		}
	}
}

spl_autoload_register('PAMIAutoloader::PAMIDefaults');
