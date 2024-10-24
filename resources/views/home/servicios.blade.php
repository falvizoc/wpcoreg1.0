<x-app-layout>
  <!-- Hero Section -->
  <section class="relative text-white bg-center bg-cover" style="background-image:url({{asset('img/servicios/camion-coreg-transportando-escavadora.png')}})">
    <div class="relative z-50">
      <div class="container mx-auto flex flex-col items-center justify-center py-32 text-center">
        <h1 data-aos="fade-down" data-aos-anchor-placement="top-bottom" data-aos-duration="1000" class="text-2xl md:text-4xl font-bold tracking-wide">
          Soluciones Industriales Integrales
        </h1>
        <p data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="1000" class="mt-6 text-base md:text-xl text-white font-light">
          En COREG, ofrecemos servicios especializados en venta de maquinaria, mantenimiento de equipos y comercio de repuestos para garantizar la eficiencia de tus proyectos.
        </p>
        <div data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="1000" class="mt-8 flex flex-wrap gap-4 justify-center">
          <a href="#servicios" class="text-xs md:text-sm px-8 py-3 bg-yellow-400 text-black rounded-lg font-semibold hover:bg-yellow-500 transition duration-300">
            Ver Servicios
          </a>
        </div>
      </div>
    </div>
    <div class="absolute opacity-img"></div> <!-- Capa de opacidad -->
  </section>

  <!-- Servicio 1: Venta de Maquinaria -->
  <div class="bg-gray-50">
    <div class="container grid max-w-screen-xl px-4 py-10 mx-auto md:gap-6 lg:grid-cols-12">
      <div class="mr-auto place-self-center lg:col-span-7">
        <h2 data-aos="fade-down" data-aos-anchor-placement="top-bottom" data-aos-duration="1000" class="text-xl md:text-3xl font-extrabold tracking-tight leading-none text-gray-900">
          Venta de Maquinaria Industrial
        </h2>
        <p data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="1000" class="mt-4 text-lg text-gray-600">
          Ofrecemos una amplia gama de maquinaria nueva y usada, de las mejores marcas, lista para impulsar tus proyectos industriales. Equipos confiables, duraderos y adaptados a tus necesidades.
        </p>
        <a data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="1000" href="{{route('contacto')}}" class="inline-flex items-center justify-center px-5 py-3 mt-6 text-xs md:text-sm font-medium text-white bg-coreg rounded-lg hover:bg-coreghover focus:ring-4 focus:ring-blue-300">
          Saber más
        </a>
      </div>
      <div data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="1000" class="lg:col-span-5 grid grid-cols-2 gap-4">
        <img class="w-full h-36 object-cover rounded-lg" src="{{asset('img/servicios/venta-de-maquinaria/camion-coreg-con-maquinaria.png')}}" alt="Envio de escavadoras usadas y nuevas - Coreg">
        <img class="w-full h-36 object-cover rounded-lg" src="{{asset('img/servicios/venta-de-maquinaria/camion-coreg-transportando-maquinaria.png')}}" alt="Venta de escavadoras usadas y nuevas - Coreg">
        <img class="w-full h-36 object-cover rounded-lg" src="{{asset('img/servicios/venta-de-maquinaria/camion-de-volteo-coreg.png')}}" alt="Camion de Volteo - Coreg">
        <img class="w-full h-36 object-cover rounded-lg" src="{{asset('img/servicios/venta-de-maquinaria/escavadora-coreg.png')}}" alt="Excavadoras en venta - Coreg">
      </div>
    </div>
  </div>

  <!-- Servicio 2: Mantenimiento de Equipos -->
  <div class="bg-white">
    <div class="container grid max-w-screen-xl px-4 py-10 mx-auto md:gap-8 lg:grid-cols-12">
      <div data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="1000" class="lg:col-span-5 grid grid-cols-2 gap-4">
        <img class="w-full h-36 object-cover rounded-lg" src="{{asset('img/servicios/mantenimiento/1.png')}}" alt="Taller de maquinaria">
        <img class="w-full h-36 object-cover rounded-lg" src="{{asset('img/servicios/mantenimiento/2.png')}}" alt="Mantenimiento de camiones">
        <img class="w-full h-36 object-cover rounded-lg" src="{{asset('img/servicios/mantenimiento/3.png')}}" alt="Reparación de equipos">
        <img class="w-full h-36 object-cover rounded-lg" src="{{asset('img/servicios/mantenimiento/4.png')}}" alt="Mantenimiento preventivo">
      </div>
      <div class="mr-auto place-self-center lg:col-span-7">
        <h2 data-aos="fade-down" data-aos-anchor-placement="top-bottom" data-aos-duration="1000" class="text-xl md:text-3xl font-extrabold tracking-tight leading-none text-gray-900">
          Mantenimiento de Equipos
        </h2>
        <p data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="1000" class="mt-4 text-lg text-gray-600">
          Garantizamos que tu maquinaria se mantenga en óptimas condiciones. Nuestro servicio de mantenimiento preventivo y correctivo maximiza la vida útil de tus equipos, minimizando el tiempo de inactividad.
        </p>
        <a data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="1000" href="{{route('contacto')}}" class="inline-flex items-center justify-center px-5 py-3 mt-6 text-xs md:text-sm font-medium text-white bg-coreg rounded-lg hover:bg-coreghover focus:ring-4 focus:ring-blue-300">
          Saber más
        </a>
      </div>
    </div>
  </div>

  <!-- Servicio 3: Comercio de Repuestos -->
  <div class="bg-gray-50">
    <div class="container grid max-w-screen-xl px-4 py-10 mx-auto md:gap-6 lg:grid-cols-12">
      <div class="mr-auto place-self-center lg:col-span-7">
        <h2 data-aos="fade-down" data-aos-anchor-placement="top-bottom" data-aos-duration="1000" class="text-xl md:text-3xl font-extrabold tracking-tight leading-none text-gray-900">
          Comercio de Repuestos
        </h2>
        <p data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="1000" class="mt-4 text-lg text-gray-600">
          Disponemos de una amplia variedad de repuestos industriales de las mejores marcas. Encuentra los componentes que necesitas para mantener tu maquinaria en funcionamiento.
        </p>
        <a data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="1000" href="{{route('contacto')}}" class="inline-flex items-center justify-center px-5 py-3 mt-6 text-xs md:text-sm font-medium text-white bg-coreg rounded-lg hover:bg-coreghover focus:ring-4 focus:ring-blue-300">
          Saber más
        </a>
      </div>
      <div data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="1000" class="lg:col-span-5 grid grid-cols-2 gap-4">
        <img class="w-full h-36 object-cover rounded-lg" src="{{asset('img/servicios/comercio-de-repuestos/1.png')}}" alt="Repuestos industriales">
        <img class="w-full h-36 object-cover rounded-lg" src="{{asset('img/servicios/comercio-de-repuestos/2.png')}}" alt="Componentes industriales">
        <img class="w-full h-36 object-cover rounded-lg" src="{{asset('img/servicios/comercio-de-repuestos/3.png')}}" alt="Partes para maquinaria">
        <img class="w-full h-36 object-cover rounded-lg" src="{{asset('img/servicios/comercio-de-repuestos/4.png')}}" alt="Repuestos de camiones">
      </div>
    </div>
  </div>

  <x-testimonios />
</x-app-layout>
