@extends ('application.base')

@section ('content')

    <h2>Edit Album</h2>

    @include('application.partials.errors')

    <form action="{{ route('albums.update', $album) }}" method="post">
        {{ method_field('PUT') }}
        @include('album.forms.album-form', ['album' => $album, 'action' => 'edit'])
    </form>

@stop