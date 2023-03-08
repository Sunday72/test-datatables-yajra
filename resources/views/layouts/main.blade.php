<!doctype html>
<html lang="en">
<head>
  <title>@yield('title')</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.3/css/dataTables.bootstrap5.min.css">
</head>
<body>
    @include('components.navbar')
    <div class="container pt-5">
        @yield('content')
    </div>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.3/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.3/js/dataTables.bootstrap5.min.js"></script>
  <script>
      $(function() {
          $('#school-table').DataTable({
              processing: true,
              serverSide: true,
              ajax: '{{ route("schools.datatable") }}',
              columns: [
                  { data: 'nama_sekolah', name: 'nama_sekolah' },
                  { data: 'jurusan', name: 'jurusan' },
                  { data: 'jumlah_siswa', name: 'jumlah_siswa' },
                  { data: 'action', name: 'action', orderable: false, searchable: false },
              ]
          });


          $('#student-table').DataTable({
              processing: true,
              serverSide: true,
              ajax: '{{ route("students.datatable") }}',
              columns: [
                  { data: 'nisn', name: 'nisn' },
                  { data: 'nama', name: 'nama' },
                  { data: 'sekolah', name: 'sekolah' },
                //   { data: 'jumlah_siswa', name: 'jumlah_siswa' },
                //   { data: 'action', name: 'action', orderable: false, searchable: false },
              ]
          });
      });

  </script>
</body>
</html>
