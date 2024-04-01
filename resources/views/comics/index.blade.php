@extends('layouts.app')

@section('title', 'Comics index')

@section('main-content')
<div class="container py-5">
  <a href="{{ route('comics.create') }}" class="mb-4 d-inline-block">Create Comic</a>
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
          <a href="{{ route('comics.show', [$comic]) }}">show</a> |
          <a href="{{ route('comics.edit', [$comic]) }}">edit</a> |
          <form class="d-inline-block" action="{{ route('comics.destroy', [$comic]) }}" method="POST">
            @csrf
            @method('delete')
            <button class="btn btn-link p-0">dump</button>
          </form>
        </td>
      </tr>
      @empty
      <tr>
        <td class="text-center" colspan="100">No comics found</td>
      </tr>
      @endforelse
    </tbody>
  </table>

</div>
@endsection