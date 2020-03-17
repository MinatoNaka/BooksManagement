@extends('layouts.base')

@section('content')
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
@endsection
