@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    @foreach ($unit as $u)
                        {{$u->name}}
                    @endforeach
                   {{--  <div>Name: {{ $unit->name }}</div>
                    <div>Move: {{ $unit->move }}</div>
                    <div>Wounds: {{ $unit->wounds }}</div>
                    <div>Bravery: {{ $unit->bravery }}</div>
                    <div>Fly: {{ $unit->fly ? 'Yes' : 'No' }}</div>
                    <div>Alive: {{ $unit->alive ? 'Yes' : 'No' }}</div>
                    <div>Number of Models: {{ $unit->number_of_models }}</div> --}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
