<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
@extends('layouts.master')
@section('content')
 
            
<div class="main">
    <div class="main-content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="panel">
              <div class="panel-heading">
                <section class="section">
                  <div class="section-header">
                    <h2>Manage Data Ikan</h2>
                  </div>
                </section>
                @if( $message = Session::get('success'))
                  <div class="alert alert-success">
                    <strong>{{$message}}</strong>
                  </div>
                @endif
                <div class="col-md-12">
                <div class="panel-body">
                 <a href="/ikan/create" class="btn fa fa-plus btn-primary" ><i class="for "></i>Tambah Data Ikan</a> 
              <table id="myTable">
                    <thead>
                      <tr>
                        <th>Nama Ikan</th>
                        <th>Harga Ikan</th>
                        <th>Penjual</th>
                        <th>Tanggal Beli</th>
                        <th>Foto</th>
                        <th>Aksi</th>
                  </tr>
                    </thead>
                   <tbody>
       
            @foreach($ikan as $ikan)
                <tr >
                        <td>{{$ikan->nama}}</td>
                        <td>Rp. {{number_format($ikan->harga,0) }}</td>
                        <td>{{$ikan->penjual}}</td>
                        <td>{{ date('d F Y',strtotime($ikan->tanggal)) }}</td>
                        <td><img src="{{ asset($ikan->image) }}" class="img-fluid" style="width: 100px"></td>
                        <td>
                            <a href="/ikan/{{$ikan->id}}/edit" class="btn btn-warning">Edit</a>
                            <a href="/ikan/{{$ikan->id}}/delete" class="btn btn-danger btn-sm" onclick ="return confirm('yakin akan menghapus data?')">Hapus</a>
                        </td>
                </tr>
             @endforeach
            </tbody>
       
    </table>
</div> <!-- container / end -->


</body>
@stop
