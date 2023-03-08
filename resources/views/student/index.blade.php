@extends('layouts.main')
@section('title', 'Student')
@section('content')
<a href="{{route('school.create')}}" class="btn btn-primary">Add New School</a>

<div class="table-responsive mt-3">
    <table id="student-table" class="table">
        <thead>
            <tr>
                <th>NISN</th>
                <th>Nama</th>
                <th>Sekolah</th>
            </tr>
        </thead>
        <tbody></tbody>
    </table>
</div>
@endsection
