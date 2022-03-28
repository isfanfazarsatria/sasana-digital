<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class Participants_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        \DB::table('participants')->insert([
            'fullName' => 'Bismillah Bandung',
            'businessName' => 'Sasana Digital',
            'email' => 'example@email.com',
            'phoneNumber' => '08123456789',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s')
        ]);
    }
}
