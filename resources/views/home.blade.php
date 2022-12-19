@extends('layouts.main')

@section('container')
<!-- jumbotron -->
<div class="container">
  <div class="jumbotron mt-4 padding-left:2" style="background-color: RGB(255, 255, 255, 0.65);">
      <h1 class ="display-4" style="font-family:'Mumblers Demo'; color: white;">Welcome to our website!</h1>
          <p class="lead" style="color: white;">Hi, this is {{ $nama }}!</p>
          <hr class="my-4">
          <p style="color: white;">Please, choose any film you want to watch!</p>
          <!-- <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a> -->
  </div>
</div>

<!-- gambar 1 -->
<div class="card text-bg-dark">
<img src="img/harry.png" class="card-img" alt="Harry Potter" width="200" height="450">
<div class="card-img-overlay">
  <h5 class="card-title" style="font-size: 25;">Harry Potter and the Sorcerer's Stone</h5>
  <p class="card-text">"It takes a great deal of bravery to stand up to your enemies, but a great deal more to stand up your friends."</p>
  <!-- <p class="card-text"><small>Last updated 3 mins ago</small></p> -->
</div>
</div>

<!-- gambar 2 -->
<div class="card text-bg-dark">
<img src="img/parasite.jpg" class="card-img" alt="Parasite" width="200" height="450">
<div class="isi card-img-overlay">
  <div class="parasite">
    <h5 class="card-title" style="font-size: 25;">Parasite</h5>
  </div>  
    <p class="card-text">"If you make a plan, life never works out that way. With no plan, nothing can go wrong and if something spins out of control, it doesn't matter."</p>
  <!-- <p class="card-text"><small>Last updated 3 mins ago</small></p> -->
</div>
</div>

<!-- gambar 3 -->
<div class="card text-bg-dark">
<img src="img/enola.jpg" class="card-img" alt="Enola Holmes" width="200" height="450">
<div class="card-img-overlay">
  <h5 class="card-title">Enola Holmes</h5>
  <p class="card-text">"There are two paths you can take Enola. Yours, or the path others choose for you."</p>
  <!-- <p class="card-text"><small>Last updated 3 mins ago</small></p> -->
</div>
</div>
@endsection