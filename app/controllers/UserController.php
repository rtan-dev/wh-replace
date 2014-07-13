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
        $user = new User();

        $v = Validator::make($input, $user->getRules());

        if ($v->passes()) {
            $user->username = $input['username'];
            $user->password = md5($input['password']);
            $user->email = $input['email'];

            $user->save();

            return Redirect::to('login');
        }

        return Redirect::to('register')->withInput()->withErrors($v);
    }
}