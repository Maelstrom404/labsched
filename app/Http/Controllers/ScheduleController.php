<?php

namespace App\Http\Controllers;

use App\Models\Schedule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ScheduleController extends Controller
{
    /**
     * Display a listing of the schedules.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $schedules = Schedule::all();

        return view('schedules.index', compact('schedules'));
    }

    /**
     * Show the form for creating a new schedule.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('schedules.create');
    }

    /**
     * Store a newly created schedule in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $request->validate([
            'start_time' => 'required',
            'end_time' => 'required',
            'day' => 'required',
            'laboratory_id' => 'required',
            'user_id' => 'required',
        ]);

        $schedule = new Schedule([
            'start_time' => $request->get('start_time'),
            'end_time' => $request->get('end_time'),
            'day' => $request->get('day'),
            'laboratory_id' => $request->get('laboratory_id'),
            'user_id' => $request->get('user_id'),
        ]);

        $schedule->save();

        return redirect('/schedules')->with('success', 'Schedule has been added');
    }

    /**
     * Show the form for editing the specified schedule.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $schedule = Schedule::find($id);

        return view('schedules.edit', compact('schedule'));
    }

    /**
     * Update the specified schedule in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        $request->validate([
        'start_time' => 'required',
        'end_time' => 'required',
        'day' => 'required',
        'laboratory_id' => 'required',
        'user_id' => 'required',
    ]);

    $schedule = Schedule::find($id);
    $schedule->start_time = $request->get('start_time');
    $schedule->end_time = $request->get('end_time');
    $schedule->day = $request->get('day');
    $schedule->laboratory_id = $request->get('laboratory_id');
    $schedule->user_id = $request->get('user_id');
    $schedule->save();

    return redirect('/schedules')->with('success', 'Schedule has been updated');
}

/**
 * Remove the specified schedule from storage.
 *
 * @param  int  $id
 * @return \Illuminate\Http\RedirectResponse
 */
public function destroy($id)
{
    $schedule = Schedule::find($id);
    $schedule->delete();

    return redirect('/schedules')->with('success', 'Schedule has been deleted');
}
}