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
<!-- Jumbotron -->
<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4"><img src="https://sman2mojokerto.sch.id/templates/core/img/logo.png" alt="" 
    width="150" height="150"><br>SMA NEGERI 2 KOTA MOJOKERTO <br><br><span>Menjadi Sekolah Unggul dalam Imtaq, 
    Iptek, Budi Pekerti, Peduli Lingkungan dan Berwawasan Internasional</span></h1>
  </div>
</div>
<!-- Akhir Jumbotron -->
<!-- Container -->
<div class="container">
  <!-- Info Panel -->
  <div class="row justify-content-center">
    <div class="col-5 info-panel">
      <div class="row">
        <div class="col">
        <h4>HUBUNGI KAMI</h4>
          <p>Untuk menghubungi technical service SMA NEGERI 2 KOTA MOJOKERTO tentang apapun</p>
        </div>
      </div>
    </div>
  </div>
  <!-- Akhir Panel -->


<div class="container">
  @if(session('berhasil'))
  <div class="alert alert-success" role="alert">
    <h4 class="alert-heading">Well done!</h4>
    {{session('berhasil')}}
  </div>
  @endif
  <div class="row">
    <div class="col-12">
      <h1>Data Fasilitas</h1>
    </div> 
    <button type="button" class="btn btn-primary btn-sm float-left" data-toggle="modal" 
    data-target="#exampleModal">
        Tambah
        </button>
    <table class="table">
    <thead class="thead-light">
      <tr>
        <th scope="col">Nama Alat</th>
        <th scope="col">Jumlah</th>
        <th scope="col">Kondisi</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
    @foreach($fasilitas as $perlengkapan)
    <tr>
      <td>{{$perlengkapan->nama_alat}}</td>
      <td>{{$perlengkapan->jumlah}}</td>
      <td>{{$perlengkapan->kondisi}}</td>
      <td>
        <a href="/Fasilitas/{{$perlengkapan->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
        <a href="/Fasilitas/{{$perlengkapan->id}}/delete" class="btn btn-danger btn-sm" 
        onclick="return confirm('Anda yakin ingin menghapus?')">Hapus</a>
      </td>
    </tr>
    </tbody>
    @endforeach
    </table>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" 
        aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Data Fasilitas</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                        <form action="/tambah" method="POST">
                            {{csrf_field()}}
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nama Alat</label>
                            <input name="nama_alat" type="text" class="form-control" id="exampleInputEmail1" 
                            aria-describedby="emailHelp" placeholder="Nama Alat">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Jumlah</label>
                            <input name="jumlah" type="text" class="form-control" id="exampleInputEmail1"
                             aria-describedby="emailHelp" placeholder="Jumlah">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Kondisi</label>
                            <input name="kondisi" type="text" class="form-control" id="exampleInputEmail1"
                            aria-describedby="emailHelp" placeholder="Kondisi">
                        </div>
                        
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                        </div>
                        </div>
                    </div>
            </div>

<!-- Footer -->
<footer>
<ul class="list-inline">
  <li class="list-inline-item">TENTANG KAMI
  <p>Sekolah Menengah Atas Negeri bertaraf internasional yang biasa disebut Buwitashakti</br></p></li>
  <li class="list-inline-item">GET SOCIAL
  <p><a href="https://web.facebook.com/officialsman2mojokerto/"><img src="https://img.icons8.com/doodle/240/000000/facebook-new.png" width="30" height="30"/></a> &nbsp; 
  <a href=""><img src="https://img.icons8.com/doodle/240/000000/youtube-play--v2.png" width="30" height="30"/></a> &nbsp;
  <a href="https://www.instagram.com/sman2mojokerto/"><img src="https://img.icons8.com/doodle/240/000000/instagram--v1.png" width="30" height="30"/></a></p></li>
  <li class="list-inline-item col-10">CONTACT INFO
  <p><img src="https://img.icons8.com/doodle/96/000000/google-maps-new.png" width="30" height="30"/> &nbsp; JALAN RAYA IJEN NO. 9, WATES, MAGERSARI, KOTA MOJOKERTO 61317<br><br>
  <img src="https://img.icons8.com/doodle/96/000000/ringing-phone.png" width="30" height="30"/> &nbsp; (0321) 321505<br><br>
  <img src="https://img.icons8.com/doodle/96/000000/gmail.png" width="30" height="30"/> &nbsp; INFO@SMAN2MOJOKERTO.SCH.ID</p></li>
</ul>
</div>
</footer>
</div>
<!-- Akhir Container -->



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>
