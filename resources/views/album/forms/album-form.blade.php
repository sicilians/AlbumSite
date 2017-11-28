<div class="form-group" class="control-label {{ $errors->has('title') ? 'has-errors' : null }}">
    <label for="title">Title</label>
    <input type="text" name="title" id="title" class="form-control" placeholder="Album title"
           value="{{ isset($album->title) ? $album->title : old('title') }}"
           required="required">
</div>
    
<div class="form-group" class="control-label {{ $errors->has('artist') ? 'has-errors' : null }}">
    <label for="title">Artist</label>
    <input type="text" name="artist" id="artist" class="form-control" placeholder="Artist"
           value="{{ isset($album->artist) ? $album->artist : old('title') }}"
           required="required">
</div>
    
{{ csrf_field() }}
    
<div class="form-group">
    <button type="submit" class="btn btn-primary">{{ ucwords($action) }}</button>
    <a href="{{ route('albums.index') }}" class="btn btn-default">Cancel</a>
</div>