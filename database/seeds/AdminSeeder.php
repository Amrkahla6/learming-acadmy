<?php

use Illuminate\Database\Seeder;
use App\Admin;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Admin::create([
            'username' => 'super admin',
            'email'    => 'super_admin@app.com',
            'password' => bcrypt('123456'),
        ]);
    }
}
