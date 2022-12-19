@extends('layouts.main')

@section('container')
<!-- Jumbotron -->
<div class="container mb-3">
  <img src="img/foto.jpg" alt="Foto" width="200" class="rounded-circle mt-5" />
  <h2 class="mt-3" style="font-family:'Mumblers Demo'; color: white;">{{ $nama }}</h2>
      <p style="color: white;">{{ $nama }}, adalah website yang dibuat pada tahun {{ $tahun }} yang digunakan untuk mencari film apapun yang ingin Anda tonton dalam berbagi genre. Selain itu, Anda juga dapat mengetahui informasi lebih lengkap tentang film tersebut.</p>
</div>
<!-- Akhir Jumbotron -->

<!-- Contact Us -->
<section id="social">
        <div class="row mb-3" style="padding-top : 3rem; padding-bottom:1 rem;">
          <div class="col mx-5">
            <h2 style="font-size:medium; color:white;">Contact Us</h2>
          </div>
        </div>
        <div class="row justify-content mx-3 fs-5 ikon">
          <div class="col-md-1">
              <p class="mt-4"><a href="mailto:alfrina.g.p@gmail.com"><img src="/img/mail.png" alt="mail" width="40px" height="40px"></a></p>
          </div>
          <div class="col-md-1">
              <p class="mt-4"><a href="https://twitter.com/jinjinjaraa04"><img src="/img/twitter.png" alt="twitter" width="40px" height="40px"></a></p>
          </div>
          <div class="col-md-1">
              <p class="mt-4"><a href="https://www.instagram.com/petra.fellicia/"><img src="/img/instagram.png" alt="instagram" width="40px" height="40px"></a></p>
          </div>
          <div class="col-md-1">
              <p class="mt-4"><a href="https://wa.me/6282396001729"><img src="/img/whatsapp.png" alt="whatsapp" width="40px" height="40px"></a></p>
          </div>
        </div>
</section>
<!-- Akhir Contact Us -->
@endsection