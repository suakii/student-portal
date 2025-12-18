@extends('layouts.app')

@section('title', '학생 목록')

@section('content')
    <h2>학생 목록</h2>

    <ul>
        @foreach ($students as $student)
            <li>
                <a href="/students/{{ $student->id }}">
                    {{ $student->name }} ({{ $student->grade }}학년)
                </a>
            </li>
        @endforeach
    </ul>
@endsection
