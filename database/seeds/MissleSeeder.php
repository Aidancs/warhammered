<?php

use App\Missle;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class MissleSeeder extends Seeder
{
    public function run()
    {
        $missles = [
            [
                'unit_id' => 1, // Brokk
                'name' => 'Grungsson\'s Boast',
                'range' => '18',
                'attacks' => '2',
                'to_hit' => '3',
                'to_wound' => '2',
                'rend' => '1',
                'damage' => 'D3'
            ],
            [
                'unit_id' => 1, // Brokk
                'name' => 'Magnates\'s Charter',
                'range' => '18',
                'attacks' => '3',
                'to_hit' => '3',
                'to_wound' => '3',
                'rend' => '1',
                'damage' => '1'
            ],
            [
                'unit_id' => 1, // Brokk
                'name' => 'Aetherblasters',
                'range' => '9',
                'attacks' => '2',
                'to_hit' => '3',
                'to_wound' => '4',
                'rend' => '-',
                'damage' => '1'
            ],
            [
                'unit_id' => 2, // AA
                'name' => 'Volley Pistol',
                'range' => '12',
                'attacks' => '3',
                'to_hit' => '3',
                'to_wound' => '4',
                'rend' => '-1',
                'damage' => '1'
            ],
            [
                'unit_id' => 3, // AK
                'name' => 'Noxious Aether',
                'range' => '10',
                'attacks' => '3D6',
                'to_hit' => '4',
                'to_wound' => '4',
                'rend' => '-1',
                'damage' => '1'
            ],
            [
                'unit_id' => 4, // AC
                'name' => 'Privateer Pistol',
                'range' => '12',
                'attacks' => '2',
                'to_hit' => '4',
                'to_wound' => '4',
                'rend' => '-',
                'damage' => '1'
            ],
            [
                'unit_id' => 4, // AC
                'name' => 'Aethermatic Volley Gun',
                'range' => '18',
                'attacks' => '6',
                'to_hit' => '5',
                'to_wound' => '4',
                'rend' => '-1',
                'damage' => '1'
            ],
            [
                'unit_id' => 4, // AC
                'name' => 'Light Skyhook',
                'range' => '24',
                'attacks' => '1',
                'to_hit' => '4',
                'to_wound' => '3',
                'rend' => '-2',
                'damage' => 'D3'
            ],
            [
                'unit_id' => 5, // SW
                'name' => 'Vulcaniser Pistol',
                'range' => '9',
                'attacks' => '1',
                'to_hit' => '3',
                'to_wound' => '3',
                'rend' => '-1',
                'damage' => '1'
            ],
            [
                'unit_id' => 5, // SW
                'name' => 'Aethermatic Volley Gun',
                'range' => '24',
                'attacks' => '6',
                'to_hit' => '4',
                'to_wound' => '4',
                'rend' => '-1',
                'damage' => '1'
            ],
            [
                'unit_id' => 5, // SW
                'name' => 'Skyhook',
                'range' => '24',
                'attacks' => '1',
                'to_hit' => '4',
                'to_wound' => '3',
                'rend' => '-2',
                'damage' => '3'
            ],
            [
               'unit_id' => 5, // SW
               'name' => 'Drill Cannon',
               'range' => '24',
               'attacks' => '1',
               'to_hit' => '4',
               'to_wound' => '3',
               'rend' => '-3',
               'damage' => '3'
            ],
        ];

        foreach ($missles as $missle) {
            Missle::create($missle);
        }
    }
}
