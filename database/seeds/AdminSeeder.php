<?php

use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $admin = new \App\User;
        $admin->name="operator";
        $admin->email="operator@gmail.com";
        $admin->password=\Hash::make("operator");
        $admin->roles="OPERATOR";

        $admin ->save();
    }
}
