<?php

namespace App\Http\Controllers;

use App\Models\Reserved;
use App\Models\Animal;
use App\Models\User;
use Illuminate\Http\Request;

class ReservedController extends Controller
{
    public function index()
    {
        $reserveds = Reserved::all();
        return view('reserveds.index', compact('reserveds'));
    }

    public function create()
    {
        $animals = Animal::all();
        $users = User::all();
        return view('reserveds.create', compact('animals', 'users'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'date_order' => 'required|date',
            'animal_id' => 'required|exists:animals,animal_id',
            'user_id' => 'required|exists:users,user_id',
        ]);

        Reserved::create($request->all());
        return redirect()->route('reserveds.index')->with('success', 'Reservation created successfully.');
    }

    public function show(Reserved $reserved)
    {
        return view('reserveds.show', compact('reserved'));
    }

    public function edit(Reserved $reserved)
    {
        $animals = Animal::all();
        $users = User::all();
        return view('reserveds.edit', compact('reserved', 'animals', 'users'));
    }

    public function update(Request $request, Reserved $reserved)
    {
        $request->validate([
            'date_order' => 'required|date',
            'animal_id' => 'required|exists:animals,animal_id',
            'user_id' => 'required|exists:users,user_id',
        ]);

        $reserved->update($request->all());
        return redirect()->route('reserveds.index')->with('success', 'Reservation updated successfully.');
    }

    public function destroy(Reserved $reserved)
    {
        $reserved->delete();
        return redirect()->route('reserveds.index')->with('success', 'Reservation deleted successfully.');
    }
}
