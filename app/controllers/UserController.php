<?php
class UserController extends BaseController
{
    public function getLogin()
    {
        return View::make('user.login');
    }

    public function getRegister()
    {
        return View::make('user.register');
    }

    public function getLogout()
    {
    }

    public function postRegister()
    {
        $input = Input::all();

        $rules = array(
            'username' => 'required|unique:user', 
            'email' => 'required|unique:user|email',
            'password' => 'required',
        )

        $v = Validator::make($input, $rules);
    }
}