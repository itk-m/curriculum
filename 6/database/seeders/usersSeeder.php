<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class usersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
        [    
            'id' => 1,
            'name' => 'のび太',
            'email' => 'nobita@gmail.com',
            'email_verified_at' => null,
            'password' => bcrypt('itsuki0904'),
        ],[
            'id' => 2,
            'name' => 'ジャイアン',
            'email' => 'zyaiann@gmail.com',
            'email_verified_at' => null,
            'password' => bcrypt('itsuki0904'),
        ],[
            'id' => 3,
            'name' => 'ドラえもん',
            'email' => 'doradora@gmail.com',
            'email_verified_at' => null,
            'password' => bcrypt('itsuki0904'),
        ]
    ]
    );
        
    }
}

/*'password' => bcrypt('itsuki0904')のbcryptはパスワードのハッシュ化

seederの実行:php artisan db:seed
*/
