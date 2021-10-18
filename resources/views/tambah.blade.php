@extends('layouts.app')

@section('title', 'Create Family')
<!-- section key, value karena section ini bukan diambil dari file tetapi dari key-->

@section('content')

    <form action="/familys" method="POST">
        @csrf
        <div class="form-row">
            <div class="col-md-6 mb-3">
                <label for="validationServer01">First Name</label>
                <input type="text" class="form-control is-valid" id="first_name" name="first_name" aria-describedby="first_name" required>
                <div id="first_name" class="valid-feedback">
                    Your Name Looks good!
                </div>
            </div>
            <div class="col-md-6 mb-3">
                <label for="validationServer02">Last name</label>
                <input type="text" class="form-control is-valid" id="last_name" name="last_name" aria-describedby="last_name" required>
                <div id="last_name" class="valid-feedback">
                    Your Name Looks good!
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-6 mb-3">
            <label for="validationServer03">Number Phone</label>
            <input type="text" class="form-control is-invalid" id="number_phone" name="number_phone" aria-describedby="number_phone" required>
            <div id="number_phone" class="invalid-feedback">
                Please provide a valid number.
            </div>
        </div>
            <div class="form-row">
            <div class="col-md-6 mb-3">
            <label for="validationServer03">Address</label>
            <input type="text" class="form-control is-invalid" id="address" name="address" aria-describedby="address" required>
            <div id="address" class="invalid-feedback">
                Please provide a valid address.
            </div>
        </div>
        </div>
            <div class="form-row">
            <div class="col-md-6 mb-3">
            <label for="validationServer03">Email</label>
            <input type="email" class="form-control is-invalid" id="email" name="email" aria-describedby="email" required>
            <div id="email" class="invalid-feedback">
                Please provide a valid email address.
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
