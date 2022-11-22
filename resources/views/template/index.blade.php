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

        @include('template.partials._header')

    <!-- NAVBAR -->

        @include('template.partials._navbar')

    <!-- FILTER -->

        @include('template.partials._filter')
        
    <!-- PORTFOLIO -->

        <div id="wrapper-container">
            
            @yield('content')
            
            @include('template.partials._thanks')

            @include('template.partials._footer')

            @include('template.partials._copyright')

        </div>

    <!-- SCRIPT -->

        @include('template.partials._scripts')

</body>


</html>
