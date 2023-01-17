@extends('layouts.main')

@section('title', 'Dashboard')

@section('content')
    {{-- @foreach ($schedules as $schedule)
        <p>Time: {{$schedule->start_time}} - {{$schedule->end_time}}</p>
        <p>Day: {{$schedule->days}}</p>
        <p>Faculty: {{$schedule->faculty_id}}</p> 
        <p>Room: {{$schedule->laboratory}}</p>   
    @endforeach --}}

    <table>
        <thead>
            <tr>
                <th>Time</th>
                <th>Day</th>
                <th>Faculty</th>
                <th>Laboratory</th>
            </tr>
        </thead>
        <tbody>
            @foreach($schedules as $schedule)
                <tr>
                    <td>{{$schedule->start_time}} - {{$schedule->end_time}}</td>
                    <td>{{$schedule->days}}</td>
                    <td>{{$schedule->faculty_id}}</td>
                    <td>{{$schedule->laboratory}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    
@endsection