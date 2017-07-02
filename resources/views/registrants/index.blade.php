@extends('layouts.starter')
  <link rel="stylesheet" href="plugins/datatables/dataTables.bootstrap.css">
@section('stylesheet')

@endsection

@section('content')

<!-- Main content -->
<div class="row">
  <div class="col-xs-12">
    <div class="box">
      <div class="box-header">
        <h3 class="box-title">Daftar Semua Pendaftar Program</h3>
      </div>
      <!-- /.box-header -->
      <div class="box-body">
        <table id="example1" class="table table-bordered table-striped">
          <thead>
          <tr>
            <th>Nama Lengkap</th>
            <th>JK</th>
            <th>Nama Ayah/Ibu</th>
            <th>Alamat</th>
            <th>Seleksi Program</th>
            <th>Aksi</th>
          </tr>
          </thead>
          <tbody>
          <tr>
            <td><b>Dede Iskandar</b></td>
            <td>L</td>
            <td>Mahpudin / Iib</td>
            <td>Sukabumi</td>
            <td>BPB 3</td>
            <td><button type="button" class="btn btn-info btn-xs">Edit</button> | <button type="button" class="btn btn-danger btn-xs">Hapus</button></td>
          </tr>
          <tr>
            <td><b>Dede Iskandar</b></td>
            <td>L</td>
            <td>Mahpudin / Iib</td>
            <td>Sukabumi</td>
            <td>BPB 3</td>
            <td><button type="button" class="btn btn-info btn-xs">Edit</button> | <button type="button" class="btn btn-danger btn-xs">Hapus</button></td>
          </tr>
          </tbody>
          <tfoot>
          <tr>
            <th>Nama Lengkap</th>
            <th>Jenis Kelamin</th>
            <th>Nama Orang tua</th>
            <th>Alamat</th>
            <th>Seleksi Program</th>
            <th>Aksi</th>
          </tr>
          </tfoot>
        </table>
      </div>
      <!-- /.box-body -->
    </div>
    <!-- /.box -->
  </div>
  <!-- /.col -->
</div>
<!-- /.row -->

@endsection

@section('plugin')
<!-- DataTables -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables/dataTables.bootstrap.min.js"></script>
<!-- FastClick -->
<script src="plugins/fastclick/fastclick.js"></script>
@endsection

@section('script')
<!-- page script -->
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });
</script>
@endsection
