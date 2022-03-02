@extends('layouts.admin')
@section('title', $viewData["title"])
@section('content')
    <div class="card-mb-4">
        <div class="card-header">
            Edit Product
        </div>
        <div class="card-body">
            @if($errors->any())
                <ul class="alert alert-danger list-unstyled">
                    @foreach($errors->all() as $error)
                        <li>- {{ $error }}</li>
                    @endforeach
                </ul>
            @endif

            <form method="POST" action="{{ route('admin.product.update', ['id' => $viewData['product']->getId()]) }}"
                  enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col">
                        <div class="mb-3-row">
                            <label for="" class="col-lg-2 col-md-6 col-sm-12 col-form-label">Name:</label>
                            <div class="col-lg-10 col-md-6 col-sm-12">
                                <input name="name" type="text" class="form-control"
                                       value="{{$viewData['product']->getName()}}">
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="mb-3-row">
                            <label for="" class="col-lg-2 col-md-6 col-sm-12 col-form-label">Price:</label>
                            <div class="col-lg-10 col-md-6 col-sm-12">
                                <input name="price" type="text" class="form-control"
                                       value="{{$viewData['product']->getPrice()}}">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="mb-3-row">
                            <label for="" class="col-lg-2 col-md-6 col-sm-12 col-form-label">Image:</label>
                            <div class="col-lg-10 col-md-6 col-sm-12">
                                <input type="file" class="form-control" name="image">
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        &nbsp;
                    </div>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Description</label>
                    <textarea name="description" rows="3" class="form-control">
                        {{ $viewData['product']->getDescription() }}
                    </textarea>
                </div>
                <button class="btn btn-primary" type="submit">Edit</button>
            </form>
        </div>
    </div>
@endsection
