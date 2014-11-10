<?php namespace Dracsa\Managers;

class RegisterManager extends BaseManager {

    public function getRules()
    {
        $rules = [
            'name' => 'required',
            'lastname' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'dni' => 'required',
            'birth' => 'required|date',
            'email'     => 'required|email|unique:users,email',
            'password'  => 'required|confirmed',
            'password_confirmation' => 'required',
            'department_id' => 'required',
            'province_id' => 'required',
            'district_id' => 'required'
        ];

        return $rules;
    }


} 