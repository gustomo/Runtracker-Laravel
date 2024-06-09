<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="container">
        <nav class="wrapper">
            <div class="brand">
                <div class="firstname">run</div>
                <div class="lastname">tracker</div>
            </div>
            <ul class="nav">
                <li><a href="{{ url('widgets/information') }}" class=""> tentang kami</a></li>
                <li><a href="{{ url('login/loginn') }}" class="satu">login/register</a></li>
                <li><a href="{{ url('/admins') }}" class="dua">admin</a></li>
                <li><a href="{{ url('crud/index') }}" class="tiga">user</a></li>
                <li><img src="{{ asset('gambar/sampel2.jpg') }}" alt=""></li>
            </ul>
        </nav>
    </div>

    <header>
        <h1>RunTracker</h1>
        <p>Selamat datang di website Run Tracker</p>
    </header>

    <main>
        <section class="konten">
            <h2>Lacak Aktivitas Lari Anda</h2>
            <p>Run Tracker membantu Anda melacak aktivitas lari Anda dengan mudah dan efisien.</p>
            <div class="carousel-container">
                <div class="carousel-slide">
                    <img src="{{ asset('gambar/sampel2.jpg') }}" alt="Slide 1">
                </div>
                <div class="carousel-slide">
                    <img src="{{ asset('gambar/sampel1.jpg') }}" alt="Slide 2">
                </div>
                
                <button class="prev-btn">Prev</button>
                <button class="next-btn">Next</button>
            </div>
            
            <ul>
                <li>Catat jarak dan waktu lari Anda.</li>
                <li>Pantau kemajuan Anda dari waktu ke waktu.</li>
                <li>Tetapkan tujuan dan capai target lari Anda.</li>
            </ul>
        </section>
    </main>

    <footer>
        <p>Hak cipta © 2023</p>
    </footer>

    <script >
    document.addEventListener("DOMContentLoaded", function () {
  let slideIndex = 0;
  const slides = document.querySelectorAll(".carousel-slide");
  const prevBtn = document.querySelector(".prev-btn");
  const nextBtn = document.querySelector(".next-btn");

  function showSlide(index) {
    slides.forEach((slide) => (slide.style.display = "none"));
    slides[index].style.display = "block";
  }

  function prevSlide() {
    if (slideIndex === 0) {
      slideIndex = slides.length - 1;
    } else {
      slideIndex--;
    }
    showSlide(slideIndex);
  }

  function nextSlide() {
    if (slideIndex === slides.length - 1) {
      slideIndex = 0;
    } else {
      slideIndex++;
    }
    showSlide(slideIndex);
  }

  prevBtn.addEventListener("click", prevSlide);
  nextBtn.addEventListener("click", nextSlide);

  showSlide(slideIndex);
});
alert("selamat datang di run tracker");
const sub = this.document.querySelector(".sub");
sub.addEventListener("click", function () {
  alert(" data telah di tambahkan");
});

    </script>
</body>
</html>
