<?php

namespace App\Http\Controllers;
use App\Models\Info;

use Illuminate\Http\Request;

class SearchController extends Controller
{

    public function search(Request $request)
    {
        $query = Info::query(); 

        $searchableFields = ['name', 'surname', 'date_of_birth']; 

        foreach ($searchableFields as $field) {
            $value = $request->input($field);

            if ($value) {
                
                $values = array_map('trim', explode(',', $value));

                // Add 'orWhere' clauses for each value
                $query->orWhere(function ($query) use ($field, $values) {
                    foreach ($values as $singleValue) {
                        $query->orWhere($field, 'like', '%' . $singleValue . '%');
                    }
                });
            }
        }

        $results = $query->get();

        return view('search.results', compact('results'));
    }

}