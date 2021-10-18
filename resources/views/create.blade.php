@extends('layouts.app')

@section('title', 'Create Friends')
<!-- section key, value karena section ini bukan diambil dari file tetapi dari key-->

@section('content')

    <form action="/friends" method="POST">
        @csrf
        <div class="form-row">
            <div class="col-md-6 mb-3">
            <label for="validationServer01">Nama</label>
            <input type="text" class="form-control is-valid" id="nama" name="nama" aria-describedby="nama" required>
            <div class="valid-feedback">
                Your Name Looks good!
            </div>
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-6 mb-3">
            <label for="validationServer03">Nomor Telepon</label>
            <input type="text" class="form-control is-invalid" id="no_telp" name="no_telp" aria-describedby="no_telp" required>
            <div id="validationServer03Feedback" class="invalid-feedback">
                Please provide a valid number.
            </div>
        </div>
            <div class="form-row">
            <div class="col-md-6 mb-3">
            <label for="validationServer03">Alamat</label>
            <input type="text" class="form-control is-invalid" id="alamat" name="alamat" aria-describedby="alamat" required>
            <div id="validationServer03Feedback" class="invalid-feedback">
                Please provide a valid address.
            </div>
        </div>
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input is-invalid" type="checkbox" value="" id="invalidCheck3" aria-describedby="invalidCheck3Feedback" required>
            <label class="form-check-label" for="invalidCheck3">
                Agree to terms and conditions
            </label>
            <div  id="invalidCheck3Feedback" class="invalid-feedback">
                You must agree before submitting.
            </div>
            </div>
        </div>
        <button class="btn btn-primary" type="submit">Submit form</button>
    </form>

@endsection
<!-- end section hanya ditulis sekali aja di paling akhir -->