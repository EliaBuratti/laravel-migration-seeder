<?php

namespace App\Http\Controllers;

use App\Models\Train;
use Illuminate\Http\Request;

class TrainDateController extends Controller
{

    public function trainDate(Request $request)
    {

        $query = Train::query();
        $trains = Train::orderByDesc('department_date')->orderByDesc('time_departure')->get();
        if ($request->all() !== []) {


            $query->where('department_date', $request->user_date);
            $trains = $query->get();
        }





        return view('welcome', compact('trains'));
    }
}
