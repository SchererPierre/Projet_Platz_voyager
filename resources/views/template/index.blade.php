<!DOCTYPE HTML>
<html>

<head>

    @include('template.partials.head')

</head>

<body>

    <a name="ancre"></a>

    <!-- CACHE -->
    <div class="cache"></div>

    <!-- HEADER -->

        @include('template.partials.header')

    <!-- NAVBAR -->

        @include('template.partials.navbar')

    <!-- FILTER -->

        @include('template.partials.filter')
        
    <!-- PORTFOLIO -->

        <div id="wrapper-container">
            
            @yield('content')
            
            @include('template.partials.thanks')

            @include('template.partials.footer')

            @include('template.partials.copyright')

        </div>

    <!-- SCRIPT -->

        @include('template.partials.scripts')

</body>


</html>
