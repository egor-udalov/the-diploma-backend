<?php 
	
	namespace App\Http\Controllers;
	use App\Http\Controllers\Controller;
    use App\Models\Page;

    class IndexController extends Controller{

        public function homeAction(){

            return view('pages.home');

        }

        public function loginAction(){

            return view('pages.login');

        }

        public function timeTrakerAction(){

            return view('pages.time_traker');

        }

    }