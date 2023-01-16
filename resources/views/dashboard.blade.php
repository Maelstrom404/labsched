@extends('layouts.main')

@section('title', 'Dashboard')

@section('content')
    @foreach ($schedules as $schedule)
        <p>Time: {{$schedule->start_time}} - {{$schedule->end_time}}</p>
        <p>Day: {{$schedule->days}}</p>
    @endforeach
@endsection