<?php

namespace Dd;

use HtmlDumper;
use Symfony\Component\VarDumper\Dumper\CliDumper;
use Symfony\Component\VarDumper\Cloner\VarCloner;


class Dd
{
	
	public static function dd()
	{
		array_map(function ($x) {
            (new Dumper)->dump($x);
        }, func_get_args());

        die(1);
	}
	
}

