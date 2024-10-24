<div>
  <section class="text-gray-600 relative pb-4">
      <div class="py-8 mx-auto flex sm:flex-nowrap flex-wrap">
        <!-- Google Maps Embebido con Ubicación de COREG -->
        <div class="mb-4 lg:mb-0 w-full lg:w-1/2 bg-gray-300 rounded-2xl sm:mr-10">
          <iframe class="h-96 lg:h-full w-full" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3762.551202558763!2d-99.20341972426018!3d19.4884130868124!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1f8aa6da90ecb%3A0xa34dd36b1e4f41f!2sCalle%2010%20620%2C%20Monte%20Alto%2C%20Azcapotzalco%2C%2002770%20Ciudad%20de%20M%C3%A9xico%2C%20CDMX%2C%20M%C3%A9xico!5e0!3m2!1ses!2sar!4v1706819309045!5m2!1ses!2sar" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>

        <!-- Datos de Contacto de COREG -->
        <div class="w-full lg:w-1/2 bg-white flex flex-col md:ml-auto md:mt-0">
          
          {{-- Tarjeta de contacto --}}
          <div class="bg-white relative flex flex-wrap py-6 shadow-md mb-6 border-t-3 border-coreg">
              <div class="lg:w-1/2 pl-6 mt-4 lg:mt-0">
                <h2 class="title-font font-semibold text-black tracking-widest text-xs">
                  DIRECCIÓN
                </h2>
                <p class="mt-1">
                  <a class="text-coreg hover:text-coreg-hover transition ease-in duration-200 text-sm" href="https://maps.app.goo.gl/DhYeado6tYLkEAGi7" target="_blank">
                    Calle 10 #620, Colonia Monte Alto, Azcapotzalco, Ciudad de México
                  </a>
                </p>
                <h2 class="title-font font-semibold text-gray-900 tracking-widest text-xs mt-4">
                  TELÉFONO
                </h2>
                <p>
                  <p><a class="text-coreg hover:text-coreg-hover transition ease-in duration-200 text-sm" href="tel:55 1234 5678"> 55 1234 5678</a> / <a class="text-coreg hover:text-coreg-hover transition ease-in duration-200 text-sm" href="tel:55 9876 5432"> 55 9876 5432</a></p>
                </p>
              </div>
              <div class="lg:w-1/2 pl-6 md:pr-6 mt-4 lg:mt-0">
                <h2 class="title-font font-semibold text-gray-900 tracking-widest text-xs mb-1">
                  EMAIL
                </h2>
                <a class="mt-1">
                  <a class="text-coreg hover:text-coreg-hover transition ease-in duration-200 text-sm" href="mailto:proyectos@coregmexico.com">
                    proyectos@coregmexico.com
                  </a>
                </a>
                <h2 class="title-font font-semibold text-gray-900 tracking-widest text-xs mt-4">
                  WHATSAPP
                </h2>
                <p>
                  <a class="text-coreg hover:text-coreg-hover transition ease-in duration-200 text-sm" href="https://api.whatsapp.com/send?phone=525512345678" target="blank">Contáctanos aquí</a>
                </p>
              </div>
            </div>
          
          <!-- Formulario de Contacto -->
          <div class="shadow-md border border-gray-200">
            <div class="py-5 px-10 bg-gray-100 border-b border-gray-200">
              <h2 class="text-gray-700 text-base">
                <i class="fa fa-envelope"></i> Formulario de <b>Solicitud de Cotización</b>
              </h2>
            </div>

            <div class="px-10 mt-6">
              <div class="grid grid-cols-2 gap-6">
                <div class="relative mb-4">
                  <label for="nombre" class="leading-7 text-sm text-gray-700 font-semibold">Nombre</label>
                  <input wire:model="nombre" type="text" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-sm outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" placeholder="Nombre">
                  <x-jet-input-error for="nombre" />
                </div>
                <div class="relative mb-4">
                  <label for="apellido" class="leading-7 text-sm text-gray-700 font-semibold">Apellido</label>
                  <input wire:model="apellido" type="text" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-sm outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" placeholder="Apellido">
                  <x-jet-input-error for="apellido" />
                </div>
              </div>
              <div class="relative mb-4">
                <label for="telefono" class="leading-7 text-sm text-gray-700 font-semibold">Teléfono</label>
                <input wire:model="telefono" type="text" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-sm outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" placeholder="Teléfono">
                <x-jet-input-error for="telefono" />
              </div>
              <div class="relative mb-4">
                <label for="email" class="leading-7 text-sm text-gray-700 font-semibold">Correo electrónico</label>
                <input wire:model="email" type="email" id="email" name="email" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-sm outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" placeholder="Correo electrónico">
                <x-jet-input-error for="email" />
              </div>
              <div class="relative mb-4">
                <label for="consulta" class="leading-7 text-sm text-gray-700 font-semibold">Detalle su consulta</label>
                <textarea wire:model="consulta" id="consulta" name="consulta" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 h-32 text-sm outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out" placeholder="Detalle su consulta"></textarea>
                <x-jet-input-error for="consulta" />
              </div>
            </div>

            <div class="py-5 px-10 flex items-center bg-gray-100 border-t border-gray-200">
              <p class="text-xs text-gray-500 flex-1">Los datos ingresados no serán publicados.</p>
              <button wire:click="solicitar"
                wire:loading.attr="disabled"
                wire:target="solicitar"
                class="w-auto flex float-right text-white bg-coreg border-0 py-2 px-4 focus:outline-none hover:bg-coreghover rounded text-sm" 
                wire:loading.remove wire:target="solicitar">
                Enviar Consulta
              </button>
            </div>

          </div>
        </div>
      </div>
    </section>
</div>
