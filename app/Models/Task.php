<?php
    namespace App\Models;
    use Illuminate\Support\Facades\DB;
    use Illuminate\Database\Eloquent\Model;
     
    class Task extends Model
    {
        protected $table = 'tasks';

        public function products()
        {
            return $this->hasMany(ThisUser::class, 'user_id');
        }

        // static function usersId()
        // {
        //     return DB::select('SELECT id FROM `users`');
        // }
    }