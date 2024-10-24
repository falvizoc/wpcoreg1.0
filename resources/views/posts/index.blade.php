<x-app-layout>
        
  <section class="px-2">
    <div class="container px-5 py-6 mx-auto">
         
          <div class="flex flex-wrap flex-col sm:flex-row mb-4 items-center">
                <h1 data-aos="fade-up" class="mr-auto sm:w-2/5 text-gray-700 text-2xl mb-2 sm:mb-0 text-left">
                  Noticias <b>Juridicas</b>
                </h1>
                <nav class="sm:w-3/5 mr-auto sm:ml-auto text-gray-700">
                  <ol class="flex h-8 space-x-2 float-right">
                    <li class="flex items-center space-x-2">
                      <a href="/" class="text-sm lg:text-base flex items-center px-1 capitalize hover:text-black">Home</a>
                    </li>
                    <li class="flex items-center space-x-2">
                      <i class="fa fa-angle-right"></i>
                      <a href="#" class="text-sm lg:text-base flex items-center px-1 capitalize cursor-default text-argerich">Blog</a>
                    </li>
                  </ol>
                </nav>
          </div>

          {{-- Linea divisoria --}}
          <div class="h-1 bg-gray-200 rounded overflow-hidden mb-4">
            <div class="w-24 h-full bg-argerich"></div>
          </div>

          <div class="flex flex-wrap">
           
            @foreach ($posts as $post)
                <article data-aos="zoom-in" data-aos-delay="100"  data-aos-duration="1000" class="h-full lg:px-4 py-4 @if($loop->first) md:w-2/3 @else md:w-1/3 @endif">
                    <a href="{{route('posts.show',$post->slug)}}">
                        <img class="rounded-t-sm @if($loop->first) lg:h-52 md:h-36 @else lg:h-48 md:h-36 @endif w-full object-cover object-center hover:opacity-75 cursor-pointer transition ease-in duration-200" src="@if($post->image) {{Storage::url($post->image->url)}} @else https://dummyimage.com/720x400 @endif" alt="blog">
                    </a>
                    <div class="px-6 py-6 mx-auto rounded-sm shadow-lg bg-white">
                        <div class="flex items-center justify-between">
                            <span class="text-xs text-gray-600">
                                {{date_format($post->created_at,"d M Y")}}
                            </span>
                            <a style="background: {{$post->categoria->codigo_color}}" href="{{route('blog.posts.categoria',$post->categoria->slug)}}" class="text-xs px-2 py-1 font-medium rounded text-white transition ease-in duration-200">
                                {{$post->categoria->nombre}}
                            </a>
                        </div>
                        <div class="mt-3 @if($loop->first) h-36 @else lg:h-40 md:h-36 @endif">
                            <a href="{{route('posts.show',$post->slug)}}" class="text-gray-900 text-xl font-bold duration-300 transition ease-in hover:underline ">
                                {{Str::limit($post->titulo,45)}}
                            </a>
                            <p class="mt-2">
                                @if($loop->first)
                                    {!!Str::limit($post->extracto,180)!!}
                                @else
                                    {!!Str::limit($post->extracto,100)!!}
                                @endif
                            </p>
                        </div>
                        <div class="flex items-center justify-between mt-4">
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
                                    <span class="hover:underline text-gray-600 text-sm">
                                        {{$post->user->name}}
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </article>
            @endforeach

          </div>

          <div class="mt-4">
            {{$posts->links()}}
          </div>
        </div>
      </section>

      @push('script')
      <script>
        AOS.init();
        </script>
      @endpush
</x-app-layout>