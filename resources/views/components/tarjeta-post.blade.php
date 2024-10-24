@props(['post'])

         <article class="mb-8 bg-white shadow-lg rounded-lg overflow-hidden">
                <img class="w-full h-72 object-cover object-center" src="@if($post->image) {{Storage::url($post->image->url)}} @else https://cdn.pixabay.com/photo/2014/04/05/11/39/rain-316580_960_720.jpg @endif" alt="">
                
                {{-- <div class="px-6 py-4">
                    <h1 class="font-bold text-xl mb-2">
                        <a href="{{route('posts.show',$post->slug)}}">
                            {{$post->nombre}}
                        </a>
                    </h1>
                    <div class="text-gray-700 text-base">
                        {!!$post->extracto!!}
                    </div>
                </div> --}}
                <div class="px-6 py-6 mx-auto rounded-sm shadow-lg bg-white">

                    <div class="flex items-center justify-between">
                        <span class="text-sm text-gray-600">
                            {{date_format($post->created_at,"d M Y")}}
                        </span>
                        <a href="{{route('blog.posts.categoria',$post->categoria->slug)}}" class="text-xs px-2 py-1 font-medium rounded bg-greenLime-600 text-gray-50 hover:bg-greenLime-700 transition ease-in duration-200">
                            {{$post->categoria->nombre}}
                        </a>
                    </div>
                    <div class="mt-3">
                        <a href="{{route('posts.show',$post->slug)}}" class="text-gray-900 text-2xl font-bold hover:underline transition ease-in duration-200">
                            {{$post->titulo}}
                        </a>
                        <p class="mt-2">
                            {!!Str::limit($post->extracto,300)!!}
                        </p>
                        <div class="mt-4">
                            @foreach ($post->etiquetas as $etiqueta)
                                <a href="{{route('posts.etiqueta', $etiqueta->slug)}}" class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm text-gray-700 mr-2">#{{$etiqueta->nombre}}</a>
                            @endforeach
                        </div>
                    </div>
                    <div class="flex items-center justify-between mt-4">
                        {{-- <a href="{{route('posts.show',$post->slug)}}" class="hover:underline text-lime-600">
                            Leer más
                        </a> --}}
                        <div class="flex flex-col w-24 space-y-2">
                            <div class="flex w-24 h-1 bg-greenLime-100">
                                <div class=" w-16 h-full bg-greenLime-600">
                                </div>
                            </div>
                            <a href="{{route('posts.show',$post->slug)}}" class="flex items-center justify-between w-full hover:underline">
                                <span class="text-xs font-bold tracking-wider uppercase">
                                    Leer más
                                </span>
                                <svg viewBox="0 0 24 24" stroke-width="2.5" fill="none" stroke-linecap="round" stroke-linejoin="round" class="w-4 stroke-current text-lime-600"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                            </a>
                        </div>

                        <div>
                            <a href="#" class="flex items-center">
                                <img alt="avatar" src="@if($post->user->profile_photo_path!=null) {{Storage::url($post->user->profile_photo_path)}} @else https://dummyimage.com/104x104 @endif" class="w-10 h-10 rounded-full flex-shrink-0 object-cover object-center mx-4">
                                <span class="hover:underline text-gray-600">
                                    {{$post->user->name}}
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                {{-- <div class="px-6 py-4 pb-2">
                    @foreach ($post->etiquetas as $etiqueta)
                        <a href="{{route('posts.etiqueta', $etiqueta->slug)}}" class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm text-gray-700 mr-2">{{$etiqueta->nombre}}</a>
                    @endforeach
                </div> --}}
            </article>