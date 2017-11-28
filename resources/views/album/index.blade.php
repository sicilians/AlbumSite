@extends ('application.base')

@section('header', 'My albums')

@section('content')

<p>
    <a href="{{ route('albums.create') }}">Add new album</a>
</p>

<table class="table">
    <tr>
        <th>Title</th>
        <th>Artist</th>
        <th>&nbsp;</th>
    </tr>
    @foreach ($albums as $album)
        <tr>
            <td>{{ $album->title }}</td>
            <td>{{ $album->artist }}</td>
            <td>
                <form action="{{ route('albums.destroy', $album) }}" method='post'>
                    {{ method_field('DELETE') }}
                    {{ csrf_field() }}
                    <input type="button" class="btn btn-default" onclick="location.href='<?php echo route('albums.edit', $album); ?>'" value="Edit" />
                    <button type='submit' class='btn btn-danger' onclick="return confirm('Are you sure you want to permanently delete this album?');">Delete</button>
                </form>
            </td>
        </tr>
    @endforeach
</table>

<div class="text-center">{{ $albums->links() }}</div>

@stop