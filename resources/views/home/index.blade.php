<x-app-layout>

  {{-- Sliders --}}
  <div class="swiffy-slider relative h-screen slider-nav-autoplay slider-item-nogap" data-slider-nav-autoplay-interval="6000">
    <ul class="slider-container">
        <li>
            <div class="w-full mx-auto absolute top-1/2 transform -translate-y-1/3 z-30">
                  <div class="flex flex-wrap -mt-6 px-4">
                      <div class="w-full p-4 md:p-8 text-center">

                          <h1 data-aos="fade-down" data-aos-anchor-placement="top-bottom" data-aos-duration="1000" class="block uppercase mb-4 text-2xl lg:text-4xl 2xl:text-5xl font-black text-white tracking-wide">
                                Arrendamiento de Maquinaria Pesada
                          </h1>

                          <p data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="1000" class="mb-4 text-base md:text-xl text-white px-2 md:px-20">
                            En COREG proporcionamos soluciones integrales para la construcción y la industria con nuestro servicio de arrendamiento de maquinaria pesada, asegurando equipos modernos y en perfectas condiciones para sus proyectos más exigentes.
                          </p>
                          <div data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="1000" class=" inline-block mb-6 px-4 py-2">
                              <div class="flex flex-wrap items-center -m-1">
                                <div class="w-auto p-1">
                                    <a href="{{route('servicios')}}" class="text-xs md:text-sm relative group inline-block py-3 px-6 text-white bg-coreg rounded-full overflow-hidden">
                                      <div class="absolute top-0 right-full w-full h-full bg-coreghover transform group-hover:translate-x-full group-hover:scale-102 transition duration-500"></div>
                                      <div class="relative flex items-center justify-center">
                                        Ver Servicios
                                      </div>
                                    </a>
                                </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <img class="max-h-screen w-full object-cover object-center min-h-screen" src="{{asset('img/slider/camion-de-volteo-coreg.png')}}" alt="Arrendamiento de Maquinaria Pesada">
              <div class="absolute opacity-img"></div> <!-- Capa de opacidad -->
        </li>
        <li>
            <div class="w-full mx-auto absolute top-1/2 transform -translate-y-1/3 z-30">
                  <div class="flex flex-wrap -mt-6 px-4">
                      <div class="w-full p-4 md:p-8 text-center">

                          <h1 data-aos="fade-down" data-aos-anchor-placement="top-bottom" data-aos-duration="1000" class="block uppercase mb-4 text-2xl lg:text-4xl 2xl:text-5xl font-black text-white tracking-wide">
                            Mantenimiento de Equipos Industriales
                          </h1>

                          <p data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="1000" class="mb-4 text-base md:text-xl text-white px-2 md:px-20">
                            Nuestro equipo técnico altamente capacitado asegura que sus equipos industriales operen sin contratiempos, minimizando el tiempo de inactividad y maximizando la eficiencia de su operación.
                          </p>
                          <div data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="1000" class=" inline-block mb-6 px-4 py-2">
                              <div class="flex flex-wrap items-center -m-1">
                                <div class="w-auto p-1">
                                    <a href="{{route('servicios')}}" class="text-xs md:text-sm relative group inline-block py-3 px-6 text-white bg-coreg rounded-full overflow-hidden">
                                      <div class="absolute top-0 right-full w-full h-full bg-coreghover transform group-hover:translate-x-full group-hover:scale-102 transition duration-500"></div>
                                      <div class="relative flex items-center justify-center">
                                        Ver Servicios
                                      </div>
                                    </a>
                                </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <img class="max-h-screen w-full object-cover object-center min-h-screen" src="{{asset('img/slider/mantenimiento-industrial-coreg.png')}}" alt="Mantenimiento de Equipos Industriales">
              <div class="absolute opacity-img"></div> <!-- Capa de opacidad -->
        </li>
        <li>
            <div class="w-full mx-auto absolute top-1/2 transform -translate-y-1/3 z-30">
                  <div class="flex flex-wrap -mt-6 px-4">
                      <div class="w-full p-4 md:p-8 text-center">

                          <h1 data-aos="fade-down" data-aos-anchor-placement="top-bottom" data-aos-duration="1000" class="block uppercase mb-4 text-2xl lg:text-4xl 2xl:text-5xl font-black text-white tracking-wide">
                            Comercio de Maquinaria y Repuestos
                          </h1>

                          <p data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="1000" class="mb-4 text-base md:text-xl text-white px-2 md:px-20">
                            En COREG, contamos con una amplia gama de maquinaria y repuestos para la industria, asegurando que cada componente esté listo para mantener su operación en marcha sin interrupciones.
                          </p>
                          <div data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="1000" class=" inline-block mb-6 px-4 py-2">
                              <div class="flex flex-wrap items-center -m-1">
                                <div class="w-auto p-1">
                                    <a href="{{route('servicios')}}" class="text-xs md:text-sm relative group inline-block py-3 px-6 text-white bg-coreg rounded-full overflow-hidden">
                                      <div class="absolute top-0 right-full w-full h-full bg-coreghover transform group-hover:translate-x-full group-hover:scale-102 transition duration-500"></div>
                                      <div class="relative flex items-center justify-center">
                                        Ver Servicios
                                      </div>
                                    </a>
                                </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <img class="max-h-screen w-full object-cover object-center min-h-screen" src="{{asset('img/slider/comercio-maquinaria-coreg.png')}}" alt="Comercio de Maquinaria y Repuestos">
              <div class="absolute opacity-img"></div> <!-- Capa de opacidad -->
        </li>
    </ul>

    <button type="button" class="slider-nav z-30"></button>
    <button type="button" class="slider-nav slider-nav-next z-30"></button>
   
    <div class="slider-indicators ml-auto">
      <button class="active"></button>
      <button class=""></button>
      <button></button>
    </div>
</div>

<x-porque-elegirnos />

<x-servicios />

<x-testimonios />

@push('script')
<script>
  // Puedes agregar animaciones o funcionalidades extra aquí si es necesario.
</script>
@endpush
</x-app-layout>
