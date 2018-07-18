<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>UAS P. WEB 2</title>
    <link href="/css1/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">

      body{background-color: #8885a5}

    </style>
  </head>
  <body>

    <div class="container">
      <div class="row">
        <hr>
          <nav class="navbar">

            <ul class="nav navbar-nav">
              <li><a href="{{ Route('Index') }}" class="btn btn-default">
              <svg style="width:24px;height:24px" viewBox="0 0 24 24">
    <path fill="#000000" d="M6,21V8A2,2 0 0,1 8,6L16,3V6A2,2 0 0,1 18,8V21H12V16H8V21H6M14,19H16V16H14V19M8,13H10V9H8V13M12,13H16V9H12V13Z" />
</svg>HOME</a></li>
              <li><a href="{{ Route('show') }}" class="btn btn-default">
              <svg style="width:24px;height:24px" viewBox="0 0 24 24">
    <path fill="#000000" d="M2,3H22C23.05,3 24,3.95 24,5V19C24,20.05 23.05,21 22,21H2C0.95,21 0,20.05 0,19V5C0,3.95 0.95,3 2,3M14,6V7H22V6H14M14,8V9H21.5L22,9V8H14M14,10V11H21V10H14M8,13.91C6,13.91 2,15 2,17V18H14V17C14,15 10,13.91 8,13.91M8,6A3,3 0 0,0 5,9A3,3 0 0,0 8,12A3,3 0 0,0 11,9A3,3 0 0,0 8,6Z" />
</svg>Data Pemesan</a></li>
              <li><a href="{{ Route('create') }}" class="btn btn-default">
              <svg style="width:24px;height:24px" viewBox="0 0 24 24">
    <path fill="#000000" d="M15,14C12.33,14 7,15.33 7,18V20H23V18C23,15.33 17.67,14 15,14M6,10V7H4V10H1V12H4V15H6V12H9V10M15,12A4,4 0 0,0 19,8A4,4 0 0,0 15,4A4,4 0 0,0 11,8A4,4 0 0,0 15,12Z" />
</svg>Tambah Data</a></li>
            </ul>
          </nav>
        <hr>
      </div>
      <div class="row">
        @yield('content')
      </div>

      <footer style="text-align:center; position:fixed; bottom: 0px; width: 100%; left: 0px; right: 0px;">
        <strong>MADE WITH <svg style="position: relative; top: 5px; width: 20px;" viewBox="0 0 24 24">
    <path fill="#F2A9BA" d="M12,21.35L10.55,20.03C5.4,15.36 2,12.27 2,8.5C2,5.41 4.42,3 7.5,3C9.24,3 10.91,3.81 12,5.08C13.09,3.81 14.76,3 16.5,3C19.58,3 22,5.41 22,8.5C22,12.27 18.6,15.36 13.45,20.03L12,21.35Z" />
</svg> <a href="http://fti.uniska-bjm.ac.id/">FTI SISTEM INFORMASI UNISKA OFFICIAL 2018/2019</a></strong>
      </footer>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="/js1/bootstrap.min.js"></script>
  </body>
</html>

{{--<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Pemesanan Tiket Bola</title>
</head>
<body>
<a href="{{ Route('index') }}">Home</a>
<a href="{{ Route('create') }}">Tambah Data Pesan Tiket</a>
<a href="{{ Route('show') }}">Data Pemesan Tiket</a>


<hr>
@yield('content')
<hr>

<footer>FTI SISTEM INFORMASI UNISKA BANJARBARU 2018/2019</footer>

</body>
</html>   --}}