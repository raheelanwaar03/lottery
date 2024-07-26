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
                                <h2 class="mb-0">Add Featured Lotteries</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('Admin.store.Featured.Lotteries') }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="price">Price</label>
                                    <input type="number" name="price" step="0.001" id="price" class="form-control"
                                        placeholder="Lottery Entery Price" required>
                                </div>
                                <div class="form-group">
                                    <label for="title">Title</label>
                                    <input type="text" name="title" id="title" class="form-control"
                                        placeholder="Lottery title" required>
                                </div>
                                <div class="form-group">
                                    <label for="time">Time</label>
                                    <input type="text" name="time" id="time" class="form-control"
                                        placeholder="Lottery time" required>
                                </div>
                                <div class="form-group">
                                    <label for="cate">Category</label>
                                    <select name="cate" id="cate" class="form-control">
                                        <option value="All">All</option>
                                        <option value="Bike">Bike</option>
                                        <option value="Tech">Tech</option>
                                        <option value="Cash">Cash</option>
                                        <option value="Other">Other</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="image">Lottery Image</label>
                                    <div class="dropzone">
                                        <input name="image" required hidden type="file" id="selectImage">
                                        <label for="selectImage" class="btn btn-primary">Select Image</label>
                                    </div>
                                </div>
                                <div class="m-t-20"><button class="btn btn-primary">Add</button></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
