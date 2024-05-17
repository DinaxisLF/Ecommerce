// Select relevant HTML elements
const filterButtons = document.querySelectorAll("#filter-buttons button");
const min = document.querySelector("#Min")
const max = document.querySelector("#Max")
const marca = document.querySelector("#Marca")
const gallery = document.querySelector("#filterable-cards");


const search = {
    marca: '',
    min: '',
    max: ''
}


document.addEventListener('DOMContentLoaded', () => {

    showProducts(products);

    


      //Filters Events

      marca.addEventListener('change', e => {
        search.marca = e.target.value;

        filterProduct();

      })

      min.addEventListener('change', e => {
        search.min = e.target.value;

        filterProduct();
      })

      max.addEventListener('change', e => {
        search.max = e.target.value;

        filterProduct();

      })

      function filterProduct(){

        const result = products.filter(filterMarca).filter(filterMin).filter(filterMax);
        showProducts(result);

      }

      function filterMarca(product){
        const {marca} = search;
            if(marca){
                return product.marca === marca;
            }
            return product;
      }

      function filterMin(product){
        const {min} = search;
            if(min){
                console.log(product)
                return product.precio >= min;
                
            }
            return product;

      }

      function filterMax(product){
        const {max} = search;
            if(max){
                console.log(product)
                return product.precio <= max;
                
            }
            return product;

      }
      


})


function clearGallery(){

    while(gallery.firstChild){
        gallery.removeChild(gallery.firstChild);
    }

}


