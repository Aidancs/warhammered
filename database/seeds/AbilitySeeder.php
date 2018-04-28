<?php

use App\Ability;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class AbilitySeeder extends Seeder
{
    public function run()
    {
        $abilities = [
            [
                'unit_id' => 1,
                'command_ability' => true,
                'name' => 'First Rule of Grungsson',
                'description' => 'If Brokk Grungsson uses this ability, he invokes his first and most significant commentary on the Code – ‘to the victor, the spoils’. Until your next hero phase, friendly Kharadron Overlords units within 18" can charge even if they ran in the same turn.',
                'associated_phase' => 'hero',
             ],
             [
                 'unit_id' => 1,
                 'command_ability' => false,
                 'name' => 'The Lord-Magnate Moves',
                 'description' => 'If Brokk Grungsson ends a charge move within ½" of any enemy units, pick one of those units and roll a dice. On a roll of 2 or more, that unit suffers D3 mortal wounds from the crushing impact of the Lord-Magnate’s charge.',
                 'associated_phase' => 'charge',
              ],
              [
                  'unit_id' => 1,
                  'command_ability' => false,
                  'name' => 'Champion of Barak-Nar',
                  'description' => 'You can re-roll hit and wound rolls of 1 for Brokk Grungsson if those attacks are directed against a Hero or Monster',
                  'associated_phase' => 'Shooting and Combat',
               ],
               [
                   'unit_id' => 1,
                   'command_ability' => false,
                   'name' => 'Supercharged Harness',
                   'description' => 'Brokk Grungsson can supercharge his harness in the combat phase to give himself extra strength, but doing so can be hazardous. If Brokk Grungsson uses this ability, roll a dice. On a roll of 1, he suffers a mortal wound. On a roll of 3 or more, the Damage characteristic of his Aethermatic Saw is 3 rather than D3 until the end of the phase.',
                   'associated_phase' => 'charge',
                ],
                [
                    'unit_id' => 1,
                    'command_ability' => false,
                    'name' => 'High Hitcher',
                    'description' => 'Brokk Grungsson does not count towards the maximum number of Skyfarers that can be embarked on a Skyvessel, and is not counted for the Overburdened rule.',
                    'associated_phase' => 'charge',
                 ],
        ];

        foreach ($abilities as $ability) {
            Ability::create($ability);
        }
    }
}
