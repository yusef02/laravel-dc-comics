@extends('layouts.app')

@section('title', 'Homepage')

@section('main-content')
<section>
  <div class="container py-5">
    <h1 class="mb-5">DC Comics</h1>
    <a href="{{ route('comics.index') }}">go to comics index</a>
  </div>
</section>
@endsection