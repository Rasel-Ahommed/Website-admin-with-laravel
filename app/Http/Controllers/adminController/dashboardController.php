<?php

namespace App\Http\Controllers\adminController;

use App\Models\Suscriber;
use App\Models\Activities;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Http\Controllers\Controller;

class dashboardController extends Controller
{
    public function Index(){
    //     $currentYear = Carbon::now()->year;
        

    //     $monthlyData = Activities::select(
    //         DB::raw('MONTH(created_at) as month'),
    //         DB::raw('COUNT(*) as count')
    //     )
    //         ->whereYear('created_at', $currentYear)
    //         ->groupBy(DB::raw('MONTH(created_at)'))
    //         ->get();

           
    // // Create an array to hold month names
    // $monthNames = [
    //     'January', 'February', 'March', 'April', 'May', 'June',
    //     'July', 'August', 'September', 'October', 'November', 'December'
    // ];

    // // Initialize result array with 0 counts for all months
    // $result = [];

    // foreach ($monthNames as $month) {
    //     $result[] = [
    //         'month' => $month,
    //         'count' => 0,
    //     ];
    // }

    // // Transform the result to include month names and update counts
    // foreach ($monthlyData as $item) {
    //     $result[$item->month - 1]['count'] = $item->count;
    // }

    

    // return view('your.view', ['data' => $result]);

        $subscribers = Suscriber::all()->count();
        $activities = Activities::all()->count();
        return view('dashboard',compact('subscribers','activities'));
        
    }
}
