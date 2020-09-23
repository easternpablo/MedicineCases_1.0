<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class roleSeeder extends Seeder
{
    public function run()
    {
        $this->arrayRoles = array(
            array(
                'name' => 'administrador',
            ),
            array(
                'name' => 'usuario',
            ),
        );

        DB::table('roles')->delete();
        foreach ($this->arrayRoles as $rol) {
            $r = new Role;
            $r->name = $rol['name'];
            $r->save();
        }
    }
}
