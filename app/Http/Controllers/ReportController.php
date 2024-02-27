<?php

namespace App\Http\Controllers;

use App\Models\Incident;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReportController extends Controller
{
    public function index()
    {
        return view('reports.index'); // Create a view for the report generation form
    }
    
    public function generate(Request $request)
    {
        $request->validate([
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
        ]);

        $start_date = $request->start_date;
        $end_date = $request->end_date;

        $incidents = Incident::whereBetween('opened', [$start_date, $end_date])->get();

        $totalIncidents = $incidents->count();
        //dd($totalIncidents);

        $incidentCategories = $incidents->groupBy('category')->map->count();

        $averageResolutionTime = $incidents->avg('resolution_time'); // Assuming you have a 'resolution_time' field

        $priorityDistribution = $incidents->groupBy('priority')->map->count();

        $stateDistribution = $incidents->groupBy('state')->map->count();

        $topCallers = $this->getTopUsers($incidents, 'caller_name');

        $topAssignedUsers = $this->getTopUsers($incidents, 'assigned_to');

        // Add more metrics as needed...

        return view('reports.generated', compact(
            'totalIncidents',
            'incidentCategories',
            'averageResolutionTime',
            'priorityDistribution',
            'stateDistribution',
            'topCallers',
            'topAssignedUsers'
            // Add more variables as needed...
        ));
    }

    private function getTopUsers($incidents, $field)
    {
        return $incidents->groupBy($field)->map->count()->sortDesc();
    }
}
