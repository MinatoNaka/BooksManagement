@extends('layouts.base')

@section('content')
    <body class="c-app">
    @include('partial.menu')
    <div class="c-wrapper">
        @include('partial.header')
        <div class="c-body">
            <main class="c-main">
                @yield('main')
            </main>
            @include('partial.footer')
        </div>
    </div>
    </body>
@endsection
