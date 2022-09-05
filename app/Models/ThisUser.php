<?php
    namespace App\Models;
 
    use Illuminate\Database\Eloquent\Model;
     
    class ThisUser extends Model
    {
        protected $table = 'users';

        public function category()
        {
            return $this->belongsTo(Task::class, 'user_id'); 
        }

        // public function users()
        // {
        //     return DB::select('SELECT `id` * FROM `users`');
        // }
    }

