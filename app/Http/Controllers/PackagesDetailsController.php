<?php

namespace App\Http\Controllers;

use App\Models\Batch;
use Illuminate\Http\Request;

class PackagesDetailsController extends Controller
{
    public function packagesDetails(Request $request)
    {
        $totals = Batch::count();
        $totalprice = Batch::count();
        $totnoofseats = Batch::count();

        $batches = Batch::latest()->get();
        return view('dashboard.packages-details', compact('totals', 'totalprice', 'totnoofseats', 'batches'));
    }
}
