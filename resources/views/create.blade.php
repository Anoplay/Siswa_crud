@extends('app')
@section('content')
<div class="row">
  <div class="col-md-6 col-md-offset-3">
    <div class="page-header">
      <h3>Tambah Siswas</h3>
    </div>
    <form  action="/create" method="post">
      {{csrf_field()}}
      <div class="form-group">
        <div class="row">
<!--           <div class="col-md-6">
            <label for="nis" class="label-control">NIS</label>
            <input type="text" name="nis" id="nis" class="form-control">
          </div> -->
          <div class="col-md-6">
            <label for="nama" class="label-control">Nama Lengkap</label>
            <input type="text" name="nama" id="nama" class="form-control" required>
          </div>
        </div>
      </div>
      <div class="form-group">
          <label for="jurusan" class="label-control">Jurusan</label>
            <input type="text" name="jurusan" id="jurusan" class="form-control" required ">
      </div>
      <div class="form-group">
        <button type="submit" class="btn btn-success">Simpan</button>
      </div>
    </form>
  </div>       
  <a href="{{url('/show')}}">view</a>
</div>
@endsection