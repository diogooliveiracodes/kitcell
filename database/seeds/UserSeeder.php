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
            'id' => '1',
            'name' => "Administrador",
            'email' => 'adm@kitcell7.com.br',
            'password' => Hash::make('@novasenha987!'),
        ]);
    }
}
