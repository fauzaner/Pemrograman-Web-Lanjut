<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
     integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
     integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <link rel="stylesheet" href="css/Fasilitas.css">
    <title>SMA NEGERI 2 KOTA MOJOKERTO</title>
  </head>
  <body>
    <!--Navbar-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">  
  <a class="navbar-brand" href="#">
  <img src="https://sman2mojokerto.sch.id/templates/core/img/logo.png" alt="" width="30" height="30" 
  class="d-inline-block align-top">
    SMA NEGERI 2 KOTA MOJOKERTO
    </a>  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" 
  aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav ml-auto">
      <a class="nav-item nav-link" href="/Page">Home <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link active" href="/Fasilitas">Fasilitas</a>
      <a class="nav-item nav-link" href="/Gallery">Informasi</a>
      <a class="nav-item nav-link" href="/About">Contact</a>
    </div>
  </div>
  </div>
</nav>
<!--Akhir Navbar-->

<div class="container">
<h1 align='center'>Edit Fasilitas</h1>
  @if(session('berhasil'))
  <div class="alert alert-success" role="alert">
    <h4 class="alert-heading">Well done!</h4>
    {{session('berhasil')}}
  </div>
  @endif
  <div class="row">
    <div class="col-lg-12">
  <form action="/Fasilitas/{{$fasilitas->id}}/update" method="POST">
    {{csrf_field()}}
    <div class="form-group">
    <label for="exampleInputEmail1">Nama Alat</label>
    <input name="nama_alat" type="text" class="form-control" id="exampleInputEmail1" 
    aria-describedby="emailHelp" placeholder="Nama Alat" value="{{$fasilitas->nama_alat}}">
    </div>

    <div class="form-group">
        <label for="exampleInputEmail1">Jumlah</label>
        <input name="jumlah" type="text" class="form-control" id="exampleInputEmail1"
        aria-describedby="emailHelp" placeholder="Jumlah" value="{{$fasilitas->jumlah}}">
    </div>

    <div class="form-group">
        <label for="exampleInputEmail1">Kondisi</label>
        <input name="kondisi" type="text" class="form-control" id="exampleInputEmail1"
        aria-describedby="emailHelp" placeholder="Kondisi" value="{{$fasilitas->kondisi}}">
    </div>
    <button type="submit" class="btn btn-warning">Update</button>
    </form>
    </div>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/
X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
 integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" 
 crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" 
integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" 
crossorigin="anonymous"></script>

</body>
</html>
