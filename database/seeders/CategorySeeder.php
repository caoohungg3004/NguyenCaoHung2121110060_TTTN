<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;
use Illuminate\Support\Facades\DB;
class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        // for($i=1;$i<=5;$i++){
        //     Category::create([
        //         'name'=>'Viêt Nam'.$i,
        //         'slug'=>'Viet_Nam'.$i,
        //         'image'=>'abc.jpg',
        //         'parent_id'=>0,
        //         'sort_order'=>0,
        //         'metakey'=>'Key word',
        //         'metadesc'=>'Mô tả',
        //         'create_at'=>date('Y-m-d H:i'),
        //         'create_by'=>'1',
        //         'update_at'=>date('Y-m-d H:i'),
        //         'update_by'=>'1',
        //         'status'=>'1'
        //     ]);
        // }
        for($i=1;$i<=5;$i++){
        DB::table("2121110052_category")->insert(
            [
                'name'=>'Viêt Nam'.$i,
                'slug'=>'Viet_Nam'.$i,
                'image'=>'abc.jpg',
                'parent_id'=>0,
                'sort_order'=>0,
                'metakey'=>'Key word',
                'metadesc'=>'Mô tả',
                'created_at'=>now(),
                'created_by'=>'1',
                'updated_at'=>now(),
                'updated_by'=>'1',
                'status'=>'1'
            ]
            );
    }
}
}
