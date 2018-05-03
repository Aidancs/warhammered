@extends('layouts')

@section('content')
    <main role="main">

      {{-- <section class="jumbotron text-center">
        <div class="container">
          <h1 class="jumbotron-heading">Album example</h1>
          <p class="lead text-muted">Something short and leading about the collection below—its contents, the creator, etc. Make it short and sweet, but not too short so folks don't simply skip over it entirely.</p>
          <p>
            <a href="#" class="btn btn-primary my-2">Main call to action</a>
            <a href="#" class="btn btn-secondary my-2">Secondary action</a>
          </p>
        </div>
      </section> --}}

      <div class="album py-5 bg-light">
        @foreach ($unit as $u)
          <div class="container">
            <div class="row">
              <div class="col-md-4">
                <div class="card mb-4 box-shadow">
                  {{-- <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail" alt="Card image cap"> --}}
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
