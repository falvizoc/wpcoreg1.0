<x-app-layout>
  <!-- Seccion principal -->
  <section class="relative text-white bg-center bg-cover" style="background-image:url({{asset('img/home/sobre-nosotros.png')}})">
    <div class="relative z-50">
      <div class="max-w-md md:max-w-6xl mx-auto flex flex-col items-center justify-center py-32 text-center">
        <h1 class="text-2xl md:text-4xl font-bold tracking-wide" data-aos="fade-down" data-aos-anchor-placement="top-bottom" data-aos-duration="1000">
          Compromiso e Innovación en Soluciones Industriales
        </h1>
        <p class="mt-6 text-base md:text-xl text-white font-light" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="1000">
          En COREG, ofrecemos equipos industriales de alta calidad, mantenimiento y servicio personalizado para garantizar el éxito de tus proyectos.
        </p>
        <div class="mt-8 flex flex-wrap gap-4 justify-center" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="1000">
          <a href="#sobre-nosotros" class="text-sm md:text-base px-8 py-3 bg-yellow-400 text-black rounded-lg font-semibold hover:bg-yellow-500 transition duration-300">
            Conócenos Más
          </a>
          <a href="{{route('contacto')}}" class="text-sm md:text-base px-8 py-3 border border-white text-white rounded-lg font-semibold hover:bg-white hover:text-black transition duration-300">
            Contáctanos
          </a>
        </div>
      </div>
    </div>
    <div class="absolute opacity-img"></div> <!-- Capa de opacidad -->
  </section>

  <!-- Por que elegir a COREG -->
  <section class="py-12 md:py-16 bg-gray-50">
    <div class="container mx-auto text-center">
      <h2 class="text-xl md:text-3xl text-gray-900 mb-6">
        ¿Por qué elegir <b>COREG</b>?
      </h2>
      <p class="max-w-4xl mx-auto text-base md:text-lg text-gray-600 mb-12">
        COREG ofrece más de 20 años de experiencia en la venta y mantenimiento de maquinaria industrial, brindando soluciones personalizadas y un servicio al cliente excepcional.
      </p>
      <div class="mx-4 grid grid-cols-1 md:grid-cols-3 gap-8">
        <div class="bg-white p-6 rounded-2xl shadow-lg" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="1000">
          <span class="inline-block mb-4 px-4 py-2 text-xl uppercase font-semibold bg-sky-200 text-coreg rounded-full">
            <i class="fa fa-award"></i>
          </span>
          <h3 class="text-base md:text-lg font-semibold text-gray-800 mb-4">
            Experiencia y Calidad
          </h3>
          <p class="text-sm md:text-base text-gray-600">
            Trabajamos con las mejores marcas del mercado para asegurar que cada proyecto cuente con equipos de calidad y durabilidad.
          </p>
        </div>
        <div class="bg-white p-6 rounded-2xl shadow-lg" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="1000">
          <span class="inline-block mb-4 px-3 py-2 text-xl uppercase font-semibold bg-sky-200 text-coreg rounded-full">
            <i class="fa fa-headset"></i>
          </span>
          <h3 class="text-base md:text-lg font-semibold text-gray-800 mb-4">
            Soporte 24/7
          </h3>
          <p class="text-sm md:text-base text-gray-600">
            Nuestro equipo de mantenimiento está disponible las 24 horas del día para asegurar que tu maquinaria funcione de manera óptima sin interrupciones.
          </p>
        </div>
        <div class="bg-white p-6 rounded-2xl shadow-lg" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="1000">
          <span class="inline-block mb-4 px-3 py-2 text-lg uppercase font-semibold bg-sky-200 text-coreg rounded-full">
            <i class="fa fa-cogs"></i>
          </span>
          <h3 class="text-base md:text-lg font-semibold text-gray-800 mb-4">
            Soluciones Personalizadas
          </h3>
          <p class="text-sm md:text-base text-gray-600">
            Nos adaptamos a las necesidades de cada cliente, ofreciendo soluciones integrales desde la venta hasta el mantenimiento de maquinaria.
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- Sobre COREG -->
  <section id="sobre-nosotros" class="py-12 md:py-16 bg-white">
    <div class="container mx-auto grid grid-cols-1 md:grid-cols-2 gap-10 items-center">
      <div class="order-2 md:order-1" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="1000">
        <h2 class="text-3xl md:text-4xl mb-6 text-coreg">
          Sobre <b>COREG</b>
        </h2>
        <p class="text-gray-600 text-lg mb-4">
          COREG es líder en el sector industrial con más de 20 años de experiencia en la venta, alquiler y mantenimiento de maquinaria de construcción y transporte. Nos destacamos por ofrecer productos de alta calidad y un servicio personalizado a nuestros clientes.
        </p>
        <p class="text-gray-600 text-lg mb-4">
          Nos comprometemos a mejorar continuamente nuestros servicios para garantizar la satisfacción de cada cliente, con soluciones que abarcan desde la venta de maquinaria nueva y usada hasta el mantenimiento preventivo y correctivo.
        </p>
        <p class="text-gray-600 text-lg mb-4">
          Nuestro equipo está listo para atender tus necesidades, brindando atención personalizada y soluciones que maximizan la productividad de tus operaciones.
        </p>
      </div>
      <div class="order-1 md:order-2" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="1000">
        <img class="rounded-2xl shadow-lg h-96 w-full object-cover object-center" src="{{asset('img/home/empleados-de-coreg.png')}}" alt="Equipo de COREG trabajando">
      </div>
    </div>
  </section>

  <!-- Llamado a la acción-->
  <x-llamado-a-la-accion />

</x-app-layout>
