<!DOCTYPE html>
<html>
    <head>
    	<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <meta name="csrf-token" content="{{ csrf_token() }}">
    	<title>@yield('title', config('app.name'))</title>    
        <link href="{{ asset('css/app.css') }}" type="text/css" media="all" rel="stylesheet">
        <script src="{{ asset('js/app.js') }}" ></script>        
        @yield('css')
    </head>
    
    <body>
    	<!-- top navbar -->
    	<nav class="navbar navbar-expand-lg navbar-light bg-primary">
    		<a class="navbar-brand" href="#">Navbar</a>
    		<!-- hamburger button that toggles the navbar-->
    		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    			<span class="navbar-toggler-icon"> </span>
    		</button>
    		<!-- navbar links -->
    		<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    			<div class="navbar-nav">
    				<a class="nav-item nav-link active" href="#">Home</a> 
					<a class="nav-item nav-link" href="#">Features</a> 
					<a class="nav-item nav-link" href="#">Price</a> 
					<a class="nav-item nav-link" href="#">About</a>
    			</div>
    		</div>
    	</nav>
    
    	<!-- This container contains the sidebar 
                 and main content of the page -->
    	<!-- h-100 takes the full height of the body-->
    	<div class="container-fluid h-100">
    		<div class="row h-100">
    			<div class="col-2 pt-4" id="green">
    				<!-- Navigation links in sidebar-->
    				
    				<x-left-menu/>
    			</div>
    			<!--Contains the main content of the webpage-->    			
    			<div class="col-10" style="text-align: justify;">
    				@yield('content')
    			</div>
    		</div>
    	</div>
    	@yield('js')
    </body>
</html>
