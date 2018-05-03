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
                // 1
                'name' => 'Brokk Grungsson',
                'description' => 'Brokk Grungsson, Lord-Magnate of Barak-Nar is a single model. Borne aloft in his magnificent custom-built dirigible suit, Grungsson deals death from afar with Grungsson’s Boast, the Magnate’s Charter and his mustache-mounted Aetherblasters. When he is called upon to trade blows with his enemies, he does so with his Aethermatic Saw. ',
                'move' => 12,
                'save' => 3,
                'wounds' => 8,
                'bravery' => 8,
                'fly' => true,
                'alive' => true,
                'number_of_models' => 1,
                'number_of_wounds_left' => 8,
             ],
             [
                // 2
                 'name' => 'Arkanaut Admiral',
                 'description' => 'An Arkanaut Admiral is a single model. They are armed with a Skalfhammer and a Volley Pistol.',
                 'move' => 4,
                 'save' => 3,
                 'wounds' => 6,
                 'bravery' => 8,
                 'fly' => false,
                 'alive' => true,
                 'number_of_models' => 1,
                 'number_of_wounds_left' => 6,
              ],
              [
                // 3
                  'name' => 'Aether Khemist',
                  'description' => 'An Aether-Khemist is a single model armed with an Atmospheric Anatomiser that shoots clouds of Noxious Aether. They also carry Heavy Instruments with which they can bludgeon foes.',
                  'move' => 4,
                  'save' => 4,
                  'wounds' => 5,
                  'bravery' => 7,
                  'fly' => false,
                  'alive' => true,
                  'number_of_models' => 1,
                  'number_of_wounds_left' => 5,
               ],
               [
                // 4
                   'name' => 'Arkanaut Company',
                   'description' => 'An Arkanaut Company has 10 or more models. The Arkanauts are armed with Privateer Pistols and Arkanaut Cutters. For every 10 models in the company, up to 3 can instead be armed with a Skypike or a specialist gun in the form of a Light Skyhook or Aethermatic Volley Gun. Arkanauts armed with specialist guns can club the foe with their Gun Butts in combat.',
                   'move' => 4,
                   'save' => 5,
                   'wounds' => 1,
                   'bravery' => 6,
                   'fly' => false,
                   'alive' => true,
                   'number_of_models' => 10,
                   'number_of_wounds_left' => 1,
                ],
                [
                    // 5
                    'name' => 'Skywardens',
                    'description' => 'A unit of Skywardens has 3 or more models. The Skywardens are armed with Vulcaniser Pistols and Skypikes. For every 3 models in the unit, in place of their pistol and Skypike, 1 may be armed with an Aethermatic Volley Gun and 1 may be armed with either a Skyhook, Drill Cannon or Grapnel Launcher – these Skywardens will resort to clubbing the enemy with their Gun Butts at close quarters. Each Skywarden also carries a Timed Charge and Skymines.
                    CUSTODIAN
                    The leader of this unit is a Custodian. A Custodian
                    makes 3 attacks rather than 2 with their Skypike.',
                    'move' => 12,
                    'save' => 4,
                    'wounds' => 2,
                    'bravery' => 7,
                    'fly' => true,
                    'alive' => true,
                    'number_of_models' => 3,
                    'number_of_wounds_left' => 2,
                 ],
        ];

        foreach ($units as $unit) {
            Unit::create($unit);
        }
    }
}
