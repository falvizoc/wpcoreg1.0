<header class="bg-white sticky top-0 shadow-lg" style="z-index: 900">

    <nav class="max-w-7xl mx-auto px-2 lg:px-8">
      <div>
        <div class="h-16 md:h-20 flex items-center">

          <!-- Logo -->
          <div class="mr-auto">
            <a href="/" class="font-sans"> 
              <img class="h-12 md:h-16 w-auto" src="{{asset('img/logo/coreg_azul_y_negro.jpg')}}" alt="COREG Logo">
            </a>
          </div>

          <!-- MENU MOBIL -->
          <div x-data="{open:false}">
            <button x-on:click="open=!open" type="button" class="ml-auto bg-white p-2 rounded-md text-black lg:hidden" >
              <span class="sr-only">Abrir menú</span>
                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>

            <div class="fixed inset-0 flex z-40 lg:hidden" role="dialog" aria-modal="true" 
                x-show="open"
                x-transition:enter
            >
              <div class="fixed inset-0 bg-black bg-opacity-25" aria-hidden="true" @click="open = false"></div>

              <div class="relative max-w-xs w-full bg-white shadow-xl pb-12 flex flex-col overflow-y-auto">
                <div class="px-2 pt-3 pb-1 flex items-center w-full">
                  <button x-on:click="open=!open" type="button" class="ml-2 p-2 rounded-md inline-flex items-center justify-center text-gray-700 hover:bg-gray-200">
                    <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                  </button>
                </div>

                <!-- Links -->
                <div class="mt-2">
                  <div id="tabs-1-panel-2" class="pb-6 px-4 space-y-4" role="tabpanel" tabindex="0">
                    <div>
                      <hr>
                    </div>

                    <li class="flow-root">
                      <a href="/" class="-m-2 px-4 py-3 block text-gray-700 hover:bg-gray-100">
                        Inicio
                      </a>
                    </li>

                    <li class="flow-root">
                      <a href="{{route('sobre-nosotros')}}" class="-m-2 px-4 py-3 block text-gray-700 hover:bg-gray-100">
                        Sobre Nosotros
                      </a>
                    </li>

                    <li class="flow-root">
                      <a href="{{route('servicios')}}" class="-m-2 px-4 py-3 block text-gray-700 hover:bg-gray-100">
                        Servicios
                      </a>
                    </li>

                    <li class="flow-root">
                      <a href="{{route('proyectos')}}" class="-m-2 px-4 py-3 block text-gray-700 hover:bg-gray-100">
                        Proyectos
                      </a>
                    </li>

                    <li class="flow-root">
                      <a href="{{route('solicitar-cotizacion')}}" class="-m-2 px-4 py-3 block text-gray-700 hover:bg-gray-100">
                        Contacto
                      </a>
                    </li>

                    <div>
                      <hr>
                    </div>

                    <li class="flow-root py-3">
                      <a href="{{ route('solicitar-cotizacion') }}" class="w-full text-sm tracking-widest relative px-4 py-2 rounded bg-transparent bg-sky-600 text-white duration-300 transform hover:scale-105 transition ease-linear inline">Solicitar Cotización</a>
                    </li>
                  </div>
                </div>

              </div>
            </div>
          </div>

          <!-- Flyout menus -->
          <div class="hidden lg:block lg:self-stretch lg:ml-auto">
            <div class="h-full w-full flex space-x-6 items-center">

              <a href="/" class="h-10 flex items-center text-base font-medium text-black hover:border-b-2 hover:border-coreg hover:text-coreg transition ease-in duration-200">
                Inicio
              </a>

              <a href="{{route('sobre-nosotros')}}" class="h-10 flex items-center text-base font-medium text-black hover:border-b-2 hover:border-coreg hover:text-coreg transition ease-in duration-200">
                Sobre Nosotros
              </a>

              <a href="{{route('servicios')}}" class="h-10 flex items-center text-base font-medium text-black hover:border-b-2 hover:border-coreg hover:text-coreg transition ease-in duration-200">
                Servicios
              </a>

              <a href="{{route('proyectos')}}" class="h-10 flex items-center text-base font-medium text-black hover:border-b-2 hover:border-coreg hover:text-coreg transition ease-in duration-200">
                Proyectos
              </a>

              
              <a href="{{route('solicitar-cotizacion')}}" class="h-10 flex items-center text-base font-medium text-black hover:border-b-2 hover:border-coreg hover:text-coreg transition ease-in duration-200">
                Contacto
              </a>

              {{-- <a href="{{ route('contacto') }}" class="text-sm tracking-widest relative px-4 py-2 ml-auto overflow-hidden rounded-lg bg-transparent bg-coreg text-white duration-300 transform hover:scale-105 transition ease-linear inline">
                Contacto
              </a> --}}

              <a href="{{ route('contacto') }}" class="text-base relative px-4 py-2 ml-auto overflow-hidden rounded-lg bg-transparent bg-green-500 text-white duration-300 transform hover:scale-105 transition ease-linear inline">
                Solicitar Cotización
              </a>
            </div>
          </div>

        </div>
      </div>
    </nav>

</header>
