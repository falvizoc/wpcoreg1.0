<x-app-layout>
  <!-- Hero Section -->
  <section class="py-12 md:py-28 relative text-white bg-center bg-cover" style="background-image:url({{asset('img/proyectos/proyectos-hero.webp')}})">
    <div class="relative container mx-auto text-center z-50">
      <h2 class="text-xl md:text-3xl mb-6">
        Proyectos <b>Industriales Realizados</b>
      </h2>
      <p class="max-w-4xl mx-auto text-sm md:text-base">
        A lo largo de los años, en COREG hemos participado en numerosos proyectos industriales, proporcionando maquinaria de alta calidad y soluciones eficientes. Aquí te mostramos algunos de los proyectos más destacados que hemos realizado para nuestros clientes.
      </p>
    </div>
    <div class="absolute opacity-img"></div> <!-- Capa de opacidad -->
  </section>

  <!-- Projects Gallery -->
  <div class="container grid max-w-screen-7xl px-4 py-10 mx-auto">
    <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
      <img class="h-auto max-w-full rounded-lg" src="{{asset('img/proyectos/proyecto1.webp')}}" alt="Proyecto 1">
      <img class="h-auto max-w-full rounded-lg" src="{{asset('img/proyectos/proyecto2.webp')}}" alt="Proyecto 2">
      <img class="h-auto max-w-full rounded-lg" src="{{asset('img/proyectos/proyecto3.webp')}}" alt="Proyecto 3">
      <img class="h-auto max-w-full rounded-lg" src="{{asset('img/proyectos/proyecto4.webp')}}" alt="Proyecto 4">
      <img class="h-auto max-w-full rounded-lg" src="{{asset('img/proyectos/proyecto5.webp')}}" alt="Proyecto 5">
      <img class="h-auto max-w-full rounded-lg" src="{{asset('img/proyectos/proyecto6.webp')}}" alt="Proyecto 6">
      <img class="h-auto max-w-full rounded-lg" src="{{asset('img/proyectos/proyecto7.webp')}}" alt="Proyecto 7">
      <img class="h-auto max-w-full rounded-lg" src="{{asset('img/proyectos/proyecto8.webp')}}" alt="Proyecto 8">
      <img class="h-auto max-w-full rounded-lg" src="{{asset('img/proyectos/proyecto9.webp')}}" alt="Proyecto 9">
    </div>
  </div>

  <!-- Testimonios Section -->
  <x-testimonios />
</x-app-layout>
