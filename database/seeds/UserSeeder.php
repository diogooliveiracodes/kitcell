<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            
            'name' => "Administrador",
            'email' => 'adm@kitcell7.com.br',
            'password' => '@Senha987',
        ]);
    }
}
