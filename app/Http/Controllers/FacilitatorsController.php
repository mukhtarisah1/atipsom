<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Facilitator;

class FacilitatorsController extends Controller
{
    public function index()
    {
        $facilitators = Facilitator::all();
        return view('facilitator.index', compact('facilitators'));
    }
    
    public function create()
    {
        return view('facilitator.create');
    }

    public function store(Request $request)
    {
       
        $data = $request->validate([
            'surname' => 'required|string',
            'given_name' => 'required|string',
            'aliases' => 'required|string',
            'date_of_birth' => 'required|date',
            'sex' => 'required|string',
            'nin' => 'required|string',
            'phone' => 'required|string',
            
            'nationality' => 'required|string',
            'state' => 'required|string',
            'lga' => 'required|string',
            'town' => 'required|string',
            'present_address' => 'required|string',
            'last_address' => 'required|string',
            'type_offence' => 'required|string',
            'type_conviction' => 'required|string',
            'term_conviction' => 'required|string',
            'victim_passport' => 'required|string',
            'complexion' => 'required|string',
            'place_of_arrest' => 'required|string',
            
            'height' => 'required|string',
            'eye_colour' => 'required|string',
            'tribal_mark' => 'required|string',
            'language_spoken' => 'required|string',
            'current_location' => 'required|string',
            'photograph' => 'mimes:jpeg,png,jpg,gif|max:2048',
            'fingerprint' => 'required|string',
        ]);

        if ($request->hasFile('photograph')) {
            $image = $request->file('photograph');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('photographs'), $imageName);
            // You should create a "photographs" directory in your public directory to store uploaded images.
        }
    
        $data = $request->except('photograph');
        $data['photograph'] = $imageName; // Save the image file name in the database
        Facilitator::create($data);
        
        return redirect()->route('facilitator.index')->with('success', 'Facilitator Added successfully');;
    }

    public function show($id)
    {
        $facilitator = Facilitator::find($id);
        return view('facilitator.show', compact('facilitator'));
    }

    public function edit($id)
    {
        $facilitator = Facilitator::find($id);
        //dd($facilitator);
        return view('facilitator.edit', compact('facilitator'));
    }

    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'surname' => 'required|string',
            'given_name' => 'required|string',
            'aliases' => 'required|string',
            'date_of_birth' => 'required|date',
            'sex' => 'required|string',
            'nin' => 'required|string',
            'phone' => 'required|string',
            
            'nationality' => 'required|string',
            'state' => 'required|string',
            'lga' => 'required|string',
            'town' => 'required|string',
            'present_address' => 'required|string',
            'last_address' => 'required|string',
            'type_offence' => 'required|string',
            'type_conviction' => 'required|string',
            'term_conviction' => 'required|string',
            'victim_passport' => 'required|string',
            'complexion' => 'required|string',
            'place_of_arrest' => 'required|string',
            
            'height' => 'required|string',
            'eye_colour' => 'required|string',
            'tribal_mark' => 'required|string',
            'language_spoken' => 'required|string',
            'current_location' => 'required|string',
            'photograph' => 'mimes:jpeg,png,jpg,gif|max:2048',
            'fingerprint' => 'required|string',
        ]);

        $facilitator = Facilitator::find($id);
        if (!$facilitator) {
            return redirect()->route('facilitator.index')->with('error', 'Facilitator not found');
        }
        if ($request->hasFile('photograph')) {
            $image = $request->file('photograph');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('photographs'), $imageName);
            
        }else{
            $data['photograph'] = $facilitator->photograph;
        }
    
        $data = $request->except('photograph');
        $data['photograph'] = $imageName; // Save the image file name in the database
        
        
        $facilitator->update($data);
        return redirect()->route('facilitator.index')->with('success', 'Facilitator updated successfully');
    }

    public function destroy($id)
    {
        $facilitator = Facilitator::find($id);
        if (!$facilitator) {
            return redirect()->route('facilitator.index')->with('error', 'Facilitator not found');
        }
    
        try {
            // Attempt to delete the facilitator
            $facilitator->delete();
            return redirect()->route('facilitator.index')->with('success', 'Facilitator deleted successfully');
        } catch (\Exception $e) {
            // Handle the deletion failure and display an error message
            return redirect()->route('facilitator.index')->with('error', 'Failed to delete facilitator: ' . $e->getMessage());
        }
    }
}




    

