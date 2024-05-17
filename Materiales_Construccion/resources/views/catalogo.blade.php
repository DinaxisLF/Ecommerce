@extends('plantilla.layout')

@section('titulo', 'Catalogo')
@section('contenido')



<link rel="stylesheet" href="/css/catalogo.css">
<script src="/js/galeria.js" defer></script>

<section>
    <div class="row-md-3 row-lg-3 row-xl-3 mx-auto mt-3 text-center">
        <h1 class="display-6">Nuestros Productos</h1> 
        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-bag-check" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M10.854 8.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L7.5 10.793l2.646-2.647a.5.5 0 0 1 .708 0"/>
            <path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1m3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1z"/>
        </svg>
    </div>
</section>

<hr>

<section>
    <div class="container-fluid">
        <div class="row mt-5  text-center" id="filter-buttons">
            <x-filters> </x-filters>
            <div class="col-8">
              <button class="btn mb-2 me-1 active" data-filter="todo">Todo</button>
              <button class="btn mb-2 me-1" data-filter="construccion">Construcción</button>
              <button class="btn mb-2 mx-1" data-filter="aceros">Aceros</button>
              <button class="btn mb-2 mx-1" data-filter="plomeria">Plomeria</button>
              <button class="btn mb-2 mx-1" data-filter="herramientas">Herramientas</button>
            
              <div class="row-md-3 row-lg-3 row-xl-3 mx-auto mt-3 text-center">
                <div class="row px-2 mt-4 gap-5" id="filterable-cards">
  
          
        </div>
      </div>
            </div>


          </div>   
            
    </div>

        

</section>

@endsection