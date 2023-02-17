<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>User Management Application</title>
        <!----------------------------------
                * Font Awesome *
          ------------------------------------>
          <link rel="stylesheet" href="{{asset('backend/assets/libs/fontawesome-free-5.15.4-web/css/all.css')}}"/>
           <!----------------------------------
                * Apex Charts CSS *
          ------------------------------------>
          <link rel="stylesheet" href="{{ asset('backend/assets/libs/apexcharts-bundle/dist/apexcharts.css') }}"/>

          <!----------------------------------
                * Bootstrap *
          ------------------------------------>
          <link href="{{asset('backend/assets/libs/bootstrap-5.0.2-dist/css/bootstrap.css')}}" rel="stylesheet">
          <!----------------------------------
                * Custom CSS *
          ------------------------------------>
        <link rel="stylesheet" href="{{asset('backend/assets/css/style.css')}}">
        <link rel="stylesheet" href="{{asset('backend/assets/css/grid.css')}}">
        <link rel="stylesheet" href="{{asset('backend/assets/css/user_crud.css')}}" type="text/css">
        <link rel="stylesheet" href="{{asset('backend/assets/css/role_crud.css')}}" type="text/css">
        <link rel="stylesheet" href="{{asset('backend/assets/css/user_details.css')}}" type="text/css">
        <link rel="stylesheet" href="{{asset('backend/assets/css/role_details.css')}}">
</head>
<body>


           <!----------------------------------
               *  Side Bar    *
          ------------------------------------>
                @include('admin.body.sidebar')


                <!----------------------------------
                        *  Main Content    *
                ------------------------------------>
                <main class="main-container">

                        <!----------------------------------
                                        * Header In Main Content    *
                                ------------------------------------>
                                @include('admin.body.header')

                        <!----------------------------------
                                        *  Inner In  Main Content    *
                                ------------------------------------>

                                                @yield('admin')






                        <hr class="footer-ruler">
                        <!----------------------------------
                                        * Footer In  Main Content    *
                                ------------------------------------>
                                @include('admin.body.footer')


                </main>





                 <!----------------------------------
                        *Overlay    *
                ------------------------------------>
                @include('admin.body.overlay')





        <!----------------------------------
                * jQuery *
          ------------------------------------>
          <script src="{{asset('backend/assets/libs/jquery/jquery-3.6.3.min.js')}}"></script>


        <!----------------------------------
                * Apex Charts JS *
          ------------------------------------>

                <script src="{{asset('backend/assets/libs/apexcharts-bundle/dist/apexcharts.min.js')}}"></script>

        <!----------------------------------
                * Bootstrap *
          ------------------------------------>
          <script src="{{asset('backend/assets/libs/bootstrap-5.0.2-dist/js/bootstrap.js')}}"></script>

        <!----------------------------------
                * Custom JS *
          ------------------------------------>
<script src="{{asset('backend/assets/js/app.js')}}"></script>
<script src="{{asset('backend/assets/js/user_crud.js')}}" type="text/javascript"></script>
<script src="{{asset('backend/assets/js/role_crud.js')}}" type="text/javascript"></script>
<script src="{{asset('backend/assets/js/user_details.js')}}" type="text/javascript"></script>
<script src="{{asset('backend/assets/js/role_details.js')}}" type="text/javascript"></script>
</body>
</html>