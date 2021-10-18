@extends('layouts.app')

@section('title', 'Family')
<!-- section key, value karena section ini bukan diambil dari file tetapi dari key-->

@section('content')
    <a href="/familys/tambah" class="card-link btn-primary">Add Family</a>
<!-- karena angka yang kita gunakan adalah array dalam array sehingga memerlukan perulangan berupa foreach -->
@foreach ($familys as $family)
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">Name: {{ $family['first_name'] }} {{ $family['last_name'] }}</h5>
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">Number Phone : {{ $family['number_phone'] }}</li>
            <li class="list-group-item">Address : {{ $family['address'] }}</li>
            <li class="list-group-item">Email : {{ $family['email'] }}</li>
        </ul>
        <div class="card-body">
            <a href="#" class="card-link btn-warning">Edit Family</a>
            <a href="#" class="card-link btn-danger">Delete Family</a>
        </div>
    </div>
@endforeach
    <div>
    {{ $familys->links() }}
    </div>
@endsection
<!-- end section hanya ditulis sekali aja di paling akhir -->
