@extends('layouts.app')

@section('title', '학생 추가')

@section('content')
    <h2>학생 추가</h2>

    <form method="POST" action="/students">
        @csrf

        <div>
            <label>이름</label>
            <input type="text" name="name">
        </div>

        <div>
            <label>학년</label>
            <input type="number" name="grade">
        </div>

        <button type="submit">저장</button>
    </form>

    <a href="/students">← 목록으로</a>
@endsection
