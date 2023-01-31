@extends('layouts.sneat')

@section('content')
    @livewire('show-posts', ['counter' => $value])
@endsection

@section('js')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var elems = document.querySelectorAll('.sidenav');
            var instances = M.Sidenav.init(elems, {});
        });
    </script>
@endsection
