<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\InfoSom;
use App\Models\ShelterStaff;

class InfoSomController extends Controller
{
    public function index(Request $request)
    {
        $query = InfoSom::query(); // Replace 'User' with the appropriate model name

    $searchableFields = ['namager_name', 'email', 'facility']; // Add more fields as needed

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
        $infoSoms = $query->get();
        return view('info-soms.index', compact('infoSoms'));
    }

    public function create()
    {
        return view('info-soms.create');
    }

    public function store(Request $request)
    {
        //dd($request);
        $data = $request->validate([
            'manager_name' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required|string',
            'address' => 'required|string',
            'facilities' => 'required|string',
            'photograph' => 'required|image|mimes:jpeg,png,jpg,gif',
            'number_of_seats' => 'required|integer',
            'vacancies' => 'required',
            'capacity' => 'required|integer',
            'any_other_info' => 'string|nullable', // Define the validation rule for 'Additional_information'
        ]);

        if ($request->hasFile('photograph')) {
            $image = $request->file('photograph');
            $imageName = time() . '.' . $image->extension();
            $image->move(public_path('shelterImages'), $imageName);
            $data['photograph'] = $imageName;
        }

        InfoSom::create($data);
        //  $element = new InfoSom();
        //  $element->facilities = $data['facilities'];
        //  $element->photograph = $data['photograph'];
        //  $element->number_of_seats = $data['number_of_seats'];
        //  $element->vacancies =  $data['number_of_vacancies'];
        //  $element->capacity = $data['capacity'];
        //  $element->additional_information = $data['additional_information'];
        //  $element->save();

        return redirect()->route('info-soms.index')->with('success', 'Record created successfully');
    }

    public function show($id)
    {
        $infoSom = InfoSom::find($id);
        return view('info-soms.show', compact('infoSom'));
    }

    public function edit($id)
    {
        $infoSom = InfoSom::find($id);
        return view('info-soms.edit', compact('infoSom'));
    }

    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'manager_name' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required|string',
            'address' => 'required|string',
            'facilities' => 'required|string',
            'photograph' => 'image|mimes:jpeg,png,jpg,gif',
            'number_of_seats' => 'required|integer',
            'vacancies' => 'required',
            'capacity' => 'required|integer',
            'any_other_info' => 'string|nullable', // Define the validation rule for 'Additional_information'
        ]);
        $infoSom = InfoSom::find($id);
        //dd($infoSom->photograph);
        if ($request->hasFile('photograph')) {
            $image = $request->file('photograph');
            $imageName = time() . '.' . $image->extension();
            $image->move(public_path('shelterImages'), $imageName);
            $data['photograph'] = $imageName;
        }else{
            $data['photograph'] = $infoSom->photograph;
        }

        
        $infoSom->update($data);

        return redirect()->route('info-soms.index')->with('success', 'Record updated successfully');
    }

    public function destroy($id)
    {
        $infoSom = InfoSom::find($id);
        $infoSom->delete();

        return redirect()->route('info-soms.index')->with('success', 'Record deleted successfully');
    }
}
