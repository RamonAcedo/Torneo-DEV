<?php

class Noticia extends Eloquent {

	protected $table = 'news';

	public static $rules = array();

	public function users(){
		return $this->belongsTo('User');
	}
}
