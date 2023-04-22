
@extends("layouts.nav")
@section('content')
<h1>All Posts</h1>

<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">title</th>
        <th scope="col">description</th>
        <th scope="col">actions</th>

      </tr>
    </thead>
    <tbody>
        @forelse ( $data as $q )
      <tr >

        <th scope="row">{{ $q->id }}</th>
        <td>{{  $q->title }}</td>
        <td>{{  $q->description }}</td>
        <td style="display:flex">
            <a class="btn btn-outline-success" style="height:50%; width: 80px"  href="{{ route('posts.edit', $q->id) }}">Edit</a>

            <form action="{{ route('posts.destroy' , $q->id) }}" method="POST">
        @csrf
        @method('delete')
        <button class="btn btn-outline-danger" type="submit">Delete</button>
        </form>
        </td>

      </tr>
      @empty
      <p>No Posts In Data Base  </p>
    </tbody>
  </table>

 @endforelse
@endsection
