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
                    <h2>Tambah Data Ikan</h2>
                  </div>
               
                @if( $message = Session::get('success'))
                  <div class="alert alert-success">
                    <strong>{{$message}}</strong>
                  </div>
                @endif
                <div class="col-md-12">
                <div class="panel-body">
                 
              <div class="modal-body">
                <form action="/ikan/post" method="POST" enctype="multipart/form-data">
              {{csrf_field()}}
  
              <div class="form-group">
                <label for="exampleInputEmail1">Nama Ikan</label>
                <input name="nama"type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required="">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Harga Ikan</label>
                <input name="harga"type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required="">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Penjual Ikan</label>
                <input name="penjual"type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required="">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Tanggal Pembelian</label>
                <input name="tanggal"type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required="">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Foto Ikan</label>
                <input name="image"type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required="">
              </div>
   
   
 
<div class="modal-footer">
  <a href="/ikan" class="btn btn-danger">Kembali</a>
  <button type="submit" class="btn btn-primary">Submit</button>


</form>

</div> <!-- container / end -->

 </section>
</body>
@stop