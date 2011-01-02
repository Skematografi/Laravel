<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
    	for($i=1; $i<=50; $i++){

	        DB::table('mahasiswa')->insert([
				'nim' => $faker->numberBetween,
				'nama' => $faker->name,
				'jurusan' => $faker->jobTitle,
				'alamat' => $faker->address
			]);
	    }
    }
}
