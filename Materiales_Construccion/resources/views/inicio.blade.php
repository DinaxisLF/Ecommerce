@extends('plantilla.layout')


@section('contenido')
@section('titulo', 'inicio')
<div class="container-carrousel">

  <div id="carousel_inicio" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner carousel-fade">
      <div class="carousel-item active">
        <img class="d-block w-100" src="/imagenes/1.jpg" alt="...">

        <div class="carousel-caption d-none d-md-block">
          <h1>Construyendo Sueños</h1>
        </div>
      </div>

      <div class="carousel-item">
        <img class="d-block w-100" src="/imagenes/2.jpg"  alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h1>Todo Es Posible</h1>
        </div>
      </div>

      <div class="carousel-item">
        <img class="d-block w-100" src="/imagenes/3.jpg" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Más Alla De Los Limites</h5>
        </div>
      </div>

    </div>
  </div>

</div>
<hr>

<div class="container">
  <div class="row-md-3 row-lg-3 row-xl-3 mx-auto mt-3 text-center">
    <h3>
      Estas a un paso de hacer realidad tus sueños
    </h3>
  </div>
</div>
<hr>

<div class="container">
  <div class="row">

    <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
      <div class="card" style="width: 18rem;">
        <img src="/imagenes/about/Servicio 1.webp" class="card-img-top" style="height: 300px; alt="...">
        <div class="card-body text-center">
          <h5 class="card-title">Construcción</h5>
          <a href="#" class="btn btn-primary">Ir</a>
        </div>
      </div>
    </div>
    <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
      <div class="card" style="width: 18rem;">
        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/82/Hand_tools.jpg/1200px-Hand_tools.jpg"   style="height: 300px; class="card-img-top" alt="...">
        <div class="card-body text-center">
          <h5 class="card-title">Herramientas</h5>
          <a href="#" class="btn btn-primary">Ir</a>
        </div>
      </div>
    </div>
    <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
      <div class="card" style="width: 18rem;">
        <img src="https://todoferreteria.com.mx/wp-content/uploads/2023/07/acero-e1689115062663.png" style="height: 300px; class="card-img-top" alt="...">
        <div class="card-body text-center">
          <h5 class="card-title">Otros</h5>
          <a href="#" class="btn btn-primary">Ir</a>
        </div>
      </div>
    </div>

  </div>
</div>

<br> <br>

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

<section class="page-section" id="contact">
  <div class="container">
      <div class="text-center">
          <h2 class="section-heading text-uppercase">Contactanos</h2>
      </div>
      <form id="contactForm" data-sb-form-api-token="API_TOKEN">
          <div class="row align-items-stretch mb-5">
              <div class="col-md-6">
                  <div class="form-group">
                      
                      <input class="form-control" id="name" type="text" placeholder="Your Name *" data-sb-validations="required" />
                      <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                  </div>
                  <div class="form-group">
                      
                      <input class="form-control" id="email" type="email" placeholder="Your Email *" data-sb-validations="required,email" />
                      <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                      <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                  </div>
                  <div class="form-group mb-md-0">
                     
                      <input class="form-control" id="phone" type="tel" placeholder="Your Phone *" data-sb-validations="required" />
                      <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is required.</div>
                  </div>
              </div>
              <div class="col-md-6">
                  <div class="form-group form-group-textarea mb-md-0">
                      
                      <textarea class="form-control" id="message" placeholder="Your Message *" data-sb-validations="required"></textarea>
                      <div class="invalid-feedback" data-sb-feedback="message:required">A message is required.</div>
                  </div>
              </div>
          </div>
          <div class="d-none" id="submitSuccessMessage">
              <div class="text-center text-white mb-3">
                  <div class="fw-bolder">Form submission successful!</div>
                  To activate this form, sign up at
                  <br />
                  <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
              </div>
          </div>

          <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error sending message!</div></div>

          <div class="text-center"><button class="btn btn-primary btn-xl text-uppercase" id="submitButton" type="submit">Send Message</button></div>
      </form>
  </div>
</section>




@endsection
