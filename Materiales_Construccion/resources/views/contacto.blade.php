@extends('plantilla.layout')

@section('contenido')
@section('titulo', 'Contactanos')

<link rel="stylesheet" href="/css/contact.css">



    <section>
        <div class="row-md-3 row-lg-3 row-xl-3 mx-auto mt-3 text-center">
            <h1 class="display-6">Contacto</h1> 
            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1zm13 2.383-4.708 2.825L15 11.105zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741M1 11.105l4.708-2.897L1 5.383z"/>
            </svg>
            
        </div>
        <div class="row-md-3 row-lg-3 row-xl-3 mx-auto mt-3 text-center">
            <span class="h4">Solicita un presupuesto para nuestros productos y descubre nuestras ofertas especiales</span>
        </div>
    </section>

    <hr>


    <section>
    <div class="py-5 team4">
        <div class="container">
          <div class="row justify-content-center mb-4">
            <div class="col-md-7 text-center">
              <h1 class="mb-3">Nuestras Redes Sociales</h1>
            </div>
          </div>
          <div class="row">
            <!-- column  -->
            <div class="col-lg-3 mb-4">
              <!-- Row -->
              <div class="row">
                <div class="col-md-12">
                  <img src="https://static.vecteezy.com/system/resources/previews/018/930/476/non_2x/facebook-logo-facebook-icon-transparent-free-png.png" alt="wrapkit" class="img-fluid rounded-circle" />
                </div>
              </div>

            </div>

            <div class="col-lg-3 mb-4">

              <div class="row">
                <div class="col-md-12">
                  <img src="https://cdn2.iconfinder.com/data/icons/simple-social-media-shadow/512/3-512.png" alt="wrapkit" class="img-fluid rounded-circle" />
                </div>

              </div>

            </div>

            <div class="col-lg-3 mb-4">

              <div class="row">
                <div class="col-md-12">
                  <img src="https://cdn.icon-icons.com/icons2/2642/PNG/512/google_mail_gmail_logo_icon_159346.png" alt="wrapkit" class="img-fluid rounded-circle" />
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
                  <img src="https://img.freepik.com/vector-gratis/icono-redes-sociales-vector-instagram-7-junio-2021-bangkok-tailandia_53876-136728.jpg?size=338&ext=jpg&ga=GA1.1.1687694167.1714867200&semt=ais" alt="wrapkit" class="img-fluid rounded-circle" />
                </div>
                
              </div>
              <!-- Row -->
            </div>
          </div>
        </div>
      </div>
</section>




    <div class="contact-container">
        <div class="contact-info">
            <h2>Información de contacto</h2>
            <p><i class="fas fa-envelope"></i> construmex@gmail.com</p>
            <p><i class="fas fa-phone"></i> +52 3398614520</p>
            <p><i class="fas fa-map-marker-alt"></i> C. Hidalgo 8, 45340 San Isidro Mazatepec, Jal.</p>
            <a href="https://www.facebook.com/"><i class="fab fa-facebook"></i> Facebook</a>
            <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i> Instagram</a>
            <a href="https://mx.linkedin.com/"><i class="fab fa-linkedin"></i> LinkedIn</a>
        </div>
        
        <div class="contact-form">
            <h2>Contactanos</h2>
            <input type="text" placeholder="Nombre completo*" required>
            <input type="email" placeholder="Correo electronico*" required>
            <input type="tel" name="phone" id="phone" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" placeholder="Celular*" required>
            <textarea placeholder="Mensaje*" required></textarea>
            <button>Enviar Mensaje</button>
        </div>
    </div>

  




@endsection