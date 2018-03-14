<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users =[
            [ 'name' => 'rick', 'email' => 'rick@rick.nl', 'password' => '$2y$10$YnH3XcEo/a1syVWvHCGkbOQWbXk9W/4bWZGHNFWihcSK9UImnwwCq','type'=>'student'],
            [ 'name' => 'tom', 'email' => 'tom@tom.nl', 'password' => '$2y$10$YnH3XcEo/a1syVWvHCGkbOQWbXk9W/4bWZGHNFWihcSK9UImnwwCq','type'=>'student'],
            [ 'name' => 'admin', 'email' => 'admin@admin.nl', 'password' => '$2y$10$YnH3XcEo/a1syVWvHCGkbOQWbXk9W/4bWZGHNFWihcSK9UImnwwCq','type'=>'admin'],
        ];
        DB::table('users')->insert($users);
    }
}
