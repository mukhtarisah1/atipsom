<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\InfoSom;
use App\Models\ShelterStaff;

class InfoSomController extends Controller
{
    public function index()
    {
        $infoSoms = InfoSom::all();
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
            'surname' => 'required|string',
            'given_name' => 'required|string',
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
            'tribal_mark' => 'required|string',
            'language_spoken' => 'required|string',
            'current_location' => 'required|string',
            'photograph' => 'mimes:jpeg,png,jpg,gif|max:2048',
            'shelter' => 'required|string', 
            'Additional_information' => 'string', // Define the validation rule for 'Additional_information'
        ]);

        // Handle photograph update and storage here if needed

        $infoSom = InfoSom::find($id);
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
