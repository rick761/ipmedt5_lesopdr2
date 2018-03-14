<?php

use Illuminate\Database\Seeder;

class ModulesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $modules =[
            [
                'name' => 'IARCH',
            ],
            [
                'name' => 'IWDR',
            ],
            [
                'name' => 'IPMEDT2',
            ],
            [
                'name' => 'IMTD1',
            ],
            [
                'name' => 'IPMEDT3',
            ],
            [
                'name' => 'IKUE',
            ],
            [
                'name' => 'KEUZEVAK',
            ]

        ];
        DB::table('modules')->insert($modules);
    }
}
