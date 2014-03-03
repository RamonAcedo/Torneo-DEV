<?php

class Admin extends Controller {

	/**
	 * Metodo constructor
	 */
	public function __construct(){
		$this->beforeFilter('auth');
	}
	
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        return View::make('admin.index');
	}

}
