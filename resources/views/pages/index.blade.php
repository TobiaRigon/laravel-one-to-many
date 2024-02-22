@extends('layouts.main-layout')
@section('head')
    <title>Home</title>
@endsection
@section('content')
<h1>Projects</h1>
<ul>
    @foreach ($types as $type)
        @foreach ($type->projects as $project)
            <li>
                <h3>{{$project->name}}</h3>
                <p>{{$project->description}}</p>
                <p><strong>Type:</strong> {{$type->name}}</p>
            </li>
        @endforeach
    @endforeach
</ul>
@endsection
