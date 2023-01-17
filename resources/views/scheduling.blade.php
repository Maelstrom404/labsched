@extends('layouts.main')

@section('title', 'Scheduling')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Scheduling</h1>
                <form action="{{ route('schedules.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="start_time">Start Time</label>
                        <input type="time" class="form-control" id="start_time" name="start_time" required>
                    </div>
                    <div class="form-group">
                        <label for="end_time">End Time</label>
                        <input type="time" class="form-control" id="end_time" name="end_time" required>
                    </div>
                    <div class="form-group">
                        <label for="day">Day</label>
                        <select class="form-control" id="day" name="day" required>
                            <option value="Monday">Monday</option>
                            <option value="Tuesday">Tuesday</option>
                            <option value="Wednesday">Wednesday</option>
                            <option value="Thursday">Thursday</option>
                            <option value="Friday">Friday</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="laboratory_id">Laboratory</label>
                        <input type="text" class="form-control" id="laboratory_id" name="laboratory_id" required>
                    </div>
                    <div class="form-group">
                        <label for="user_id">Faculty</label>
                        <select class="form-control" id="user_id" name="user_id" required>
                            @foreach ($users as $user)
                                <option value="{{ $user->id }}">{{ $user->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection