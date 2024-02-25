<?php

namespace App\Http\Controllers;

use App\Mail\ResolveTask;
use Illuminate\Http\Request;
use App\Models\Incident;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use NunoMaduro\Collision\Adapters\Phpunit\State;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class IncidentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    // Display a listing of the resource.
    public function index()
    {
        $incidents = Incident::all();
         
        
        return view('incidents.index', compact('incidents')); 
    }

    // Show the form for creating a new resource.
    public function create()
    {   $users = User::all();
        $referenceNumber = 'INC-' . Str::upper(Str::random(8));
        //dd($referenceNumber);
        return view('incidents.create', compact('users','referenceNumber'));
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
            'file' => 'nullable|mimes:jpeg,jpg,png,gif,pdf,doc,docx|max:2048'
        ]);

        $user = User::where('email', $request->assigned_to)->first();

        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->storeAs('files', $filename, 'public'); // Adjust the storage path as needed
            $data['file'] = $filename;
        }
        //dd($user);
        $email =$request->assigned_to;
        $title = 'The following task has been assigned to you';
        $body = 'The task with Ref Number '.$request->number.' has been escalated to you for your perusal <br> please see to it that it is attended to';
        //dd($user);
        $data['user_id'] =$user->id;
        Mail::to($email)->send(new ResolveTask($title, $body));
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
        $users = User::all();
        return view('incidents.edit', compact('incident','users'));
    }

    // Update the specified resource in storage.
    public function update(Request $request, Incident $incident)
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
            'file' => 'nullable|mimes:jpeg,jpg,png,gif,pdf,doc,docx|max:2048',
        ]);
        $user = User::where('email', $request->assigned_to)->first();
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->storeAs('files', $filename, 'public'); // Adjust the storage path as needed
            $data['file'] = $filename;
        }
        if($data['state'] != 'resolved'){
            $email = $request->assigned_to;
            $title = 'The following task has been assigned to you';
            $body = 'The task with Ref Number ' . $request->number . ' has been escalated to you for your perusal <br> please see to it that it is attended to';

            $data['user_id'] = $user->id;
        }
            $incident->update($data);

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
        //dd($email);
        $incidents = Incident::where('assigned_to', $email )->get();
        return view('incidents.assigned', compact('incidents'));
    }

    public function resolved(){
        $incidents = Incident::where('state', 'resolved')->get();
        return view('incidents.resolved', compact('incidents'));
    }
    public function open(){
        $incidents = Incident::where('state', 'open')->get();
        return view('incidents.open', compact('incidents'));
    }
    public function unassigned(){
        $incidents = Incident::where('assigned_to', null)->get();
        return view('incidents.unassigned', compact('incidents'));
    }

//     public function barChart()
//     {
//         // Replace this with your actual data retrieval logic
//         $data = [
//             'labels' => ['January', 'February', 'March', 'April', 'May'],
//             'data' => [65, 59, 80, 81, 56],
//         ];
//         return view('bar-chart', compact('data'));
//     }
}
