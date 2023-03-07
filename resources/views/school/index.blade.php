@extends('layouts.main')
@section('title', 'School')
@section('content')
<a href="{{route('school.create')}}" class="btn btn-primary">Add New School</a>

@php
    if(request()->has('schools')){
        dd($schools);
    }
@endphp
<div class="table-responsive mt-3">
    <table id="school-table" class="table display">
        <thead>
            <tr>
                <th>Nama Sekolah</th>
                <th>Jurusan</th>
                <th>Jumlah Siswa</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody></tbody>
    </table>

    {{-- Modal Popup --}}
    <div class="modal fade" id="view-school-modal" tabindex="-1" role="dialog" aria-labelledby="view-school-modal-label" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="view-school-modal-label">View school</h5>
                    {{-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button> --}}

                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Isi modal -->
                    <div class="form-group">
                        <label>Nama Sekolah</label>
                        <input type="text" class="form-control" id="school-nama-sekolah" readonly>
                    </div>
                    <div class="form-group">
                        <label>Jurusan</label>
                        <input type="text" class="form-control" id="school-jurusan" readonly>
                    </div>
                    <div class="form-group">
                        <label>Jumlah Siswa</label>
                        <input type="text" class="form-control" id="school-jumlah-siswa" readonly>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
