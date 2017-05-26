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
            <form role="form" action="{{ route('tambah') }}" method="post">
                {{csrf_field()}}
              <div class="box-body">
                <h3> Add Obat</h3>
                <div class="form-group">
                  <label for="inputUsername">ID Medicine:</label>
                  <input type="text" class="form-control" id="idmedicine" name="idmedicine" placeholder="Enter ID Medicine">
                </div>
                <div class="form-group">
                  <label for="inputName">Name:</label>
                  <input type="text" class="form-control" id="name" name="name" placeholder="Enter Medicine Name">
                </div>
                <div class="form-group">
                  <label for="inputAddress">Stock:</label>
                  <input type="text" class="form-control" id="stock" name="stock" placeholder="Enter Medicine Stock">
                </div>
                <div class="form-group">
                  <label for="inputOwner">Price:</label>
                  <input type="text" class="form-control" id="price" name="price" placeholder="Enter Medicine Price">
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
              <label>Obat</label>
              <table id="pharmacy" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>ID MEDICINE</th>
                  <th>NAME</th>
                  <th>STOCK</th>
                  <th>PRICE</th>
                  <!-- <th>Phone</th>
                  <th>Photo</th>
                  <th>Info</th>
                  <th>Operational</th> -->
                </tr>
                </thead>
                <tbody>
                    @foreach($medicine as $medicines)
                <tr>
                    <td>{{$medicines->ID_MEDICINE}}</td>
                    <td>{{$medicines->NAME}}</td>
                    <td>{{$medicines->STOCK}}</td>
                    <td>{{$medicines->PRICE}}</td>                   
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
