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
          <img class="max-w-96 flex-1" src="https://media-public.canva.com/Mj5j4/MADyRgMj5j4/1/s2.jpg" alt="banner de informacion inicio">
       </div>
    </section>
    <section class="bg-principal text-white py-8">
        <div class="contenedor">
            <div class="md:grid grid-cols-3 gap-3 my-4 text-center items-center">
                <div>
                    <h4 style="font-size: 1.3rem;">Ubicados en</h4>
                    <div class="bg-slate-300 text-black mx-32 py-12 text-4xl rounded-full my-4">3</div>
                    <p>Regiones a nivel nacional.</p>
                </div>
                <div>
                  <h4 style="font-size: 1.3rem;">Contando con </h4>
                    <div class="bg-slate-400 text-black mx-32 py-12 text-4xl rounded-full my-4">9</div>
                    <p>Locales para toda clase de eventos.</p>
                </div>  
                <div>
                    <h4 style="font-size: 1.3rem;">Con disponibilidad</h4>
                    <div class="bg-slate-500 text-black mx-32 py-12 text-4xl rounded-full my-4">24/7</div>
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
                       <div class="grid grid-cols-2 gap-8 text-black">
                          <p>Cumpleaños</p>
                          <p>Quinceaños</p>
                          <p>Bodas </p>
                          <p>BabyShowers</p>
                          <p>Conciertos </p>
                          <p>Eventos </p>
                          <p>Ejecutivos  </p>
                       </div>
                    </div>
                    <img  class="max-w-96"accordion src="https://media-public.canva.com/1_3PE/MAEMZZ1_3PE/1/s.jpg" alt="">
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
