<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <meta name="google-site-verification" content="dEFCQ0dVZ2Jo3PgwKTz2o_ZnfgdoU8zM72gAhowbxQ4" />
        
        {!! SEO::generate() !!}

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap">

        {{-- FontAwesome --}}
        <link href="{{ asset('vendor/fontawesome-free/css/fontawesome.min.css') }}" rel="stylesheet">
        <link href="{{ asset('vendor/fontawesome-free/css/brands.min.css') }}" rel="stylesheet">
        <link href="{{ asset('vendor/fontawesome-free/css/solid.min.css') }}" rel="stylesheet">
        <link href="{{ asset('vendor/fontawesome-free/css/regular.min.css') }}" rel="stylesheet">
              
        <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        {{-- <link rel="stylesheet" href="{{ asset('css/content-styles.css') }}"> --}}
        {{-- <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet"> --}}
        @livewireStyles

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>

        {{-- Jquery --}}
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

        <script src="https://unpkg.com/aos@next/dist/aos.js"></script>

        <script src="https://cdn.jsdelivr.net/npm/swiffy-slider@1.6.0/dist/js/swiffy-slider.min.js" crossorigin="anonymous" defer></script>
        <link href="https://cdn.jsdelivr.net/npm/swiffy-slider@1.6.0/dist/css/swiffy-slider.min.css" rel="stylesheet" crossorigin="anonymous">
    </head>
    <body class="bg-white">
        <x-jet-banner />

        <div class="min-h-screen bg-white">
            @livewire('navigation')

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>

        @livewire('footer')
        
        @stack('modals')

        @livewireScripts

        @stack('script')
        
        <script>
            AOS.init();

            function scrollToAnchor(anchor) {
                $("html, body").animate({ scrollTop: $(anchor).position().top - 70 }, 'slow');
            }

            $(document).ready(function() {
            $('a').bind('click', function(e) {

                    var sHref = this.href.split("#"); 
                    scrollToAnchor("#"+sHref[1]);
                    return false;           
            });

            //now scroll to the anchor when loading page - this was missing
            scrollToAnchor(document.location.hash);
            });
        </script>
    </body>
</html>
