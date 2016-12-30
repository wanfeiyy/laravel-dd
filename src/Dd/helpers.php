<?php

use Dd\Dumper;

if (! function_exists('dd')) {
	function dd ()
	{
	    array_map(function ($x) {
            (new Dumper)->dump($x);
        }, func_get_args());

        die(1);
	}
}

