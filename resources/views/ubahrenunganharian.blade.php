<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/dashboard.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">

    <title>SIFOREJA</title>
    <style>
        .form-floating{
        height: 80px;
        position: center;
        display: center;
        justify-content: center;
        align-items: center;}
        </style>
  </head>

<body>
    <div class="wrapper">
      <!-- Sidebar  -->
      <nav id="sidebar">
          <div class="sidebar-header">
            <h1>SIFOREJA<h1>
            <h4>HKBP HUTATINGGI</h4>
          </div>

          <ul class="list-unstyled components">
          <li class="sidebar-item active">
                <a href="/pengurusrenunganharian">Renungan Harian</a>
            </li>
              <li>
                  <a href="/penguruswartajemaat">Warta Jemaat</a>
            </li>
              <li>
                  <a href="/pengurusdatajemaat">Data Jemaat</a>
              </li>
              <li>
                  <a href="/penguruslaporankeuangan">Laporan Keuangan</a>
              </li>

                            

              <hr>
              <br>
              <br>
              <br>
              <br>
              <br>
              <br>
              <br>
              <br>
              <br>
              <br>
              <br>
              <br>
              <br>


              <li>
              <form action="/logout" method="post">
              @csrf
              <button type="submit" class="logout"><class="badge bg-lights"><img src="img/icon_logout.png" style="width:50px;height:45px;">             LOGOUT                  </a>
              </form>
            </li>
            
          </ul>
      </nav>

      <hr>

      <!-- Page Content  -->

      <div id="content">

          <nav class="navbar navbar-expand-lg navbar-light bg-light">
              <div class="container-fluid">
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                      <ul class="nav navbar-nav ml-auto">
                          <li class="nav-item active">
                              <a class="nav-link" href="/pengurusrenunganharian">Renungan Harian</a>
                          </li>
                          <i class="bi bi-caret-left-square-fill"></i><i class="bi bi-caret-right-square-fill"></i>
                          <li class="nav-item active">
                            <a class="nav-link" href="/ubahrenunganharian">Ubah</a>
                        </li>
                      </ul>
                  </div>
              </div>
          </nav>

<div class="col-lg-8">
  @foreach($renungan_harians as $p)
  <form method="post" action="/renunganharian/update">
    {{ csrf_field() }}
    <div class="mb-3">
      <label for="tanggal_renungan" class="form-label">Tanggal Renungan</label>
      <input type="date" class="form-control" id="tanggal_renungan" name="tanggal_renungan" value="{{ $p->tanggal_renungan }}">
    </div>
    <div class="mb-3">
      <label for="ayat_renungan" class="form-label">Ayat Renungan</label>
      <input type="text" class="form-control" id="ayat_renungan" name="ayat_renungan" value="{{ $p->ayat_renungan }}">
    </div>

    <div class="mb-3">
      <label for="judul_renungan" class="form-label">Judul Renungan</label>
      <input type="text" class="form-control  " id="judul_renungan" name="judul_renungan" value="{{ $p->judul_renungan }}">
    </div>

          
          <div class="container">
            <label for="slug" class="form-label">Isi Renungan</label>
            <textarea rows="10" cols="100" name="deskripsi"></textarea>
          </div>
          {{-- <div class="container">
            <label for="isi_renungan" class="form-label">Isi Renungan</label>
            <input type="text" textarea rows="10" cols="100" name="isi_renungan" value="{{ $p->isi_renungan }}"></textarea>
          </div> --}}
     
        
        
          <br>

        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
      @endforeach
</div>
  </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!-- <script src="dashboard.js"></script> -->
  </body>