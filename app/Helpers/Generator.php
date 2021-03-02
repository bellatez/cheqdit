<?php 

namespace App\Helpers;

class Generator {

	public static function password()
	{
	    $permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
	    $password = substr(str_shuffle($permitted_chars), 0, 8);
	    return $password;
	}
}
