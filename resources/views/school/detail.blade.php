@extends('layouts.main')
@section('title', 'School | Detail')
@section('content')
<div class="row">
    <div class="col-md-5">
        <a href="javascript:history.back()" class="btn-close d-block mb-5"></a>
        <h2>Detail School</h2>
        <hr>

        <div class="form-group">
            <label>Nama Sekolah</label>
            <input type="text" class="form-control" value="{{$school->nama_sekolah}}" readonly>
        </div>
        <div class="form-group">
            <label>Jurusan</label>
            <input type="text" class="form-control" value="{{$school->jurusan}}" readonly>
        </div>
        <div class="form-group">
            <label>Jumlah Siswa</label>
            <input type="text" class="form-control" value="{{$school->jumlah_siswa}}" readonly>
        </div>
    </div>
</div>
@endsection
