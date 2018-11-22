@extends('layouts')

@section('content')
    <main role="main">

      <div class="album py-5 bg-light">
        @foreach ($unit as $u)
          <div class="container">
            <div class="row">
              <div class="col-md-4">
                <div class="card mb-4 box-shadow">
                  <div class="card-body">
                    <p class="card-text text-center"> {{ $u->name }} </p>
                    <p class="card-text"> Move: {{ $u->move }} </p>
                    <p class="card-text"> Save: {{ $u->save }} </p>
                    <p class="card-text"> Wounds: {{ $u->wounds }} </p>
                    <p class="card-text"> Bravery: {{ $u->bravery }} </p>
                    <p class="card-text"> Models: {{ $u->number_of_models }} </p>
                    <p class="card-text"> Wounds Left: {{ $u->number_of_wounds_left }} </p>
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="btn-group">
                        <a href="{{ route('unit.show', ['unit' => $u])}}" class="btn btn-outline-secondary">Abilities</a>
                        <button type="button" class="btn btn-sm btn-outline-secondary">Wounded</button>
                        <button type="button" class="btn btn-sm btn-outline-secondary">Killed</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
          </div>
        </div>
        @endforeach

    </main>
@endsection
