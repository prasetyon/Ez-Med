@extends('layouts.backend')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Pharmacy
      </h1>
      <ol class="breadcrumb">
        <li><i class="fa fa-dashboard"></i> Home</li>
        <li>Pharmacy</li>
        <li class="active">Pharmacy</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        
        <div class="col-md-12">
        <div class="box box-primary">
            <!-- /.box-header -->
            <div class="box-body">
            <h3>Pharmacy Information</h3>
              <table id="pharmacy" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>SIA</th>
                  <th>Name</th>
                  <th>Owner</th>
                  <th>Address</th>
                  <th>Phone</th>
                  <th>Photo</th>
                  <th>Info</th>
                  <th>Operational</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td>SIA</td>
                  <td>Name</td>
                  <td>Owner</td>
                  <td>Address</td>
                  <td>Phone</td>
                  <td>Photo</td>
                  <td>Info</td>
                  <td>Operational</td>
                </tr>
                <tr>
                  <td>SIA</td>
                  <td>Name</td>
                  <td>Owner</td>
                  <td>Address</td>
                  <td>Phone</td>
                  <td>Photo</td>
                  <td>Info</td>
                  <td>Operational</td>
                </tr>
                <tr>
                  <td>SIA</td>
                  <td>Name</td>
                  <td>Owner</td>
                  <td>Address</td>
                  <td>Phone</td>
                  <td>Photo</td>
                  <td>Info</td>
                  <td>Operational</td>
                </tr>
                <tr>
                  <td>SIA</td>
                  <td>Name</td>
                  <td>Owner</td>
                  <td>Address</td>
                  <td>Phone</td>
                  <td>Photo</td>
                  <td>Info</td>
                  <td>Operational</td>
                </tr>
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
          "paging": false,
          "lengthChange": true,
          "searching": true,
          "ordering": true,
          "info": true,
          "autoWidth": true
    });
  });
</script>
