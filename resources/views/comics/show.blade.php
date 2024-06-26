@extends('layouts.app')

@section('title', 'Comic Detail')

@section('css')
<style>
  #comicThumb {
    width: 300px;
    aspect-ratio: 0.7;
  }
</style>
@endsection

@section('main-content')
<div class="container py-5">
  <h2 class="mb-5">{{ $comic->title }}</h2>
  <div class="row mb-5">
    <div class="col">
      <div class="row">

        <img class="col-6 " id="comicThumb" src="{{ $comic->thumb }}">

        <div class="col-6">
          <span><strong>Title: </strong>{{ $comic->title }}</span><br>
          <span><strong>Series: </strong>{{ $comic->series }}</span><br>
          <span><strong>Type: </strong>{{ $comic->type }}</span><br>
          <span><strong>Description: </strong></span><br>
          <p>{{ $comic->description }}</p><br>
          <span><strong>Price: </strong>{{ $comic->price }}</span><br>
          <span><strong>Sale Date: </strong>{{ $comic->sale_date }}</span><br>
          <a class="d-inline-block mt-4" href="{{ route('comics.edit', [$comic]) }}">edit</a> |
          <form class="d-inline-block" action="{{ route('comics.destroy', [$comic]) }}" method="POST">
            @csrf
            @method('delete')
            <button class="btn btn-link p-0">dump</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  <button class="btn btn-link">
    <a href="{{ route('comics.index') }}">back to index comics</a>
  </button>
</div>
@endsection