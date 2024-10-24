<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SEO;

class HomeController extends Controller
{
    public function index()
    {
        SEO::setTitle('Soluciones Industriales Integrales');
        SEO::setDescription('COREG ofrece maquinaria industrial de alta calidad, repuestos y servicios de mantenimiento confiables para mantener su operación en marcha. Descubra cómo podemos ayudar a su empresa a alcanzar el máximo rendimiento.');
        SEO::opengraph()->setUrl(route('home.index'));
        SEO::setCanonical(route('home.index'));
        SEO::opengraph()->addImage(asset('img/logo/coreg-logo-cuadrado.jpg'), ['height' => 150, 'width' => 150]);
    
        return view('home.index');
    }
    
    public function sobreNosotros()
    {
        SEO::setTitle('Líder en Maquinaria Industrial');
        SEO::setDescription('Con años de experiencia, COREG se destaca en la venta de maquinaria, repuestos y servicios de mantenimiento industrial. Conozca nuestro compromiso con la calidad y la satisfacción del cliente.');
        SEO::opengraph()->setUrl(route('sobre-nosotros'));
        SEO::setCanonical(route('sobre-nosotros'));
        SEO::opengraph()->addImage(asset('img/home/maquinaria-industrial.jpg'), ['height' => 150, 'width' => 150]);
    
        return view('home.sobre-nosotros');
    }

    public function servicios()
    {
        SEO::setTitle('Servicios de Maquinaria Industrial');
        SEO::setDescription('Descubre los servicios de COREG: venta de maquinaria, mantenimiento especializado y comercio de repuestos. Más de 20 años ofreciendo soluciones industriales de calidad.');
        SEO::opengraph()->setUrl(route('servicios'));
        SEO::setCanonical(route('servicios'));
        SEO::opengraph()->addImage(asset('img/coreg/servicios-maquinaria.jpg'), ['height' => 150, 'width' => 150]);

        return view('home.servicios');
    }

    public function proyectos()
    {
        SEO::setTitle('Servicios de Maquinaria Industrial');
        SEO::setDescription('Descubre los servicios de COREG: venta de maquinaria, mantenimiento especializado y comercio de repuestos. Más de 20 años ofreciendo soluciones industriales de calidad.');
        SEO::opengraph()->setUrl(route('proyectos'));
        SEO::setCanonical(route('proyectos'));
        SEO::opengraph()->addImage(asset('img/coreg/servicios-maquinaria.jpg'), ['height' => 150, 'width' => 150]);

        return view('home.proyectos');
    }

    public function contacto()
    {
        SEO::setTitle('Contacto');
        SEO::setDescription('¿Necesitas asesoramiento legal? En nuestro estudio jurídico estamos aquí para ayudarte. Contáctanos para resolver cualquier duda legal que tengas. Nuestros abogados expertos te brindarán la orientación que necesitas.');
        SEO::opengraph()->setUrl(route('contacto'));
        SEO::opengraph()->addImage(asset('img/logo/logo-estudio-argerich-cuadrado.jpg'), ['height' => 150, 'width' => 150]);

        return view('home.contacto');
    }
    
}
