  <?php 
    include './templates/header.php';  
    include './templates/banner.php';
  ?>       

      <main class="container text-center mb-3 mt-3">
      <!--Conócenos-->
        <section class="conocenos pt-3"> 
          <h2 class="titulo-seccion fs-1 seccion" id="conocenos">Conócenos</h2>
          <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
              <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="3" aria-label="Slide 4"></button>
              <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="4" aria-label="Slide 5"></button>
            </div>

            <div class="carousel-inner">
              <div class="carousel-item active" data-bs-interval="10000">
                <img src="./imagenes/Carousel/1.jpg" class="d-block w-100 rounded"alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h3 class="text-black">Conócenos</h3>
                  <p class="text-black">Somos una página que te ayuda a adoptar a tu próximo mejor amigo</p>
                </div>
              </div>

              <div class="carousel-item" data-bs-interval="2000">
                <img src="./imagenes/Carousel/2.jpg" class="d-block w-100 rounded" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h3 class="text-black">Ház una Donación</h3>
                  <p class="text-black">Apoya a la causa, realizando una donación que no afecte a tu bolsillo.</p>
                </div>
              </div>

              <div class="carousel-item">
                <img src="./imagenes/Carousel/3.jpg" class="d-block w-100 rounded" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h3 class="text-black">Compra</h3>
                  <p class="text-black">Puedes pasar a nuestra tienda online para adquirir productos para tu mejor amigo</p>
                </div>
              </div>

              <div class="carousel-item">
                <img src="./imagenes/Carousel/4.jpg" class="d-block w-100 rounded" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h3 class="text-black">Compra</h3>
                  <p class="text-black">Puedes pasar a nuestra tienda online para adquirir productos para tu mejor amigo</p>
                </div>
              </div>

              <div class="carousel-item">
                <img src="./imagenes/Carousel/5.jpg" class="d-block w-100 rounded" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h3 class="text-black">Compra</h3>
                  <p class="text-black">Puedes pasar a nuestra tienda online para adquirir productos para tu mejor amigo</p>
                </div>
              </div>

            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </section>
        
        <!-- Servicios-->
        <section class="servicios"> 
          <h2 class="titulo-seccion fs-1 seccion pt-3" id="servicios">Servicios</h2>
          <div class="row">
          <div class="col-sm-12 col-md-6 col-lg-3">
              <p class="text-warning servicio fw-bold">Hospital Veterinario</p> 
              <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-ambulance" width="40" height="40" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ff4500" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                <circle cx="7" cy="17" r="2" />
                <circle cx="17" cy="17" r="2" />
                <path d="M5 17h-2v-11a1 1 0 0 1 1 -1h9v12m-4 0h6m4 0h2v-6h-8m0 -5h5l3 5" />
                <path d="M6 10h4m-2 -2v4" />
              </svg>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut iure architecto non voluptatem eligendi ipsa ea consequatur dolores quis, error eveniet nihil iusto qui, asperiores est, sunt atque temporibus excepturi.</p>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-3">
              <p class="text-warning servicio fw-bold">Rescate</p>
              <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-heart" width="40" height="40" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ff4500" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                <path d="M19.5 13.572l-7.5 7.428l-7.5 -7.428m0 0a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" />
              </svg>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit eum et sapiente earum unde corrupti velit nemo veritatis tenetur laudantium sequi neque, vel perferendis cupiditate, sunt, hic totam reiciendis rem!</p>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-3">
              <p class="text-warning servicio fw-bold">Adopción</p>
              <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-dog-bowl" width="40" height="40" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ff4500" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                <path d="M10 15l5.586 -5.585a2 2 0 1 1 3.414 -1.415a2 2 0 1 1 -1.413 3.414l-3.587 3.586" />
                <path d="M12 13l-3.586 -3.585a2 2 0 1 0 -3.414 -1.415a2 2 0 1 0 1.413 3.414l3.587 3.586" />
                <path d="M3 20h18c-.175 -1.671 -.046 -3.345 -2 -5h-14c-1.333 1 -2 2.667 -2 5z" />
              </svg>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni tempore veniam non enim officiis, soluta rem consequatur ipsa, placeat iure quibusdam, officia aliquid quod consectetur sit voluptates ratione doloremque beatae?</p>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-3">
              <p class="text-warning servicio fw-bold">Refugio</p>
              <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-home" width="40" height="40" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ff4500" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                <polyline points="5 12 3 12 12 3 21 12 19 12" />
                <path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" />
                <path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6" />
              </svg>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo corrupti doloremque veniam ratione! Voluptatum, accusamus sint aperiam, harum dignissimos enim mollitia illum delectus quos, eaque maiores at. Reprehenderit, consectetur neque.</p>
            </div>            
          </div>

          
        </section>

        <!-- Dona -->
        <section class="dona">
        <h2 class="titulo-seccion fs-1 seccion pt-3" id="dona">Dona</h2>
        </section>



        <!-- <div class="row justify-content-lg-around">
          <div class="col-12 col-lg-3">
            <div class="card border-0 fondo-textura">
              <img src="./imagenes/cards-blog/1.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>
          </div>
          <div class="col-12 col-lg-3">
            <div class="card border-0">
              <img src="./imagenes/cards-blog/2.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>
          </div>
          <div class="col-12 col-lg-3">
            <div class="card border-0">
              <img src="./imagenes/cards-blog/3.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>
          </div>
        </div> -->
      </main>
      



  <?php 
    include './templates/footer.php'
  ?>       