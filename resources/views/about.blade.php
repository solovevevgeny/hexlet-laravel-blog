
@extends('layouts.app')

@section('title', "О блоге")

@section('content')
<p>Эксперименты с Laravel на Хекслете</p>
<ul>
    @foreach ($team as $empl)
        <li>name: {{$empl['name']}}, position: {{$empl['position']}}</li>
    @endforeach
</ul>
@endsection