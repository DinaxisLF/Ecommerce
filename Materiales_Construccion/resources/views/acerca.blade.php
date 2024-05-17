@extends('plantilla.layout')

@section('titulo', 'Acerca De')
@section('contenido')

<link rel="stylesheet" href="/css/about.css">



<div class="header">
    <div class="overlay-text">
      <h1>ConstruMex</h1>
      <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-tools" viewBox="0 0 16 16">
        <path d="M1 0 0 1l2.2 3.081a1 1 0 0 0 .815.419h.07a1 1 0 0 1 .708.293l2.675 2.675-2.617 2.654A3.003 3.003 0 0 0 0 13a3 3 0 1 0 5.878-.851l2.654-2.617.968.968-.305.914a1 1 0 0 0 .242 1.023l3.27 3.27a.997.997 0 0 0 1.414 0l1.586-1.586a.997.997 0 0 0 0-1.414l-3.27-3.27a1 1 0 0 0-1.023-.242L10.5 9.5l-.96-.96 2.68-2.643A3.005 3.005 0 0 0 16 3q0-.405-.102-.777l-2.14 2.141L12 4l-.364-1.757L13.777.102a3 3 0 0 0-3.675 3.68L7.462 6.46 4.793 3.793a1 1 0 0 1-.293-.707v-.071a1 1 0 0 0-.419-.814zm9.646 10.646a.5.5 0 0 1 .708 0l2.914 2.915a.5.5 0 0 1-.707.707l-2.915-2.914a.5.5 0 0 1 0-.708M3 11l.471.242.529.026.287.445.445.287.026.529L5 13l-.242.471-.026.529-.445.287-.287.445-.529.026L3 15l-.471-.242L2 14.732l-.287-.445L1.268 14l-.026-.529L1 13l.242-.471.026-.529.445-.287.287-.445.529-.026z"/>
      </svg>
    </div>
  </div>

  <hr>

  <div class="container">
    <div class="row-md-3 row-lg-3 row-xl-3 mx-auto mt-3 text-center">
      <h1 class="display-6">¿Quiénes Somos?</h1>
    </div>
  
  </div>
  <hr>
  

  <section>
    <div class="container">
        <ul class="timeline">
            <li>
                <div class="timeline-image"><img class="rounded-circle img-fluid" src="/imagenes/7.jpg" alt="..." /></div>
                <div class="timeline-panel">
                    <div class="timeline-heading">
                        <h4>1925</h4>
                        <h4 class="subheading">Como empezo todo</h4>
                    </div>
                    <div class="timeline-body"><p class="text-muted">En Marzo de 1925 nuestro fundador Francisco Rodriguez, un emprendedor lleno de espiritu y talento decidio fundar su propia empresa en busqueda de expandir las posibilidades de su poblacion natal</p></div>
                </div>
            </li>
            <li class="timeline-inverted">
                <div class="timeline-image"><img class="rounded-circle img-fluid" src="/imagenes/8.jpg" alt="..." /></div>
                <div class="timeline-panel">
                    <div class="timeline-heading">
                        <h4>1960</h4>
                        <h4 class="subheading">La expansion</h4>
                    </div>
                    <div class="timeline-body"><p class="text-muted">Tras años de experiencia dentro del mercado y brindar los mejores productos para la construccion, finalmente dimos el siguiente paso, a expandir el alcance e impacto de nuestra organizacion </p></div>
                </div>
            </li>
        </ul>
    </div>
  </section>
  <hr>



  <section>
    <div class="row ">
        <div class="col-4">
            <h3>¿Dónde nos ubicamos?</h3>
            <h4> Construmex y sus aliados cuentan con diferentes surcusales alrededor del país, nuestra sede principal
                donde el gran sueño nacio se encuentra ubicada en:
            </h4>
            <h4>C. Hidalgo 8, 45340 San Isidro Mazatepec, Jal.</h4>
        </div>
        <div class="col-8 text-center" >
            <iframe
            width="600"
            height="450"
            style="border:0"
            loading="lazy"
            allowfullscreen
            referrerpolicy="no-referrer-when-downgrade"
            src="https://www.google.com/maps/embed/v1/place?key={{ env('API_MAPS') }}
                &q=CONSTRURAMA+MATERIALES+RODRIGUEZ/@20.5250138,-103.7429993,12z">
            </iframe>
        </div>
    </div>

</section>

<br><br>

