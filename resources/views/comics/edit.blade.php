@extends('layouts.app')

@section('title', 'Add Comic')

@section('main-content')
<div class="container py-5">
  <form action="{{ route('comics.update', [$comic]) }}" method="POST" class="row g-3">

    @csrf
    @method('patch')

    <div class="col-4">
      <label for="title" class="form-label">Title*</label>
      <input type="text" class="form-control " id="title" name="title" required value="{{$comic['title']}}">
    </div>
    <div class="col-4">
      <label for="series" class="form-label">Series*</label>
      <input type="text" class="form-control " id="series" name="series" required value="{{$comic['series']}}">
    </div>
    <div class="col-4">
      <label for="type" class="form-label">Type</label>
      <input type="text" class="form-control " id="type" name="type" value="{{$comic['type']}}">
    </div>
    <div class="col-6">
      <label for="price" class="form-label">Price*</label>
      <input type="text" class="form-control " id="price" name="price" required value="{{$comic['price']}}">
    </div>

    <div class="col-6">
      <label for="sale_date" class="form-label">Sale Date*</label>
      <input type="date" class="form-control " id="sale_date" name="sale_date" required value="{{$comic['sale_date']}}">
    </div>
    <div class="col-12">
      <label for="thumb" class="form-label">Thumb source</label>
      <input type="text" class="form-control " id="thumb" name="thumb" value="{{$comic['thumb']}}">
    </div>

    <div class="col-12">
      <label for="description" class="form-label">Description</label>
      <textarea class="form-control" rows="6" id="description" name="description">{{$comic['description']}}</textarea>
    </div>

    <div class="col-3 mt-3 mb-5">
      <button class=" btn btn-success">Edit comic</button>
    </div>
    <a href="{{ route('comics.index') }}">back to index comics</a>

  </form>

</div>


@endsection