<?php echo '<?xml version="1.0" encoding="UTF-8" ?>'; ?>
<urlset xmlns="https://www.sitemaps.org/schemas/sitemap/0.9" 
        xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
        xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9
        http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">

    {{-- Urls estáticas --}}

    <!-- Home -->
    <url>
        <loc>{{route('home.index')}}</loc>
        <lastmod>2023-02-13T17:18:32+00:00</lastmod>
        <priority>1.00</priority>
    </url>

    <!-- Sobre Nosotros -->
    <url>
        <loc>{{route('sobre-nosotros')}}</loc>
        <lastmod>2023-02-13T17:18:32+00:00</lastmod>
        <priority>0.80</priority>
    </url>

    <!-- Servicios -->
    <url>
        <loc>{{route('servicios')}}</loc>
        <lastmod>2023-02-13T17:18:32+00:00</lastmod>
        <priority>0.80</priority>
    </url>

    <!-- Proyectos -->
    <url>
        <loc>{{route('proyectos')}}</loc>
        <lastmod>2023-02-13T17:18:32+00:00</lastmod>
        <priority>0.80</priority>
    </url>

    <!-- Contacto -->
    <url>
        <loc>{{route('contacto')}}</loc>
        <lastmod>2023-02-13T17:18:32+00:00</lastmod>
        <priority>0.80</priority>
    </url>

    <!-- Solicitar Cotización -->
    <url>
        <loc>{{route('solicitar-cotizacion')}}</loc>
        <lastmod>2023-02-13T17:18:32+00:00</lastmod>
        <priority>0.80</priority>
    </url>

</urlset>
