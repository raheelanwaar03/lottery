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
                            <form action="{{ route('Admin.Store.Lottery') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="price">Price</label>
                                    <input type="number" name="price" step="0.001" id="price" class="form-control"
                                        placeholder="Lottery Entery Price">
                                </div>
                                <div class="form-group">
                                    <label for="title">Title</label>
                                    <input type="text" name="title" id="title" class="form-control"
                                        placeholder="Lottery title">
                                </div>
                                <div class="form-group">
                                    <label for="time">Time</label>
                                    <input type="text" name="time" id="time" class="form-control"
                                        placeholder="Lottery time">
                                </div>
                                <div class="form-group">
                                    <label for="picture">Picture</label>
                                    <div class="dropzone">
                                        <div class="fallback"><input name="picture" type="file">
                                        </div>
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
