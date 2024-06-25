@extends('layouts.app')
@section('content')
    <section class="bg-theme-dark py-2">
        <div class="container mt-5">
            <div class="card bg-dark mb-4">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-7 mx-auto mt-5 mb-3">
                            <h1 class="text-white">Sign in to your Account</h1>
                        </div>
                        <div class="col-md-7 mx-auto">
                            <form action="#" method="POST">
                                <div class="form-group">
                                    <label for="email" class="text-white">Email</label>
                                    <input type="text" name="email" id="email"
                                        class="form-control  bg-dark text-white ">
                                </div>
                                <div class="form-group">
                                    <label for="password" class="text-white">Password</label>
                                    <input type="text" name="password" id="password"
                                        class="form-control bg-dark text-white ">
                                </div>
                                <div class="form-group mt-4">
                                    <button type="submit" class="btn bg-gradient-theme btn-lg w-100">Sign in</button>
                                </div>
                                <div class="form-group mt-4">
                                    <a href="/register.php" class="text-decoration-none text-white">Don't have an account?
                                        <span class="text-theme">Create new one</span> </a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
