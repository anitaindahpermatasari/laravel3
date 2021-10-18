@extends('layouts.app')

@section('title', 'Friends')
<!-- section key, value karena section ini bukan diambil dari file tetapi dari key-->

@section('content')
    <a href="/friends/create" class="card-link btn-primary">Add Friends</a>
<!-- karena angka yang kita gunakan adalah array dalam array sehingga memerlukan perulangan berupa foreach -->
@foreach ($friends as $friend)
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">Nama : {{ $friend['nama'] }}</h5>
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">Nomor Telepon : {{ $friend['no_telp'] }}</li>
            <li class="list-group-item">Alamat : {{ $friend['alamat'] }}</li>
        </ul>
        <div class="card-body">
            <a href="#" class="card-link btn-warning">Edit Friends</a>
            <a href="#" class="card-link btn-danger">Delete Friends</a>
        </div>
    </div>
@endforeach
    <div>
    {{ $friends->links() }}
    </div>
@endsection
<!-- end section hanya ditulis sekali aja di paling akhir -->
