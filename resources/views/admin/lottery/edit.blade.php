@extends('admin.layout.app')

@section('content')
    <div class="pc-container">
        <div class="pc-content"><!-- [ breadcrumb ] start -->
            <div class="page-header">
                <div class="page-block">
                    <div class="row align-items-center">
                        <div class="col-md-12">
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('Admin.Dashboard') }}">Home</a></li>
                                <li class="breadcrumb-item" aria-current="page">Admin dashbard</li>
                                <li class="breadcrumb-item" aria-current="page">Lottery</li>
                            </ul>
                        </div>
                        <div class="col-md-12">
                            <div class="page-header-title">
                                <h2 class="mb-0">Add Lottery</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- [ breadcrumb ] end -->
            <div class="row"><!-- [ sample-page ] start -->
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('Admin.Update.Lottery', $lottery->id) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="price">Price</label>
                                    <input type="number" name="price" step="0.001" id="price" class="form-control"
                                        value="{{ $lottery->price }}">
                                </div>
                                <div class="form-group">
                                    <label for="title">Title</label>
                                    <input type="text" name="title" id="title" class="form-control"
                                        value="{{ $lottery->title }}">
                                </div>
                                <div class="form-group">
                                    <label for="time">Time</label>
                                    <input type="text" name="time" id="time" class="form-control"
                                        value="{{ $lottery->time }}">
                                </div>
                                <div class="form-group">
                                    <label>Image</label>
                                    <div class="dropzone d-flex justify-content-around align-items-center">
                                        <img src="{{ asset('lottery/' . $lottery->picture) }}" class="img-fluid"
                                            height="200px" width="200px" style="border-radius: 20px;">
                                        <label for="image" class="btn btn-info">Change Image</label>
                                        <input type="file" hidden name="picture" id="image" class="form-control">
                                    </div>
                                </div>
                        </div>
                        <div class="d-grid">
                            <button class="btn btn-primary">Update</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
