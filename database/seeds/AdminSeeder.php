<?php

use Illuminate\Database\Seeder;
use App\Models\Admin;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->delete();

        $admins = [
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'type' => 'admin',
            'password'=> Hash::make('admin123123'),
            'mobile' => '0999999999',
            'status' => 1,
            'created_at' =>Carbon::now(),
            'updated_at' =>Carbon::now()
        ];

        Admin::insert($admins);
    }
}
