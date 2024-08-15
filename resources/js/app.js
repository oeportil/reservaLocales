import './bootstrap';

const botonReservar = document.getElementById("reservar");
const reservacionContenedor = document.getElementById("reservacionContenedor");
reservacionContenedor.classList.add("hidden");
botonReservar.addEventListener('click', () =>{
    reservacionContenedor.classList.toggle("hidden");
    if(botonReservar.innerHTML == "Reservar"){
        botonReservar.innerHTML = "No Reservar";
    }else {
        botonReservar.innerHTML = "Reservar";
    }
})