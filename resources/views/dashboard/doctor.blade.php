@extends('layouts.backend')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Doctor
      </h1>
      <ol class="breadcrumb">
        <li><i class="fa fa-dashboard"></i> Home</li>
        <li>Doctor</li>
        <li class="active">Doctor</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        
        <div class="col-md-12">
        <div class="box box-primary">
            <!-- /.box-header -->
            <div class="box-body">
            <h3>Doctor Information</h3>
              <table id="doctor" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>SIP</th>
                  <th>Name</th>
                  <th>Address</th>
                  <th>Phone</th>
                  <th>Photo</th>
                  <th>Info</th>
                  <th>Operational</th>
                </tr>
                </thead>
                <tbody>
                @foreach($doctor as $doctors)
                <tr>
                    <td>{{$doctors->SIP}}</td>
                    <td>{{$doctors->NAME}}</td>
                    <td>{{$doctors->ADDRESS}}</td>
                    <td>{{$doctors->PHONE}}</td>
                    <td><img src="{{$doctors->PHOTO}}" width="150px" height="150px"></td>
                    <td>{{$doctors->INFO}}</td>
                    <td>{{$doctors->OPERATIONAL}}</td>
                </tr>
                    @endforeach
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
        </div>

        </div>
    </section>
  </div>

@stop

<!-- jQuery 2.2.3 -->
<script src="admin/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="admin/bootstrap/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="admin/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="admin/plugins/datatables/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="admin/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="admin/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="admin/dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="admin/dist/js/demo.js"></script>
<!-- page script -->
<script>
$(function() {
    $('#doctor').DataTable({
          "paging": true,
          "lengthChange": true,
          "searching": true,
          "ordering": true,
          "info": true,
          "autoWidth": true
    });
  });
</script>
