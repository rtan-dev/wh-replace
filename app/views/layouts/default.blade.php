<!DOCTYPE>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Wyvern Hunter</title>
    {{ HTML::style('css/style.css') }}
    {{ HTML::style('css/anim.css') }}
    {{ HTML::style('css/new-style.css') }}
    <style>
        body {
            padding-top: 60px;
        }
    </style>
</head>
    <body>
        <div class="navbar navbar-fixed-top">
            <div class="navbar-inner nav-color">
                @if(isset($session_user))
                <h1 class="header">Wyvern Hunter</h1>
                @else
                <h1 class="header-login">Wyvern Hunter</h1>
                @endif
                <div id="nav" class="container">

                </div>
            </div>
        </div>
        <div class="container">
            @yield('content')
        </div>
    </body>
</html>
