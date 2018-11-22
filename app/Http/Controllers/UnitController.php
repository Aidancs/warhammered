<?php

namespace App\Http\Controllers;

use App\Ability;
use App\Melee;
use App\Missle;
use App\Unit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;

class UnitController extends Controller
{
    public function index()
    {
        $unit = Unit::with('ability')
            ->with('melee')
            ->with('missle')
            ->get();

        return view('unit.index')
            ->with('unit', $unit);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Unit $unit)
    {
        $unit = Unit::where('id', $unit->id)
            ->with('ability')
            ->with('melee')
            ->with('missle')
            ->get();

        return view('unit.show')
                ->with('unit', $unit);
    }

    public function edit(Unit $unit)
    {
        //
    }

    public function update(Request $request, Unit $unit)
    {
        //
    }

    public function destroy(Unit $unit)
    {
        //
    }

    public function wounded(Unit $unit)
    {
        dd($unit);
    }
}
