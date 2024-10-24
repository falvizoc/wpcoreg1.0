<x-app-layout>

      <section class="py-12 md:py-16 relative text-white bg-center bg-cover" style="background-image:url({{asset('img/home/sobre-nosotros.png')}})">
        <div class="relative container mx-auto text-center z-50">
          <h2 class="text-xl md:text-3xl mb-6">
            Solicitar <b>Cotización</b>
          </h2>
          <p class="max-w-4xl mx-auto text-sm md:text-base">
            En COREG, estamos comprometidos en ofrecerte las mejores soluciones industriales. Solicita tu cotización y descubre cómo podemos ayudarte a optimizar tus proyectos con nuestra maquinaria de alta calidad.
          </p>
        </div>
        <div class="absolute opacity-img"></div> <!-- Capa de opacidad -->
      </section>

    <div class="container px-5 py-6 mx-auto flex flex-col">

      @livewire('solicitar-entrevista')

    </div>


</x-app-layout>