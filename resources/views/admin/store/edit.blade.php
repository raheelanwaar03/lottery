@extends('admin.layout.app')

@section('content')
    <div class="pc-container">
        <div class="pc-content">
            <div class="page-header">
                <div class="page-block">
                    <div class="row align-items-center">
                        <div class="col-md-12">
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('Admin.Dashboard') }}">Home</a></li>
                                <li class="breadcrumb-item" aria-current="page">Admin dashbard</li>
                                <li class="breadcrumb-item" aria-current="page">Store</li>
                            </ul>
                        </div>
                        <div class="col-md-12">
                            <div class="page-header-title">
                                <h2 class="mb-0">Edit Store Product</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('Admin.Update.Product', $product->id) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="title">Title</label>
                                    <input type="text" name="title" id="title" class="form-control"
                                        value="{{ $product->title }}">
                                </div>
                                <div class="form-group">
                                    <label for="coins">Coins</label>
                                    <input type="number" name="coins" step="0.001" id="coins" class="form-control"
                                        value="{{ $product->coins }}">
                                </div>
                                <div class="form-group">
                                    <label>Image</label>
                                    <div class="dropzone d-flex justify-content-around align-items-center">
                                        <img src="{{ asset('product/' . $product->image) }}" class="img-fluid img-thumbnail image-zoom-md"
                                            style="border-radius: 20px;height:200px;width:350px;">
                                        <label for="image" class="btn btn-info">Change Image</label>
                                        <input type="file" hidden name="image" id="image" class="form-control">
                                    </div>
                                </div>
                                <div class="m-t-20"><button class="btn btn-primary">Update</button></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
