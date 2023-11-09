<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ShelterStaff;

class ShelterStaffController extends Controller
{
    public function index()
    {
        $shelterStaff = ShelterStaff::all();
        return view('shelterstaff.index', compact('shelterStaff'));
    }

    public function create()
    {
        return view('shelterstaff.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'email' => 'required|email|unique:shelter_staff,email',
            'phone' => 'required|string',
            'photograph' => 'required|image|mimes:jpeg,png,jpg,gif',
            'remark' => 'nullable|string',
            'rank' => 'required|string',
        ]);

        if ($request->hasFile('photograph')) {
            $image = $request->file('photograph');
            $imageName = time() . '.' . $image->extension();
            $image->move(public_path('photographs'), $imageName);
            $validatedData['photograph'] = $imageName;
        }

        ShelterStaff::create($validatedData);
        return redirect()->route('shelterstaff.index');
    }

    public function show($id)
    {
        $shelterStaff = ShelterStaff::find($id);
        return view('shelterstaff.show', compact('shelterStaff'));
    }

    public function edit($id)
    {
        $shelterStaff = ShelterStaff::find($id);
        return view('shelterstaff.edit', compact('shelterStaff'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'email' => 'required|email|unique:shelter_staff,email,' . $id,
            'phone' => 'required|string',
            'remark' => 'nullable|string',
            'rank' => 'required|string',
        ]);

        if ($request->hasFile('photograph')) {
            $image = $request->file('photograph');
            $imageName = time() . '.' . $image->extension();
            $image->move(public_path('shelterstaffs'), $imageName);
            $validatedData['photograph'] = $imageName;
        }

        $shelterStaff = ShelterStaff::find($id);
        $shelterStaff->update($validatedData);
        return redirect()->route('shelterstaff.index');
    }

    public function destroy($id)
    {
        $shelterStaff = ShelterStaff::find($id);
        $shelterStaff->delete();
        return redirect()->route('shelterstaff.index');
    }
}
