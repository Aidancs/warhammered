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
            [
                'unit_id' => 2,
                'command_ability' => false,
                'name' => 'First to the Fray',
                'description' => 'If an Arkanaut Admiral ends a charge move within ½" of an enemy unit, you can add 1 to charge rolls for friendly Kharadron Overlords units within 18" until the end of the phase.',
                'associated_phase' => 'charge',
            ],
            [
                'unit_id' => 2,
                'command_ability' => false,
                'name' => 'Master of the Skies',
                'description' => 'If an Arkanaut Admiral is embarked on a Skyvessel, that vessel can run and shoot in the same turn.',
                'associated_phase' => 'movement',
            ],
            [
                'unit_id' => 2,
                'command_ability' => false,
                'name' => 'If You Want A Job Done…',
                'description' => 'You can re-roll hit and wound rolls of 1 for an Arkanaut Admiral if the target is a Hero or Monster.',
                'associated_phase' => 'shooting/combat',
            ],
            [
                'unit_id' => 2,
                'command_ability' => true,
                'name' => 'Invoke the Code',
                'description' => ' If an Arkanaut Admiral uses this ability, they invoke one of the central tenets of the Code. Choose one of the following tenets – the effect lasts until your next hero phase.',
                'associated_phase' => 'n/a',
            ],
            [
                'unit_id' => 2,
                'command_ability' => true,
                'name' => 'Lead By Example',
                'description' => 'Friendly Kharadron Overlords units within 12" of the Admiral in the battleshock phase do not have to take battleshock tests.',
                'associated_phase' => 'battleshock',
            ],
            [
                'unit_id' => 2,
                'command_ability' => true,
                'name' => 'Look Out For The Boss',
                'description' => 'If there is a friendly Skyfarers unit within 1" when the Admiral suffers a wound or mortal wound, you can roll a dice. On a 5 o6, that unit suffers a mortal wound instead.',
                'associated_phase' => 'shooting/combat',
            ],
            [
                'unit_id' => 2,
                'command_ability' => true,
                'name' => 'Talk Softly, Carry A Big Hammer',
                'description' => 'Re-roll failed hit and wound rolls for the Admiral in the combat phase.',
                'associated_phase' => 'combat',
            ],
            [
                'unit_id' => 3,
                'command_ability' => false,
                'name' => 'Aetheric Augmentation',
                'description' => 'An Aether-Khemist can use their Atmospheric Anatomiser in their hero phase to augment the weapons of nearby Arkanauts. When they do so, pick a friendly Skyfarers unit within 10". Until your next hero phase, add 1 to the Attacks characteristic of one kind of weapon carried by the unit (e.g. their Privateer Pistols).',
                'associated_phase' => 'shooting/combat',
            ],
            [
                'unit_id' => 3,
                'command_ability' => false,
                'name' => 'Atmospheric Isolation',
                'description' => 'An Aether-Khemist can use their Anatomiser at the beginning of the combat phase to create a vacuum around themselves, suffocating their foes. When they do so, enemy models within 3" reduce each of their Attacks characteristics by 1, to a minimum of 1.',
                'associated_phase' => 'shooting/combat',
            ],
            [
                'unit_id' => 4,
                'command_ability' => false,
                'name' => 'Glory-seekers',
                'description' => 'Add 1 to the hit rolls for any model in this unit if the target for all of its attacks in that phase is a Hero or Monster.',
                'associated_phase' => 'shooting/combat',
            ],
            [
                'unit_id' => 5,
                'command_ability' => false,
                'name' => 'Exploding Drill',
                'description' => 'If the wound roll for a Drill Cannon is a 6 or more, you can pick another enemy unit within 3" of the target unit. That unit suffers D3 mortal wounds in addition to any damage dealt to the target unit.',
                'associated_phase' => 'shooting',
            ],
            [
                'unit_id' => 5,
                'command_ability' => false,
                'name' => 'Grapnel Launcher',
                'description' => 'A Skywarden with a Grapnel Launcher can fire it at the end of their shooting phase, after all other shooting has been resolved. Choose a terrain feature or a unit – friend or foe – with a Wounds characteristic of 10 or more within 24" and roll a dice. On a roll of 4 or more the grapnel has snagged on the target; immediately move this unit of Skywardens any distance directly towards the target. They must finish their move more than 3" from enemy models.',
                'associated_phase' => 'shooting',
            ],
            [
                'unit_id' => 5,
                'command_ability' => false,
                'name' => '',
                'description' => '',
                'associated_phase' => '',
            ],
            [
                'unit_id' => 5,
                'command_ability' => false,
                'name' => 'Hitchers',
                'description' => 'Skywardens do not count towards the maximum number of Skyfarers that can be embarked on a Skyvessel, and are nofor the Overburdened rule.',
                'associated_phase' => 'movement',
            ],
            [
                'unit_id' => 5,
                'command_ability' => false,
                'name' => 'Skyhook',
                'description' => 'If any enemy units suffer an unsaved wound from a Skyhook, those units are harpooned. The Skywardens can immediately move D6", as long as this move takes them closer to a harpooned unit.',
                'associated_phase' => 'shooting',
            ],
            [
                'unit_id' => 5,
                'command_ability' => false,
                'name' => 'Skymines',
                'description' => 'Skywardens surround themselves with airborne mines that explode on contact. When an enemy unit that can fcharge within 1" of any units of Skywardens, roll a dice for each model in the charging unit. On each roll of 6 the unimortal wound.',
                'associated_phase' => 'movement',
            ],
            [
                'unit_id' => 5,
                'command_ability' => false,
                'name' => 'Timed Charges',
                'description' => 'Skywardens are practised at striking hard and then retreating quickly amidst timed explosions to cconfusion and damage. When a unit of Skywardens retreats, before moving the unit, roll a dice for each enemy unit witroll of 6 that unit suffers a mortal wound.',
                'associated_phase' => 'movement',
            ],
        ];

        foreach ($abilities as $ability) {
            Ability::create($ability);
        }
    }
}
