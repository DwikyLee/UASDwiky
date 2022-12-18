<div class="form-group {{ $errors->has('kode_film') ? 'has-error' : ''}}">
    <label for="kode_film" class="control-label">{{ 'Kode Film' }}</label>
    <input class="form-control" name="kode_film" type="number" id="kode_film" value="{{ isset($kaset_film->kode_film) ? $kaset_film->kode_film : ''}}" >
    {!! $errors->first('kode_film', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('judul_film') ? 'has-error' : ''}}">
    <label for="judul_film" class="control-label">{{ 'Judul Film' }}</label>
    <input class="form-control" name="judul_film" type="text" id="judul_film" value="{{ isset($kaset_film->judul_film) ? $kaset_film->judul_film : ''}}" >
    {!! $errors->first('judul_film', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('genre_film') ? 'has-error' : ''}}">
    <label for="genre_film" class="control-label">{{ 'Genre Film' }}</label>
    <input class="form-control" name="genre_film" type="text" id="genre_film" value="{{ isset($kaset_film->genre_film) ? $kaset_film->genre_film : ''}}" >
    {!! $errors->first('genre_film', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
