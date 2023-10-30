<?php

use App\Http\Controllers\TrainDateController;
use App\Models\Train;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/* Route::get('/', function () {

    //TrainDateController::class['trainDate'];

    $trains = Train::orderByDesc('department_date')->orderByDesc('time_departure')->get();
    //$trains = Train::all();

        if (isset($_POST['user_date'])) {
        dd($_POST['user_date']);

        $trains = Train::all();
        $train_filter = array_filter($trains->department_date, $_POST['user_date']);
        dd($train_filter);
    };
    //dd($trains);
    return view('welcome', compact('trains'));
});
 */

Route::get('/', [TrainDateController::class, 'trainDate']);
