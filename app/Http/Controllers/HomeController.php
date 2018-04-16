<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function doLogin()
    {
        // validate the info, create rules for the inputs
        $rules = array(
            'email' => 'required|email', //make sure the email is an acutal email
            'password' => 'required|alphaNum|min:3' // password can only be alphanumeric and has to be greater than 3 length
        );

        // run the validation rules on the inputs from the form
        $validator = Validator::make(Input::all(), $rules);

        // if the validator fails, redirect back to the form
        if ($validator->fails()) {
            return Redirect::to('login')
                ->withErrors($validator)// send back all errors to the login form
                ->withInput(Input::except('password')); // send back the input except password
        } else {
            // create user data for the authentication
            $userdata = array(
                'email' => Input::get('email'),
                'password' => Input::get('password')
            );

            // attemt the login
            if (Auth::attempt($userdata)) {
                // validation successful
                // redirect to the secure section
                // return Redirect::to('secure');
                // test echo success !!ECHOING in controller is bad
                echo 'SUCCESS!';
            } else {
                // validation not successful, send back to form
                return Redirect::to('login');
            }
        }
    }
}
