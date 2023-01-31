@extends('layouts.print')

@section('content')
    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">First</th>
                <th scope="col">Last</th>
                <th scope="col">Handle</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat <input type="checkbox" checked></td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td colspan="2">Larry the Bird</td>
                <td>@twitter</td>
            </tr>
        </tbody>
    </table>

    <p class="p-2">
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Optio nobis aliquid molestiae officiis alias quisquam ducimus et est provident hic! Ratione earum ipsam amet asperiores nisi illo, consequuntur ducimus sapiente.
    </p>
@endsection
