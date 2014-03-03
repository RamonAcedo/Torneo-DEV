<?php namespace Acme\Validations;

class UserValidator extends Validator{

	public static $rules = array(
		'username' 		=> 'required|min:5|max:20|alpha|Unique:users',
		'nombre' 		=> 'required|min:5|max:40',
		'apellido_p' 	=> 'required|max:80',
		'apellido_m'	=> 'required|max:80',
		'email'			=> 'required|Unique:users|email',
		'password' 		=> 'required|min:5|max:32|confirmed',
		'password_confirmation'	=> 'required'
	);

}