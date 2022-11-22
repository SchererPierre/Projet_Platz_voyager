<!DOCTYPE HTML>
<html>

<head>

    @include('template.partials.headdetails')

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
            
            @include('template.partials.thanksdetails')
            
            @include('template.partials.footerdetails')

            @include('template.partials.copyright')

        </div>


    <!-- SCRIPT -->

        @include('template.partials.scriptsdetails')

</body>


</html>
