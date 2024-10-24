<x-app-layout>
    <section class="px-2">
        <div class="container px-5 py-6 mx-auto flex flex-col">
    
          <div class="flex flex-wrap flex-col sm:flex-row mb-4 items-center">
            <h1 class="mr-auto sm:w-2/5 text-gray-700 font-medium title-font text-2xl mb-2 sm:mb-0 text-left">
              {{$categoria->nombre}}
            </h1>
    
            <nav class="sm:w-3/5 mr-auto sm:ml-auto text-gray-600">
              <ol class="flex h-8 space-x-2 float-right">
                <li class="flex items-center">
                  <a href="#" title="Back to homepage" class="hover:text-black">
                    <a href="/" class="text-sm lg:text-base flex items-center px-1 capitalize hover:text-black">Home</a>
                  </a>
                </li>
                <li class="flex items-center space-x-2">
                    <i class="fa fa-angle-right"></i>
                    <a href="/blog" class="flex items-center px-1 capitalize hover:text-black text-sm lg:text-base">Blog</a>
                  </li>
                <li class="flex items-center space-x-2">
                  <i class="fa fa-angle-right"></i>
                  <a href="#" class="flex items-center px-1 cursor-default text-sm lg:text-base text-argerich">{{$categoria->nombre}} </a>
                </li><!---->
              </ol>
            </nav>
          </div>
    
          {{-- Linea divisoria --}}
          <div class="h-1 bg-gray-200 rounded overflow-hidden">
            <div class="w-24 h-full bg-argerich"></div>
          </div>

          <div class="mx-auto py-4">
            @foreach ($posts as $post)
                <x-tarjeta-post :post="$post" />
            @endforeach
    
            <div class="mt-4">
                {{$posts->links()}}
            </div>
        </div>
    </section>

    
</x-app-layout>