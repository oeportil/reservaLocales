<x-app-layout>

    <style>
      .banner{        
        background: url('{{ asset('images/header.jpg') }}');
        background-position: center center;
        background-size: cover;
        background-repeat: no-repeat;
        height: 70vh;
        width: 100%;
        position: relative;
      }
      .opacidad {
            background-color: rgba(0, 0, 0, 0.5); /* Fondo negro semi-transparente */
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
        }
    </style>

    <div class="text-center banner flex flex-col justify-center items-center">
        
        <div class="z-10">
          <h1 class="text-white" style="font-size: 2.5rem; font-weight: bold; text-transform: uppercase;">Consigue el lugar de tus sueños</h1>
          <h3 class="text-white"  style="font-size: 1rem;  font-weight: bold; text-transform: uppercase;">y Haz tu fiesta Ideal</h3>
        </div>
        <div class="opacidad"></div>
      </div>
    <section class="contenedor py-8">
        <h4 class="text-center" style="font-size: 1.5rem;">
            TUS EVENTOS EN TU LUGAR DESEADO
        </h4>
       <div class="md:flex gap-4 items-center my-8">
          <p class="text-justify">Etiam vel maximus urna, rutrum euismod risus. 
              Integer condimentum justo tortor, quis auctor nisl faucibus ac. 
              Sed in diam a nulla sollicitudin cursus. Mauris orci ipsum, feugiat ac nisl non, posuere lobortis enim.
              Vivamus non cursus leo. Curabitur consectetur dignissim nisl, eget vehicula arcu mattis at. </p>
          <img class="md:max-w-96 flex-1 w-11/12" src="https://media-public.canva.com/Mj5j4/MADyRgMj5j4/1/s2.jpg" alt="banner de informacion inicio">
       </div>
    </section>
    <section class="bg-principal text-white py-8">
        <div class="contenedor">
            <div class="lg:grid grid-cols-3 gap-3 my-4 text-center items-center">
                <div>
                    <h4 style="font-size: 1.3rem;">Ubicados en</h4>
                    <div class="bg-slate-300 text-black mx-32 py-12 md:text-4xl text-xl rounded-full my-4">3</div>
                    <p>Regiones a nivel nacional.</p>
                </div>
                <div>
                  <h4 style="font-size: 1.3rem;">Contando con </h4>
                    <div class="bg-slate-400 text-black mx-32 py-12 md:text-4xl text-xl rounded-full my-4">9</div>
                    <p>Locales para toda clase de eventos.</p>
                </div>  
                <div>
                    <h4 style="font-size: 1.3rem;">Con disponibilidad</h4>
                    <div class="bg-slate-500 text-black mx-32 py-12 md:text-4xl text-xl rounded-full my-4 ">24/7</div>
                    <p>Todos los días incluidos días festivos.</p>
                </div>
            </div>
            <div class="contenedor py-8">
                <h4 class="text-center" style="font-size: 1.5rem;">
                  PARA TODO USO DE EVENTOS Y FIESTAS                
                </h4>
                <div class="md:grid grid-cols-2 items-center justify-center py-4 my-8 mx-10 bg-white 
                              rounded-2xl shadow-2xl">
                    <div class="mx-auto">
                       <div class="grid md:grid-cols-2 gap-8 text-black justify-center">
                          <p>Cumpleaños</p>
                          <p>Quinceaños</p>
                          <p>Bodas </p>
                          <p>BabyShowers</p>
                          <p>Conciertos </p>
                          <p>Eventos </p>
                          <p>Ejecutivos  </p>
                       </div>
                    </div>
                    <img  class="max-w-96 rounded-2xl w-11/12 mx-auto" accordion src="https://media-public.canva.com/1_3PE/MAEMZZ1_3PE/1/s.jpg" alt="">
                </div>
            </div>
        </div>
    </section>
    <section class="py-8">
        <h4 class="text-center" style="font-size: 1.5rem;">
            CONTÁCTANOS
        </h4>
        <div class="contenedor md:flex justify-center gap-4 items-center py-4 mx-auto">
            <iframe class=" w-11/12 md:w-auto" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15487.096214539877!2d-89.57805450000001!3d13.97205035!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f62e8f193eda62f%3A0xd40e3f2801fddb61!2sFacultad%20Multidisciplinaria%20de%20Occidente%20UES!5e0!3m2!1ses!2ssv!4v1722308139717!5m2!1ses!2ssv" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            <div>
              <p>
              Oficina central: Colonia San Rafael, entre 14 Av. sur y 5ta calle oriente, San Vicente.
              </p>
              <p> Correo: fitoelmolinoslocals@gmail.com</p>
              <p>  Teléfonos: 2356-3451 / 7643-4681</p>
              <p> Horarios de Atención: Lunes a Domingo</p>
              <p>De 6:00a.m. a 9:00p.m.</p>
              <p>Sin cerrar al mediodía</p>
            </div>
        </div>
    </section>
</x-app-layout>
