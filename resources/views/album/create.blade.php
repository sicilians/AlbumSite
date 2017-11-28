@extends ('application.base')

@section ('content')

    <h2>Add New Album</h2>

    @include('application.partials.errors')

    <form action="{{ route('albums.store') }}" method="post">
        @include('album.forms.album-form', ['action' => 'add'])
    </form>

@stop