<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman {{ $tittle }}</title>
    {{-- <link rel="stylesheet" href="css/bootstrap.css"> --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
   <style> 
   body{
    background-color: black;
    background-repeat: no-repeat;
    background-attachment: fixed;
   }
   .jumbotron{ 
    padding-top: 6rem;
    padding-bottom: 2rem;
    padding-left:2rem; 
    padding-right:2rem; 
    width: 100%;
    display: flex;
    flex-direction: column;
    margin-bottom: 2rem;
   } 
   
   @media screen and (max-width: 480px) {
    .card-img{
        height: 240px;
    }

    .card-img {
        width: 100%;
        align-items: center;
    }
  }

  @media screen and (max-width: 1000px) {
    .card-img {
        width: 100%;
        padding: 0;
    }
  }

  .parasite, .isi p{
    display: flex;
    justify-content: flex-end;
  }

   </style>
<nav class="navbar navbar-expand-lg navbar-dark shadow-sm fixed-top" style="background-color : black">
  <div class="container">
    <a class="navbar-brand" style="font-family:'Mumblers Demo'" href="/">PETRACIA FILMS</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav ms-auto" style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif">
      <li class="nav-item" >
          <a class="nav-link {{ ($tittle === "Home") ? 'active' : ''}}" aria-current="page" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($tittle === "Daftar Film") ? 'active' : ''}}" href="/film">Daftar Film</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($tittle === "Tambah") ? 'active' : ''}}" href="/tambah-film">Tambah Film</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($tittle === "About") ? 'active' : ''}}" href="/about">About</a>
        </li>
      </ul>
      </div>
    </div>
  </div>
</nav>

<div class ="container mt-4">
  @yield('container')
</div>


<!-- Footer -->
<footer class="bg-black text-white text-center p-3">
  <p>Created with ♡ by <a class="footer">PETRACIA films</a></p>
</footer>
<!-- Akhir Footer -->

{{-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q81/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> --}}
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBK0wLaUAdn689aCwoqBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script> --}}
{{-- <script src="js/bootstrap.js"></script> --}}
</body>
</html> 