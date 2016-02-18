<?php

class UserTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
        DB::table('users')->truncate();

        User::create(array(
            'name'     => 'Test User',
            'email'    => 'test@serfmart.com',
            'password' => Hash::make('testuser'),
            'user_type'=> 'agent',
            'address'    => '123 test address, Mirpur',
            'location_id'    => 5,
            'phone'    => '65765765765',
            'mobile'    => '01817294205',
            'status'  => 1
        ));

    }

}
