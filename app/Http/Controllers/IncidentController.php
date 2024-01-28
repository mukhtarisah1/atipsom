<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Incident;
use App\Models\User;

class IncidentController extends Controller
{
    // Display a listing of the resource.
    public function index()
    {
        $incidents = Incident::all();
        return view('incidents.index', compact('incidents')); 
    }

    // Show the form for creating a new resource.
    public function create()
    {   $users = User::all();
        return view('incidents.create', compact('users'));
    }

    // Store a newly created resource in storage.
    public function store(Request $request)
    {
        $data = $request->validate([
            
            'number' => 'required|string',
            'caller_name' => 'required|string',
            'category' => 'required|string',
            'opened' => 'required|date',
            'closed' => 'nullable|string',
            'priority' => 'required|string',
            'state' => 'required|string',
            'description' => 'required|string',
            'assigned_to' => 'nullable|string',
            'location' => 'required|string',
        ]);
        $user = User::where('email', $request->assigned_to)->first();
        //dd($user);
        $data['user_id'] =$user->id;
        Incident::create($data);

        return redirect()->route('incidents.index')
                         ->with('success','Incident created successfully.');
    }

    // Show the specified resource.
    public function show(Incident $incident)
    {
        return view('incidents.show', compact('incident'));
    }


    // Show the form for editing the specified resource.
    public function edit(Incident $incident)
    {
        return view('incidents.edit', compact('incident'));
    }

    // Update the specified resource in storage.
    public function update(Request $request, Incident $incident)
    {
        $request->validate([
            'user_id' => 'required|integer',
            'number' => 'required|string',
            'caller_name' => 'required|string',
            'category' => 'required|string',
            'opened' => 'required|date',
            'closed' => 'nullable|string',
            'priority' => 'required|string',
            'state' => 'required|string',
            'description' => 'required|string',
            'assigned_to' => 'nullable|string',
            'location' => 'required|string',
        ]);

        $incident->update($request->all());

        return redirect()->route('incidents.index')
                         ->with('success','Incident updated successfully');
    }

    // Remove the specified resource from storage.
    public function destroy(Incident $incident)
    {
        $incident->delete();

        return redirect()->route('incidents.index')
                         ->with('success','Incident deleted successfully');
    }

    public function assigned(){
        $email = auth()->user()->email;
        dd($email);
        $incidents = Incident::where('email', $email )->get();
        return view('incidents.assigned', compact($incidents));
    }
}
