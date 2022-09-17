<!-- Title -->
<title>@yield('title')</title>

<!-- Favicon -->
<link rel="shortcut icon" href="{{ URL::asset('assets/media/logos/favicon.ico') }}" type="image/x-icon" />

<!-- Font -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
@yield('css')
<!--- Style css -->
<link href="{{ URL::asset('assets/css/style.bundle.css.map') }}" rel="stylesheet">
<link href="{{ URL::asset('assets/plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet">
<link href="{{ URL::asset('assets/plugins/custom/fullcalendar/fullcalendar.bundle.css') }}" rel="stylesheet">
<link href="{{ URL::asset('assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet">

<!--- Style css -->
@if (App::getLocale() == 'en')
    <link href="{{ URL::asset('assets/css/style.bundle.css') }}" rel="stylesheet">
@else
    <link href="{{ URL::asset('assets/css/style.bundle.rtl.css') }}" rel="stylesheet">
@endif
