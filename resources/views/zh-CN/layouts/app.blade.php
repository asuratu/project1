<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
	@include('layouts.head')
</head>
<body class="">
@include('layouts.header')

@yield('content')

@include("layouts.footer")

@include('layouts.page-js')
</body>
</html>
