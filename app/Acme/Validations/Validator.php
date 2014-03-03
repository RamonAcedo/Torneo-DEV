<?php namespace Acme\Validations;

abstract class Validator {

	//	Atributos o entradas para la validación
	protected $attributes;

	//	Mensajes de error
	public $errors;

	public function __construct($attributes = null)
	{
		$this->attributes = $attributes ?: \Input::all();
	}


	// Método de validación de campos
	public function passes(){

	    /** Instanciamos el validador de laravel por defecto
		 * enviando los atributos y las reglas que son creadas 
		 * individualmente en cada uno de los Validators.
		 */ 
		$v = \Validator::make($this->attributes, static::$rules);

		if($v->passes()) return true;

		$this->errors  = $v->messages();
		
		return false;

	}

}