// Select relevant HTML elements
const filterButtons = document.querySelectorAll("#filter-buttons button");
const marca = document.querySelector("#marcas")
const precioMin = document.querySelector("#precioMin")
const precioMax = document.querySelector("#precioMax")
const filterableCards = document.querySelectorAll("#filterable-cards .card");


const products ={
    AcerosMex: document.getElementById("AcerosMex"),
    Armacel: document.getElementById("Armacel"),
    Cemex: document.getElementById("Cemex"),
    Estrublock: document.getElementById("Estrublock"),
    Maquita: document.getElementById("Maquita"),
    Rotoplas: document.getElementById("Rotoplas"),
    Truper : document.getElementById("Truper"),
    Otro : document.getElementById("Otro")

}

const search = {
    marca:'',
    precioMin:'',
    precioMax:'',
}



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

//Filter Events
marca.addEventListener('change', e => {
    search.marca = e.target.value;

    filterProducts()

});

precioMin.addEventListener('change', e => {
    search.precioMin = e.target.value;
});

precioMax.addEventListener('change', e => {
    search.precioMax = e.target.value;
});

filterButtons.forEach(button => button.addEventListener("click", filterCards));


function filterProducts(){

    const resultado = products.filter(filterMarcas);

}

function filterMarcas(products){
    console.log(products)
}