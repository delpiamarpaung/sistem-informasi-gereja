<head>
    <link rel="stylesheet" type="text/css" href="css/homeawal.css">
    <title>SIFOREJA</title>
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css"/>
  </head>

  <body>
    <div class="header_b1">
        <center>
        <div class="header_b2">
          <div class="h_nw">
            <h1 style="font-size: 40px; font-style: italic;">SIFOREJA
            <div style="font-size: 20px;">
              Sistem Informasi Gereja
            </div>
            </h1>
          </div>
          <div class="topnav_r_b1" align="center">
            <div class="topnav_r_b2" align="center">
              <ul>
                <li>
                  <a href="/login"><button class="login first">LOGIN</button> 
                </li>
              </ul>
            </div>
          </div>
        </div>
      </center>
    </div>
    <div class="contact_us_b1">
      <center>
        <div class="contact_us_b2">
          <div class="contact_us_b3" align="center">
            <h1 style="font-size:38px; margin-bottom: 40px; margin-top:20px;"> Temukan Gereja</h1>
          </div>
           <div class="dropdown">
             <button class="dropbtn">Pilih Gereja</button> 
             {{-- @foreach($users as $p)  --}}
             <div class="dropdown-content">
              @foreach($users as $p) 
               <a href="">{{ $p->nama_gereja }}</a>
               @endforeach
              </div>
           </div>
            <h3 style="font-size: 25px; margin-bottom: 30px; margin-top:120px;"> Gereja anda belum terdaftar? </h3>
              <h3>Ayo daftar sekarang juga</h3>
              <a href="/daftargereja"><button class="btn" style="width: 200px; margin-top: 10px;">Daftar Gereja</button>
         </div>
       </center>
     </div>
  </body>

  <center>
  <footer>
    <div class="footer_menu_b1" style="margin-top: 60px;">
   
      <div class="footer_menu_b2" >
        <ul>
          <li>
            <a href="#">facebook</a>
          </li>
          <li>
            <a href="#">tentang gereja</a>
          </li>
          <li>
            <a href="#">kontak</a>
          </li>
        </ul>
      </div>
    </center>
    <a style="display:flex; padding:10px; margin-top:120px">Copyright Kelompok 5 Siforeja Institut Teknologi Del. All Rights Reserved</a>
    </div>
  </footer>