<section>
    <div class="row text-center">
        <hr>
        <h1 class="display-6">Nuestros servicios</h1>
        <hr>

    </div>
    <br><br>
    <div class="container">
        <div class="row">
      
          <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
            <div class="card" style="width: 20rem;">
              <img src="/imagenes/about/Servicio 1.webp" class="card-img-top" style="height: 300px; alt="...">
              <div class="card-body text-center">
                <h5 class="card-title">Venta De Materiales</h5>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#materiales">
                    Más
                  </button>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
            <div class="card" style="width: 20rem;">
              <img src="/imagenes/about/Servicio 2.webp" class="card-img-top" style="height: 300px; alt="...">
              <div class="card-body text-center">
                <h5 class="card-title">Cotizacion</h5>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#cotizacion">
                    Más
                  </button>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
            <div class="card" style="width: 20rem;">
              <img src="/imagenes/about/Servicio 3.webp" class="card-img-top" style="height: 300px;">
              <div class="card-body text-center">
                <h5 class="card-title">Desarrollo De Proyectos</h5>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#proyectos">
                    Más
                  </button>
              </div>
            </div>
          </div>
      
        </div>
      </div>
</section>
<br><br>
<section>
    <div class="row justify-content-center content-row">
            
        <div class="line"></div>
        <div class="card col-md-6 col-lg-3">
            <div class="card-box">
                <div class="title">
                    <span class="num mbr-fonts-style display-2"><strong>100</strong></span>
                </div>
                <h4 class="card-title align-left mbr-fonts-style display-7">AÑOS DE<br>EXPERIENCIA</h4>
            </div>
        </div>
        <div class="card col-md-6 col-lg-3">
            <div class="card-box">
                <div class="title">
                    <span class="num mbr-fonts-style display-2"><strong>5,000 +</strong></span>
                </div>
                <h4 class="card-title align-left mbr-fonts-style display-7">
                    CLIENTES<br>SATISFECHOS</h4>
            </div>
        </div>
        <div class="card col-md-6 col-lg-3">
            <div class="card-box">
                <div class="title">
                    <span class="num mbr-fonts-style display-2"><strong>50</strong></span>
                </div>
                <h4 class="card-title align-left mbr-fonts-style display-7">SUCURSALES<br>EN EL PAIS</h4>
            </div>
        </div>
        <div class="card col-md-6 col-lg-3">
            <div class="card-box">
                <div class="title">
                    <span class="num mbr-fonts-style display-2"><strong>50</strong></span>
                </div>
                <h4 class="card-title align-left mbr-fonts-style display-7">EXPERTOS <br>EN CONSTRUCCION</h4>
            </div>
        </div>
    </div>
</section>

<br><br>

