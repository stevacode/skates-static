  <?php include('partials/header.php');?>
  <!-- header -->
  <header class="d-flex align-items-center">
    <article class="container">
      <div class="col-md-7">
        <h1>Uživanje na <br> točkovima</h1>
        <p class="lead text-white font-weight-bold py-3">Brzina, vetar u kosi. Budite u pokretu.</p>
        <a class="button mr-3" href="">O nama</a>
        <a class="button" href="">Web shop</a>

      </div>
    </article>
  </header>
  <!-- intro -->
  <section class="intro py">
    <article class="container">
      <div class="row align-items-center">
        <div class="col-md-6">
          <h2>Pravi način <br> da se osećate dobro</h2>
        </div>
        <div class="col-md-6">
          <p class="lead">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Maxime libero quod dolores sed, veritatis ducimus. Consequuntur tempora, fugit corporis molestias unde voluptas ducimus saepe minima?</p>
          <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum assumenda repellat quae vel voluptatum aperiam perferendis dignissimos eveniet nulla dolore.</p>
        </div>
      </div>
    </article>
  </section>

  <!-- slider -->
  <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="img/slide1.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption up d-none d-md-block">
          <h3 class="display-3 font-weight-bold font-italic">First slide label</h3>
          <p>Some representative placeholder content for the first slide.</p>
        </div>
        <div class="carousel-caption d-none d-md-block">
          <h5>First slide label</h5>
          <p>Some representative placeholder content for the first slide.</p>
          <p class="lead">Some text</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="img/slide2.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption up d-none d-md-block">
          <h3 class="display-3 font-weight-bold font-italic">Second slide label</h3>
          <p>Some representative placeholder content for the first slide.</p>
        </div>
        <div class="carousel-caption d-none d-md-block">
          <h5>Second slide label</h5>
          <p>Some representative placeholder content for the first slide.</p>
          <p class="lead">Some text</p>

        </div>
      </div>
      <div class="carousel-item">
        <img src="img/slide3.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption up d-none d-md-block">
          <h3 class="display-3 font-weight-bold font-italic">Third slide label</h3>
          <p>Some representative placeholder content for the third slide.</p>

        </div>
        <div class="carousel-caption d-none d-md-block">
          <h5>Third slide label</h5>
          <p>Some representative placeholder content for the first slide.</p>
          <p class="lead">Some text</p>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-target="#carouselExampleCaptions" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-target="#carouselExampleCaptions" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </button>
  </div>

  <!-- plans -->
  <section class="plan container py">
    <h2 class="text-center mb-5">Odaberite plan vožnje</h2>
    <article class="row">
      <div class="col-md-4 border rounded p-5">
        <h3>Početni</h3>
        <ul class="list-unstyled">
          <li>Dva puta nedeljno</li>
          <li>10km staza</li>
          <li>Lagana vožnja</li>
          <a href="" class="button">1000din</a>
        </ul>
      </div>
      <div class="col-md-4 border rounded p-5">
        <h3>Srednji</h3>
        <ul class="list-unstyled">
          <li>Četiri puta nedeljno</li>
          <li>20km staza</li>
          <li>Srednji tempo</li>
          <a href="" class="button">2000din</a>
        </ul>
      </div>
      <div class="col-md-4 border rounded p-5">
        <h3>Pro</h3>
        <ul class="list-unstyled">
          <li>Šest puta nedeljno</li>
          <li>25km staza</li>
          <li>Brža vožnja</li>
          <a href="" class="button">3000din</a>
        </ul>
      </div>
    </article>
  </section>
  <!-- map -->
  <section class="map">
    <h2>Gde nas možete pronaći</h2>
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2831.6784738228416!2d20.511177217443848!3d44.78735990000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x475a70999e867227%3A0x3cbaf349c1a2fc66!2sKozar%C4%8Deva%205%2C%20Beograd!5e0!3m2!1sen!2srs!4v1656765750797!5m2!1sen!2srs" width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    <article>
      <h3>Lokacija</h3>
      <p>Kozarčeva 5, Beograd</p>
      <hr>
      <h5>Radno vreme</h5>
      <ul class="list-unstyled">
        <li>pon - pet : 09 - 17h</li>
        <li>subota: 09 - 14h</li>
        <li>nedelja : neradna</li>
      </ul>
    </article>
  </section>
    <!-- blog -->
    <section class="blog container py">
      <article class="row">
        <div class="col-md-4 align-self-center">
          <h2>Blog</h2>
          <p class="py-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam ipsum at veniam tempore corporis, quaerat fuga facilis tempora aliquam cumque.</p>
          <a href="">Latest posts</a>
        </div>
        <div class="col-md-4">
          <img class="img-fluid" src="img/blog1.jpg" alt="">
          <h3>Blog 1</h3>
          <a href="" class="button">Više</a>
        </div>
        <div class="col-md-4">
          <img class="img-fluid" src="img/blog2.jpg" alt="">
          <h3>Blog 2</h3>
          <a href="" class="button">Više</a>
        </div>
      </article>
    </section>
    <!-- subscribe -->
    <section class="subscribe py text-center">
      <article class="container">
        <div class="row">
          <div class="col-md-10 mx-auto ">
            <h2>Prijavite se za novosti</h2>
            <p class="py-3">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cumque odio praesentium sequi animi cum perferendis impedit blanditiis nesciunt ad delectus vitae maxime beatae expedita provident ut dicta esse eveniet fugiat reprehenderit, aliquam magni soluta tempore eos! Ut explicabo autem delectus.
            </p>
          </div>
          <form class="mx-auto">
            <input type="email" placeholder="Email">
            <button class="button ml-3">Prijava</button>
          </form>
        </div>
      </article>
    </section>
    <?php include("partials/footer.php"); ?>