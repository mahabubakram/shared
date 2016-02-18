<?php

class DimMainCenterTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
        DB::table('dim_main_center')->truncate();

        DB::statement("INSERT INTO `dim_main_center` (`id`, `name`, `address`, `phone`, `mobile`, `email`, `code`, `contact_person`)
VALUES
(1, 'Dhaka City', '1290, Monipuri para, Mirpur', '+026836868', '01817294205', 'shihabbari@gmail.com', 'DHC', 'Shihab Bari'),
(2, 'Chittagong City', '1290, GEC circle, East Nasirabad', '+026836868', '01817294205', 'moinulkuet@gmail.com', 'CHC', 'Moinul'),
(3, 'Sylhet City', 'N/A', 'N/A', 'N/A', 'N/A', 'SYC', 'N/A')
");

    }

}
