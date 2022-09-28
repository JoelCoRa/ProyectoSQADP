<?php
    include './templates/header.php';    
?>



<!-- Adopta -->
<section class="adopta text-center mb-3 container">
    <h2 class="titulo-seccion fs-1 seccion" id="adopta">Adopta</h2>
    <p class="fs-5 fst-italic">Te ayudamos a realizar el proceso de adopción para tu nueva mascota.</p>
    <p class="fs-5 fst-italic">Seleccciona la forma de adopción y sigue las instrucciones</p>

    <div class="row">
        <div class="col-sm-12 col-md-6">
            <p>
                <button class="btn-adopcion text-white fs-4" data-bs-toggle="collapse" href="#collapse1" role="button" aria-expanded="false" aria-controls="collapse1">
                    Adopción Presencial
                </button>                
            </p>
            
            <div class="collapse" id="collapse1">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Adopción Presencial</h5>
                        <i class="fa-solid fa-shop mb-2"></i>
                        <h6 class="card-subtitle mb-2 text-muted">En el Refugio</h6>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="card-link">Card link</a>
                        <a href="#" class="card-link">Another link</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-12 col-md-6">
            <p>
                <button class="btn-adopcion text-white fs-4" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                    Adopción en Línea
                </button>
            </p>
            <div class="collapse" id="collapse2">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Adopción en Línea</h5>
                        <i class="fa-solid fa-computer"></i>
                        <h6 class="card-subtitle mb-2 text-muted">Desde tu hogar</h6>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="card-link">Card link</a>
                        <a href="#" class="card-link">Another link</a>
                    </div>
                </div>
            </div>
        </div>
        
    
    
</section>

<?php
    include './templates/footer.php';
?>