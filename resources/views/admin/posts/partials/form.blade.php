
                <div class="row">
                    <div class="col-sm-9 mb-3 sm:mb-0">
                        {!! Form::label('titulo', 'Titulo') !!}
                        {!! Form::text('titulo', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el titulo del Post' , 'disabled'  => $disabled]) !!}
                        
                        @error('titulo')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>

                    <div class="col-sm-3">
                        <p class="font-weight-bold">Estado</p>
                        <label>
                            {!! Form::radio('status', 1, true, ['disabled'  => $disabled]) !!}
                            Borrador
                        </label>
                        <label>
                            {!! Form::radio('status', 2, false, ['disabled'  => $disabled]) !!}
                            Publicado
                        </label>

                        @error('status')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                </div>

                <div class="form-group">
                    {!! Form::label('slug', 'Slug') !!}
                    {!! Form::text('slug', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el slug del Post', 'readonly']) !!}
                
                    @error('slug')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>

                {{-- Categorias --}}
                <div class="form-group">
                    {!! Form::label('categoria_id', 'Categoria') !!}
                    {!! Form::select('categoria_id', $categorias, null, ['class' => 'form-control', 'placeholder' => ' - Seleccione -', 'disabled'  => $disabled]) !!}
                    
                    @error('categoria_id')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>

                {{-- Etiquetas --}}
                <div class="form-group">
                    <div class="card card-secondary">
                        <div class="card-header" style="background-color: #e9ecef;color: #525252 !important;">
                            <h3 class="card-title">Etiquetas</h3>
                        </div>
                        
                        <div class="card-body">
                            <div class="row">
                                @foreach ($etiquetas as $etiqueta)
                                    <div class="col-sm-6 col-md-4 col-lg-3">
                                        <label class="mr-2 text-sm">
                                            {!! Form::checkbox('etiquetas[]', $etiqueta->id, null, ['disabled'  => $disabled]) !!}
                                            {{$etiqueta->nombre}}
                                        </label>
                                    </div>
                                @endforeach
                            </div>
                            
                            @error('etiquetas')
                                <br>
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        
                    </div>
                </div>

                {{-- Imagen --}}
                <div class="row mb-3">
                    <div class="col">
                        <div class="image-wrapper">
                            <img id="imagen" src="@isset($post->image) {{Storage::url($post->image->url)}} @else https://cdn.pixabay.com/photo/2014/04/05/11/39/rain-316580_960_720.jpg @endisset" alt="">
                        </div>
                    </div>

                    <div class="col">
                        <div class="form-group">
                            {!! Form::label('file', 'Imagen') !!}
                            {!! Form::file('file', ['class' => 'form-control-file', 'accept' => 'image/*', 'disabled'  => $disabled]) !!}
                        </div>

                        @error('file')
                            <span class="text-danger">{{$message}}</span>
                        @enderror

                    </div>
                </div>

                {{-- Extracto --}}
                <div class="form-group">
                    {!! Form::label('extracto', 'Extracto') !!}
                    @if ($disabled)
                        <x-adminlte-text-editor name="extracto" id="extracto" value="" disabled>
                            @isset($post)
                                {{$post->extracto}}
                            @endisset
                        </x-adminlte-text-editor>
                    @else
                        <x-adminlte-text-editor name="extracto" id="extracto" value="">
                            @isset($post)
                                {{$post->extracto}}
                            @else
                                {{old('extracto')}}
                            @endisset
                        </x-adminlte-text-editor>
                    @endif

                </div>

                {{-- Extracto --}}
                <div class="form-group">
                    {!! Form::label('body', 'Cuerpo del Post') !!}
                    @if ($disabled)
                        <x-adminlte-text-editor name="body" id="body" disabled>
                            @isset($post)
                                {{$post->body}}
                            @endisset
                        </x-adminlte-text-editor>
                    @else
                        <x-adminlte-text-editor name="body" id="body">
                            @isset($post)
                                {{$post->body}}
                            @else
                                {{old('body')}}
                            @endisset
                    </x-adminlte-text-editor>
                    @endif
                </div>

                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#staticBackdrop">
                    <i class="fa fa-cog"></i> Configuraciones SEO
                </button>
                  
                <!-- Modal Configuracion SEO -->
                <div class="modal fade" id="staticBackdrop" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg modal-dialog-scrollable" role="document">
                      <div class="modal-content">
                        <div class="modal-header" style="background: #f5f5f5;">
                          <h5 class="modal-title" id="staticBackdropLabel"> <i class="fa fa-cog"></i> Configuraciones SEO</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                            
                            <p class="text-sm"><i class="fas fa-exclamation-triangle"></i> Si no se configura el <b>Meta Title</b> o <b>Meta Description</b> el sistema enviara en su lugar el <b>Titulo</b> y <b>Extracto</b> del post.</p>
                            
                            <div>
                                {!! Form::label('meta_title', 'Meta Title') !!}
                                {!! Form::text('meta_title', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el titulo de la meta:title', 'maxlength' => 61, 'onkeydown' => 'set_metaTitle()', 'disabled'  => $disabled]) !!}
                
                                @error('meta_title')
                                    <span class="text-red-500">{{$message}}</span>
                                @enderror
                            </div>
            
                            <div class="mt-4">
                                {!! Form::label('meta_description', 'Meta Description') !!}
                                {!! Form::textarea('meta_description', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el titulo de la meta:description', 'maxlength' => 142, 'onkeydown' => 'set_metaDescription()', 'rows' => 2, 'disabled'  => $disabled]) !!}

                                @error('meta_description')
                                    <span class="text-red-500">{{$message}}</span>
                                @enderror
                            </div>
                            
                            <div class="bg-white mt-6">
                                <hr class="border-gray-300" />
                            </div>
            
                            <div class="mt-2">
                                <span class="text-sm">Ejemplo de previsualización en navegador <b>Google Chrome</b> </span>
                                
                                <div class="card card-secondary mt-4">
                                    <div class="card-header" style="background-color: #e9ecef;color: #525252 !important;">
                                        <h3 class="card-title"><i class="fas fa-ellipsis-h text-xl"></i></h3>
                                    </div>
                                    
                                    <div class="card-body">
                                        <div class="flex bg-white text-sm md:text-base">
                                            <div class="py-2 px-4">
                                                <div class="row items-center">
                                                    <img class="col-2" src="{{asset('img/logo/logo-google.png')}}" alt="">
                                                    <input type="text" style="border-radius: 100px;margin-top: 8px;" name="" id="" placeholder="" class="form-control col-10">
                                                </div>
                
                                                <div class="py-2" style="border-bottom: 1px solid #dddd">
                                                    <a class="px-2 py-2" style="color: #727272;border-bottom: 2px solid #007bff;"><i class="fa fa-search mr-2"></i> Todos</a> 
                                                    <a class="px-2 py-2" style="color: #727272"><i class="fa fa-image mr-2"></i> Imágenes</a> 
                                                    <a class="px-2 py-2" style="color: #727272;"><i class="fa fa-newspaper mr-2"></i> Noticias</a>
                                                    <a class="px-2 py-2" style="color: #727272;"><i class="fa fa-caret-square-right mr-2"></i> Videos</a>
                                                    <a class="px-2 py-2" style="color: #727272;"><i class="fa fa-map-marker-alt mr-2"></i>Maps</a>
                                                    <a class="px-2 py-2" style="color: #727272;"><i class="fa fa-ellipsis-v mr-2"></i>Más</a>
                                                    <a class="px-2 py-2" style="color: #727272;">Herramientas</a>
                                                </div>
                                                
                                                <div class="mt-2">
                                                    <span class="text-sm text-gray-400">Cerca de 54.200 resultados(0.40 segundos)</span>
                                                </div>
                                                
                                                <div class="mt-4 row">
                                                    <span class="col-12 text-sm text-gray-800">https://estudiojuridicoargerich.com.ar <i class="fa fa-caret-down ml-2"></i></span>
                                                    <a class="col-12 text-lg mt-2" style="color: #0056b3;">
                                                        <span id="meta_title_text">
                                                            @isset($post)
                                                                @if($post->meta_title<>null)
                                                                    {{$post->meta_title}}
                                                                @else
                                                                    {{$post->titulo}}
                                                                @endif
                                                            @endisset
                                                        </span>
                                                    </a>
                                                    <p class="text-sm mt-1 col-12">
                                                        <span id="meta_description_text">
                                                            @isset($post)
                                                                @if($post->meta_description<>null)
                                                                    {{$post->meta_description}}
                                                                @else
                                                                    {{$post->extracto}}
                                                                @endif
                                                            @endisset
                                                        </span>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>

            
                            </div>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-success" data-dismiss="modal">Listo</button>
                        </div>
                      </div>
                    </div>
                </div>

<script>
    
  function set_metaTitle(){
    $('#meta_title_text').text($('#meta_title').val());
  };

  function set_metaDescription(){
    $('#meta_description_text').text($('#meta_description').val());
  };

  set_metaTitle();
  set_metaDescription();
</script>