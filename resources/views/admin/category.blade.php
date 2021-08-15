@extends('layouts.admin')

@section('content')
<div class="card">
    <div class="card-header">
      <h3 class="card-title">Tabel kategori</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th width="20px">No</th>
          <th>Kategori</th>
          <th></th>
          <th></th>
        </tr>
        </thead>
        <tbody>
            @foreach ($category as $c)
                <tr>
                    <td>{{$loop->iteration }}</td>
                    <td>{{$c->feeling}}
                    </td>
                    <td>
                        <a type="button" data-toggle="modal" data-target="#update-{{$c->id}}" class="btn btn-warning">
                            Edit
                        </a>
                    </td>
                    <td>
                        <a href="/admin/kategori/hapus/{{$c->id}}" class="btn btn-danger">
                            Hapus
                        </a>
                    </td>
                </tr>
                {{-- MODAL UPDATE --}}
                <div class="modal fade" id="update-{{$c->id}}" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-body">
                          <div class="card-box">

                            <h4 class="header-title mt-0 mb-3"><b>Edit Data Inventarisasi</b></h4>
                            <hr>
                            <form method="post" action="kategori/edit/{{$c->id}}" data-parsley-validate novalidate >
                            {{ csrf_field() }}
                              <div class="form-group">
                                <label for="feeling">Kategori</label>
                                <input name="feeling" type="text" class="form-control" placeholder="Update kategori" >
                              </div>

                              <div class="form-group text-right mb-0">
                                <button class="btn btn-primary waves-effect waves-light mr-1" type="submit" value="Simpan">
                                  Submit
                                </button>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                              </div>
                            </form>
                          </div>
                        </div>

                      </div>
                    </div>
                  </div>
                  {{-- AKHIR MODAL UPDATE --}}
            @endforeach
        </tbody>
      </table>
    </div>
    <!-- /.card-body -->
  </div>

  <div class="card">
    <div class="card-header">
      <h3 class="card-title">Kategori</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form method="POST" action="{{url('admin/kategori/simpan')}}" >
        {{ csrf_field() }}
      <div class="card-body">
        <div class="form-group">
          <label for="feeling">Kategori</label>
          <input type="text" class="form-control" id="feeling" name="feeling" placeholder="Masukan kategori">
        </div>
      <!-- /.card-body -->
      <div class="card-footer">
        <button type="submit" class="btn btn-primary"  >Submit</button>
      </div>
    </form>
  </div>
@endsection
