@extends('admin/layout')

@section('admin',$admin->name)

@section('content')


<div class="row">
      <div class="col-md-12">
        <button class="btn btn-primary" onclick="add_event()">ADD DATA</button>
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
              <th>Date</th>
              <th>Tickets</th>
              <th>Quota</th>
            </tr>
          </thead>

          <tbody>
            
            @foreach($event as $event)
            
            <tr>
              <td>
                  <img src="{{ url('upload/'.$event->photo)}}" id="profil" alt="foto" style="width: 50px">
              </td>

              <td>
                {{$event->title}}
              </td>

              <td>
                {{$event->description}}
              </td>

              <td>
                {{$event->date}}
              </td>

              <td>
                {{$event->ticket}}
              </td>

              <td>
                {{$event->quota}}
              </td>

              <td>

                <button onclick="edit_event('{{$event->id}}','{{$event->title}}','{{$event->description}}','{{$event->date}}','{{$event->ticket}}','{{$event->quota}}')" class="btn btn-warning"><span class="glyphicon glyphicon-pencil"></span></button>

                <button onclick="delete_event('{{$event->id}}')" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></button>
              </td>
            
            </tr>
            
            @endforeach

          </tbody>
        </table>
      </div>
    </div>

  </div>



  


    <!-- pop up tambah data event yang akan di tampilkan -->
     <div class="container">
        <!-- Modal -->
        <div class="modal fade" id="add_event">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Masukkan Data Member</h4>
              </div>
              <div class="modal-body">
                
                <form name="login1" action="{{ url('admin/event/add')}}" method="post" enctype="multipart/form-data">
                <div class="row">
                  <div class="col-md-2">Title</div>
                  <div class="col-md-10"><input type="text" name="title" style="width: 50%" required=""></div>
                </div>
                <br>
                <div class="row">
                  <div class="col-md-2">Date</div>
                  <div class="col-md-10"><input type="text" name="date" style="width: 50%" required=""></div>
                </div>
                <br>
                <div class="row">
                  <div class="col-md-2">Ticket</div>
                  <div class="col-md-10"><input type="text" name="ticket" style="width: 50%" required=""></div>
                </div>
                <br>
                <div class="row">
                  <div class="col-md-2">Quota</div>
                  <div class="col-md-10"><input type="text" name="quota" style="width: 50%" required=""></div>
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


    <!-- pop up edit data event yang akan di tampilkan -->
     <div class="container">
        <!-- Modal -->
        <div class="modal fade" id="edit_event">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Masukkan Data Member</h4>
              </div>
              <div class="modal-body">
                
                <form name="form_edit_event" action="{{ url('admin/event/edit')}}" method="post" enctype="multipart/form-data">
                  <div class="col-md-12"><input type="hidden" name="Id"></div>
                <div class="row">
                  <div class="col-md-2">Title</div>
                  <div class="col-md-10"><input type="text" name="title" style="width: 50%" required=""></div>
                </div>
                <br>
                <div class="row">
                  <div class="col-md-2">Date</div>
                  <div class="col-md-10"><input type="text" name="date" style="width: 50%" required=""></div>
                </div>
                <br>
                <div class="row">
                  <div class="col-md-2">Ticket</div>
                  <div class="col-md-10"><input type="text" name="ticket" style="width: 50%" required=""></div>
                </div>
                <br>
                <div class="row">
                  <div class="col-md-2">Quota</div>
                  <div class="col-md-10"><input type="text" name="quota" style="width: 50%" required=""></div>
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
        <div class="modal fade" id="delete_event">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Delete Data</h4>
              </div>
              <div class="modal-body">
                <form name="form_delete_event" action="{{ url('admin/event/delete')}}" method="post" enctype="multipart/form-data">
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

        function add_event()
            {
              $('#add_event').modal('show');
            }
        function edit_event(id,title,description,date,ticket,quota)
            {
              document.forms['form_edit_event']['title'].value=title;
              document.forms['form_edit_event']['description'].value=description;
              document.forms['form_edit_event']['date'].value=date;
              document.forms['form_edit_event']['ticket'].value=ticket;
              document.forms['form_edit_event']['quota'].value=quota;
              document.forms['form_edit_event']['Id'].value=id;
                $('#edit_event').modal('show');
            }
        function delete_event(id){
              document.forms['form_delete_event']['Id'].value=id;
                $('#delete_event').modal('show');
        }
    </script>

@endsection