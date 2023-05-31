<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css"> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>SIFOREJA</title>
</head>
<center>
<body>
    <div class="container1">
        <img src="img/hkbp.png" alt="Siforeja" style="width:150px">
        <h1 class="lable">Siforeja</h1>

        @if(session()->has('succes'))
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            {{ session('succes') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
          @endif

        @if(session()->has('loginError'))
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            {{ session('loginError') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
  

        <form class="login_form" action="/login" method="post" >
            @csrf

            <input type="username" name="username" placeholder="Username" size="40" autofocus required>
            <br>
            <br>
            <input type="password" name="password" placeholder="Password" size="40" required>
            <button type="submit">Login</button>
        </form>
        <p>Silahkan melakukan pendaftaran gereja
        </p>
        <button class = "btn-register"> <a href="/daftargereja"> Daftar</button>
    </div>

</center>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>