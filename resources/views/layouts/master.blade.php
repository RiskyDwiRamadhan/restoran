<!DOCTYPE html>
<html style="font-size: 16px;">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="One Step to Making a Good Start, Delicious From The Chef, Health is the most precious, Reviews, Learn&nbsp;Cooking&nbsp;Online, INTUITIVE">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>
      @yield('title')	
    </title>
    <link rel="stylesheet" href="\template\nicepage.css" media="screen">
    @yield('template')	
    <script class="u-script" type="text/javascript" src="\template\jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="\template\nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 3.11.0, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "RestoNusantara",
		"url": "/template/index.html",
		"logo": "/template/images/default-logo.png",
		"sameAs": [
				"https://facebook.com/NusantaraRestoBali"
		]
    }</script>
    <meta property="og:title" content="Home">
    <meta property="og:type" content="website">
    <meta name="theme-color" content="#478ac9">
    <link rel="canonical" href="/template/index.html">
    <meta property="og:url" content="/template/index.html">
  </head>
  <body class="u-body">
    @include('layouts.header')
	  @yield('content')	
    @include('layouts.footer')
  </body>
</html>