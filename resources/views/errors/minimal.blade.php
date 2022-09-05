<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" @>
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>@yield('title')</title>
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link rel="shortcut icon" type="image/x-icon" href="{{ asset('uploads/favicon.ico') }}">
  <!-- General CSS Files -->
  
  <link rel="stylesheet" href="{{ asset('assets/frontend/css/bootstrap.min.css') }}">
 
  <link rel="stylesheet" href="{{ asset('assets/css/fontawesome.min.css') }}">

  <!-- Template CSS -->
  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/components.css') }}">
  

 
</head>


<body>
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="page-error">
          <div class="page-inner">
            <h1>@yield('code')</h1>
            <div class="page-description">
              @yield('message')
            </div>
            <div class="page-search">
              <div class="mt-3">
                <a href="{{ url('/') }}">{{ __('Back to Home') }}</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

