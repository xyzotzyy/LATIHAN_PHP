<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Web By YOZZ</title>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css'><link rel="stylesheet" href="{{asset('style.css')}}">
</head>

<body>
  <nav>
    <div class="wrapper">
      <div class="logo"><a href="#">Simple Web Yozz</a></div>
      <input type="radio" name="slider" id="menu-btn">
      <input type="radio" name="slider" id="close-btn">
      <ul class="nav-links">
        <label for="close-btn" class="btn close-btn"><i class="fas fa-times"></i></label>
        <li><a href="#home">Home</a></li>
        <li><a href="#about">About Me</a></li>
        <li><a href="#gallery">Galery</a></li>
        <li>
          <a href="#" class="desktop-item">project</a>
          <input type="checkbox" id="showDrop">
          <label for="showDrop" class="mobile-item">project</label>
          <ul class="drop-menu">
            <li><a href="table.html">simple table</a></li>
            <li><a href="#"></a></li>
            <li><a href="#"></a></li>
            <li><a href="#"></a></li>
          </ul>
        </li>
        <li><a href="login.html">logout</a></li>
      </ul>
      <label for="menu-btn" class="btn menu-btn"><i class="fas fa-bars"></i></label>
    </div>
  </nav>

      <img class="profilawal" id="home" src="image/merbabu.jpeg">

    <header class="info">
        <h1>Hi!</h1>
        <h1>IM,YOSAFAT</h1>
        <h1>MUASYAWA</h1>
        <p>Never miss a moment in the mountains</p>
    </header>

    <h1 class="about" id="about">About Me</h1>

    <div class="box2">
    <img class="profileabout" src="image/yozz.jpg">
    <p class="text-about">DATA DIRI</p>
    <p class="data-diri"> Nama lengkap:Yosafat Muasyawa</p>
    <p class="data-diri"> Nama pangilan:Yosa</p>
    <p class="data-diri"> Tempat dan Tanggal Lahir:Bantul, 25 oktober 2007</p>
    <p class="data-diri"> No. Telepon:62895321898537</p>
    <p class="data-diri"> Alamat Email : xyzootzy68@gmail.com</p>
    <p class="data-diri"> Alamat Rumah : Cangkring, Sumberagung, Jetis, Bantul, Yogyakarta</p>
    </div>

    <h1 class="galery">Galery</h1>

    <div id="background">
      <div id="gallery">
        <figure class="pic1">
          <img src="image/merbabuorg.jpg" />
          <figcaption>Merbabu</figcaption>
        </figure>
        <figure class="pic2">
          <img src="image/sindoro.jpg" />
          <figcaption>Sindoro</figcaption>
        </figure>
        <figure class="pic3">
          <img src="image/rajawali.jpg" />
          <figcaption>Sumbing</figcaption>
        </figure>
        <figure class="pic5">
          <img src="image/prau.jpg" />
          <figcaption>prau</figcaption>
        </figure>
        <figure class="pic6">
          <img src="image/sumbing.webp" />
          <figcaption>Sumbing part 2</figcaption>
        </figure>
        <figure class="pic7">
          <img src="image/turu.jpg" />
          <figcaption>Suwanting</figcaption>
        </figure>
        <figure class="pic8">
          <img src="image/sabana.jpg" />
          <figcaption>Banaran</figcaption>
        </figure>
        <figure class="pic10">
          <img src="image/plakat.jpg" />
          <figcaption>sumbing/figcaption>
        </figure>
      </div>
    </div>

    <footer>
      <p>&copy; 2024 create by Yozz.</p>
  </footer>

</body>
</html>
