<?php

use Illuminate\Database\Seeder;

class Taskseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 0;$i <100; $i++){
            Task::create([
                'name' => '洗衣服',
                'description' => '洗好洗滿',
                'is completed' => 0
                ]);
        }    //
    }
}
