<?php

if (!function_exists('dd')) {
    function dd()
	{
		$file = explode('/',debug_backtrace()[0]['file']);
		$file2 = explode('/',debug_backtrace()[1]['file']);
		$file3 = explode('/',debug_backtrace()[2]['file']);
		$line = debug_backtrace()[0]['line'];
		$line2 = debug_backtrace()[1]['line'];
		$line3 = debug_backtrace()[2]['line'];
		echo $file3[count($file3)-1].':'.$line3.' -> '. $file2[count($file2)-1].':'.$line2.' -> '.$file[count($file)-1].':'.$line;
		$args = func_get_args();
		call_user_func_array('dump', $args);
		die();
	}
}

if (!function_exists('d')) {
    function d()
    {
        $args = func_get_args();
        call_user_func_array('dump', $args);
    }
}
