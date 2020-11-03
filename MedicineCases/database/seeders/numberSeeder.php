<?php

namespace Database\Seeders;

use App\Models\Number;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class numberSeeder extends Seeder
{
    public function run()
    {
        $this->arrayNumbers = array(
            array(
                'secret_number' => '49126573',
            ),
            array(
                'secret_number' => '97301390',
            ),
        );

        DB::table('numbers')->delete();
        foreach ($this->arrayNumbers as $num) {
            $sn = new Number;
            $sn->secret_number = $num['secret_number'];
            $sn->save();
        }
    }
}
