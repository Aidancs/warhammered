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
                'unit_id' => 1, // Brokk
                'name' => 'Aethermic Saw',
                'range' => '1',
                'attacks' => '4',
                'to_hit' => '3',
                'to_wound' => '2',
                'rend' => '-2',
                'damage' => 'D3'
            ],
            [
                'unit_id' => 2, // AA
                'name' => 'Skalfhammer',
                'range' => '1',
                'attacks' => '2',
                'to_hit' => '3',
                'to_wound' => '2',
                'rend' => '-2',
                'damage' => '2'
            ],
            [
                'unit_id' => 3, // AK
                'name' => 'Heavy Instruments',
                'range' => '1',
                'attacks' => '2',
                'to_hit' => '4',
                'to_wound' => '4',
                'rend' => '-',
                'damage' => '1'
            ],
            [
                'unit_id' => 4, // AC
                'name' => 'Arkanaut Cutter',
                'range' => '1',
                'attacks' => '1',
                'to_hit' => '4',
                'to_wound' => '4',
                'rend' => '-',
                'damage' => '1'
            ],
            [
                'unit_id' => 4, // AC
                'name' => 'Gun Butt',
                'range' => '1',
                'attacks' => '1',
                'to_hit' => '4',
                'to_wound' => '5',
                'rend' => '-',
                'damage' => '1'
            ],
            [
                'unit_id' => 4, // AC
                'name' => 'Skypike',
                'range' => '2',
                'attacks' => '2',
                'to_hit' => '4',
                'to_wound' => '4',
                'rend' => '-1',
                'damage' => 'D3'
            ],
            [
                'unit_id' => 5, // SW
                'name' => 'Gun Butt',
                'range' => '1',
                'attacks' => '2',
                'to_hit' => '4',
                'to_wound' => '3',
                'rend' => '-1',
                'damage' => 'D3'
            ],
            [
                'unit_id' => 5, // SW
                'name' => 'Skypike',
                'range' => '24',
                'attacks' => '1',
                'to_hit' => '4',
                'to_wound' => '3',
                'rend' => '-2',
                'damage' => '3'
            ],
        ];

        foreach ($melees as $melee) {
            Melee::create($melee);
        }
    }
}
