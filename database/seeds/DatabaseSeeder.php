<?php

// namespace database\seeds;

use App\Http\Controllers\user_Controller\posting\PostingController;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\posting;
use Carbon\Carbon;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);

        DB::table('admins')->insert([
            'name' => "ulfah",
            'username' => 'admin',
            'password' => Hash::make('1234')
        ]);
        DB::table('users')->insert([
            'name' => "ulfah",
            'username' => 'ulfah',
            'password' => Hash::make('1234'),
            'alamat_asal' => 'tulung',
            'domisili_sekarang' => 'agung',
            'nomor_telpon' => '08',
            'email' => 'ulfah@gmail.com',
            'instagram' => 'ulfahnur_oktaviana',
            'no_wa' => '08',
        ]);
        DB::table('categories')->insert([
            'nama' => "Kucing"
        ]);


        $records = [
            ['Echo', DB::table('postings')->get('id')]
        ];
    }
}