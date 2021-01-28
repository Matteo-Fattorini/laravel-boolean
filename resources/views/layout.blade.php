<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    {{-- <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="css/style.css"> --}}
    <link rel="icon" type="images/png" href="images/favicon.ico">
    <script defer src="js/app.js"></script>
    <title>Document</title>
</head>

<body>

    @section('greenbar')
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 green"></div>
            </div>
        </div>
    @show

    @section('header')
        <div class="container">
            <div class="row">
                <div class="col-8 offset-2 d-flex justify-content-between
                                align-items-center
                                ">

                    <div class="col-4">
                        <img class="logo" src="https://www.boolean.careers/images/misc/logo.png" alt="">
                    </div>
                    <div class="col-8 d-flex">
                        <ul class="d-flex w-100 justify-content-between
                                    align-items-center mb-0">
                            @foreach (config('routes.links') as $link)
                                <li class={{ Route::currentRouteName() == $link['id'] ? 'active' : '' }}><a
                                        href="{{ route($link['id']) }}">{{ $link['name'] }}</a></li>

                            @endforeach
                        </ul>
                    </div>




                </div>

            </div>
        @show

        @section('content')

            <div class="row">
                <div class="col-4 offset-4 mt-5">
                    <h1>@yield("titolo","titolo-pagina")</h1>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consequatur at, cum distinctio quibusdam
                        suscipit soluta. Harum unde minus labore saepe, dicta consequatur, corrupti excepturi omnis ab odio
                        pariatur magni illo nesciunt! Ducimus alias aut, odit odio officiis delectus eaque illo sapiente
                        enim soluta tenetur corrupti provident, deserunt, veritatis repellat praesentium?</p>
                </div>
            </div>
        </div>

    @show



</body>

</html>
