<x-app-layout>
    <div class="max-w-5xl mx-auto px-2 sm:px-6 lg:px-8 py-8">
        <h1 class="uppercase text-3xl font-bold mb-2">Etiqueta: {{$etiqueta->nombre}}</h1>

        @foreach ($posts as $post)
            <x-tarjeta-post :post="$post" />
        @endforeach

        <div class="mt-4">
            {{$posts->links()}}
        </div>
    </div>
</x-app-layout>