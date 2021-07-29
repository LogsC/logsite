<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Wot Dis Bot</title>

	<!-- Tailwind CSS
	<link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
	-->

	<link rel = "stylesheet" href = "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>    

	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

	    .part-height {
		height: 25vh;
	    }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
		font-size: 25px;
            }

	    .content-top-align {
		text-align: center;
		vertical-align: top;
		font-size: 25px;
	    }

            .title {
		color: #636b6f;
		font-size: 84px;
		text-decoration: none;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 25px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

	    .m-b2-md {
		vertical-align: text-top;
		margin-bottom: 80px;
	    }
        </style>

	<div class="dropdown">
	  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	    Menu
	  </button>
	  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
	    <a class="dropdown-item" href="http://logsite.com">Home</a>
	    <a class="dropdown-item" href="http://logsite.com/projects">Projects</a>
	    <a class="dropdown-item" href="http://logsite.com/posts">Posts</a>
	  </div>
	</div>

	<div class="content">
		<div class="title m-b-md">
		    Wot Dis Bot
		</div>

<!-- GitHub links to projects -->
		<div class="links m-b2-md">
		    <a href="https://github.com/LogsC/Wot_Dis">Github</a>
		</div>
	</div>

    </head>
    <body>
        <div class="flex-center position-ref part-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content-top-align">
		This is a small JavaScript program designed to communicate with Discord via discord.js, store data in MongoDB Atlas servers via MongoDBm and interact with and respond to messages and queries sent in Discord.</br>Currrently, this bot can read messages, partition strings into individual words, store words and relevant information as data in a MongoDB relational database, and respond to relevant queries to the database via Discord messages.
<!--
		    <a href="https://laravel.com/docs">Docs</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://blog.laravel.com">Blog</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
		    <a href="https://vapor.laravel.com">Vapor</a>
		    <a href="http://logsite.com/projects">Projects</a>
		    <a href="http://logsite.com/posts">Posts</a>
-->
            </div>
        </div>
    </body>
</html>
