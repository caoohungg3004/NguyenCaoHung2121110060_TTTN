<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Brand;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i=1; $i<=12 ; $i++) {
            Category::create([
                'name' => 'Danh muc' .$i,
                'slug' => 'Danh-muc' .$i,
                'image' => 'hinhanh.jpg',
                'parend_id' => 0,
                'sort_order' => 0,
                'metakey' => 'key word',
                'metadesc' => 'mô tả',
                'create_at' => date('Y-m-d H:i:s'),
                'create_by' => '1',
                'update_at' => date('Y-m-d H:i:s'),
                'update_by' => '1',
                'status' => '1'


            ]);
    }
}
}
