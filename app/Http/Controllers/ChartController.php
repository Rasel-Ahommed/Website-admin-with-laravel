<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Suscriber;
use App\Models\Activities;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ChartController extends Controller
{

    public function activites()
    {
        // Get the current year
        $currentYear = Carbon::now()->year;
        $monthlyData = Activities::select(
            DB::raw('MONTH(created_at) as month'),
            DB::raw('COUNT(*) as count')
        )
            ->whereYear('created_at', $currentYear)
            ->groupBy(DB::raw('MONTH(created_at)'))
            ->get();

        // Create an array to hold month names
        $monthNames = [
            'Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun',
            'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'
        ];

        // Initialize result array with 0 counts for all months
        $result = [];

        foreach ($monthNames as $month) {
            $result[] = [
                'month' => $month,
                'count' => 0,
            ];
        }

        // Transform the result to include month names and update counts
        foreach ($monthlyData as $item) {
            $result[$item->month - 1]['count'] = $item->count;
        }
        $d['monthNames'] = $monthNames;
        $d['monthlyData'] = $monthlyData;

        return response()->json($result);
    }

    public function subscriber()
    {
        // Get the current year
        $currentYear = Carbon::now()->year;
        $monthlyData = Suscriber::select(
            DB::raw('MONTH(created_at) as month'),
            DB::raw('COUNT(*) as count')
        )
            ->whereYear('created_at', $currentYear)
            ->groupBy(DB::raw('MONTH(created_at)'))
            ->get();

        // Create an array to hold month names
        $monthNames = [
            'Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun',
            'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'
        ];

        // Initialize result array with 0 counts for all months
        $result = [];

        foreach ($monthNames as $month) {
            $result[] = [
                'month' => $month,
                'count' => 0,
            ];
        }

        // Transform the result to include month names and update counts
        foreach ($monthlyData as $item) {
            $result[$item->month - 1]['count'] = $item->count;
        }
        $d['monthNames'] = $monthNames;
        $d['monthlyData'] = $monthlyData;


        return response()->json($result);
    }
}
