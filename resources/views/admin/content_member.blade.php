@extends('admin/layout')

@section('admin',$admin->name)

@section('content')


<div class="row">
      <div class="col-md-12">
        <button class="btn btn-primary" onclick="add_member()">ADD DATA</button>
      </div>
</div>

<div class="row">
      <div class="col-md-12">
       
        <table class="table table-striped">
          <thead>
            <tr>
              <th>Foto</th>
              <th>Name</th>
              <th>Nim</th>
              <th>Dob</th>
              <th>Mobile</th>
              <th>E-mail</th>
            </tr>
          </thead>

          <tbody>
            
            @foreach($user as $user)
            
            <tr>
              <td>
                  <img src="{{ url('upload/'.$user->photo)}}" id="profil" alt="foto"  style="width: 50px">
              </td>

              <td>
                {{$user->name}}
              </td>

              <td>
                {{$user->nim}}
              </td>

              <td>
                {{$user->dob}}
              </td>

              <td>
                {{$user->mobile}}
              </td>

              <td>
                {{$user->email}}
              </td>

              <td>

                <button onclick="edit_member('{{$user->id}}','{{$user->name}}','{{$user->nim}}','{{$user->dob}}','{{$user->mobile}}','{{$user->email}}','{{$user->password}}')" class="btn btn-warning"><span class="glyphicon glyphicon-pencil"></span></button>

                <button onclick="hapus('{{$user->id}}')" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></button>
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
        <div class="modal fade" id="add_member">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Masukkan Data Member</h4>
              </div>
              <div class="modal-body">
                
                <form name="login1" action="{{ url('admin/member/add')}}" method="post" enctype="multipart/form-data">
                <div class="row">
                  <div class="col-md-2">Name</div>
                  <div class="col-md-10"><input type="text" name="name" style="width: 50%" required=""></div>
                </div>
                <br>
                <div class="row">
                  <div class="col-md-2">Nim</div>
                  <div class="col-md-10"><input type="text" name="nim" style="width: 50%" required=""></div>
                </div>
                <br>
                <div class="row">
                  <div class="col-md-2">Password</div>
                  <div class="col-md-10"><input type="password" name="pass" style="width: 50%" required=""></div>
                </div>
                <br>
                <div class="row">
                  <div class="col-md-2">email</div>
                  <div class="col-md-10"><input type="text" name="email" style="width: 50%" required=""></div>
                </div>
                <br>
                <div class="row">
                  <div class="col-md-2">dob</div>
                  <div class="col-md-10"><input type="text" name="dob" style="width: 50%" required=""></div>
                </div>
                <br>
                <div class="row">
                  <div class="col-md-2">mobile</div>
                  <div class="col-md-10"><input type="text" name="mobile" style="width: 50%" required=""></div>
                </div>
                <br>
                <div class="row">
                  <div class="col-md-2">Level</div>
                  <div class="col-md-10">
                    <select name="level">
                      <option value="official">official</option>
                      <option value="staff">staff</option>
                      <option value="member">member</option>    
                    </select>
                  </div>
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
        <div class="modal fade" id="edit_member">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Edita Data Headline</h4>
              </div>
              <div class="modal-body">
                <form name="form_edit_member" action="{{ url('admin/member/edit')}}" method="post" enctype="multipart/form-data">
                  <div class="col-md-12"><input type="hidden" name="Id"></div>
                <div class="row">
                  <div class="col-md-2">Name</div>
                  <div class="col-md-10"><input type="text" name="name" style="width: 50%" required=""></div>
                </div>
                <br>
                <div class="row">
                  <div class="col-md-2">Nim</div>
                  <div class="col-md-10"><input type="text" name="nim" style="width: 50%" required=""></div>
                </div>
                <br>
                <div class="row">
                  <div class="col-md-2">Password</div>
                  <div class="col-md-10"><input type="password" name="pass" style="width: 50%" required=""></div>
                </div>
                <br>
                <div class="row">
                  <div class="col-md-2">email</div>
                  <div class="col-md-10"><input type="text" name="email" style="width: 50%" required=""></div>
                </div>
                <br>
                <div class="row">
                  <div class="col-md-2">dob</div>
                  <div class="col-md-10"><input type="text" name="dob" style="width: 50%" required=""></div>
                </div>
                <br>
                <div class="row">
                  <div class="col-md-2">mobile</div>
                  <div class="col-md-10"><input type="text" name="mobile" style="width: 50%" required=""></div>
                </div>
                <br>
                <div class="row">
                  <div class="col-md-2">Level</div>
                  <div class="col-md-10">
                    <select name="level">
                      <option value="official">official</option>
                      <option value="staff">staff</option>
                      <option value="member">member</option>    
                    </select>
                  </div>
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
        <div class="modal fade" id="delete_member">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Delete Data</h4>
              </div>
              <div class="modal-body">
                <form name="form_delete_member" action="{{ url('admin/member/delete')}}" method="post" enctype="multipart/form-data">
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
        function add_member()
            {
              $('#add_member').modal('show');
            }
        function edit_member(id,name,nim,dob,mobile,email,pass)
            {
              document.forms['form_edit_member']['name'].value=name;
              document.forms['form_edit_member']['nim'].value=nim;
              document.forms['form_edit_member']['dob'].value=dob;
              document.forms['form_edit_member']['mobile'].value=mobile;
              document.forms['form_edit_member']['email'].value=email;
              document.forms['form_edit_member']['Id'].value=id;
              document.forms['form_edit_member']['pass'].value=pass;
                $('#edit_member').modal('show');
            }
        function hapus(id)
          {
              document.forms['form_delete_member']['Id'].value=id;
              $('#delete_member').modal('show');
          }
    </script>

@endsection