@extends('layouts.main')

@section('content')

@isset($columnHeadings)
    <ul class="list-group">
        <li class="list-group-item">
            <h2>Iteration of column headings for number {{$number}}</h2>
            @foreach ($columnHeadings as $columnHeading)
                <span class="badge rounded-pill text-bg-light">{{ $columnHeading }}</span>
            @endforeach
        </li>
        <li class="list-group-item">
            <h2>Final Iteration of column heading for number {{$number}}</h2>
            <span class="badge rounded-pill text-bg-primary">{{ $finalColumnHeading }}</span>
        </li>
    </ul>
@endisset

@stop
