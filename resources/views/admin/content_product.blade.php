@extends('admin/layout')

@section('admin',$admin->name)

@section('content')


<div class="row">
      <div class="col-md-12">
        <button class="btn btn-primary" onclick="add_product()">ADD DATA</button>
      </div>
</div>

<div class="row">
      <div class="col-md-12">
       
        <table class="table table-striped">
          <thead>
            <tr>
              <th>Foto</th>
              <th>Name</th>
              <th>link</th>
            </tr>
          </thead>

          <tbody>
            
            @foreach($product as $product)
            
            <tr>
              <td>
                  <img src="{{ url('upload/'.$product->photo)}}" id="profil" alt="foto"  style="width: 50px">
              </td>

              <td>
                {{$product->name}}
              </td>

              <td>
                {{$product->link}}
              </td>

			  <td>
                <button onclick="edit_product('{{$product->id}}','{{$product->name}}','{{$product->link}}')" class="btn btn-warning"><span class="glyphicon glyphicon-pencil"></span></button>

                <button onclick="hapus('{{$product->id}}')" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></button>
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
        <div class="modal fade" id="add_product">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Masukkan Data Member</h4>
              </div>
              <div class="modal-body">
                
                <form name="login1" action="{{ url('admin/product/add')}}" method="post" enctype="multipart/form-data">
                <div class="row">
                  <div class="col-md-2">Name</div>
                  <div class="col-md-10"><input type="text" name="name" style="width: 50%" required=""></div>
                </div>
                <br>
                <div class="row">
                  <div class="col-md-2">Link</div>
                  <div class="col-md-10"><input type="text" name="link" style="width: 50%" required=""></div>
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
        <div class="modal fade" id="edit_product">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Edita Data Headline</h4>
              </div>
              <div class="modal-body">
                <form name="form_edit_product" action="{{ url('admin/product/edit')}}" " method="post" enctype="multipart/form-data">
                  <div class="col-md-12"><input type="hidden" name="Id"></div>
                <div class="row">
                  <div class="col-md-2">Name</div>
                  <div class="col-md-10"><input type="text" name="name" style="width: 50%" required=""></div>
                </div>
                <br>
                <div class="row">
                  <div class="col-md-2">Link</div>
                  <div class="col-md-10"><input type="text" name="link" style="width: 50%" required=""></div>
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
        <div class="modal fade" id="delete_product">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Delete Data</h4>
              </div>
              <div class="modal-body">
                <form name="form_delete_product" action="{{ url('admin/product/delete')}}" method="post" enctype="multipart/form-data">
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
        function add_product()
            {
              $('#add_product').modal('show');
            }
        function edit_product(id,name,link)
            {
              document.forms['form_edit_product']['name'].value=name;
              document.forms['form_edit_product']['link'].value=link;
              document.forms['form_edit_product']['Id'].value=id;
                $('#edit_product').modal('show');
            }
        function hapus(id)
          {
              document.forms['form_delete_product']['Id'].value=id;
              $('#delete_product').modal('show');
          }
    </script>


@endsection