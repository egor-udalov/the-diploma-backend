<?php
    namespace App\Models;
 
    use Illuminate\Database\Eloquent\Model;
     
    class ThisUser extends Model
    {
        protected $table = 'users';

        public function category()
        {
            return $this->belongsTo(Task::class, 'user_id'); // или App\Models\Category вместо Category::class
        }

        // public function users()
        // {
        //     return DB::select('SELECT `id` * FROM `users`');
        // }
    }

