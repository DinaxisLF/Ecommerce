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
              <div class="container"></div>
              <button class="btn mb-2 me-1 active" data-filter="todo">Todo</button>
              <button class="btn mb-2 me-1" data-filter="construccion">Construcción</button>
              <button class="btn mb-2 mx-1" data-filter="aceros">Aceros</button>
              <button class="btn mb-2 mx-1" data-filter="plomeria">Plomeria</button>
              <button class="btn mb-2 mx-1" data-filter="herramientas">Herramientas</button>
              <div class="row-md-3 row-lg-3 row-xl-3 mx-auto mt-3 text-center">
                <div class="row px-2 mt-4 gap-5" id="filterable-cards">
  
           <!-- Construccion -->  
          <x-cards data="construccion" id="Otro" title="Ladrillo Bóveda" desc="20x20x9" 
            img="/imagenes/catalogo/construccion/Ladrillo Boveda.webp">
          </x-cards>
  
          <x-cards data="construccion" id="Otro" title="Ladrillo Tabique" desc="24x11.5x6 cm" 
            img="/imagenes/catalogo/construccion/Ladrillo Tabique.png">
          </x-cards>
  
          <x-cards data="construccion" id="Otro" title="Ladrillo Azotea" desc="17x17 cm" 
            img="/imagenes/catalogo/construccion/Ladrillo Azotea.webp">
          </x-cards>
  
          <x-cards data="construccion" id="Otro" title="Ladrillo Pecho Paloma" desc="23x11.5x5 cm" 
            img="/imagenes/catalogo/construccion/Ladrillo Paloma.png">
          </x-cards>
  
          <x-cards data="construccion" id="Estrublock" title="Block Solido" desc="10x14x28 cm" 
            img="/imagenes/catalogo/construccion/Block Solido.png">
          </x-cards>
  
          <x-cards data="construccion" id="Estrublock" title="Block Hueco" desc="20x20x40 cm" 
            img="/imagenes/catalogo/construccion/Block Hueco.png">
          </x-cards>
  
          <x-cards data="construccion" id="Estrublock" title="Block Hueco Losa" desc="15x20x40 cm" 
            img="/imagenes/catalogo/construccion/Block Hueco Losa.png">
          </x-cards>
          
          <x-cards data="construccion" id="Estrublock" title="Block Split" desc="15x20x40 cm" 
            img="/imagenes/catalogo/construccion/Block Split.png">
          </x-cards>
  
          <x-cards data="construccion" id="Estrublock" title="Block Split Solido" desc="15x20x40 cm" 
            img="/imagenes/catalogo/construccion/Block Split Solido.png">
          </x-cards>
  
          <x-cards data="construccion"  id="Estrublock" title="Boveduca" desc="80x10x25 cm" 
            img="/imagenes/catalogo/construccion/Boveduca 80.png">
          </x-cards>
  
          <x-cards data="construccion" id="Estrublock" title="Boveduca" desc="90x10x20 cm" 
            img="/imagenes/catalogo/construccion/Boveduca 90.png">
          </x-cards>
  
          <x-cards data="construccion" id="Estrublock" title="Boveduca" desc="100x10x20 cm" 
            img="/imagenes/catalogo/construccion/Boveduca 100.png">
          </x-cards>
  
          <x-cards data="construccion" id="Cemex" title="Cemento Gris" desc="50 Kg" 
            img="/imagenes/catalogo/construccion/Cemento Gris.png">
          </x-cards>
  
          <x-cards data="construccion" id="Cemex" title="Cemento Mortero" desc="50 Kg" 
            img="/imagenes/catalogo/construccion/Cemento Mortero.png">
          </x-cards>
  
          <x-cards data="construccion" id="Cemex" title="Cemento Impercem" desc="50 Kg" 
            img="/imagenes/catalogo/construccion/Cemento Impercem.png">
          </x-cards>
  
          <x-cards data="construccion" id="Cemex" title="Cemento Blanco" desc="50 Kg" 
            img="/imagenes/catalogo/construccion/Cemento Blanco.png">
          </x-cards>
  
          <!-- Aceros -->
  
          <x-cards data="aceros"  id="Armacel" title="Armex" desc="15-15-4" m="6m" 
            img="/imagenes/catalogo/aceros/15-15-4.webp">
          </x-cards>
  
          <x-cards data="aceros" id="Armacel" title="Armex" desc="15-20-4" m="6m" 
            img="/imagenes/catalogo/aceros/15-20-4.jpg">
          </x-cards>
  
          <x-cards data="aceros" id="Armacel" title="Armex" desc="15-25-4" m="6m" 
            img="/imagenes/catalogo/aceros/15-25-4.jpg">
          </x-cards>
          <x-cards data="aceros" id="Armacel" title="Armex" desc="15-30-4" m="6m" 
            img="/imagenes/catalogo/aceros/15-30-4.webp">
          </x-cards>
  
          <x-cards data="aceros" id="Armacel" title="Armex" desc="12-12-4" m="6m" 
            img="/imagenes/catalogo/aceros/12-12-4.jpg">
          </x-cards>
  
          <x-cards data="aceros" id="Armacel" title="Armex" desc="12-20-4" m="6m" 
            img="/imagenes/catalogo/aceros/12-20-4.jpg">
          </x-cards>
  
          <x-cards data="aceros" id="Armacel" title="Armex" desc="12-12-3" m="6m" 
            img="/imagenes/catalogo/aceros/12-12-3.webp">
          </x-cards>
          
          <x-cards data="aceros" id="Armacel" title="Armex" desc="15-15-3" m="6m" 
            img="/imagenes/catalogo/aceros/15-15-3.webp">
          </x-cards>
  
          <x-cards data="aceros" id="AcerosMex" title="Viga IPS" desc="4'" m="10m" 
            img="/imagenes/catalogo/aceros/Viga IPS.jpg">
          </x-cards>
  
          <x-cards data="aceros" id="AcerosMex" title="Viga IPS" desc="5'" m="10m" 
            img="/imagenes/catalogo/aceros/Viga IPS.jpg">
          </x-cards>
  
          <x-cards data="aceros" id="AcerosMex" title="Viga IPS" desc="6'" m="10m" 
            img="/imagenes/catalogo/aceros/Viga IPS.jpg">
          </x-cards>
  
          <x-cards data="aceros" id="AcerosMex" title="Viga IPS" desc="8'" m="10m" 
            img="/imagenes/catalogo/aceros/Viga IPS.jpg">
          </x-cards>
  
          <!-- Plomeria -->
          <x-cards data="plomeria" id="Rotoplas" title="Tinaco" desc="450 Lt"
            img="/imagenes/catalogo/plomeria/Tinaco-450.webp">
          </x-cards>
  
          <x-cards data="plomeria" id="Rotoplas" title="Tinaco" desc="1100 Lt"
            img="/imagenes/catalogo/plomeria/Tinaco-100.webp">
          </x-cards>
  
          <x-cards data="plomeria" id="Rotoplas" title="Tinaco" desc="2000 Lt"
            img="/imagenes/catalogo/plomeria/Tinaco-2000.webp">
          </x-cards>
  
          <x-cards data="plomeria" id="Rotoplas" title="Tinaco" desc="2500 Lt"
            img="/imagenes/catalogo/plomeria/Tinaco-2500.webp">
          </x-cards>
  
          <x-cards data="plomeria" id="Truper" title="Bomba Centrifuga" desc="1 Hp"
            img="/imagenes/catalogo/plomeria/centrifuga-1.webp">
          </x-cards>
  
          <x-cards data="plomeria"  id="Truper" title="Bomba Centrifuga" desc="3/4 Hp"
            img="/imagenes/catalogo/plomeria/centrifuga-3-4.webp">
          </x-cards>
  
          <x-cards data="plomeria"  id="Truper" title="Bomba Sumergible" desc="1/2 Hp"
            img="/imagenes/catalogo/plomeria/Sumergible-1-2.webp">
          </x-cards>
  
          <x-cards data="plomeria" id="Truper" title="Bomba Periferica" desc="1/2 Hp"
            img="/imagenes/catalogo/plomeria/periferica1-2.webp">
          </x-cards>
  
          <x-cards data="plomeria" id="Rotoplas" title="Tuboplus" desc=" 25 mm 3/4'" m="6m"
            img="/imagenes/catalogo/plomeria/tuboplus-3-4.webp">
          </x-cards>
  
          <x-cards data="plomeria"  id="Rotoplas" title="Tuboplus" desc=" 32 mm 1'" m="6m"
            img="/imagenes/catalogo/plomeria/tuboplus-1.webp">
          </x-cards>
  
          <x-cards data="plomeria" id="Rotoplas" title="Tuboplus" desc=" 40 mm 1 1/4'" m="6m"
            img="/imagenes/catalogo/plomeria/tuboplus-1-4.webp">
          </x-cards>
  
          <x-cards data="plomeria"  id="Rotoplas" title="Tuboplus" desc=" 63 mm 2'" m="6m"
            img="/imagenes/catalogo/plomeria/tuboplus-2.webp">
          </x-cards>
          
          <!-- Herramientas -->
  
          <x-cards data="herramientas" id="Otro" title="Allanadora" desc="5A 5.5Hp"
            img="/imagenes/catalogo/herramientas/Allanadora.webp">
          </x-cards>
  
          <x-cards data="herramientas" id="Otro" title="Bailarina" desc="Masalta Compactadora"
            img="/imagenes/catalogo/herramientas/Bailarina.webp">
          </x-cards>
  
          <x-cards data="herramientas"  id="Truper" title="Carretila" desc="Llanta Reforzada"
            img="/imagenes/catalogo/herramientas/Carretilla.webp">
          </x-cards>
  
          <x-cards data="herramientas" id="Makita" title="Mini Esmeril" desc="4-1/2 10,000 Rpm"
            img="/imagenes/catalogo/herramientas/Esmeril.webp">
          </x-cards>
  
          <x-cards data="herramientas" id="Truper" title="Revolvedor Pintura" desc="80 mm Diámetro"
            img="/imagenes/catalogo/herramientas/Revolvedor-Pintura.webp">
          </x-cards>
  
          <x-cards data="herramientas" id="Cemex" title="Revolvedora De Cemento" desc="Cemex"
            img="/imagenes/catalogo/herramientas/Revolvedora.webp">
          </x-cards>
  
          <x-cards data="herramientas" id="Otro" title="Soldadora" desc="50-200 Amp 110v"
            img="/imagenes/catalogo/herramientas/Soldadora.png">
          </x-cards>
  
          <x-cards data="herramientas" id="Otro" title="Vibrador Para Concreto" desc="Motor A Gasolina"
            img="/imagenes/catalogo/herramientas/Vibrador-Concreto.webp">
          </x-cards>
          
        </div>
      </div>
            </div>


          </div>   
            
    </div>

        

</section>

@endsection