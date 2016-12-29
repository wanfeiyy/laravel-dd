<?php

use Dd\Dumper;
use Symfony\Component\VarDumper\Dumper\CliDumper;
use Symfony\Component\VarDumper\Cloner\VarCloner;

if (! function_exists('dd')) {
	function dd ()
	{
	    array_map(function ($x) {
            (new Dumper)->dump($x);
        }, func_get_args());

        die(1);
		
	}
	
}
