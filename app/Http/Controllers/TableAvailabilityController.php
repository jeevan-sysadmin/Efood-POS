<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Table;
use App\Models\Reservation;

class TableAvailabilityController extends Controller
{
    public function index()
    {
        $tables = Table::all();

        return view('table_availability.index', compact('tables'));
    }
}
