<?php

namespace App\Http\Controllers;

use Session;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdmnController extends Controller
{

    public function __construct(){
    	parent::__construct();
    	$this->import = [
            'stylesheet' => [c_fawesome, c_bootstrap, c_global, c_admn_master],
            'scripts' => [j_jquery, j_popper, j_bootstrap],
            'ngular'    => [n_ng, n_ngresource, n_ngsanitize, n_nganimate, n_admin]
        ];
    }

    public function dashboard(){
    	return view('admin.images', [
            'scripts'       => $this->import['scripts'],
            'stylesheet'    => $this->import['stylesheet'],
            'ngular'        => array_merge($this->import['ngular'], [n_images])
        ]);
    }

    public function images(){
        return view('admin.images', [
            'scripts'       => $this->import['scripts'],
            'stylesheet'    => $this->import['stylesheet'],
            'ngular'        => array_merge($this->import['ngular'], [n_images])
        ]);
    }

    // public function jobs(){
    // 	return view('admin.jobs', [
    //         'scripts'       => $this->import['scripts'],
    //         'stylesheet'    => $this->import['stylesheet'],
    //         'ngular'        => $this->import['ngular']
    //     ]);
    // }

    // public function users(){
    // 	return view('admin.users', [
    //         'scripts'       => $this->import['scripts'],
    //         'stylesheet'    => $this->import['stylesheet'],
    //         'ngular'        => $this->import['ngular']
    //     ]);
    // }

    public function logout(){
        Auth::guard('jp_admin')->logout();
        Session::forget('usr_role');
    	return redirect()->route('mmi-login');
    }
}
