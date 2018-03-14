<?php

use Illuminate\Database\Seeder;

class VaardighedenTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //TODO - MAKE AN
        $vaardigheden =[
            [   'module_id' => 1,
                'name' => 'Kennis in Linux'
            ],
            [   'module_id' => 2,
                'name' => 'Kennis in HTML EN CSS'
            ],
            [   'module_id' => 3,
                'name' => 'Kennis in PROJECT'
            ],
            [   'module_id' => 5,
                'name' => 'Kennis in PROJECT'
            ],
            [   'module_id' => 5,
                'name' => 'Kennis in VirtualReality'
            ]

        ];
        DB::table('vaardigheden')->insert($vaardigheden);
    }
}
