<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;
class ReservationController extends Controller
{
    
    public function store()
    {

        $validatedData = request()->validate([
            'name' => ['required', 'string', 'max:255', 'min:4'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'phone' => ['required', 'string', 'min:11' , 'max:11'],
            'date' => ['required', 'date'],
            'people' => ['required', 'integer', 'min:1' , 'max:20'],
            'message' => ['nullable', 'string'],
        ]);
    
        $reservation = Reservation::create($validatedData);

        session()->flash('success', 'Reservation has been successfully created!');
    
        return to_route("home");
    }
    
}
