const header=document.querySelector("#header");
const contenedor=document.querySelector("#contenedor");
const body=document.querySelector("body");
const productId = event.target.dataset.productId;
const product = {
    id: productId,
    name: "Nombre del producto",
    price: 10,
    quantity: 1
    };
window.addEventListener("scroll", function()){
    if(contenedor.getBoundingClientRect().top<10){
        header.classList.add("sroll")
    }
    else{
        header.classList.remove("sroll")
    }
}