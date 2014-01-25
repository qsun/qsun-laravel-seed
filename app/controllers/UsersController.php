<?php

class UsersController extends BaseController {
  public function __construct() {
    $this->beforeFilter('csrf', array('on'=>'post'));
    $this->beforeFilter('auth', array('only'=>array('getDashboard')));
  }

  public function getDashboard() {
    return View::make('users.dashboard');
  }

  public function getLogin() {
    return View::make('users.login');
  }

  public function postLogin() {
    if (Auth::attempt(array(
      'email' => Input::get('email'),
      'password' => Input::get('password')))) {
      return Redirect::to('users/dashboard')->with('message', 'Welcome back');
    } else {
      return Redirect::to('users/login')->with('message', 'Invalid username or password')->withInput();
    }
  }

  public function getRegister() {
    return View::make('users.register');
  }

  public function postCreate() {
    $validator = Validator::make(Input::all(), User::$rules);

    if ($validator->passes()) {
      $user = new User;
      $user->email = Input::get('email');
      $user->password = Hash::make(Input::get('password'));
      $user->save();

      return Redirect::to('users/login')->with('message', 'Thank you for registering');
    } else {
      return Redirect::to('users/register')->with('message', 'The following errors occurred')->withErrors($validator)->withInput(); 
    }
  }
}
