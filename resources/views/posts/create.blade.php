
@extends("layouts.nav")
@section('content')
<form action="{{ route('posts.store')}}" method="POST">
    @csrf
    <h1> Create New post</h1>
    <input type="text" name="title" placeholder="Enter title"/>
    @error('title')
            {{-- <p style="color: red">name must be required</p> --}}
            <p style="color: red">{{ $message }}</p>

            @enderror
    <br/>
    <br/>
    <input type="text" name="description" placeholder="Enter body"/>
    @error('description')
    {{-- <p style="color: red">name must be required</p> --}}
    <p style="color: red">{{ $message }}</p>

    @enderror
    <br/>
    <br/>
    <button type="submit">insert</button>
</form>
@endsection

