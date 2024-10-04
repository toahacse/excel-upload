<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imports\OrdersImport;
use Maatwebsite\Excel\Facades\Excel;

class OrderImportController extends Controller
{
    public function import(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:xlsx,csv',
        ]);

        ini_set('max_execution_time', 0);
        
        Excel::import(new OrdersImport, $request->file('file'));

        return back()->with('success', 'Excel file imported successfully!');
    }
}
