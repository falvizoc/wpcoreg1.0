<div>
  <footer class="bg-coreghover text-white body-font">
    <div class="container px-5 py-16 mx-auto flex lg:items-start md:flex-row md:flex-nowrap flex-wrap flex-col">
      <div class="w-72 flex-shrink-0 md:mx-0 mx-auto text-center md:text-left">
        <div class="mb-4">
          <a href="/" class="title-font font-medium text-white inline-block">
            <img class="h-20 w-auto" src="{{asset('img/logo/coreg_original_blanco.png')}}" alt="COREG Logo">
          </a>
        </div>
        <p class="mt-2 text-xs lg:text-sm text-white">
          <i class="fas fa-map-marker-alt"></i> 
          <a href="{{ route('contacto') }}" class="hover:text-white transition ease-in duration-200 cursor-pointer">
            Calle 10 #620, Colonia Monte Alto, Azcapotzalco, Ciudad de México
          </a>
        </p>
        <p class="mt-2 text-xs lg:text-sm text-white">
          <i class="fa fa-mobile-alt"></i> 
          <a class="text-white transition ease-in duration-200 text-sm" href="tel:55 1234 5678"> 55 1234 5678</a> / <a class="text-white transition ease-in duration-200 text-sm" href="tel:55 9876 5432"> 55 9876 5432</a>
        </p>
        <p class="mt-2 text-xs lg:text-sm text-white">
          <i class="fa fa-envelope"></i> <a class="hover:text-white transition ease-in duration-200" rel="nofollow" href="mailto:proyectos@coregmexico.com">proyectos@coregmexico.com</a>
        </p>
      </div>
      <div class="flex-grow flex flex-wrap md:pl-6 -mb-10 md:mt-0 mt-10 md:text-left text-center">
        <div class="lg:w-2/5 md:w-1/2 w-full px-4">
          <h2 class="title-font font-medium text-white tracking-widest text-sm md:text-base mb-3">
            Servicios
          </h2>
          <nav class="list-none mb-10 space-y-2">
            <li>
              <i class="fas fa-chevron-right text-xs lg:text-sm text-white"></i>
              <a href="{{ route('servicios') }}" class="text-white hover:text-white cursor-pointer transition ease-in duration-200 text-xs lg:text-sm">
                Arrendamiento de Maquinaria
              </a>
            </li>
            <li>
              <i class="fas fa-chevron-right text-xs lg:text-sm text-white"></i>
              <a href="{{ route('servicios') }}" class="text-white hover:text-white cursor-pointer transition ease-in duration-200 text-xs lg:text-sm">
                Mantenimiento de Equipos
              </a>
            </li>
            <li>
              <i class="fas fa-chevron-right text-xs lg:text-sm text-white"></i>
              <a href="{{ route('servicios') }}" class="text-white hover:text-white cursor-pointer transition ease-in duration-200 text-xs lg:text-sm">
                Comercio de Maquinaria y Repuestos
              </a>
            </li>
          </nav>
        </div>
        <div class="lg:w-2/5 md:w-1/2 w-full px-4">
          <h2 class="title-font font-medium text-white tracking-widest text-sm mb-3 md:text-base">
            Enlaces Rápidos
          </h2>
          <nav class="list-none mb-10 space-y-2">
            <li>
              <i class="fas fa-chevron-right text-xs lg:text-sm text-white"></i>
              <a href="/" class="text-white hover:text-white cursor-pointer transition ease-in duration-200 text-xs lg:text-sm">
                Inicio
              </a>
            </li>
            <li>
              <i class="fas fa-chevron-right text-xs lg:text-sm text-white"></i>
              <a href="{{ route('sobre-nosotros') }}" class="text-white hover:text-white cursor-pointer transition ease-in duration-200 text-xs lg:text-sm">
                Sobre Nosotros
              </a>
            </li>
            <li>
              <i class="fas fa-chevron-right text-xs lg:text-sm text-white"></i>
              <a href="{{ route('proyectos') }}" class="text-white hover:text-white cursor-pointer transition ease-in duration-200 text-xs lg:text-sm">
                Proyectos
              </a>
            </li>
            <li>
              <i class="fas fa-chevron-right text-xs lg:text-sm text-white"></i>
              <a href="{{ route('contacto') }}" class="text-white hover:text-white cursor-pointer transition ease-in duration-200 text-xs lg:text-sm">
                Contacto
              </a>
            </li>
          </nav>
        </div>
        <div class="lg:w-1/5 md:w-1/2 w-full px-4">
          <h2 class="title-font font-medium text-white tracking-widest text-sm md:text-base mb-3">
            Síguenos
          </h2>
          <nav class="list-none mb-10 space-y-2">
            <li class="flex space-x-2">
              <a href="https://www.instagram.com/coreg" target="_blank" class="inline-flex items-center justify-center w-9 h-9 text-indigo-100 bg-coreghover rounded-full focus:shadow-outline hover:bg-pink-700 cursor-pointer transition ease-in duration-200">
                <i class="fab fa-instagram"></i>
              </a>
              <a href="https://www.facebook.com/coreg" target="_blank" class="inline-flex items-center justify-center w-9 h-9 text-indigo-100 bg-coreghover rounded-full focus:shadow-outline hover:bg-blue-500 cursor-pointer transition ease-in duration-200">
                <i class="fab fa-facebook"></i>
              </a>
              <a href="https://api.whatsapp.com/send?phone=525512345678&text=Hola%21%20Quisiera%20hacerle%20una%20consulta." target="_blank" class="inline-flex items-center justify-center w-9 h-9 text-indigo-100 bg-coreghover rounded-full focus:shadow-outline hover:bg-green-500 cursor-pointer transition ease-in duration-200">
                <i class="fab fa-whatsapp"></i>
              </a>
            </li>
          </nav>
        </div>
      </div>
    </div>
    <div class="bg-gray-100">
      <div class="container mx-auto py-4 px-5">
        <p class="text-black text-sm text-center">
          © COREG Comercializadora del Norte - Sitio desarrollado por <a href="https://bitmovil.mx" class="font-bold text-blue-700 hover:underline" target="_blank">Bitmovil</a>
        </p>
      </div>
    </div>
  </footer>
</div>
