<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport"/>

    <link rel="shortcut icon" href="/favicons/favicon.ico"/>
    <link rel="icon" type="image/png" href="/favicons/favicon-32.png" sizes="32x32"/>
    <link rel="icon" type="image/png" href="/favicons/favicon-16.png" sizes="16x16"/>

    <link href="https://rsms.me/inter/inter.css" rel="stylesheet"/>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @stack('additional_css')
    <title>Mahuset</title>
</head>

<body>
<!-- HEADER -->
<header class="container mx-auto py-8 px-10">
    <div class="flex justify-between items-center">
        <h2 class="header__logo logo">
            <a href="http://{!! env('APP_URL') !!}" data-behavior="backTop">Mahuset</a>
        </h2>

    </div>
</header>

@yield('content')

<!-- FOOTER -->
<footer class="my-10 px-10">
    <p>
        <a class="hover:underline" href="https://twill.io">Twill</a> is an open-source CMS toolkit for Laravel, crafted
        by
        <a class="hover:underline" href="https://area17.com">AREA 17</a>
    </p>

    <div class="flex flex-col lg:flex-row justify-between mt-5">
        <ul class="flex flex-col md:flex-row">
            <li class="text-twill-purple"><a href="https://twill.io" class="hover:underline">twill.io</a></li>
            <li class="md:ml-10 text-twill-purple"><a href="https://github.com/area17/twill" class="hover:underline">Github</a>
            </li>
            <li class="md:ml-10 text-twill-purple"><a href="https://spectrum.chat/twill"
                                                      class="hover:underline">Chat</a></li>
            <li class="md:ml-10 text-twill-purple"><a href="https://demo.twill.io/" class="hover:underline">Demo</a>
            </li>
            <li class="md:ml-10 text-twill-purple"><a href="https://twill.io/docs" class="hover:underline">Docs</a></li>
        </ul>

        <ul class="flex flex-col md:flex-row mt-5 lg:mt-0">
            <li class="text-twill-purple"><a href="https://twitter.com/twillcms" class="hover:underline">Twitter</a>
            </li>
            <li class="md:ml-10 text-twill-purple"><a href="https://www.instagram.com/twillcms/"
                                                      class="hover:underline">Instagram</a></li>
            <li class="md:ml-10 text-twill-purple"><a href="https://facebook.com/twillcms" class="hover:underline">Facebook</a>
            </li>
        </ul>
    </div>
</footer>
</body>
</html>
