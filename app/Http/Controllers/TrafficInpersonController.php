<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Info;


class TrafficInPersonController extends Controller
{
    // public function index()
    // {
    //     $trafficPersons = Info::all();
    //     return view('traffic.index', compact('trafficPersons'));
    // }
    public function index(Request $request)
    {
        $query = Info::query(); // Replace 'User' with the appropriate model name

    $searchableFields = ['given_name', 'surname', 'date_of_birth']; // Add more fields as needed

    foreach ($searchableFields as $field) {
        $value = $request->input('name');
        //dd($value);
        if ($value){
            // Split the input by commas and trim whitespace
            $values = array_map('trim', explode(',', $value));
            
            $query->orWhere(function ($query) use ($field, $values) {
                foreach ($values as $singleValue) {
                    $query->orWhere($field, 'like', '%' . $singleValue . '%');
                }
            });
        }
    }   
        $trafficPersons = $query->get();
        //dd($trafficPersons);
        return view('traffic.index', compact('trafficPersons'));
    }

    public function create()
    {
        return view('traffic.create');
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
            'passport' => 'required|integer',
            'nationality' => 'required|string',
            'state' => 'required|string',
            'lga' => 'required|string',
            'town' => 'required|string',
            'present_address' => 'required|string',
            'last_address' => 'required|string',
            'origin_or_source' => 'required|string',
            'transit' => 'required|string',
            'entry_point' => 'required|string',
            'destination' => 'required|string',
            'exit_point' => 'required|string',
            'reason_return' => 'required|string',
            'complexion' => 'required|string',
            'height' => 'required|string',
            'eye_colour' => 'required|string',
            'tribal_mark' => 'required|string',
            'languages_spoken' => 'required|string',
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
        Info::create($data);
        
        return redirect()->route('traffic-in-person.index');
    }

    public function show($id)
    {
        $trafficPerson = Info::find($id);
        return view('traffic.show', compact('trafficPerson'));
    }

    public function edit($id)
    {
        $trafficPerson = Info::find($id);
        return view('traffic.edit', compact('trafficPerson'));
    }

    public function update(Request $request, $id)
    {
        $trafficPerson = Info::find($id);
        $trafficPerson->update($request->all());
        return redirect()->route('traffic-in-person.index');
    }

    public function destroy($id)
    {
        $trafficPerson = Info::find($id);
        $trafficPerson->delete();
        return redirect()->route('traffic-in-person.index');
    }
}
