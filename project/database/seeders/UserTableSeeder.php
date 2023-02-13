<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = new User();
        $admin['name'] = 'Lam Thai Bao Nguyen';
        $admin['email'] = 'nguyen60c@gmail.com';
        $admin['email_verified_at'] = now();
        $admin['password'] = '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi'; // password
        $admin['remember_token'] = Str::random(10);
        $admin->save();
    }
}
