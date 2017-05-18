<!-- Stored in resources/views/layouts/app.blade.php -->

<!DOCTYPE html>
<html>
    <head>
        <title>@yield('title')</title>

        <meta name="csrf-token" content="{{ csrf_token() }}">

        <link rel="shortcut icon" href="/img/favicon.png" type="image/png" />

        <script type="text/javascript" src="/js/jquery.min.js"></script>
        <script type="text/javascript" src="/js/jquery.form.min.js"></script>
        <script type="text/javascript" src="/js/jquery-ui.min.js"></script>
        <script type="text/javascript" src="/js/bootstrap.min.js"></script>

        <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css" />
        <link rel="stylesheet" type="text/css" href="/css/font-awesome.min.css" />
        <link rel="stylesheet" type="text/css" href="/css/jquery-ui.min.css" />
        <link rel="stylesheet" type="text/css" href="/css/jquery-ui.structure.min.css" />
        <link rel="stylesheet" type="text/css" href="/css/style.css" />
    </head>
    <body>
        <div class="container">
            <div class="wrapper">
                <div class="row">
                    <div class="col-md-12">
                        <div class="banner">
                            <h1 class="title">
                                Tourism Website for Town
                            </h1>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 side-col">
                        <nav class="side-nav">
                            <ul>
                                <li>
                                    <a href="/">Home</a>
                                </li>
                                <li>
                                    <a href="/hotels">Hotels (ဟိုတယ်များ)</a>
                                </li>
                                <li>
                                    <a href="/places">Places (နေရာများ)</a>
                                </li>
                                <li>
                                    <a href="/stores">Stores (အရောင်းဆိုင်များ)</a>
                                </li>
                                <li>
                                    <a href="/restaurants">Restaurants (စားသောက်ဆိုင်များ)</a>
                                </li>
                                <li>
                                    <a href="/users">Users [Sample] **Check Here First**</a>
                                </li>
                            </ul>
                        </nav>
                    </div>

                    <div class="col-md-9 content-col">
                        <div class="content">
                            @yield('content')
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="footer">
                        This is footer. Add your text here...
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>