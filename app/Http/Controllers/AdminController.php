<?php 
	
	namespace App\Http\Controllers;
	use App\Http\Controllers\Controller;
    use App\Models\User;
    use App\Models\Task;
    use Illuminate\Http\Request;
	use Illuminate\Support\Facades\Redirect;

    class AdminController extends Controller{
        private $template = 'admin';

		public function indexAction(){
            $template = $this->template;
			return view('pages.admin.home', compact('template')); 
		}

        public function tablesUsersAction(){
            $users = User::get();
            $template = $this->template;
			return view('pages.admin.tablesUsers', compact('template', 'users')); 
		}

        public function tablesTasksAction(){
            $tasks = Task::get();
            $users = User::get();
            $template = $this->template;
			return view('pages.admin.tablesTasks', compact('template', 'tasks', 'users')); 
		}
    }