<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Asset;

class AssetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Asset::create([
            'category_id'=>1,
            'name'=>'Lenovo ThinkPad',
            'asset_code'=>'LPT-001',
            'description'=>'Laptop kantor',
            'status'=>'available'
        ]);
    }
}
