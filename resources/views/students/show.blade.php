@extends('layouts.app')

@section('title', '학생 상세')

@section('content')
    <h2>학생 상세</h2>

    <p>이름: {{ $student->name }}</p>
    <p>학년: {{ $student->grade }}</p>

    <a href="/students">← 목록으로</a>
@endsection
