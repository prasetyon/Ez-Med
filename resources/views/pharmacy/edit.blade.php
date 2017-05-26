@extends('layouts.backend-pharmacy')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Pharmacy List
      </h1>
      <ol class="breadcrumb">
        <li><i class="fa fa-dashboard"></i> Home</li>
        <li>Pharmacy</li>
        <li class="active">Pharmacy List</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <section class="col-lg-6">
        <div class="box box-primary">
            
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="{{ route('phareditinfo') }}" method="post">
                {{csrf_field()}}
              <div class="box-body">
                <h3> Edit Pharmacy Information</h3>
                <div class="form-group">
                  <label style="font-size: 20px">SIA:</label>
                  <label style="font-size: 20px">{{ $pharmacy[0]->SIA }}</label>
                </div>
                <div class="form-group">
                  <label for="inputName">Name:</label>
                  <input type="text" class="form-control" id="name" name="name" value="{{ $pharmacy[0]->NAME }}">
                </div>
                <div class="form-group">
                  <label for="inputAddress">Address:</label>
                  <input type="text" class="form-control" id="address" name="address" value="{{ $pharmacy[0]->ADDRESS }}">
                </div>
                <div class="form-group">
                  <label for="inputOwner">Owner:</label>
                  <input type="text" class="form-control" id="owner" name="owner" value="{{ $pharmacy[0]->OWNER }}">
                </div>
                <div class="form-group">
                  <label for="inputPhone">Phone:</label>
                  <input type="text" class="form-control" id="phone" name="phone" value="{{ $pharmacy[0]->PHONE }}">
                </div>
                <!-- <div class="form-group">
                  <label for="inputPhoto">Photo:</label>
                  <input type = "file" name = "photo" class = "box"/>
                  <input type = "submit" value = "Upload"/>
                </div> -->
                <div class="form-group">
                  <label for="inputInfo">info:</label>
                  <input type="text" class="form-control" id="info" name="info" value="{{ $pharmacy[0]->INFO }}">
                </div>
                <div class="form-group">
                  <label for="inputOperational">Operational:</label>
                  <input type="text" class="form-control" id="operational" name="operational" value="{{ $pharmacy[0]->OPERATIONAL }}">
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="reset" class="btn btn-default">Reset</button>
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
        </section>  
      
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
    $('#pharmacy').DataTable({
          "paging": true,
          "lengthChange": true,
          "searching": true,
          "ordering": true,
          "info": true,
          "autoWidth": true
    });
});
</script>
