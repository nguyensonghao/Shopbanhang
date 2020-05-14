<html>
    <header>
        <title>@yield('title')</title>
        <link rel="stylesheet" type="text/css" href="{{ asset('css/admin/app.css') }}" >
        <link rel="stylesheet" type="text/css" href="{{ asset('libs/font-awesome-4.7.0/css/font-awesome.css') }}" >
        <script type="text/javascript" src="{{ asset('js/admin/app.js') }}"></script>
        <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.1/dist/jquery.validate.js"></script>
    </header>
    <body>
        <div id="wapper-container">
            @include('admin.templates.header')

            <div id="body">
                @include('admin.templates.menuLeft')
                <div id="main">
                    @include('admin.templates.mainHeader')
                    <div id="main-body">
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
