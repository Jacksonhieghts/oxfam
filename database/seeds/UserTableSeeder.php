<?php

use Illuminate\Database\Seeder;
use App\user;
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
     \DB::table('users')->delete();
     user::create([
         'name' => 'nkosi',
         'email' => 'inkonsinathi@gmail.com',
         'password' => bcryp('nkosi')
     ])
    }
}
