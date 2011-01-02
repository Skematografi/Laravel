<?php

use Illuminate\Database\Seeder;

class PegawaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /**
     * Run the database seeds.
     *
     * @return void
     */

    //Seeder
  /*  public function run()
    {
        DB::table('pegawai')->insert([
			'pegawai_nama' => 'Anonim',
			'pegawai_jabatan' => 'Staff',
			'pegawai_umur' => 25,
			'pegawai_alamat' => 'Karawaci'
		]);
    }*/

    //Faker
    public function run()
    {
    	$faker = Faker::create('id_ID');
    	for($i=1; $i<=50; $i++){

	        DB::table('pegawai')->insert([
				'pegawai_nama' => $faker->name,
				'pegawai_jabatan' => $faker->jobTitle,
				'pegawai_umur' => $faker->numberBetween,
				'pegawai_alamat' => $faker->address
			]);
	    }
    }
}
