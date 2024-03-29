<?php

namespace App\Http\Controllers;

use App\Models\Incident;
use Carbon\Carbon;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        // Get all incidents
        $incidents = Incident::all();

        // Group incidents by month
        $incidentsByMonth = $incidents->groupBy(function ($incident) {
            return Carbon::parse($incident->created_at)->format('F Y');
        });

        // Extract months and their counts
        $months = $incidentsByMonth->keys();
        $monthsCounts = $incidentsByMonth->map->count();

        $data = [
            'months' => $months,
            'monthsCounts' => $monthsCounts,
        ];

        //location for areachart
       // Get unique locations and their counts using Eloquent
        $locationCounts = Incident::select('location', DB::raw('COUNT(*) as count'))
        ->groupBy('location')
        ->get();

        // Use map to loop through locations and counts
        $data1 = [
        'locations' => $locationCounts->pluck('location')->toArray(),
        'locationCounts' => $locationCounts->map->count->toArray(),
        ];
                
        //cards data
        $allIncidents= Incident::all()->count();
        $resolved= Incident::where('state', 'resolved')->count();
        $closed= Incident::where('state', 'closed')->count();
        $onGoing =Incident::where('state', 'In progress')->count(); 

        $cards = [
            'allIncidents' =>$allIncidents,
            'resolved' => $resolved,
            'closed' => $closed,
            'onGoing' => $onGoing
        ];
        //dd($cards);
                //$searchIncidents = Incident::all();
            $query = Incident::query(); 
            $searchableFields = ['caller_name', 'state', 'number']; 
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
                $incidentSearch = $query->get();
        
        return view('home', compact('data','data1', 'cards', 'incidents', 'incidentSearch'));
    }
    public function users(){
        $users = User::all();
        //dd($users);
        return view('Users.user', compact('users'));
    }
    public function destroy(User $user){
        $user->delete();
        return redirect()->route('index.users')
        ->with('success','User deleted successfully');
    }
}
