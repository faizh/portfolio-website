@extends('admin.includes.content')

@section('content')
<meta name="csrf-token" content="{{ csrf_token() }}" />

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>DataTables</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Navigation</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Setup your Navigation's</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-default">Add Navigation</button>
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Navigation</th>
                    <th>Href</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach ($data as $key => $value)
                    <tr>
                      <td><?= $key + 1; ?></td>
                      <td><?= $value->display_name ?></td>
                      <td><?= $value->href ?></td>
                      <td>
                        <button class="btn btn-sm btn-warning" onclick="editNav('<?= $value->nav_menu_id ?>')">Edit</button>
                        <button class="btn btn-sm btn-danger" onclick="deleteNav('<?= $value->nav_menu_id ?>')">Delete</button>

                        <input type="hidden" value="{{ $value->display_name }}" id="display_name-{{ $value->nav_menu_id }}">
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>

      <div class="modal fade" id="modal-default">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Default Modal</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form action="/admin/menu/navigation" method="post">
                @csrf
                <div class="form-group">
                  <label for="exampleInputEmail1">Navigation Name</label>
                  <input type="text" class="form-control" id="nav_name" placeholder="Enter Navigation Name" name="nav_name" required>
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Navigation Href</label>
                  <input type="text" class="form-control" id="nav_href" placeholder="Enter Navigation Href" name="href" required>
                </div>
              
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
          </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->

      <div class="modal fade" id="modal-edit">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Default Modal</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form action="/admin/menu/navigation/edit" method="post">
                @csrf
                <input type="hidden" class="form-control" id="nav_id-edit" name="nav_id">

                <div class="form-group">
                  <label for="exampleInputEmail1">Navigation Name</label>
                  <input type="text" class="form-control" id="nav_name-edit" placeholder="Enter Navigation Name" name="nav_name" required>
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Navigation Href</label>
                  <input type="text" class="form-control" id="nav_href-edit" placeholder="Enter Navigation Href" name="nav_href" required>
                </div>
              
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
          </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>

      <div class="modal fade" id="modal-delete">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Delete</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              Apakah anda yakin untuk menghapus Navigation <b><span id="navNameToBeDeleted"></span></b> ?
              <input type="hidden" id="navIdToBeDeleted">
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-danger" id="btn-delete" onclick="actionDelete()">Delete</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <script>
    function deleteNav(navId){
      var navName = document.getElementById("display_name-"+navId).value;
      $('#modal-delete').modal('toggle');
      
      document.getElementById("navNameToBeDeleted").innerHTML  = navName;
      document.getElementById("navIdToBeDeleted").value = navId;
    }

    function editNav(navId){
      $('#modal-edit').modal('toggle');
      
      $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
      });

      $.ajax({
           type:'POST',
           url:"{{ route('navigationDetails.post') }}",
           data:{nav_id:navId},
           success:function(data){
              document.getElementById("nav_id-edit").value = data.navID;
              document.getElementById("nav_name-edit").value = data.navName;
              document.getElementById("nav_href-edit").value = data.navHref; 
           }
        });
    }

    function actionDelete(){
      document.getElementById("btn-delete").disabled = true
      var navId       = document.getElementById("navIdToBeDeleted").value;
      var routeDelete = "{{ route('navigation.delete', ':navId') }}";
      routeDelete     = routeDelete.replace(":navId", navId);

      window.location = routeDelete;

      $('#modal-delete').modal('toggle');

    }
  </script>
  
@stop