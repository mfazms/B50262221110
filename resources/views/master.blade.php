<!DOCTYPE html>
<html lang="en">
<head>
  <title>@yield('Title')</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <!-- Brand -->
  <a class="navbar-brand" href="#">Moehammad Fazle Mawla Sidiki - 5026221110</a>

  <!-- Links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="/">Home</a>
    </li>

    <!-- Dropdown -->
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Tugas Pre-ETS
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="/tugas1">Tugas 1</a>
        <a class="dropdown-item" href="/tugas2">Tugas 2</a>
        <a class="dropdown-item" href="/tugas2v">Tugas 2v</a>
        <a class="dropdown-item" href="/tugas3">Tugas 3</a>
        <a class="dropdown-item" href="/tugas4a">Tugas 4a</a>
        <a class="dropdown-item" href="/tugas4b">Tugas 4b</a>
        <a class="dropdown-item" href="/tugas7">Tugas 7</a>
      </div>
    </li>

    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
          Tugas Pasca-ETS
        </a>
        <div class="dropdown-menu">
            <a class="dropdown-item" href="/pegawai">Pegawai</a>
            <a class="dropdown-item" href="/mahasiswa">Nilai Kuliah</a>
            <a class="dropdown-item" href="/keranjangbelanja">Keranjang Belanja</a>
            <a class="dropdown-item" href="/sandal">Sandal</a>
        </div>
      </li>

  </ul>
</nav>
<br>

<div class="container">
@yield('konten')
</div>
@include('footer')
</body>
</html>
