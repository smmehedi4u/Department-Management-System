<?php

namespace Database\Seeders;

use App\Models\StdProfile;
use Illuminate\Database\Seeder;

class StdProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $std = [
            [
                "user_id" => "3",
                "batch_id" => "2",
                "mobile" => "0155235763527",
                "image" => "https://lh3.googleusercontent.com/a/ACg8ocIzCNA63DUvv1TnSe0PqIu7mMWyOKQmunLtX_GyV2RZDN6e_5Jx=s576-c-no",
                "adress" => "Comilla"
            ], [
                "user_id" => "3",
                "batch_id" => "2",
                "mobile" => "01872348724823",
                "image" => "https://lh3.googleusercontent.com/a/ACg8ocIzCNA63DUvv1TnSe0PqIu7mMWyOKQmunLtX_GyV2RZDN6e_5Jx=s576-c-no",
                "adress" => "Dhaka"
            ],[
                "user_id" => "3",
                "batch_id" => "1",
                "mobile" => "01982877294",
                "image" => "https://lh3.googleusercontent.com/a/ACg8ocIzCNA63DUvv1TnSe0PqIu7mMWyOKQmunLtX_GyV2RZDN6e_5Jx=s576-c-no",
                "adress" => "Faridpur"
            ],
        ];

        foreach ($std as $key => $value) {
            StdProfile::create($value);
        }
    }
}
