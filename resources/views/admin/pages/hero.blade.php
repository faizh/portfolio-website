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
              <li class="breadcrumb-item active">Hero</li>
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
                <h3 class="card-title">Setup your Heros's</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-default">Add Hero Attributes</button>
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th width="10%">No</th>
                    <th width="20%">Attribute Name</th>
                    <th width="55%">Attribute Value</th>
                    <th width="25%">Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach ($data as $key => $value)
                    <tr>
                      <td><?= $key + 1; ?></td>
                      <td><?= $value->attribute_name ?></td>
                      <td><?= $value->attribute_value ?></td>
                      <td>
                        <button class="btn btn-sm btn-warning" onclick="editAttr('<?= $value->id ?>')">Edit</button>
                        <button class="btn btn-sm btn-danger" onclick="deleteAttr('<?= $value->id ?>')">Delete</button>

                        <input type="hidden" value="{{ $value->attribute_name }}" id="attr_name-{{ $value->id }}">
                        <input type="hidden" value="{{ $value->attribute_value }}" id="attr_value-{{ $value->id }}">
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
              <h4 class="modal-title">Add Attributes</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form action="{{ route('admin.hero.create') }}" method="post">
                @csrf
                <div class="form-group">
                  <label for="exampleInputEmail1">Attribute Name</label>
                  <input type="text" class="form-control" id="attr_name" placeholder="Enter Attribute Name" name="attr_name" required>
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Attribute Value</label>
                  <input type="text" class="form-control" id="attribute_value" placeholder="Enter Attribute Value" name="attr_value" required>
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
              <h4 class="modal-title">Edit Attributes</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form action="/admin/menu/hero/update" method="post" id="form-edit">
                @csrf

                <div class="form-group">
                  <label for="exampleInputEmail1">Attribute Name</label>
                  <input type="text" class="form-control" id="attr_name-edit" placeholder="Enter Attribute Name" name="attr_name" required>
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Attribute Value</label>
                  <input type="text" class="form-control" id="attr_value-edit" placeholder="Enter Attribute Value" name="attr_value" required>
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
              Apakah anda yakin untuk menghapus Attribute : <b><span id="attrNameToBeDeleted"></span></b> 
              Dengan value : <span id="attrValueToBeDeleted"></span>
              <input type="hidden" id="attrIdToBeDeleted">
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
    function deleteAttr(attrId){
      var attr_name = document.getElementById("attr_name-"+attrId).value;
      var attr_value = document.getElementById("attr_value-"+attrId).value;
      $('#modal-delete').modal('toggle');
      
      document.getElementById("attrNameToBeDeleted").innerHTML  = attr_name;
      document.getElementById("attrValueToBeDeleted").innerHTML  = attr_value;
      document.getElementById("attrIdToBeDeleted").value = attrId;
    }

    function editAttr(attrId){
      $('#modal-edit').modal('toggle');

      var updateUrl = "{{ route('admin.hero.update', ':attrId') }}";
      updateUrl     = updateUrl.replace(":attrId", attrId);

      document.getElementById('form-edit').action = updateUrl;
      
      $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
      });

      var getUrl = "{{ route('admin.hero.show', ':attrId') }}";
      getUrl     = getUrl.replace(":attrId", attrId);

      $.ajax({
           type:'GET',
           url:getUrl,
           data:{id:attrId},
           success:function(data){
            document.getElementById("attr_name-edit").value = data.attrName;
            document.getElementById("attr_value-edit").value = data.attrValue; 
           }
        });
    }

    function actionDelete(){
      document.getElementById("btn-delete").disabled = true
      var attrId       = document.getElementById("attrIdToBeDeleted").value;
      var routeDelete = "{{ route('admin.hero.delete', ':attrId') }}";
      routeDelete     = routeDelete.replace(":attrId", attrId);

      window.location = routeDelete;

      $('#modal-delete').modal('toggle');

    }
  </script>
  
@stop