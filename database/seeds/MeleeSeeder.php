<?php

use App\Melee;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class MeleeSeeder extends Seeder
{
    public function run()
    {
        $melees = [
            [
                'unit_id' => 1,
                'name' => 'Aethermatic Saw',
                'range' => '1',
                'attacks' => '4',
                'to_hit' => '3',
                'to_wound' => '2',
                'rend' => '2',
                'damage' => 'D3'
             ],
        ];

        foreach ($melees as $melee) {
            Melee::create($melee);
        }
    }
}
