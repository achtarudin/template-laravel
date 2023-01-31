@extends('layouts.sneat')

@section('content')
    @foreach (range(1, 40) as $item)
        <p>{{$item}}. Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero consequatur tenetur explicabo quas officia fugit
            minima in, odio numquam labore corporis iusto, perferendis porro omnis modi magni laborum quo ea?</p>
    @endforeach
@endsection
