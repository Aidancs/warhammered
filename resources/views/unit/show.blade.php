<div>
    <h2>Abilities</h2>
    @foreach ($unit as $u)
        @foreach ($u->ability as $ability)
            <div>Name: {{ $ability->name }}</div>
            <div>Command Ability: {{ $ability->command_ability ? 'Yes' : 'No'}}</div>
            <div>Description: {{ $ability->description }}</div>
            <div>Phase: {{ $ability->associated_phase }}</div>
            <br/>
        @endforeach
    @endforeach
</div>
