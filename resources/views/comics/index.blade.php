@extends('layouts.app')

@section('title', 'Comics index')

@section('main-content')
<div class="container py-5">
  <table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>TITLE</th>
        <th>PRICE</th>
        <th>SERIES</th>
        <th>SALE DATE</th>
        <th>TYPE</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      @forelse($comics as $comic)
      <tr>
        <td>{{ $comic['id'] }}</td>
        <td>{{ $comic['title'] }}</td>
        <td>{{ $comic['price'] }}</td>
        <td>{{ $comic['series'] }}</td>
        <td>{{ $comic['sale_date'] }}</td>
        <td>{{ $comic['type'] }}</td>
        <td>
          <a href="{{ route('comics.show', [$comic]) }}">show</a>
        </td>
      </tr>
      @empty
      <tr>No comics found</tr>
      @endforelse
    </tbody>
  </table>

</div>
@endsection