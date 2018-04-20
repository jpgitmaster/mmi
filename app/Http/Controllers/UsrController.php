<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsrController extends Controller
{
  public function __construct(){
  	parent::__construct();
  	$this->import = [
      'stylesheet' => [c_fawesome, c_bootstrap, c_global],
      'scripts' => [j_jquery, j_popper, j_bootstrap],
      // 'ngular'    => [n_ng, n_ngsanitize, n_ngresource, n_nganimate]
    ];
    date_default_timezone_set('Asia/Manila');
    $this->msg = [];
  }

  public function dashboard(){
    return view('dashboard', [
      'scripts'       => $this->import['scripts'],
      'stylesheet'    => $this->import['stylesheet'],
      // 'ngular'        => $this->import['ngular']
    ]);
  }

  public function crp(){
  	return view('crp', [
      'scripts'       => $this->import['scripts'],
      'stylesheet'    => array_merge($this->import['stylesheet'], [c_crm]),
      // 'ngular'        => $this->import['ngular']
    ]);
  }

  public function ccp(){
  	return view('ccp', [
      'scripts'       => array_merge($this->import['scripts'], [j_fullcalendar]),
      'stylesheet'    => array_merge($this->import['stylesheet'], [c_fullcalendar, c_crm]),
      // 'ngular'        => $this->import['ngular']
    ]);
  }

  public function fullcalendar(){
  	return view('fullcalendar', [
      'scripts'       => array_merge($this->import['scripts'], [j_moment, j_fullcalendar, j_scheduler]),
      'stylesheet'    => array_merge($this->import['stylesheet'], [c_fullcalendar, c_scheduler]),
      // 'ngular'        => $this->import['ngular']
    ]);
  }
}
