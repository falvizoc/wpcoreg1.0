<div x-data="{agregar_respuesta: @entangle('agregar_respuesta'), view_respuestas: @entangle('view_respuestas')}">

    {{-- The Master doesn't talk, he acts. --}}
    <button x-on:click="agregar_respuesta=!agregar_respuesta" class="text-gray-700 mt-1">
        <i class="fas fa-reply"></i>
        Responder
    </button>

    @if ($comentario->respuestas->count())
        <button class=" text-blue-500 flex items-center mt-1" wire:click="mostrar_respuestas">

            <span wire:loading.remove="" wire:target="mostrar_respuestas">
                @if ($view_respuestas)
                    <i class="fas fa-angle-up mr-1"></i> Ocultar {{$comentario->respuestas->count()}} respuestas
                @else
                    <i class="fas fa-angle-down mr-1"></i> Mostrar {{$comentario->respuestas->count()}} respuestas
                @endif
            </span>
            
            <span wire:loading="" wire:target="mostrar_respuestas">
                <div class="flex">
                    <div class="w-4 h-4 rounded-full animate-pulse bg-gray-500"></div>
                    <div class="w-4 h-4 rounded-full animate-pulse bg-gray-500 mx-2"></div>
                    <div class="w-4 h-4 rounded-full animate-pulse bg-gray-500"></div>
                </div>            
            </span>
        </button>
    @endif

    {{-- Agregar respuesta --}}
    <div class="flex mt-4" x-show="agregar_respuesta">
        <figure class="flex-shrink-0 mr-4">
            <div class="w-10 h-10 rounded-full bg-blue-100  inline-flex items-center justify-center">
                <p class="text-blue-500 text-base">EG</p>
            </div>
        </figure>

        <div class="w-full">
            <form wire:submit.prevent="store">
                
                <div class="grid grid-cols-2 gap-6">
                    <div>
                        <input type="text" wire:model="nombre" name="nombre" id="nombre" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-sm outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" placeholder="Ingrese su nombre" />
                        <x-jet-input-error for="nombre" />
                    </div>

                    @if (Auth::check())
                        <div>
                            <input type="text" wire:model="email" name="email" id="email" class="w-full rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-sm outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out cursor-not-allowed bg-gray-100" placeholder="Ingrese su email" disabled/>
                            <x-jet-input-error for="email" />
                        </div>
                    @else
                        <div>
                            <input type="text" wire:model="email" name="email" id="email" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-sm outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" placeholder="Ingrese su email"/>
                            <x-jet-input-error for="email" />
                        </div>
                    @endif
                
                </div>
                <textarea wire:model="detalle" name="detalle" id="detalle" class="w-full mt-4 bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-sm outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" placeholder="Ingrese su comentario"></textarea>
                <x-jet-input-error for="detalle" />

            <div class="flex justify-end items-center mt-3">
                <x-jet-action-message class="mr-3" on="saved">
                    Comentario enviado!
                </x-jet-action-message>

                <button type="button" x-on:click="agregar_respuesta=false" class="mr-1 inline-flex items-center px-4 py-2 bg-red-500 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-600 active:bg-gray-900 focus:outline-none focus:border-red-600">
                    Cancelar
                </button>

                <button type="submit" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition">
                    Comentar
                </button>
            </div>

            </form>
        </div>
    </div>

    {{-- Listado de respuestas --}}
    <ul class="space-y-6 mt-4" x-show="view_respuestas">
        @foreach ($respuestas as $respuesta)

        <li wire:key="comentario-{{$respuesta->id}}">
            <div class="flex">

                <figure class="flex-shrink-0 mr-4">
                    <div class="w-10 h-10 rounded-full bg-blue-100  inline-flex items-center justify-center">
                        <p class="text-blue-500 text-base uppercase">{{substr($respuesta->email,0,2)}}</p>
                    </div>
                </figure>

                <div class="w-full">
                    <div class="flex">
                        <div class="w-full">
                            <p class="font-semibold">
                                {{$respuesta->nombre}} 
                                <span class="font-normal text-sm text-gray-600">
                                    {{$respuesta->created_at->diffForHumans()}}
                                </span>
                            </p>

                            <div class="relative">
                                <div class="ckeditor text-gray-800">
                                    <p>{{$respuesta->detalle}}</p>
                                </div>
                               
                            </div>
                        </div>
                                                                    
                             <div class="w-8 flex-shrink-0 flex justify-end">
                                @role('Admin')
                                    <div class="relative" x-data="{ open: false }" @click.away="open = false" @close.stop="open = false">
                                        <div @click="open = ! open">
                                            <button class="text-end">
                                                <i class="fas fa-ellipsis-v"></i>
                                            </button>
                                    </div>

                                    <div x-show="open" x-transition:enter="transition ease-out duration-200" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute z-50 mt-2 w-48 rounded-md shadow-lg origin-top-right right-0 " style="display: none;">
                                        <div class="rounded-md ring-1 ring-black ring-opacity-5 py-1 bg-white">
                                            <div class="block px-4 py-2 text-xs text-gray-400">
                                                Admin Post
                                            </div>
            
                                            <a class="block px-4 py-2 text-sm leading-5 text-gray-700 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 transition cursor-pointer" wire:click="delete({{$respuesta}})"><i class="fas fa-trash inline-block w-5"></i>
                                                Eliminar
                                            </a>

                                            </div>
                                        </div>
                                    </div>
                                @endrole

                            </div>
 
                    </div>
                
                </div>

            </div>
        </li>
     @endforeach
    </ul>
</div>
