<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Certificate;

class CertificateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Certificate::create(['code'=>'CE-MIR017/2021','img_path'=>'assets/img/certificates/1-test.jpg']);
        Certificate::create(['code'=>'CE-MIR017/2021','img_path'=>'assets/img/certificates/2-test.jpg']);
        Certificate::create(['code'=>'CE-MIR017/2021','img_path'=>'assets/img/certificates/photo_2021-12-25_10-45-55.jpg']);
    }
}
