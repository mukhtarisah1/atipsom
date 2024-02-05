<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Incident;
use Carbon\Carbon;
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
    public function index()
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
        $incidents = Incident::all();
        return view('home', compact('data','data1', 'cards', 'incidents'));
    }
}
