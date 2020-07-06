<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call('DestinationSeeder');
        $this->call('PackageSeeder');
    }
}

class DestinationSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('destinations')->insert([
        	[
        		'name'=>'Phú Quốc',
        		'status' => 1

        	],
        	[
        		'name'=>'Hạ Long',
        		'status' => 1

        	],
        	[
        		'name'=>'Sapa',
        		'status' => 1

        	],
        	[
        		'name'=>'Hà Nội',
        		'status' => 1

        	],
        	[
        		'name'=>'Thành Phố Hồ Chí Minh',
        		'status' => 1

        	],
        	[
        		'name'=>'Quy Nhơn',
        		'status' => 1

        	],
        	[
        		'name'=>'Đà Nẵng',
        		'status' => 1

        	],
        ]);
    }
}

class PackageSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('packages')->insert([
        	[
        		'name' => 'Đồ Uống',
        		'status' => 1
        	],
        	[
        		'name' => 'Bảo Hiểm Du Lịch',
        		'status' => 1
        	],
        	[
        		'name' => 'Leo Núi',
        		'status' => 1
        	],
        	[
        		'name' => 'Thuê Xe Máy',
        		'status' => 1
        	],
        	[
        		'name' => 'Xe Đưa Đón',
        		'status' => 1
        	],
        	[
        		'name' => 'Vé Xem Bóng Đá',
        		'status' => 1
        	],
        	[
        		'name' => 'Vé Xem Sự Kiện Âm Nhạc',
        		'status' => 1
        	],

        ]);
    }
}
