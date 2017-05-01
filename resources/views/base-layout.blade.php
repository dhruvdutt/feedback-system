<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
				<base href="/">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{mix('css/app.css')}}">
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
            <div class="alert alert-dismissible alert-danger text-center">
                {{ session('message') }}
            </div>
          @endif
          @yield('content')
        </div>
    </body>
		<script>
		    window.Laravel = <?php echo json_encode([
		        'csrfToken' => csrf_token(),
		    ]); ?>
		</script>
		<link rel="stylesheet" href="materialize.min.css">
    <script src="{{mix('js/manifest.js')}}" charset="utf-8"></script>
    <script src="{{mix('js/vendor.js')}}" charset="utf-8"></script>
    <script src="{{mix('js/app.js')}}" charset="utf-8"></script>
		<script src="materialize.min.js" charset="utf-8"></script>
</html>
