<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <title> @yield('title') | Blog - Laravel </title>
    </head>
    <body>

        <header> 
            <ul>
                <li><a href="{{ route('home') }}">Home</a>  </li>
                <li><a href="{{ route('about') }}">About</a>  </li>
                <li><a href="{{ route('blog') }}">Blog</a>  </li>
                <li><a href="{{ route('contact') }}">Contact</a>  </li>
            </ul>
        </header> 
        
        <div class="container">
            @yield('content')
        </div>
    </body>
</html>