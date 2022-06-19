<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\Brand;
use App\Models\Contract;
use App\Models\Image;
use App\Models\Location;
use App\Models\Repair;
use App\Models\Station;
use App\Models\User;
use App\Models\SeatingCapacity;
use App\Models\Vehicle;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Location::factory(100)->create();
        Station::factory(10)->create();
        Image::factory(200)->create();
        Admin::factory(10)->create();
//        Tao admin
        Admin::factory()->create([
            'first_name' => "Van A",
            'last_name' => "Nguyen ",
            'email' => 'admin@example.com',
            'address' => Location::query()->where('type', '=', 0)->inRandomOrder()->value('id'),
            'phone_number' => '0391234567',
            'hashed_password' => Hash::make('admin123'),
            'cic_number' => '01234567891',
            'cic_front' => Image::query()->where('type', '=', 1)->inRandomOrder()->value('id'),
            'cic_back' => Image::query()->where('type', '=', 2)->inRandomOrder()->value('id'),
            'dob' => '2002-11-22',
            'gender' => 0,
            'avatar' => Image::query()->where('type', '=', 3)->inRandomOrder()->value('id'),
            'role' => 1,
            'status' => 0,
            'station_id' => 1
        ]);
//        Tao superAdmin
        Admin::factory()->create([
            'first_name' => "Van B",
            'last_name' => "Nguyen ",
            'email' => 'superadmin@example.com',
            'address' => Location::query()->where('type', '=', 0)->inRandomOrder()->value('id'),
            'phone_number' => '0391234567',
            'hashed_password' => Hash::make('superadmin123'),
            'cic_number' => '01234567891',
            'cic_front' => Image::query()->where('type', '=', 1)->inRandomOrder()->value('id'),
            'cic_back' => Image::query()->where('type', '=', 2)->inRandomOrder()->value('id'),
            'dob' => '2002-11-22',
            'gender' => 0,
            'avatar' => Image::query()->where('type', '=', 3)->inRandomOrder()->value('id'),
            'role' => 0,
            'status' => 0
        ]);
        User::factory(10)->create();
//        Tao 1 nguoi dung
        User::factory()->create([
            'first_name' => "Tien Chinh",
            'last_name' => "Nguyen",
            'email' => 'user@example.com',
            'address' => Location::query()->where('type', '=', 0)->inRandomOrder()->value('id'),
            'phone_number' => '0391234567',
            'hashed_password' => Hash::make('user123'),
            'cic_number' => '01234567891',
            'cic_front' => Image::query()->where('type', '=', 1)->inRandomOrder()->value('id'),
            'cic_back' => Image::query()->where('type', '=', 2)->inRandomOrder()->value('id'),
            'dob' => '2002-11-22',
            'gender' => 0,
            'avatar' => Image::query()->where('type', '=', 3)->inRandomOrder()->value('id'),
            'status' => 0,
        ]);
        Brand::factory(10)->create();
        SeatingCapacity::factory()->create([ 'seating_capacity'=> 4 ]);
        SeatingCapacity::factory()->create([ 'seating_capacity'=> 5 ]);
        SeatingCapacity::factory()->create([ 'seating_capacity'=> 7 ]);

        Vehicle::factory(100)->create();
        
        Repair::factory(100)->create();

        Contract::factory(100)->create();
    }
}
