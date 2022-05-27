<?php

namespace Database\Seeders;

use App\Models\Superadmin;
use Illuminate\Database\Seeder;

class SuperadminSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Superadmin::create([
            'id' => 1,
            'name' => 'Espresso Translations',
            'email' => 'superadmin@traqworx.com',
            'phone' => '9999999991',
            'email_verified_at' => '2021-12-02 00:00:28',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
            'remember_token' => 'PV4vJ97TJQQtQ4YrDggzPXOxR8idLWcrFVub6Y0dcOq25THLpsZHUIy8stKy',
        ]);
    }
}
