<?php

use App\Unit;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class UnitSeeder extends Seeder
{
    public function run()
    {
        $units = [
            [
                'name' => 'Brokk Grungsson',
                'description' => 'Brokk Grungsson, Lord-Magnate of Barak-Nar is a single model. Borne aloft in his magnificent custom-built dirigible suit, Grungsson deals death from afar with Grungsson’s Boast, the Magnate’s Charter and his mustache-mounted Aetherblasters. When he is called upon to trade blows with his enemies, he does so with his Aethermatic Saw. ',
                'move' => 12,
                'save' => 2,
                'wounds' => 3,
                'bravery' => 2,
                'fly' => true,
                'alive' => true,
                'number_of_models' => 1,
             ],
        ];

        foreach ($units as $unit) {
            Unit::create($unit);
        }
    }
}
