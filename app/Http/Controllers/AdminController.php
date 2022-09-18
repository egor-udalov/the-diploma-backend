<?php 
	
	namespace App\Http\Controllers;
	use App\Http\Controllers\Controller;
    use App\Models\Page;

    class AdminController extends Controller{
        private $template = 'admin';

		public function indexAction(){
            $template = $this->template;
			return view('pages.admin.home', compact('template')); 
		}

        public function tablesAction(){
            $template = $this->template;
			return view('pages.admin.tables', compact('template')); 
		}
    }