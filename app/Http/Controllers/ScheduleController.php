<?php
namespace App\Http\Controllers;

use App\Models\Schedule;
use App\Models\Doctor;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    public function showSchedule(Request $request)
    {
        $date = $request->input('date') ?? now()->toDateString(); // текущая дата по умолчанию
        $schedule = Schedule::with('doctor')
            ->where('date', $date)
            ->get();
        return view('index', [
            'schedule' => $schedule,
        ]);
    }
}
