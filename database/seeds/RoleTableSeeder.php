<?php

use Illuminate\Database\Seeder;
use App\Role;
class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create([
            "name"=>"Admin",
        ]);
        Role::create([
            "name"=>"Student",
        ]);
        Role::create([
            "name"=>"Teacher",
        ]);
        
    }
}
