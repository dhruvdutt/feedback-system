<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="/css/app.css">
        <title>DA-IICT Course Feedback</title>
        <style>
          [ng\:cloak], [ng-cloak], .ng-cloak {
            display: block !important;
            visibility: hidden !important;
          }
        </style>
    </head>
    <body>
        <div id="app" ng-cloak>
          @if (session('message'))
            <md-content layout-padding class="text-center">
                {{ session('message') }}
            </md-content>
          @endif
          @yield('content')
        </div>
    </body>
    <script src="/js/app.js" charset="utf-8"></script>
</html>
