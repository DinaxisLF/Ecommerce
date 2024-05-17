@extends('plantilla.layout')

@section('titulo', 'Producto')
@section('contenido')

<script src="/js/productinfo.js" defer></script>

<section class="py-5">
    <div class="container">
      <div class="row gx-5">


        <aside class="col-lg-6">
          <div id = "image" class="border rounded-4 mb-3 d-flex justify-content-center">
              
            
          </div>
        </aside>


        <main class="col-lg-6">
          <div class="ps-lg-3 id = "info"">
            <h4 id="Product" class="title text-dark">
              {{$article}}
            </h4>
            <div class="d-flex flex-row my-3">
              <div class="text-warning mb-1 me-2">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
                <span class="ms-1">
                  4.5
                </span>
              </div>
              <span class="text-muted"><i class="fas fa-shopping-basket fa-sm mx-1"></i>154 orders</span>
              <span class="text-success ms-2">In stock</span>
            </div>
  
            <div id ="price"class="mb-3">
              
            </div>

            <div id="description" class="row">
  
            </div>
  
            <hr />
  
            <div class="row mb-4">
              <!-- col.// -->
              <div class="col-md-4 col-6 mb-3">
                <label class="mb-2 d-block">Cantidad</label>
                <div class="input-group mb-3" style="width: 170px;">
                  <button class="btn btn-white border border-secondary px-3" type="button" id="button-addon1" data-mdb-ripple-color="dark">
                    <i class="fas fa-minus"></i>
                  </button>
                  <input type="text" class="form-control text-center border border-secondary" placeholder="14" aria-label="Example text with button addon" aria-describedby="button-addon1" />
                  <button class="btn btn-white border border-secondary px-3" type="button" id="button-addon2" data-mdb-ripple-color="dark">
                    <i class="fas fa-plus"></i>
                  </button>
                </div>
              </div>
            </div>
            <a href="#" class="btn btn-warning shadow-0"> Comprar </a>
          </div>
        </main>
      </div>
    </div>
  </section>

 


@endsection