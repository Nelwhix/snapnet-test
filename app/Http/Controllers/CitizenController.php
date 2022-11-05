<?php

namespace App\Http\Controllers;

use App\Models\Citizen;
use Illuminate\Http\Request;

class CitizenController extends Controller
{
    public function create() {
        return view('create');
    }

    public function store(Request $request) {
        $formFields = $request->validate([
            'fullName' => 'required|string',
            'gender' => 'required|string',
            'address' => 'required|string',
            'phone' => 'required|string',
        ]);

        Citizen::create([
            'fullName' => $formFields['fullName'],
            'gender' => $formFields['gender'],
            'address' => $formFields['address'],
            'phone' => $formFields['phone']
        ]);

        return redirect('/home')->with('message', 'Citizen created successfully');

    }

    public function index() {
        return view('home', [
            'citizens' => Citizen::latest()->filter(request(['search']))->get()
        ]);
    }

    public function show(Citizen $citizen) {
        return view('show', [
           'citizen' => $citizen
        ]);
    }
}
