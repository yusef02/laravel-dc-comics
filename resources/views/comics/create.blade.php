@extends('layouts.app')

@section('title', 'Add Comic')

@section('main-content')
<div class="container py-5">
  <form action="{{ route('comics.store') }}" method="POST" class="row g-3">

    @csrf

    <div class="col-4">
      <label for="title" class="form-label">Title*</label>
      <input type="text" class="form-control " id="title" name="title" required>
    </div>
    <div class="col-4">
      <label for="series" class="form-label">Series*</label>
      <input type="text" class="form-control " id="series" name="series" required>
    </div>
    <div class="col-4">
      <label for="type" class="form-label">Type</label>
      <input type="text" class="form-control " id="type" name="type">
    </div>
    <div class="col-6">
      <label for="price" class="form-label">Price*</label>
      <input type="text" class="form-control " id="price" name="price" required>
    </div>

    <div class="col-6">
      <label for="sale_date" class="form-label">Sale Date*</label>
      <input type="date" class="form-control " id="sale_date" name="sale_date" required>
    </div>
    <div class="col-12">
      <label for="thumb" class="form-label">Thumb source</label>
      <input type="text" class="form-control " id="thumb" name="thumb">
    </div>

    <div class="col-12">
      <label for="description" class="form-label">Description</label>
      <textarea class="form-control" rows="6" id="description" name="description"></textarea>
    </div>

    <div class="col-3 mt-3 mb-5">
      <button class=" btn btn-success">Add comic</button>
    </div>
    <a href="{{ route('comics.index') }}">back to index comics</a>

  </form>

</div>


@endsection