<section>
    <div class="py-5 team4">
        <div class="container">
          <div class="row justify-content-center mb-4">
            <div class="col-md-7 text-center">
              <h3 class="mb-3">Un Equipo Profesional</h3>
              <h6 class="subtitle">Nuestro equipo de expertos te brindara la mejor solución para tus proyectos en cada aspecto
                que necesites, no solo brindamos materiales, ayudamos a construir sueños
              </h6>
            </div>
          </div>
          <div class="row">
            <!-- column  -->
            <div class="col-lg-3 mb-4">
              <!-- Row -->
              <div class="row">
                <div class="col-md-12">
                  <img src="https://www.wrappixel.com/demos/ui-kit/wrapkit/assets/images/team/t1.jpg" alt="wrapkit" class="img-fluid rounded-circle" />
                </div>
                <div class="col-md-12 text-center">
                  <div class="pt-2">
                    <h5 class="mt-4 font-weight-medium mb-0">Francisco Rodriguez</h5>
                    <h6 class="subtitle mb-3">CEO</h6>
                    <p>Director general de la compañia, con mas de 15 años a cargo.</p>
                    <ul class="list-inline">
                      <li class="list-inline-item"><a href="#" class="text-decoration-none d-block px-1"><i class="icon-social-facebook"></i></a></li>
                      <li class="list-inline-item"><a href="#" class="text-decoration-none d-block px-1"><i class="icon-social-twitter"></i></a></li>
                      <li class="list-inline-item"><a href="#" class="text-decoration-none d-block px-1"><i class="icon-social-instagram"></i></a></li>
                      <li class="list-inline-item"><a href="#" class="text-decoration-none d-block px-1"><i class="icon-social-behance"></i></a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <!-- Row -->
            </div>
            <!-- column  -->
            <!-- column  -->
            <div class="col-lg-3 mb-4">
              <!-- Row -->
              <div class="row">
                <div class="col-md-12">
                  <img src="https://www.wrappixel.com/demos/ui-kit/wrapkit/assets/images/team/t2.jpg" alt="wrapkit" class="img-fluid rounded-circle" />
                </div>
                <div class="col-md-12 text-center">
                  <div class="pt-2">
                    <h5 class="mt-4 font-weight-medium mb-0">Maria Flores</h5>
                    <h6 class="subtitle mb-3">Project Manager</h6>
                    <p>Experta en gestion y desarrollo de proyectos, lidera al equipo detras de tus sueños.</p>
                    <ul class="list-inline">
                      <li class="list-inline-item"><a href="#" class="text-decoration-none d-block px-1"><i class="icon-social-facebook"></i></a></li>
                      <li class="list-inline-item"><a href="#" class="text-decoration-none d-block px-1"><i class="icon-social-twitter"></i></a></li>
                      <li class="list-inline-item"><a href="#" class="text-decoration-none d-block px-1"><i class="icon-social-instagram"></i></a></li>
                      <li class="list-inline-item"><a href="#" class="text-decoration-none d-block px-1"><i class="icon-social-behance"></i></a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <!-- Row -->
            </div>
            <!-- column  -->
            <!-- column  -->
            <div class="col-lg-3 mb-4">
              <!-- Row -->
              <div class="row">
                <div class="col-md-12">
                  <img src="https://www.wrappixel.com/demos/ui-kit/wrapkit/assets/images/team/t3.jpg" alt="wrapkit" class="img-fluid rounded-circle" />
                </div>
                <div class="col-md-12 text-center">
                  <div class="pt-2">
                    <h5 class="mt-4 font-weight-medium mb-0">Diego Rodriguez</h5>
                    <h6 class="subtitle mb-3">Arquitecto</h6>
                    <p>Cualquier diseño es posible gracias a nuestro experto y su gran experiencia en la industria.</p>
                    <ul class="list-inline">
                      <li class="list-inline-item"><a href="#" class="text-decoration-none d-block px-1"><i class="icon-social-facebook"></i></a></li>
                      <li class="list-inline-item"><a href="#" class="text-decoration-none d-block px-1"><i class="icon-social-twitter"></i></a></li>
                      <li class="list-inline-item"><a href="#" class="text-decoration-none d-block px-1"><i class="icon-social-instagram"></i></a></li>
                      <li class="list-inline-item"><a href="#" class="text-decoration-none d-block px-1"><i class="icon-social-behance"></i></a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <!-- Row -->
            </div>
            <!-- column  -->
            <!-- column  -->
            <div class="col-lg-3 mb-4">
              <!-- Row -->
              <div class="row">
                <div class="col-md-12">
                  <img src="https://www.wrappixel.com/demos/ui-kit/wrapkit/assets/images/team/t4.jpg" alt="wrapkit" class="img-fluid rounded-circle" />
                </div>
                <div class="col-md-12 text-center">
                  <div class="pt-2">
                    <h5 class="mt-4 font-weight-medium mb-0">Karina Rosas</h5>
                    <h6 class="subtitle mb-3">Administradora</h6>
                    <p>La mejor asesoria para que puedas costear tus proyectos de manera eficaz.</p>
                    <ul class="list-inline">
                      <li class="list-inline-item"><a href="#" class="text-decoration-none d-block px-1"><i class="icon-social-facebook"></i></a></li>
                      <li class="list-inline-item"><a href="#" class="text-decoration-none d-block px-1"><i class="icon-social-twitter"></i></a></li>
                      <li class="list-inline-item"><a href="#" class="text-decoration-none d-block px-1"><i class="icon-social-instagram"></i></a></li>
                      <li class="list-inline-item"><a href="#" class="text-decoration-none d-block px-1"><i class="icon-social-behance"></i></a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <!-- Row -->
            </div>
          </div>
        </div>
      </div>
</section>


<x-modal id="materiales" title="Venta De Materiales"
content="En Construmex, te ofrecemos los mejores materiales de construcción 
para tus proyectos, contamos con más de 2000 provedores tanto nacionales como extranjeros, siempre
adaptandonos a tu presupuesto, te ayudamos a hacer realidad tus sueños." 
img="/imagenes/about/Servicio 1.webp"> </x-modal>

<x-modal id="cotizacion" title="Cotización"
content="Te brindamos asesoramiento financiero para tus proyectos, brindando la mejor relación
calidad-precio del mercado en base a tus necesidades y capital, nuestros expertos
te generan una variedad de presupuestos o planes de pago si asi lo deseas, con nuestro provedores." 
img="/imagenes/about/Servicio 2.webp"> </x-modal>

<x-modal id="proyectos" title="Desarrollo De Proyectos"
content="Contamos con una gran variedad de expertos en distintas areas para el desarrollo de tus proyectos,
si tienes una idea, nosotros la hacemos realidad. Te brindamos apoyo y gestion en todas las fases de tu
contrucción, desde logistica, materiales y equipo de trabajo, o lo que se adapte a tus necesidades, nuestro compromiso
es tu satisfacción y realizacion de tu proyecto en todo momento." 
img="/imagenes/about/Servicio 3.webp"> </x-modal>







@endsection