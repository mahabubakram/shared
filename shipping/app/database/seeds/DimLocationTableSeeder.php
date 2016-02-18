<?php

class DimLocationTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
        DB::table('dim_location')->truncate();

        DB::statement("INSERT INTO dim_location (id, name, thana, district, division, is_inner_city, active)
VALUES
(1, 'Demra', 'Demra', 'Dhaka', 'Dhaka', 0, 1),
(2, 'Dhaka Cantt.', 'Dhaka Cantt.', 'Dhaka', 'Dhaka', 1, 1),
(3, 'Dhamrai', 'Dhamrai', 'Dhaka', 'Dhaka', 0, 1),
(4, 'Dhanmondi', 'Dhanmondi', 'Dhaka', 'Dhaka', 1, 1),
(5, 'Gulshan', 'Gulshan', 'Dhaka', 'Dhaka', 1, 1),
(6, 'Jatrabari', 'Jatrabari', 'Dhaka', 'Dhaka', 1, 1),
(7, 'Joypara', 'Joypara', 'Dhaka', 'Dhaka', 0, 1),
(8, 'Keraniganj', 'Keraniganj', 'Dhaka', 'Dhaka', 0, 1),
(9, 'Khilgaon', 'Khilgaon', 'Dhaka', 'Dhaka', 1, 1),
(10, 'Khilkhet', 'Khilkhet', 'Dhaka', 'Dhaka', 0, 1),
(11, 'Lalbag', 'Lalbag', 'Dhaka', 'Dhaka', 0, 1),
(12, 'Mirpur', 'Mirpur', 'Dhaka', 'Dhaka', 0, 1),
(13, 'Mohammadpur', 'Mohammadpur', 'Dhaka', 'Dhaka', 0, 1),
(14, 'Motijheel', 'Motijheel', 'Dhaka', 'Dhaka', 0, 1),
(15, 'Nawabganj', 'Nawabganj', 'Dhaka', 'Dhaka', 0, 1),
(16, 'New market', 'New market', 'Dhaka', 'Dhaka', 0, 1),
(17, 'Palton', 'Palton', 'Dhaka', 'Dhaka', 0, 1),
(18, 'Ramna', 'Ramna', 'Dhaka', 'Dhaka', 1, 1),
(19, 'Sabujbag', 'Sabujbag', 'Dhaka', 'Dhaka', 0, 1),
(20, 'Savar', 'Savar', 'Dhaka', 'Dhaka', 0, 1),
(21, 'Sutrapur', 'Sutrapur', 'Dhaka', 'Dhaka', 0, 1),
(22, 'Tejgaon', 'Tejgaon', 'Dhaka', 'Dhaka', 0, 1),
(23, 'Tejgaon Industrial Area', 'Tejgaon Industrial Area', 'Dhaka', 'Dhaka', 0, 1),
(24, 'Uttara', 'Uttara', 'Dhaka', 'Dhaka', 0, 1),
(25, 'Alfadanga', 'Alfadanga', 'Faridpur', 'Dhaka', 0, 1),
(26, 'Bhanga', 'Bhanga', 'Faridpur', 'Dhaka', 0, 1),
(27, 'Boalmari', 'Boalmari', 'Faridpur', 'Dhaka', 0, 1),
(28, 'Charbhadrasan', 'Charbhadrasan', 'Faridpur', 'Dhaka', 0, 1),
(29, 'Faridpur Sadar', 'Faridpur Sadar', 'Faridpur', 'Dhaka', 0, 1),
(30, 'Madukhali', 'Madukhali', 'Faridpur', 'Dhaka', 0, 1),
(31, 'Nagarkanda', 'Nagarkanda', 'Faridpur', 'Dhaka', 0, 1),
(32, 'Nagarkanda', 'Nagarkanda', 'Faridpur', 'Dhaka', 0, 1),
(33, 'Sadarpur', 'Sadarpur', 'Faridpur', 'Dhaka', 0, 1),
(34, 'Shriangan', 'Shriangan', 'Faridpur', 'Dhaka', 0, 1),
(35, 'Gazipur Sadar', 'Gazipur Sadar', 'Gazipur', 'Dhaka', 0, 1),
(36, 'Kaliakaar', 'Kaliakaar', 'Gazipur', 'Dhaka', 0, 1),
(37, 'Kaliganj', 'Kaliganj', 'Gazipur', 'Dhaka', 0, 1),
(38, 'Kapashia', 'Kapashia', 'Gazipur', 'Dhaka', 0, 1),
(39, 'Monnunagar', 'Monnunagar', 'Gazipur', 'Dhaka', 0, 1),
(40, 'Sreepur', 'Sreepur', 'Gazipur', 'Dhaka', 0, 1),
(41, 'Sripur', 'Sripur', 'Gazipur', 'Dhaka', 0, 1),
(42, 'Gopalganj Sadar', 'Gopalganj Sadar', 'Gopalganj', 'Dhaka', 0, 1),
(43, 'Kashiani', 'Kashiani', 'Gopalganj', 'Dhaka', 0, 1),
(44, 'Kotalipara', 'Kotalipara', 'Gopalganj', 'Dhaka', 0, 1),
(45, 'Maksudpur', 'Maksudpur', 'Gopalganj', 'Dhaka', 0, 1),
(46, 'Tungipara', 'Tungipara', 'Gopalganj', 'Dhaka', 0, 1),
(47, 'Dewangonj', 'Dewangonj', 'Jamalpur', 'Dhaka', 0, 1),
(48, 'Islampur', 'Islampur', 'Jamalpur', 'Dhaka', 0, 1),
(49, 'Jamalpur', 'Jamalpur', 'Jamalpur', 'Dhaka', 0, 1),
(50, 'Malandah', 'Malandah', 'Jamalpur', 'Dhaka', 0, 1),
(51, 'Mathargonj', 'Mathargonj', 'Jamalpur', 'Dhaka', 0, 1),
(52, 'Shorishabari', 'Shorishabari', 'Jamalpur', 'Dhaka', 0, 1),
(53, 'Bajitpur', 'Bajitpur', 'Kishoreganj', 'Dhaka', 0, 1),
(54, 'Bhairob', 'Bhairob', 'Kishoreganj', 'Dhaka', 0, 1),
(55, 'Hossenpur', 'Hossenpur', 'Kishoreganj', 'Dhaka', 0, 1),
(56, 'Itna', 'Itna', 'Kishoreganj', 'Dhaka', 0, 1),
(57, 'Karimganj', 'Karimganj', 'Kishoreganj', 'Dhaka', 0, 1),
(58, 'Katiadi', 'Katiadi', 'Kishoreganj', 'Dhaka', 0, 1),
(59, 'Kishoreganj Sadar', 'Kishoreganj Sadar', 'Kishoreganj', 'Dhaka', 0, 1),
(60, 'Kuliarchar', 'Kuliarchar', 'Kishoreganj', 'Dhaka', 0, 1),
(61, 'Mithamoin', 'Mithamoin', 'Kishoreganj', 'Dhaka', 0, 1),
(62, 'Nikli', 'Nikli', 'Kishoreganj', 'Dhaka', 0, 1),
(63, 'Ostagram', 'Ostagram', 'Kishoreganj', 'Dhaka', 0, 1),
(64, 'Pakundia', 'Pakundia', 'Kishoreganj', 'Dhaka', 0, 1),
(65, 'Tarial', 'Tarial', 'Kishoreganj', 'Dhaka', 0, 1),
(66, 'Barhamganj', 'Barhamganj', 'Madaripur', 'Dhaka', 0, 1),
(67, 'kalkini', 'kalkini', 'Madaripur', 'Dhaka', 0, 1),
(68, 'Madaripur Sadar', 'Madaripur Sadar', 'Madaripur', 'Dhaka', 0, 1),
(69, 'Rajoir', 'Rajoir', 'Madaripur', 'Dhaka', 0, 1),
(70, 'Doulatpur', 'Doulatpur', 'Manikganj', 'Dhaka', 0, 1),
(71, 'Gheor', 'Gheor', 'Manikganj', 'Dhaka', 0, 1),
(72, 'Lechhraganj', 'Lechhraganj', 'Manikganj', 'Dhaka', 0, 1),
(73, 'Manikganj Sadar', 'Manikganj Sadar', 'Manikganj', 'Dhaka', 0, 1),
(74, 'Saturia', 'Saturia', 'Manikganj', 'Dhaka', 0, 1),
(75, 'Shibloya', 'Shibloya', 'Manikganj', 'Dhaka', 0, 1),
(76, 'Singari', 'Singari', 'Manikganj', 'Dhaka', 0, 1),
(77, 'Gajaria', 'Gajaria', 'Munshiganj', 'Dhaka', 0, 1),
(78, 'Lohajong', 'Lohajong', 'Munshiganj', 'Dhaka', 0, 1),
(79, 'Munshiganj Sadar', 'Munshiganj Sadar', 'Munshiganj', 'Dhaka', 0, 1),
(80, 'Sirajdikhan', 'Sirajdikhan', 'Munshiganj', 'Dhaka', 0, 1),
(81, 'Srinagar', 'Srinagar', 'Munshiganj', 'Dhaka', 0, 1),
(82, 'Tangibari', 'Tangibari', 'Munshiganj', 'Dhaka', 0, 1),
(83, 'Bhaluka', 'Bhaluka', 'Mymensingh', 'Dhaka', 0, 1),
(84, 'Fulbaria', 'Fulbaria', 'Mymensingh', 'Dhaka', 0, 1),
(85, 'Gaforgaon', 'Gaforgaon', 'Mymensingh', 'Dhaka', 0, 1),
(86, 'Gouripur', 'Gouripur', 'Mymensingh', 'Dhaka', 0, 1),
(87, 'Haluaghat', 'Haluaghat', 'Mymensingh', 'Dhaka', 0, 1),
(88, 'Isshwargonj', 'Isshwargonj', 'Mymensingh', 'Dhaka', 0, 1),
(89, 'Muktagachha', 'Muktagachha', 'Mymensingh', 'Dhaka', 0, 1),
(90, 'Mymensingh Sadar', 'Mymensingh Sadar', 'Mymensingh', 'Dhaka', 0, 1),
(91, 'Nandail', 'Nandail', 'Mymensingh', 'Dhaka', 0, 1),
(92, 'Phulpur', 'Phulpur', 'Mymensingh', 'Dhaka', 0, 1),
(93, 'Trishal', 'Trishal', 'Mymensingh', 'Dhaka', 0, 1),
(94, 'Araihazar', 'Araihazar', 'Narayanganj', 'Dhaka', 0, 1),
(95, 'Baidder Bazar', 'Baidder Bazar', 'Narayanganj', 'Dhaka', 0, 1),
(96, 'Bandar', 'Bandar', 'Narayanganj', 'Dhaka', 0, 1),
(97, 'Fatullah', 'Fatullah', 'Narayanganj', 'Dhaka', 0, 1),
(98, 'Narayanganj Sadar', 'Narayanganj Sadar', 'Narayanganj', 'Dhaka', 0, 1),
(99, 'Rupganj', 'Rupganj', 'Narayanganj', 'Dhaka', 0, 1),
(100, 'Siddirganj', 'Siddirganj', 'Narayanganj', 'Dhaka', 0, 1),
(101, 'Belabo', 'Belabo', 'Narshingdi', 'Dhaka', 0, 1),
(102, 'Monohordi', 'Monohordi', 'Narshingdi', 'Dhaka', 0, 1),
(103, 'Narshingdi Sadar', 'Narshingdi Sadar', 'Narshingdi', 'Dhaka', 0, 1),
(104, 'Palash', 'Palash', 'Narshingdi', 'Dhaka', 0, 1),
(105, 'Raypura', 'Raypura', 'Narshingdi', 'Dhaka', 0, 1),
(106, 'Shibpur', 'Shibpur', 'Narshingdi', 'Dhaka', 0, 1),
(107, 'Susung Durgapur', 'Susung Durgapur', 'Netrakona', 'Dhaka', 0, 1),
(108, 'Atpara', 'Atpara', 'Netrakona', 'Dhaka', 0, 1),
(109, 'Barhatta', 'Barhatta', 'Netrakona', 'Dhaka', 0, 1),
(110, 'Dharmapasha', 'Dharmapasha', 'Netrakona', 'Dhaka', 0, 1),
(111, 'Dhobaura', 'Dhobaura', 'Netrakona', 'Dhaka', 0, 1),
(112, 'Kalmakanda', 'Kalmakanda', 'Netrakona', 'Dhaka', 0, 1),
(113, 'Kendua', 'Kendua', 'Netrakona', 'Dhaka', 0, 1),
(114, 'Khaliajuri', 'Khaliajuri', 'Netrakona', 'Dhaka', 0, 1),
(115, 'Madan', 'Madan', 'Netrakona', 'Dhaka', 0, 1),
(116, 'Moddhynagar', 'Moddhynagar', 'Netrakona', 'Dhaka', 0, 1),
(117, 'Mohanganj', 'Mohanganj', 'Netrakona', 'Dhaka', 0, 1),
(118, 'Netrakona Sadar', 'Netrakona Sadar', 'Netrakona', 'Dhaka', 0, 1),
(119, 'Purbadhola', 'Purbadhola', 'Netrakona', 'Dhaka', 0, 1),
(120, 'Baliakandi', 'Baliakandi', 'Rajbari', 'Dhaka', 0, 1),
(121, 'Pangsha', 'Pangsha', 'Rajbari', 'Dhaka', 0, 1),
(122, 'Rajbari Sadar', 'Rajbari Sadar', 'Rajbari', 'Dhaka', 0, 1),
(123, 'Bhedorganj', 'Bhedorganj', 'Shariatpur', 'Dhaka', 0, 1),
(124, 'Damudhya', 'Damudhya', 'Shariatpur', 'Dhaka', 0, 1),
(125, 'Gosairhat', 'Gosairhat', 'Shariatpur', 'Dhaka', 0, 1),
(126, 'Jajira', 'Jajira', 'Shariatpur', 'Dhaka', 0, 1),
(127, 'Naria', 'Naria', 'Shariatpur', 'Dhaka', 0, 1),
(128, 'Shariatpur Sadar', 'Shariatpur Sadar', 'Shariatpur', 'Dhaka', 0, 1),
(129, 'Bakshigonj', 'Bakshigonj', 'Sherpur', 'Dhaka', 0, 1),
(130, 'Jhinaigati', 'Jhinaigati', 'Sherpur', 'Dhaka', 0, 1),
(131, 'Nakla', 'Nakla', 'Sherpur', 'Dhaka', 0, 1),
(132, 'Nalitabari', 'Nalitabari', 'Sherpur', 'Dhaka', 0, 1),
(133, 'Sherpur Shadar', 'Sherpur Shadar', 'Sherpur', 'Dhaka', 0, 1),
(134, 'Shribardi', 'Shribardi', 'Sherpur', 'Dhaka', 0, 1),
(135, 'Basail', 'Basail', 'Tangail', 'Dhaka', 0, 1),
(136, 'Bhuapur', 'Bhuapur', 'Tangail', 'Dhaka', 0, 1),
(137, 'Delduar', 'Delduar', 'Tangail', 'Dhaka', 0, 1),
(138, 'Ghatail', 'Ghatail', 'Tangail', 'Dhaka', 0, 1),
(139, 'Gopalpur', 'Gopalpur', 'Tangail', 'Dhaka', 0, 1),
(140, 'Kalihati', 'Kalihati', 'Tangail', 'Dhaka', 0, 1),
(141, 'Kashkaolia', 'Kashkaolia', 'Tangail', 'Dhaka', 0, 1),
(142, 'Madhupur', 'Madhupur', 'Tangail', 'Dhaka', 0, 1),
(143, 'Mirzapur', 'Mirzapur', 'Tangail', 'Dhaka', 0, 1),
(144, 'Nagarpur', 'Nagarpur', 'Tangail', 'Dhaka', 0, 1),
(145, 'Sakhipur', 'Sakhipur', 'Tangail', 'Dhaka', 0, 1),
(146, 'Tangail Sadar', 'Tangail Sadar', 'Tangail', 'Dhaka', 0, 1),
(147, 'Alikadam', 'Alikadam', 'Bandarban', 'Chittagong', 0, 1),
(148, 'Bandarban Sadar', 'Bandarban Sadar', 'Bandarban', 'Chittagong', 0, 1),
(149, 'Naikhong', 'Naikhong', 'Bandarban', 'Chittagong', 0, 1),
(150, 'Roanchhari', 'Roanchhari', 'Bandarban', 'Chittagong', 0, 1),
(151, 'Ruma', 'Ruma', 'Bandarban', 'Chittagong', 0, 1),
(152, 'Thanchi', 'Thanchi', 'Bandarban', 'Chittagong', 0, 1),
(153, 'Akhaura', 'Akhaura', 'Brahmanbaria', 'Chittagong', 0, 1),
(154, 'Banchharampur', 'Banchharampur', 'Brahmanbaria', 'Chittagong', 0, 1),
(155, 'Brahamanbaria Sadar', 'Brahamanbaria Sadar', 'Brahmanbaria', 'Chittagong', 0, 1),
(156, 'Kasba', 'Kasba', 'Brahmanbaria', 'Chittagong', 0, 1),
(157, 'Nabinagar', 'Nabinagar', 'Brahmanbaria', 'Chittagong', 0, 1),
(158, 'Sarail', 'Sarail', 'Brahmanbaria', 'Chittagong', 0, 1),
(159, 'Chandpur Sadar', 'Chandpur Sadar', 'Chandpur', 'Chittagong', 0, 1),
(160, 'Faridganj', 'Faridganj', 'Chandpur', 'Chittagong', 0, 1),
(161, 'Hajiganj', 'Hajiganj', 'Chandpur', 'Chittagong', 0, 1),
(162, 'Hayemchar', 'Hayemchar', 'Chandpur', 'Chittagong', 0, 1),
(163, 'Kachua', 'Kachua', 'Chandpur', 'Chittagong', 0, 1),
(164, 'Matlobganj', 'Matlobganj', 'Chandpur', 'Chittagong', 0, 1),
(165, 'Shahrasti', 'Shahrasti', 'Chandpur', 'Chittagong', 0, 1),
(166, 'Anawara', 'Anawara', 'Chittagong', 'Chittagong', 0, 1),
(167, 'Boalkhali', 'Boalkhali', 'Chittagong', 'Chittagong', 0, 1),
(168, 'Chittagong Sadar', 'Chittagong Sadar', 'Chittagong', 'Chittagong', 0, 1),
(169, 'East Joara', 'East Joara', 'Chittagong', 'Chittagong', 0, 1),
(170, 'Fatikchhari', 'Fatikchhari', 'Chittagong', 'Chittagong', 0, 1),
(171, 'Hathazari', 'Hathazari', 'Chittagong', 'Chittagong', 0, 1),
(172, 'Jaldi', 'Jaldi', 'Chittagong', 'Chittagong', 0, 1),
(173, 'Lohagara', 'Lohagara', 'Chittagong', 'Chittagong', 0, 1),
(174, 'Mirsharai', 'Mirsharai', 'Chittagong', 'Chittagong', 0, 1),
(175, 'Patia Head Office', 'Patia Head Office', 'Chittagong', 'Chittagong', 0, 1),
(176, 'Rangunia', 'Rangunia', 'Chittagong', 'Chittagong', 0, 1),
(177, 'Rouzan', 'Rouzan', 'Chittagong', 'Chittagong', 0, 1),
(178, 'Sandwip', 'Sandwip', 'Chittagong', 'Chittagong', 0, 1),
(179, 'Satkania', 'Satkania', 'Chittagong', 'Chittagong', 0, 1),
(180, 'Sitakunda', 'Sitakunda', 'Chittagong', 'Chittagong', 0, 1),
(181, 'Barura', 'Barura', 'Comilla', 'Chittagong', 0, 1),
(182, 'Brahmanpara', 'Brahmanpara', 'Comilla', 'Chittagong', 0, 1),
(183, 'Burichang', 'Burichang', 'Comilla', 'Chittagong', 0, 1),
(184, 'Chandina', 'Chandina', 'Comilla', 'Chittagong', 0, 1),
(185, 'Chouddagram', 'Chouddagram', 'Comilla', 'Chittagong', 0, 1),
(186, 'Comilla Sadar', 'Comilla Sadar', 'Comilla', 'Chittagong', 0, 1),
(187, 'Daudkandi', 'Daudkandi', 'Comilla', 'Chittagong', 0, 1),
(188, 'Davidhar', 'Davidhar', 'Comilla', 'Chittagong', 0, 1),
(189, 'Homna', 'Homna', 'Comilla', 'Chittagong', 0, 1),
(190, 'Laksam', 'Laksam', 'Comilla', 'Chittagong', 0, 1),
(191, 'Langalkot', 'Langalkot', 'Comilla', 'Chittagong', 0, 1),
(192, 'Muradnagar', 'Muradnagar', 'Comilla', 'Chittagong', 0, 1),
(193, 'Chiringga', 'Chiringga', 'Coxs Bazar', 'Chittagong', 0, 1),
(194, 'Coxs Bazar Sadar', 'Coxs Bazar Sadar', 'Coxs Bazar', 'Chittagong', 0, 1),
(195, 'Gorakghat', 'Gorakghat', 'Coxs Bazar', 'Chittagong', 0, 1),
(196, 'Kutubdia', 'Kutubdia', 'Coxs Bazar', 'Chittagong', 0, 1),
(197, 'Ramu', 'Ramu', 'Coxs Bazar', 'Chittagong', 0, 1),
(198, 'Teknaf', 'Teknaf', 'Coxs Bazar', 'Chittagong', 0, 1),
(199, 'Ukhia', 'Ukhia', 'Coxs Bazar', 'Chittagong', 0, 1),
(200, 'Chhagalnaia', 'Chhagalnaia', 'Feni', 'Chittagong', 0, 1),
(201, 'Dagonbhuia', 'Dagonbhuia', 'Feni', 'Chittagong', 0, 1),
(202, 'Feni Sadar', 'Feni Sadar', 'Feni', 'Chittagong', 0, 1),
(203, 'Pashurampur', 'Pashurampur', 'Feni', 'Chittagong', 0, 1),
(204, 'Sonagazi', 'Sonagazi', 'Feni', 'Chittagong', 0, 1),
(205, 'Diginala', 'Diginala', 'Khagrachari', 'Chittagong', 0, 1),
(206, 'Khagrachari Sadar', 'Khagrachari Sadar', 'Khagrachari', 'Chittagong', 0, 1),
(207, 'Laxmichhari', 'Laxmichhari', 'Khagrachari', 'Chittagong', 0, 1),
(208, 'Mahalchhari', 'Mahalchhari', 'Khagrachari', 'Chittagong', 0, 1),
(209, 'Matiranga', 'Matiranga', 'Khagrachari', 'Chittagong', 0, 1),
(210, 'Panchhari', 'Panchhari', 'Khagrachari', 'Chittagong', 0, 1),
(211, 'Ramghar Head Office', 'Ramghar Head Office', 'Khagrachari', 'Chittagong', 0, 1),
(212, 'Char Alexgander', 'Char Alexgander', 'Lakshmipur', 'Chittagong', 0, 1),
(213, 'Lakshimpur Sadar', 'Lakshimpur Sadar', 'Lakshmipur', 'Chittagong', 0, 1),
(214, 'Ramganj', 'Ramganj', 'Lakshmipur', 'Chittagong', 0, 1),
(215, 'Raypur', 'Raypur', 'Lakshmipur', 'Chittagong', 0, 1),
(216, 'Basurhat', 'Basurhat', 'Noakhali', 'Chittagong', 0, 1),
(217, 'Begumganj', 'Begumganj', 'Noakhali', 'Chittagong', 0, 1),
(218, 'Chatkhil', 'Chatkhil', 'Noakhali', 'Chittagong', 0, 1),
(219, 'Hatiya', 'Hatiya', 'Noakhali', 'Chittagong', 0, 1),
(220, 'Noakhali Sadar', 'Noakhali Sadar', 'Noakhali', 'Chittagong', 0, 1),
(221, 'Senbag', 'Senbag', 'Noakhali', 'Chittagong', 0, 1),
(222, 'Barakal', 'Barakal', 'Rangamati', 'Chittagong', 0, 1),
(223, 'Bilaichhari', 'Bilaichhari', 'Rangamati', 'Chittagong', 0, 1),
(224, 'Jarachhari', 'Jarachhari', 'Rangamati', 'Chittagong', 0, 1),
(225, 'Kalampati', 'Kalampati', 'Rangamati', 'Chittagong', 0, 1),
(226, 'kaptai', 'kaptai', 'Rangamati', 'Chittagong', 0, 1),
(227, 'Longachh', 'Longachh', 'Rangamati', 'Chittagong', 0, 1),
(228, 'Marishya', 'Marishya', 'Rangamati', 'Chittagong', 0, 1),
(229, 'Naniachhar', 'Naniachhar', 'Rangamati', 'Chittagong', 0, 1),
(230, 'Rajsthali', 'Rajsthali', 'Rangamati', 'Chittagong', 0, 1),
(231, 'Rangamati Sadar', 'Rangamati Sadar', 'Rangamati', 'Chittagong', 0, 1)
        ");
    }

}
