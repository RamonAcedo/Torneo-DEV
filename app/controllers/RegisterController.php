<?php

class RegisterController extends BaseController{

	public function index(){
		return View::make('users.registro');
	}

	public function store(){

		$validation = new Acme\Validations\UserValidator;

		$data = array('username' => Input::get('username'),'password' => Input::get('password'));

		if ($validation->passes()) {
			$user = new User();
			$user = User::create(Input::all());
			$user->save();
			Mail::send('emails.confirm', $data , function($message){
				$message->to(Input::get('email'), Input::get('nombre'))->subject('Bienvenido a Torneo de Verano 2014!');
			});
			return Redirect::to('/')->with('success', 'Tu registro ha sido satisfactorio. Revisa tu correo para continuar');
		} else{
			return Redirect::to('registro')->withErrors($validation->errors)->withInput();
		}
	}
}