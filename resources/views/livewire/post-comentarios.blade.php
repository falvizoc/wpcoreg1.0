<div>
    {{-- In work, do what you enjoy. --}}
    <hr class="mt-6 mb-2">
    
    <div class="flex items-center mb-3">
        <p class="text-base font-semibold">{{$total_registros}} comentarios</p>
    
            <button class="ml-3" x-data="{
                    sort: @entangle('sort'),
                }" x-on:click="sort = sort == 'asc' ? 'desc' : 'asc'">
                <i class="fas fa-sort-amount-down" 
                :class="{
                    'fa-sort-amount-down': sort === 'desc',
                    'fa-sort-amount-up': sort === 'asc',
                }"></i>
                <span x-text="sort == 'desc' ? 'Orden descendente' : 'Orden Ascendente'">Orden descendente</span>
            </button>
        </div>

            {{-- Agregar Comentario --}}
            <div class="flex">
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
    
                        <button type="submit" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition">
                            Comentar
                        </button>
                    </div>
    
                    </form>
                </div>
            </div>
        
        {{-- Comentarios --}}

        @if ($comentarios->count())
            <p class="text-base font-semibold mt-6 mb-4">Comentarios:</p>
        @else
            <p class="text-base font-regular mt-6 mb-4 text-gray-600">No posee comentarios</p>
        @endif
        
        <ul class="space-y-6">
            @foreach ($comentarios as $comentario)
            
            <li id="comentario-{{$comentario->id}}">
                <div class="flex">
    
                    <figure class="flex-shrink-0 mr-4">
                        <div class="w-10 h-10 rounded-full bg-blue-100  inline-flex items-center justify-center">
                            <p class="text-blue-500 text-base uppercase">{{substr($comentario->nombre,0,2)}}</p>
                        </div>
                    </figure>
    
                    <div class="w-full">
                        <div class="flex">
                            <div class="w-full">
                                <p class="font-semibold">
                                    {{$comentario->nombre}} 
                                    <span class="font-normal text-sm text-gray-600 capitalize">
                                        {{$comentario->created_at->diffForHumans()}}
                                    </span>
                                </p>
    
                                <div class="relative">
                                    <div class="ckeditor text-gray-800">
                                        <p>{{$comentario->detalle}}</p>
                                    </div>
                                    <div class="absolute w-full h-full top-0 left-0 flex items-center justify-center" wire:loading.flex="" wire:target="edit(959)">
                                        <div class="flex">
                                            <div class="w-4 h-4 rounded-full animate-pulse bg-gray-500"></div>
                                            <div class="w-4 h-4 rounded-full animate-pulse bg-gray-500 mx-2"></div>
                                            <div class="w-4 h-4 rounded-full animate-pulse bg-gray-500"></div>
                                        </div>                                        
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
                
                                                <a class="block px-4 py-2 text-sm leading-5 text-gray-700 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 transition cursor-pointer" wire:click="delete({{$comentario}})"><i class="fas fa-trash inline-block w-5"></i>
                                                    Eliminar
                                                </a>

                                                </div>
                                            </div>
                                        </div>
                                    @endrole
                                </div>
                        </div>
                        
                        {{-- Componente para Responder comentario --}}
                        @livewire('comentario-respuestas', ['comentario' => $comentario],key($comentario->id))
                    
                    </div>
    
                </div>
            </li>
            @endforeach
        </ul>

        @if ($limit<=$total_registros)
            <div>
                <hr class="mt-4 mb-1">
            </div>

            {{-- Enlace Ver mas comentarios --}}
            <div class="px-4 pb-1 flex justify-center">
                <button class="text-blue-500 font-medium text-sm flex items-center mt-2" wire:click="verMasComentarios">

                    <span wire:loading.remove="" wire:target="verMasComentarios">
                        Ver más comentarios
                    </span>
                    
                    <span wire:loading="" wire:target="verMasComentarios">
                        <div class="flex">
                            <div class="w-4 h-4 rounded-full animate-pulse bg-gray-500"></div>
                            <div class="w-4 h-4 rounded-full animate-pulse bg-gray-500 mx-2"></div>
                            <div class="w-4 h-4 rounded-full animate-pulse bg-gray-500"></div>
                        </div>            
                    </span>
                </button>
            </div>
        @endif
   
</div>
