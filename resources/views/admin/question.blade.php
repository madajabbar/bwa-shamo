@extends('layouts.admin')

@section('content')
<div class="card">
    <div class="card-header">
      <h3 class="card-title">Tabel pertanyaan</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th width="20px">No</th>
          <th>Kategori</th>
          <th>Point</th>
          <th>Kategori</th>
          <th width="20px"></th>
          <th width="20px"></th>
        </tr>
        </thead>
        <tbody>
            @foreach ($question as $q)
                <tr>
                    <td>{{$loop->iteration }}</td>
                    <td>{{$q->question}}</td>
                    <td>{{$q->point}}</td>
                    <td>{{$q->categories->feeling}}</td>
                    <td>
                        <a type="button" data-toggle="modal" data-target="#update-{{$q->id}}" class="btn btn-warning">
                            Edit
                        </a>
                    </td>
                    <td>
                        <a href="/admin/pertanyaan/hapus/{{$q->id}}" class="btn btn-danger">
                            Hapus
                        </a>
                    </td>
                </tr>
                {{-- MODAL UPDATE --}}
                <div class="modal fade" id="update-{{$q->id}}" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-body">
                          <div class="card-box">

                            <h4 class="header-title mt-0 mb-3"><b>Edit Data Inventarisasi</b></h4>
                            <hr>
                            <form method="post" action="pertanyaan/edit/{{$q->id}}" data-parsley-validate novalidate >
                            {{ csrf_field() }}
                              <div class="form-group">
                                <label for="question">Pertanyaan</label>
                                <input name="question" type="text" class="form-control" placeholder="Ubah pertanyaan" value="{{$q->question}}">
                              </div>
                              <div class="form-group">
                                <label for="point">Point</label>
                                <input type="text" class="form-control" id="point" name="point" placeholder="Ubah Point" value="{{$q->point}}">
                              </div>
                              <div class="form-group">
                                  <label for="category_id">Kategori</label>
                                  <select name="category_id" id="category_id">
                                      @foreach ($category as $c)
                                      <option value="{{$c->id}}">{{$c->feeling}}</option>
                                      @endforeach
                                  </select>
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
      <h3 class="card-title">Pertanyaan</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form method="POST" action="{{url('admin/pertanyaan/simpan')}}" >
        {{ csrf_field() }}
      <div class="card-body">
        <div class="form-group">
          <label for="question">Pertanyaan</label>
          <input type="text" class="form-control" id="question" name="question" placeholder="Masukan kategori">
        </div>
        <div class="form-group">
          <label for="point">Point</label>
          <input type="text" class="form-control" id="point" name="point" placeholder="Masukan kategori">
        </div>
        <div class="form-group">
            <label for="category_id">Kategori</label>
            <select name="category_id" id="category_id">
                @foreach ($category as $c)
                <option value="{{$c->id}}">{{$c->feeling}}</option>
                @endforeach
            </select>
          </div>
      <!-- /.card-body -->
      <div class="card-footer">
        <button type="submit" class="btn btn-primary"  >Submit</button>
      </div>
    </form>
  </div>
@endsection
