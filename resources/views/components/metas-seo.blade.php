@props(['post'])

<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1.0" name="viewport">

<title>{{$post->meta_title}}</title>
<meta name="title" content="{{$post->meta_title}}">
<meta content="{{$post->meta_description}}" name="description">
<meta name="robots" content="index, follow" /> 
<meta name="author" content="Estudio Juridico Argerich" />

<meta property="og:locale" content="es_AR">
<meta property="og:type" content="article">
<meta property="og:title" content="{{$post->meta_title}}">
<meta property="og:description" content="{{$post->meta_description}}">
<meta property="og:url" content="{{route('posts.show', $post)}}">
<meta property="og:site_name" content="Estudio Juridico Argerich">
<meta property="og:image" content="@isset($post->image) {{Storage::url($post->image->url)}} @else {{asset('img/home/posto-default.png')}} @endisset">
<meta property="article:modified_time" content="{{$post->updated_at}}">

<!-- Favicons -->
<link href="assets/img/favicon.png" rel="icon">
<link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">