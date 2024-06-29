@extends('layouts.app')
@section('content')
    <section class="bg-theme-dark py-2">
        <div class="container mt-5">
            <div class="card bg-dark mb-4">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-7 mx-auto mt-5 mb-3">
                            <h1 class="text-white">Create Free Account</h1>
                        </div>
                        <div class="col-md-7 mx-auto">
                            <form action="{{ route('register') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="name" class="text-white">Full Name</label>
                                    <input type="text" name="name" id="name"
                                        class="form-control bg-dark text-white" required>
                                </div>
                                <div class="form-group">
                                    <label for="email" class="text-white">Email</label>
                                    <input type="text" name="email" id="email"
                                        class="form-control  bg-dark text-white" required>
                                </div>
                                <div class="form-group">
                                    <label for="country" class="text-white">Country</label>
                                    <input type="text" name="country" id="country"
                                        class="form-control  bg-dark text-white" required>
                                </div>
                                <div class="form-group">
                                    <label for="province" class="text-white">Province</label>
                                    <input type="text" name="province" id="province"
                                        class="form-control  bg-dark text-white" required>
                                </div>
                                <div class="form-group">
                                    <label for="city" class="text-white">city</label>
                                    <input type="text" name="city" id="city"
                                        class="form-control  bg-dark text-white" required>
                                </div>
                                <div class="form-group">
                                    <label for="password" class="text-white">Password</label>
                                    <input type="password" name="password" id="password"
                                        class="form-control bg-dark text-white" required>
                                </div>
                                <div class="form-group">
                                    <label for="password_confirmation" class="text-white">Confirm Password</label>
                                    <input type="password" name="password_confirmation" id="password_confirmation"
                                        class="form-control bg-dark text-white" required>
                                </div>
                                <div class="form-group mt-4">
                                    <button type="submit" class="btn bg-gradient-theme btn-lg w-100">Create
                                        Account</button>
                                </div>
                                <div class="form-group mt-4">
                                    <a href="login.php" class="text-decoration-none text-white">Already have an account?
                                        <span class="text-theme">Sign in</span> </a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
