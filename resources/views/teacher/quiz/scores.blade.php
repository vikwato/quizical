@extends('layouts.app')

@section('content')

<div class="col-md-8">
    <div class="panel panel-default">
        <div class="panel-heading">Scores</div>
        <div class="panel-subheading  {{ $quiz->category }}">
            {{ $quiz->quiz }}
        </div>
        <div class="scores-container">
            @component('components.messages')
                    
            @endcomponent
            <table class="scoresTable">
                <thead>
                    <th>Student</th>
                    <th>Time</th>
                    <th>Score</th>
                </thead>
                <tbody>
                    @foreach($scores as $score)
                        <tr>
                            <td>{{$score->name}}</td>
                            <td>{{$score->time}}s</td>
                            <td>{{$score->score}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>            
            <a class="btn btn-primary" role="button" href="{{ route('admin.dashboard') }}">Back to Dashboard</a>
        </div>       
    </div>
</div>

@endsection
