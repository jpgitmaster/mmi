<?php

namespace App\Http\Controllers;
use Session;

use App\Usr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class WebController extends Controller
{
    public function __construct(){
        parent::__construct();
        $this->import = [
          'stylesheet' => [c_fawesome, c_bootstrap, c_ngmotion, c_global],
          'scripts' => [j_jquery, j_popper, j_bootstrap],
          'ngular'    => [n_ng, n_ngsanitize, n_ngresource, n_nganimate]
        ];
        $this->msg = [];
    }

    public function login_v(Request $request){
        return view('forms.login', [
          'scripts'       => $this->import['scripts'],
          'stylesheet'    => array_merge($this->import['stylesheet'], [c_login]),
          'ngular'        => array_merge($this->import['ngular'], [n_global])
        ]);
    }
    
    public function login(Request $request){
        $input = $request->all();
        $messages = [
            'email.exists' => "Couldn't find your email."
        ];
        $this->replace_names = [
            'email' => 'Email',
            'pword' => 'Password'
        ];
        $validate = Validator::make($input, [
            'email' => 'required|email|exists:users,email',
            'pword' => 'required'
        ], $messages);
        $validate->setAttributeNames($this->replace_names);
        $usr = Usr::where('email', $input['email'])->first();

        if(!$validate->fails()):
            if(Auth::guard('jp_admin')->attempt([
                'email'     => $input['email'],
                'password'  => $input['pword'],
                'role'      => 2
            ])):
                Session::put('usr_role', 2);
                return redirect()->route('admn_dashboard');
            endif;
            return back()
                    ->withInput()
                    ->withErrors(['pword' => 'Incorrect password.'], 'login');
        else:
            return back()
                    ->withInput()
                    ->withErrors($validate, 'login');
        endif;
    }

    public function index(){
	  	return view('homepage', [
	      'scripts'       => $this->import['scripts'],
	      'stylesheet'    => array_merge($this->import['stylesheet'], [c_homepage]),
	      // 'ngular'        => $this->import['ngular']
	    ]);
	}
}
