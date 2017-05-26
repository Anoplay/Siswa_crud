@extends('app')
@section('content')
<div class="row">
  <div class="col-md-6 col-md-offset-3">
    <div class="page-header">
      <h3>View Siswa</h3>
    </div>
    <table>
      <tr>
        <td width="200px">Nama</td>
        <td width="200px">Jurusan</td>
        <td><p align="center">aksi</p></td>
      </tr>
      @foreach($siswa as $sis)
      <tr>
        <td>{{$sis->nama}}</td>
        <td>{{$sis->jurusan}}</td>
        <td><a class="btn btn-primary" href="{{url($sis->id.'/edit/')}}">edit</a><a class="btn btn-primary" href="{{url($sis->id.'/delete/')}}">delete</a></td>
      </tr>
      @endforeach
    </table>
      <!-- <div class="form-group">
        @foreach($siswa as $sis)
        <article>
          <h2>{{$sis->nama}}</h2>
          <p>{{$sis->jurusan}}</p>
        </article>
        @endforeach
       -->  
  </div>
  <a href="{{url('/create')}}">Create siswa baru</a>
</div>
@endsection