function showProducts(products){

    clearGallery();

    products.forEach(product => {

        const card = document.createElement('div');
        card.classList = 'card p-0';

        card.setAttribute('data-name', `${product.categoria}`);
        const img = document.createElement('img');
        img.classList = 'img-gallery';
        img.src = product.img_route;

        const cardBody = document.createElement('div');
        cardBody.classList = 'card-body';

        const title = document.createElement('h6');
        title.classList = 'card-title';
        title.textContent = product.nombre;

        const desc = document.createElement('p');
        desc.classList = 'card-text';
        desc.textContent = product.descripcion;

        const space = document.createElement('br')

        const show = document.createElement('a');
        show.classList = 'btn btn-primary';
        show.setAttribute('href', `/producto?article=${product.nombre}`)
        show.textContent = 'Ver';

        card.appendChild(img)
        cardBody.appendChild(title);
        cardBody.appendChild(desc);
        cardBody.appendChild(space)
        cardBody.appendChild(show)
        
        

        

    card.appendChild(cardBody);

    gallery.appendChild(card);

    const filterableCards = document.querySelectorAll("#filterable-cards .card");

    // Function to filter cards based on filter buttons
    const filterCards = (e) => {
    document.querySelector("#filter-buttons .active").classList.remove("active");
    e.target.classList.add("active");


    filterableCards.forEach(card => {
        // show the card if it matches the clicked filter or show all cards if "all" filter is clicked
        if(card.dataset.name === e.target.dataset.filter || e.target.dataset.filter === "todo") {
            return card.classList.replace("hide", "show");
        }
        card.classList.add("hide");
    });
}


    filterButtons.forEach(button => button.addEventListener("click", filterCards));

    //Search Products
    document.addEventListener("keyup", e=>{

        if (e.target.matches("#searchbar")){
      
            if (e.key ==="Escape")e.target.value = ""
      
            filterableCards.forEach(card =>{
      
                card.textContent.toLowerCase().includes(e.target.value.toLowerCase())
                  ?card.classList.replace("hide", "show")
                  :card.classList.add("hide")
            })
      
        }
      })

    });

    

}

  const products = [

    {
        nombre: 'Ladrillo Boveda',
        marca: 'Otro',
        precio: 2500, 
        descripcion: '20x20x9 cm',      
        img_route: '/imagenes/catalogo/construccion/Ladrillo Boveda.webp',
        categoria: 'construccion'
    },
    {
        nombre: 'Ladrillo Tabique',
        marca: 'Otro',
        precio: 2800,  
        descripcion: '24x11.5x6 cm',
        img_route: '/imagenes/catalogo/construccion/Ladrillo Tabique.png' ,
        categoria: 'construccion'      
    },
    {
        nombre: 'Ladrillo Azotea',
        marca: 'Otro',
        precio: 1800,   
        descripcion: '17x17 cm',
        img_route: '/imagenes/catalogo/construccion/Ladrillo Azotea.webp',
        categoria: 'construccion'

    },
    {
        nombre: 'Ladrillo Pecho Paloma',
        marca: 'Otro',
        precio: 2500,      
        descripcion: '23x11.5x5 cm',
        img_route: '/imagenes/catalogo/construccion/Ladrillo Paloma.png',
        categoria: 'construccion' 
    },
    {
        nombre: 'Block Solido',
        marca: 'Estrublock',
        precio: 6000,          
        descripcion: '10x14x28 cm',
        img_route: '/imagenes/catalogo/construccion/Block Solido.png',
        categoria: 'construccion'
    },
    {
        nombre: 'Block Hueco',
        marca: 'Estrublock',
        precio: 4500,  
        descripcion: '20x20x40 cm',
        img_route: '/imagenes/catalogo/construccion/Block Hueco.png',
        categoria: 'construccion'
    },
    {
        nombre: 'Block Hueco Losa',
        marca: 'Estrublock',
        precio: 5000,          
        descripcion: '15x20x40 cm,',
        img_route: '/imagenes/catalogo/construccion/Block Hueco Losa.png',
        categoria: 'construccion'
    },
    {
        nombre: 'Block Split',
        marca: 'Estrublock',
        precio: 3500,  
        descripcion: '15x20x40 cm',
        img_route: '/imagenes/catalogo/construccion/Block Split.png',
        categoria: 'construccion'        
    },
    {
        nombre: 'Block Split Solido',
        marca: 'Estrublock',
        precio: 4250,    
        descripcion: '15x20x40 cm',
        img_route: '/imagenes/catalogo/construccion/Block Split Solido.png',
        categoria: 'construccion'      
    },
    {
        nombre: 'Boveduca',
        marca: 'Estrublock',
        precio: 8000,    
        descripcion: '80x10x25 cm',
        img_route: '/imagenes/catalogo/construccion/Boveduca 80.png',
        categoria: 'construccion'  
    },
    {
        nombre: 'Boveduca',
        marca: 'Estrublock',
        precio: 9500,    
        descripcion: '90x10x20 cm',
        img_route: '/imagenes/catalogo/construccion/Boveduca 90.png',
        categoria: 'construccion'      
    },
    {
        nombre: 'Boveduca',
        marca: 'Estrublock',
        precio: 11600,    
        descripcion: '100x10x20 cm',
        img_route: '/imagenes/catalogo/construccion/Boveduca 100.png',
        categoria: 'construccion'     
    },
    {
        nombre: 'Cemento Gris',
        marca: 'Cemex',
        precio: 2800,    
        descripcion: '50 kg',
        img_route: '/imagenes/catalogo/construccion/Cemento Gris.png',
        categoria: 'construccion'      
    },
    {
        nombre: 'Cemento Mortero',
        marca: 'Cemex',
        precio: 2600,    
        descripcion: '50 kg',
        img_route: '/imagenes/catalogo/construccion/Cemento Mortero.png',
        categoria: 'construccion'   
    },
    {
        nombre: 'Cemento Impercem',
        marca: 'Cemex',
        precio: 3600,    
        descripcion: '50 kg',
        img_route: '/imagenes/catalogo/construccion/Cemento Impercem.png',
        categoria: 'construccion'     
    },
    {
        nombre: 'Cemento Blanco',
        marca: 'Cemex',
        precio: 3000,    
        descripcion: '50 kg',
        img_route: '/imagenes/catalogo/construccion/Cemento Blanco.png',
        categoria: 'construccion'      
    },
    {
        nombre: 'Armex',
        marca: 'Armacel',
        precio: 200,    
        descripcion: '15-15-4',
        img_route: '/imagenes/catalogo/aceros/15-15-4.webp',
        categoria: 'aceros'    
    },
    {
        nombre: 'Armex',
        marca: 'Armacel',
        precio: 300,    
        descripcion: '15-20-4',
        img_route: '/imagenes/catalogo/aceros/15-20-4.jpg',
        categoria: 'aceros'        
    },
    {
        nombre: 'Armex',
        marca: 'Armacel',
        precio: 350,    
        descripcion: '15-25-4',
        img_route: '/imagenes/catalogo/aceros/15-25-4.jpg',
        categoria: 'aceros'         
    },
    {
        nombre: 'Armex',
        marca: 'Armacel',
        precio: 450,    
        descripcion: '15-30-4',
        img_route: '/imagenes/catalogo/aceros/15-30-4.webp',
        categoria: 'aceros'       
    },
    {
        nombre: 'Armex',
        marca: 'Armacel',
        precio: 180,    
        descripcion: '12-12-4',
        img_route: '/imagenes/catalogo/aceros/12-12-4.jpg',
        categoria: 'aceros'        
    },
    {
        nombre: 'Armex',
        marca: 'Armacel',
        precio: 370,    
        descripcion: '12-20-4',
        img_route: '/imagenes/catalogo/aceros/12-20-4.jpg',
        categoria: 'aceros'          
    },
    {
        nombre: 'Armex',
        marca: 'Armacel',
        precio: 195,    
        descripcion: '12-12-3',
        img_route: '/imagenes/catalogo/aceros/12-12-3.webp',
        categoria: 'aceros'         
    },
    {
        nombre: 'Armex',
        marca: 'Armacel',
        precio: 275,    
        descripcion: '15-15-3',
        img_route: '/imagenes/catalogo/aceros/15-15-3.webp',
        categoria: 'aceros'          
    },
    {
        nombre: 'Viga IPS',
        marca: 'AcerosMex',
        precio: 4500,    
        descripcion: '4"',
        img_route: '/imagenes/catalogo/aceros/Viga IPS.jpg',
        categoria: 'aceros'        
    },
    {
        nombre: 'Viga IPS',
        marca: 'AcerosMex',
        precio: 8700,    
        descripcion: '5"',
        img_route: '/imagenes/catalogo/aceros/Viga IPS.jpg',
        categoria: 'aceros'        
    },
    {
        nombre: 'Viga IPS',
        marca: 'AcerosMex',
        precio: 12500,    
        descripcion: '6"' ,
        img_route: '/imagenes/catalogo/aceros/Viga IPS.jpg',
        categoria: 'aceros'       
    },
    {
        nombre: 'Viga IPS',
        marca: 'AcerosMex',
        precio: 18900,    
        descripcion: '8"',
        img_route: '/imagenes/catalogo/aceros/Viga IPS.jpg',
        categoria: 'aceros'         
    },
    {
        nombre: 'Tinaco',
        marca: 'Rotoplas',
        precio: 1500,    
        descripcion: '450 LT',
        img_route: '/imagenes/catalogo/plomeria/Tinaco-450.webp',
        categoria: 'plomeria'         
    },
    {
        nombre: 'Tinaco',
        marca: 'Rotoplas',
        precio: 2800,    
        descripcion: '1100 LT',
        img_route: '/imagenes/catalogo/plomeria/Tinaco-100.webp',
        categoria: 'plomeria'        
    },
    {
        nombre: 'Tinaco',
        marca: 'Rotoplas',
        precio: 4200,    
        descripcion: '2000 LT',
        img_route: '/imagenes/catalogo/plomeria/Tinaco-2000.webp',
        categoria: 'plomeria'       
    },
    {
        nombre: 'Tinaco',
        marca: 'Rotoplas',
        precio: 6500,    
        descripcion: '2500 LT',
        img_route: '/imagenes/catalogo/plomeria/Tinaco-2500.webp',
        categoria: 'plomeria'         
    },
    {
        nombre: 'Bomba Centrifuga',
        marca: 'Truper',
        precio: 4500,    
        descripcion: '1 HP',
        img_route: '/imagenes/catalogo/plomeria/centrifuga-1.webp',
        categoria: 'plomeria'         
    },
    {
        nombre: 'Bomba Centrifuga',
        marca: 'Truper',
        precio: 3250,    
        descripcion: '3/4 HP',
        img_route: '/imagenes/catalogo/plomeria/centrifuga-3-4.webp',
        categoria: 'plomeria'      
    },
    {
        nombre: 'Bomba Sumergible',
        marca: 'Truper',
        precio: 3800,    
        descripcion: '1/2 HP' ,
        img_route: '/imagenes/catalogo/plomeria/Sumergible-1-2.webp',
        categoria: 'plomeria'   
    },
    {
        nombre: 'Bomba Periferica',
        marca: 'Truper',
        precio: 2300,    
        descripcion: '1/2 HP',
        img_route: '/imagenes/catalogo/plomeria/periferica1-2.webp',
        categoria: 'plomeria'        
    },
    {
        nombre: 'Tuboplus',
        marca: 'Rotoplas',
        precio: 260,    
        descripcion: '25 mm',
        img_route: '/imagenes/catalogo/plomeria/tuboplus-3-4.webp',
        categoria: 'plomeria'       
    },
    {
        nombre: 'Tuboplus',
        marca: 'Rotoplas',
        precio: 380,    
        descripcion: '32 mm',
        img_route: '/imagenes/catalogo/plomeria/tuboplus-1.webp',
        categoria: 'plomeria'        
    },
    {
        nombre: 'Tuboplus',
        marca: 'Rotoplas',
        precio: 500,    
        descripcion: '40 mm',
        img_route: '/imagenes/catalogo/plomeria/tuboplus-1-4.webp',
        categoria: 'plomeria'         
    },
    {
        nombre: 'Tuboplus',
        marca: 'Rotoplas',
        precio: 750,    
        descripcion: '63 mm',
        img_route: '/imagenes/catalogo/plomeria/tuboplus-2.webp',
        categoria: 'plomeria'       
    },
    {
        nombre: 'Allanadora',
        marca: 'Otro',
        precio: 9500,    
        descripcion: '5A 5.5 HP',
        img_route: '/imagenes/catalogo/herramientas/Allanadora.webp',
        categoria: 'herramientas'     
    },
    {
        nombre: 'Bailarina',
        marca: 'Truper',
        precio: 10360,    
        descripcion: 'Compactadora',
        img_route: '/imagenes/catalogo/herramientas/Bailarina.webp',
        categoria: 'herramientas'      
    },
    {
        nombre: 'Carretilla',
        marca: 'Truper',
        precio: 1450,    
        descripcion: 'Llanta Reforzada',
        img_route: '/imagenes/catalogo/herramientas/Carretilla.webp',
        categoria: 'herramientas'      
    },
    {
        nombre: 'Mini Esmeril',
        marca: 'Makita',
        precio: 2300,    
        descripcion: '10,000 RPM',
        img_route: '/imagenes/catalogo/herramientas/Esmeril.webp',
        categoria: 'herramientas'       
    },
    {
        nombre: 'Revolvedor Pintura',
        marca: 'Truper',
        precio: 180,    
        descripcion: '80 mm',
        img_route: '/imagenes/catalogo/herramientas/Revolvedor-Pintura.webp',
        categoria: 'herramientas'       
    },
    {
        nombre: 'Revolvedora De Cemento ',
        marca: 'Cemex',
        precio: 6800,    
        descripcion: 'Cemex',
        img_route: '/imagenes/catalogo/herramientas/Revolvedora.webp',
        categoria: 'herramientas'     
    },
    {
        nombre: 'Soldadora',
        marca: 'Otro',
        precio: 15800,    
        descripcion: '50-200 Amp 110V',
        img_route: '/imagenes/catalogo/herramientas/Soldadora.png',
        categoria: 'herramientas'      
    },
    {
        nombre: 'Vibrador Para Concreto',
        marca: 'Otro',
        precio: 19000,    
        descripcion: 'Motor A Gasolina',
        img_route: '/imagenes/catalogo/herramientas/Vibrador-Concreto.webp',
        categoria: 'herramientas'      
    },
    
]