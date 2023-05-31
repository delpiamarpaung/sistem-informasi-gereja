<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/dashboard.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">

    <title>SIFOREJA</title>
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
            <li>  
                <a href="/renunganharian">Renungan Harian</a>
            </li>
            <li>
              <a href="/wartajemaat">Warta Jemaat</a>
            </li>
            <li>
              <a href="/datajemaat">Data Jemaat</a>
            </li>
            <li class="sidebar-item active">
              <a href="/laporankeuangan">Laporan Keuangan</a>
            </li>
          </ul>
      </nav>

      <!-- Page Content  -->
      <div id="content">

          <nav class="navbar navbar-expand-lg navbar-light bg-light">
              <div class="container-fluid">
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                      <ul class="nav navbar-nav ml-auto">
                          <li class="nav-item active">
                              <a class="nav-link" href="/laporankeuangan">Laporan Keuangan</a>
                          </li>
                      </ul>
                  </div>
              </div>
          </nav>

<div class="table-responsive" col-lg-8>

  <table class="table table-striped table-sm">
      <thead>
      <tr>
          <th scope="col">Nama File</th>
          <th scope="col">Tanggal</th>
          <th scope="col">Download</th>


          </tr>
          </thead>
  
          <td>
          <li class="list-group-item"><a class="badge bg-danger"><i class="bi bi-file-earmark-pdf-fill"></i></a>   Laporan Keuangan Maret 2022 Minggu ke 4.pdf</li>
          </td>
          <td>
            <li class="list-group-item">28 Maret 2022
          </td>
          <td>
            <a href=""class="badge bg-info"><i class="bi bi-download"></i></a>
          </td>
      </ul>
    </div>
  </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!-- <script src="dashboard.js"></script> -->
  </body>