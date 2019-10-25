@extends('layouts.app')
@section('content')

<div class="card">
    <div class="card-body">
        @if(count($errors) >0)
            <ul class="list-group">
                @foreach($errors->all() as $error)
                    <li class="list-group-item text-danger">{{ $error}}</li>
                @endforeach
            </ul>
        @endif
        <form action="{{ route('products.update',['id' => $product->id])}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control" value="{{$product->name}}">
        </div>
        <div class="form-group">
                <label for="price">Price</label>
                <input type="number" name="price" class="form-control" value="{{$product->price}}">
        </div>
        <div class="form-group">
                <label for="image">Image</label>
                <input type="file" name="image" class="form-control">
        </div>
        <div class="form-group">
                <label for="description">Description</label>
                <textarea name="description" cols="30" rows="10" class="form-control">{{$product->description}}</textarea>
        </div>
        <div class="form-group">
                <button type="submit" class="form-control btn btn-success">Update Product</button>
        </div>
        </form>
    </div>
</div>
@endsection
