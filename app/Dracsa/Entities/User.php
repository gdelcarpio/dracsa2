<?php namespace Dracsa\Entities;

// use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
// use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends \Eloquent implements UserInterface, RemindableInterface {

	// use UserTrait, RemindableTrait;

	protected $table = 'users';

    protected $fillable = array('name','lastname','phone', 'email', 'password','birth','dni','phone','address','department_id','province_id','district_id');

	public function getUser()
    {
        $user = $this->user;

        if (is_null ($user))
        {
            $user = new User();
            $user->id = $this->id;
        }

        return $user;
    }

     public function setPasswordAttribute($value)
    {
        if ( ! empty ($value))
        {
            $this->attributes['password'] = \Hash::make($value);
        }
    }

  public function usertype()
    {
        return $this->hasOne('Dracsa\Entities\Usertype', 'id', 'usertype_id');
    }

  public function department()
    {
        return $this->hasOne('Dracsa\Entities\Department', 'id', 'department_id');
    }

  public function province()
    {
        return $this->hasOne('Dracsa\Entities\Province', 'id', 'province_id');
    }

  public function district()
    {
        return $this->hasOne('Dracsa\Entities\District', 'id', 'district_id');
    }

	protected $hidden = array('password', 'remember_token');

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
     * Get the token value for the "remember me" session.
     *
     * @return string
     */
    public function getRememberToken()
    {
        return $this->remember_token;
    }

    /**
     * Set the token value for the "remember me" session.
     *
     * @param  string  $value
     * @return void
     */
    public function setRememberToken($value)
    {
        $this->remember_token = $value;
    }

    /**
     * Get the column name for the "remember me" token.
     *
     * @return string
     */
    public function getRememberTokenName()
    {
        return 'remember_token';
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


}
