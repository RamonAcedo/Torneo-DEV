<?php

class Login extends Controller{
	
	public function __construct(){
		$this->beforeFilter('adminguest');
	}
	
	/**
	 * Muestra la pagina de inicio de sesión
	 * 
	 * @return \Illuminate\View\View
	 */
	public function showLogin(){
		return View::make('admin.login');
	}
	
	/**
	 * Valida las credenciales del usuario
	 * 
	 * @return \Illuminate\Http\RedirectResponse
	 */
	public function adminLogin(){
		if (Auth::attempt(array('username' => Input::get('username'), 'password' => Input::get('password'), 'admin' =>	 '1'))) {
			return Redirect::intended('/admin');
		} else{
			return Redirect::back()->with('flash_error', 'La combinación de usuario/contraseña no es válida');
		}
	}
	
	
}