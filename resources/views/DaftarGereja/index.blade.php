<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/daftar.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  
  <center>
  
  <title>Daftar Gereja</title>
    
  <div class="col-md-5">
    <main class="form-registration">

    <form action="/daftargereja" method="POST" enctype="multipart/form-data">
    
    <br>
    
    <h1 class="h3 mb-1    fw-normal text-center">Daftar Gereja</h1>
    
    <hr>

</head>

<body>
  <form action="/daftargereja" enctype="multipart/form-data">
  @csrf

  <div class="form-floating">
    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com">
    <label for="email">Email</label>
    {{-- @error('email')
    <div class="invalid-feedback">
    {{ $message }}
    </div>
    @enderror --}}
  </div>

  <div class="form-floating">
    <input type="text" name ="nama_gereja" class="form-control @error('nama_gereja') is-invalid @enderror" id="nama_gereja" placeholder="NamaGereja">
    <label for="nama_gereja">Nama Gereja</label>
  </div>
     

  <div class="form-floating">
      <input type="text" name="nama_pendeta" class="form-control @error('nama_pendeta') is-invalid @enderror" id="nama_pendeta" placeholder="pendetayangbertanggungjawab">
        <label for="address">Pendeta yang bertanggung jawab</label>
      </div>

      <div class="form-floating">
        <input type="text" name="alamat_gereja" class="form-control @error('alamat_gereja') is-invalid @enderror" id="alamat_gereja" placeholder="alamatgereja">
        <label for="alamatgereja">Alamat Gereja</label>
      </div>

      <div class="form-floating">
        <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="username">
        <label for="username">Username</label>
      </div>
      
      <div class="form-floating">
        <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="password">
        <label for="password">Password</label>
      </div>
<hr>
      <div class="mb-3">
        <label for="image" class="form-label">Upload Surat Permohonan</label>
        <input class="form-control" type="file" id="image" name="image">
      </div>
      <button class="w-100 btn btn-lg btn-primary mt-0 " type="submit">DAFTAR</button>
      </div>
      </center>
    </form>
  </main>
    
</body>