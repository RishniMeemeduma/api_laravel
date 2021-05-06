<!DOCTYPE html>
<head>
    <title>Laravel Student Application</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
<script src="http://code.jquery.com/ui/1.11.0/jquery-ui.js"></script>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">

<!--<script src="{{URL::asset('/js/customjs.js')}}"></script>-->
<script src="{{ asset('js/app.js')}}" defer></script>
<link href='{{ asset('css/app.css')}}' rel='stylesheet'>
</head>
<body>
    <main class='py-4'>
        <div class="container">
           @yield('content')
        </div>
    </main>
</body>
<footer></footer>
</body>
<script>
    var root_url = <?php echo json_encode(url('/'))?>
</script>
@stack('ajax_crud')
</html>
