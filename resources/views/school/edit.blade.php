@extends('layouts.main')
@section('title', 'School |Edit')
@section('content')

<div class="row">
    <div class="col-md-6">
        <a href="javascript:history.back()" class="btn-close d-block mb-5"></a>
        <h2>Edit School</h2>
        <hr>
        <form action="{{route('school.update', $school->id)}}" method="post">
            <input type="text" name="nama_sekolah" class="form-control mb-3" placeholder="Nama Sekolah" value="{{$school->nama_sekolah}}">
            <input type="text" name="jurusan" class="form-control mb-3" placeholder="Jurusan" value="{{$school->jurusan}}">
            <input type="number" name="jumlah_siswa" class="form-control mb-3" placeholder="Jumlah Siswa" value="{{$school->jumlah_siswa}}">
            <button class="btn btn-success">Edit</button>
        </form>
    </div>
</div>
@endsection
