@extends('admin/layout')

@section('admin',$admin->name)

@section('content')

<div class="row">
      <div class="col-md-12">
        <button class="btn btn-primary" onclick="add_blog()">ADD DATA</button>
      </div>
</div>

<div class="row">
      <div class="col-md-12">
       
        <table class="table table-striped">
          <thead>
            <tr>
              <th>Foto</th>
              <th>Title</th>
              <th>Description</th>
              <th>Link Youtube</th>
            </tr>
          </thead>

          <tbody>
            
            @foreach($blog as $blog)
            
            <tr>
              <td>
                  <img src="{{ url('upload/'.$blog->photo)}}" id="profil" alt="foto"  style="width: 50px">
              </td>

              <td>
                {{$blog->title}}
              </td>

              <td>
                {{$blog->description}}
              </td>

              <td>
                {{$blog->youtube}}
              </td>

              <td>

                <button onclick="edit_blog('{{$blog->id}}','{{$blog->title}}','{{$blog->description}}','{{$blog->youtube}}')" class="btn btn-warning"><span class="glyphicon glyphicon-pencil"></span></button>

                <button onclick="hapus('{{$blog->id}}')" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></button>
              </td>
            
            </tr>
            
            @endforeach

          </tbody>
        </table>
      </div>
    </div>

  </div>







    <!-- pop up tambah data member yang akan di tampilkan -->
     <div class="container">
        <!-- Modal -->
        <div class="modal fade" id="add_blog">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Masukkan Data Member</h4>
              </div>
              <div class="modal-body">
                
                <form name="login1" action="{{url('admin/blog/add')}}" method="post" enctype="multipart/form-data">
                <div class="row">
                  <div class="col-md-2">Title</div>
                  <div class="col-md-10"><input type="text" name="title" style="width: 50%" required=""></div>
                </div>
                <br>
                <div class="row">
                  <div class="col-md-2">Youtube</div>
                  <div class="col-md-10"><input type="text" name="youtube" style="width: 50%" required=""></div>
                </div>
                <br>
                <div class="row">
                  <div class="col-md-2">Description</div>
                  <div class="col-md-10"><textarea name="description"cols="65" rows="10" required=""></textarea></div>
                </div>
                <br>
                <div class="row">
                  <div class="col-md-2">Foto</div>
                  <div class="col-md-10"><input type="file" name="Foto" required=""></div>
                </div>
                <br>
              <div class="modal-footer">
                <input type="button" class="btn btn-default" data-dismiss="modal" value="TUTUP">
                <input type="submit" class="btn btn-primary" value="SIMPAN">
              </div>
                {{csrf_field()}}
                </form>
              </div>
            </div><!--modal-content-->
          </div><!--modal-dialog-->
        </div><!--modal-->
    </div><!--container-->
    <!-- akhir pop up -->






    <!-- pop up edit data member yang akan di tampilkan -->
     <div class="container">
        <!-- Modal -->
        <div class="modal fade" id="edit_blog">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Edita Data Headline</h4>
              </div>
              <div class="modal-body">
                <form name="form_edit_blog" action="{{url('admin/blog/edit')}}" method="post" enctype="multipart/form-data">
                  <div class="col-md-12"><input type="hidden" name="Id"></div>
                <div class="row">
                  <div class="col-md-2">Title</div>
                  <div class="col-md-10"><input type="text" name="title" style="width: 50%" required=""></div>
                </div>
                <br>
                <div class="row">
                  <div class="col-md-2">Youtube</div>
                  <div class="col-md-10"><input type="text" name="youtube" style="width: 50%" required=""></div>
                </div>
                <br>
                <div class="row">
                  <div class="col-md-2">Description</div>
                  <div class="col-md-10"><textarea name="description" cols="65" rows="10" required=""></textarea></div>
                </div>
                <br>
                <div class="row">
                  <div class="col-md-2">Foto</div>
                  <div class="col-md-10"><input type="file" name="Foto" required=""></div>
                </div>
                <br>
              <div class="modal-footer">
                <input type="button" class="btn btn-default" data-dismiss="modal" value="TUTUP">
                <input type="submit" class="btn btn-primary" value="SIMPAN">
              </div>
                {{csrf_field()}}
                <input type="hidden" name="_method" value="PUT">
                </form>
              </div>
            </div><!--modal-content-->
          </div><!--modal-dialog-->
        </div><!--modal-->
    </div><!--container-->
    <!-- akhir pop up -->



    <!-- pop up delete data member yang akan di tampilkan -->
     <div class="container">
        <!-- Modal -->
        <div class="modal fade" id="delete_blog">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Delete Data</h4>
              </div>
              <div class="modal-body">
                <form name="form_delete_blog" action="{{url('admin/blog/delete')}}" method="post" enctype="multipart/form-data">
                  <div class="col-md-12"><input type="hidden" name="Id"></div>
                  <p>Apakah anda yakin ingin menghapus data ini ?</p>
                    <br>
                  <div class="modal-footer">
                    <input type="button" class="btn btn-default" data-dismiss="modal" value="Tidak">
                    <input type="submit" class="btn btn-primary" value="Ya">
                  </div>
                  {{csrf_field()}}
                  <input type="hidden" name="_method" value="DELETE">
                </form>
              </div>
            </div><!--modal-content-->
          </div><!--modal-dialog-->
        </div><!--modal-->
    </div><!--container-->
    <!-- akhir pop up -->


    <!-- Fungsi Untuk menampilkan PopUp -->
    <script>
        function add_blog()
            {
              $('#add_blog').modal('show');
            }
        function edit_blog(id,title,description,youtube)
            {
              document.forms['form_edit_blog']['title'].value=title;
              document.forms['form_edit_blog']['description'].value=description;
              document.forms['form_edit_blog']['youtube'].value=youtube;
              document.forms['form_edit_blog']['Id'].value=id;
                $('#edit_blog').modal('show');
            }
        function hapus(id)
          {
              document.forms['form_delete_blog']['Id'].value=id;
              $('#delete_blog').modal('show');
          }
    </script>


@endsection