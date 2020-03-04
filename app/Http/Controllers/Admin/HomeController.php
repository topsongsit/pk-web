<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

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
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $start = Carbon::now()->startOfMonth()->toDateString();
        $end   = Carbon::now()->endOfMonth()->toDateString();

        if ($request->has('start')) {
            $start = $request->input('start');
        }

        if ($request->has('end')) {
            $end = $request->input('end');
        }

        $courseReport = DB::table('bookings')
            ->selectRaw('course_id, count(*) as total ,courses.cname as name ')
            ->join('courses', 'bookings.course_id', '=', 'courses.id')
            ->where('bookings.created_at', '>=', $start)
            ->where('bookings.created_at', '<=', $end)
            ->groupBy('course_id')
            ->orderBy('total', 'desc')
            ->get();

        // dd($courseReport);

        $trainerReport = DB::table('bookings')
            ->selectRaw('trainer_id, count(*) as total, trainers.tname as name')
            ->join('trainers', 'trainers.id', '=', 'bookings.trainer_id')
            ->where('bookings.created_at', '>=', $start)
            ->where('bookings.created_at', '<=', $end)
            ->groupBy('trainer_id')
            ->orderBy('total', 'desc')
            ->get();

        $userReport = DB::table('bookings')
            ->selectRaw('COUNT(DISTINCT user_id) as user_total')
            ->where('created_at', '>=', $start)
            ->where('created_at', '<=', $end)
            ->first();

        $priceReport = DB::table('bookings')
            ->selectRaw('bookings.course_id, courses.cname, courses.cprice , trainers.tprice')
            ->join('trainers', 'trainers.id', '=', 'bookings.trainer_id')
            ->join('courses', 'bookings.course_id', '=', 'courses.id')
            ->where('bookings.created_at', '>=', $start)
            ->where('bookings.created_at', '<=', $end)
            ->get();

        $total = 0;
        foreach ($priceReport as $item) {
            $total += ($item->cprice + $item->tprice);
        }

        // dd(
        //     //$start, $end, $courseReport, $trainerReport,
        //     $userReport,
        //     $priceReport,
        //     $total
        // );

        return view('report.index')->with('courseReport', $courseReport)->with('userReport', $userReport)->with('total', $total);
    }
}
