<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
  use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

  public $import = [
  	'stylesheet' 	=> [],
  	'scripts' 		=> [],
  	'ngular' 		=> []
  ];

  public function __construct(){
  	$this->import_css();
  	$this->import_js();
  	$this->import_ng();
  }

  public function import_css(){
    define('c_ngmotion', 'plugins/angular-motion/dist/angular-motion.min.css');
  	define('c_bootstrap', 'plugins/bootstrap/dist/css/bootstrap.min.css');
    define('c_fawesome', 'plugins/font-awesome/css/font-awesome.min.css');

    define('c_global', 'css/app/global.css');
    define('c_homepage', 'css/app/homepage.css');
    define('c_login', 'css/app/login.css');

    define('c_crm', 'css/app/crm.css');
    define('c_fullcalendar', 'plugins/fullcalendar/fullcalendar.min.css');
    define('c_scheduler', 'plugins/fullcalendar-scheduler/scheduler.min.css');

    define('c_admn_master', 'css/app/admin/admin.css');
  }

  public function import_js(){
    define('j_jquery', 'plugins/jquery/jquery.min.js');
    define('j_popper', 'plugins/popperjs/popper.min.js');
    define('j_bootstrap', 'plugins/bootstrap/dist/js/bootstrap.min.js');

    define('j_fullcalendar', 'plugins/fullcalendar/fullcalendar.min.js');
    define('j_scheduler', 'plugins/fullcalendar-scheduler/scheduler.min.js');
    define('j_moment', 'plugins/momentjs/moment.js');
  }

  public function import_ng(){
    define('n_ng', 'plugins/angular/angular.min.js');
    define('n_ngresource', 'plugins/angular/angular-resource.min.js');
    define('n_ngsanitize', 'plugins/angular/angular-sanitize.min.js');
    define('n_nganimate', 'plugins/angular/angular-animate.min.js');

    // USER
    define('n_global', 'js/app/global.js');

    // ADMIN
    define('n_admin', 'js/app/admin/admin.js');
    define('n_images', 'js/app/admin/images.js');
  }
}
