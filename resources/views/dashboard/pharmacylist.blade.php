@extends('layouts.backend')

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
            <form role="form" action="{{route('pharmacy.store')}}" method="post">
                {{csrf_field()}}
                <!-- {{csrf_field()}} -->
              <div class="box-body">
                <h3> Register New Pharmacy</h3>
                <div class="form-group">
                  <label for="inputUsername">SIA:</label>
                  <input type="text" class="form-control" id="sia" name="sia" placeholder="Enter SIA">
                </div>
                <div class="form-group">
                  <label for="inputName">Name:</label>
                  <input type="text" class="form-control" id="name" name="name" placeholder="Enter name">
                </div>
                <div class="form-group">
                  <label for="inputAddress">Address:</label>
                  <input type="text" class="form-control" id="address" name="address" placeholder="Enter address">
                </div>
                <div class="form-group">
                  <label for="inputOwner">Owner:</label>
                  <input type="text" class="form-control" id="owner" name="owner" placeholder="Enter owner">
                </div>
                <div class="form-group">
                  <label for="inputPhone">Phone:</label>
                  <input type="text" class="form-control" id="phone" name="phone" placeholder="Enter phone">
                </div>
                <div class="form-group">
                  <label for="inputPhoto">Photo:</label>
                  <input type = "file" name = "photo" class = "box"/>
                  <input type = "submit" value = "Upload"/>
                </div>
                <div class="form-group">
                  <label for="inputInfo">info:</label>
                  <input type="text" class="form-control" id="info" name="info" placeholder="Enter info">
                </div>
                <div class="form-group">
                  <label for="inputOperational">Operational:</label>
                  <input type="text" class="form-control" id="operational" name="operational" placeholder="Enter operational">
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
          
        <section class="col-lg-6">
        <div class="box box-primary">
            <div class="box-body">
              <label>Pharmacy</label>
              <table id="pharmacy" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>SIA</th>
                  <th>Name</th>
                  <th>Owner</th>
                  <th>Address</th>
                  <!-- <th>Phone</th>
                  <th>Photo</th>
                  <th>Info</th>
                  <th>Operational</th> -->
                </tr>
                </thead>
                <tbody>
                    @foreach($pharmacy as $pharmacies)
                <tr>
                    <td>{{$pharmacies->SIA}}</td>
                    <td>{{$pharmacies->NAME}}</td>
                    <td>{{$pharmacies->OWNER}}</td>
                    <td>{{$pharmacies->ADDRESS}}</td>
                    <!-- <td>{{$pharmacies->PHONE}}</td>
                    <td><img src="{{$pharmacies->PHOTO}}" width="150px" height="150px"></td>
                    <td>{{$pharmacies->INFO}}</td>
                    <td>{{$pharmacies->OPERATIONAL}}</td> -->
                </tr>
                    @endforeach
                </tbody>
              </table>
            </div>
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
