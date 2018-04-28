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
                'unit_id' => 1,
                'name' => 'Grungsson\'s Boast',
                'range' => '18',
                'attacks' => '2',
                'to_hit' => '3',
                'to_wound' => '2',
                'rend' => '1',
                'damage' => 'D3'
             ],
             [
                 'unit_id' => 1,
                 'name' => 'Magnates\'s Charter',
                 'range' => '18',
                 'attacks' => '3',
                 'to_hit' => '3',
                 'to_wound' => '3',
                 'rend' => '1',
                 'damage' => '1'
              ],
              [
                  'unit_id' => 1,
                  'name' => 'Aetherblasters',
                  'range' => '9',
                  'attacks' => '2',
                  'to_hit' => '3',
                  'to_wound' => '4',
                  'rend' => '-',
                  'damage' => '1'
               ],
        ];

        foreach ($missles as $missle) {
            Missle::create($missle);
        }
    }
}
