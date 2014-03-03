<?php

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;

/**
 * An Eloquent Model: 'User'
 *
 * @property integer $id
 * @property string $username
 * @property string $nombre
 * @property string $apellido_p
 * @property string $apellido_m
 * @property string $email
 * @property string $password
 * @property integer $activo
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\Noticia[] $news
 */
class User extends Eloquent implements UserInterface, RemindableInterface {


	/**
	*Protection from mass assignment
	*
	*@var array
	*/
	protected $fillable = array('username', 'nombre','apellido_p','apellido_m', 'email', 'password');

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password');

	/**
	 * Get the unique identifier for the user.
	 *
	 * @return mixed
	 */
	public function getAuthIdentifier()
	{
		return $this->getKey();
	}

	/**
	 * Get the password for the user.
	 *
	 * @return string
	 */
	public function getAuthPassword()
	{
		return $this->password;
	}

	/**
	 * Get the e-mail address where password reminders are sent.
	 *
	 * @return string
	 */
	public function getReminderEmail()
	{
		return $this->email;
	}

	/**
	* Hash the password attribute
	*/
	public function setPasswordAttribute($pass){

		$this->attributes['password'] = Hash::make($pass);

	}

	public function news(){

		return $this->hasMany('Noticia');
		
	}

}