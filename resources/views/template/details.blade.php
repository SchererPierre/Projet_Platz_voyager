<!DOCTYPE HTML>
<html>

<head>

    @include('template.partials._headdetails')

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
            
            @include('template.partials._thanksdetails')
            
            @include('template.partials._footerdetails')

            @include('template.partials._copyright')

        </div>


    <!-- SCRIPT -->

        @include('template.partials._scriptsdetails')

</body>


</html>
