<div class="form-group {{ $errors->has('no_member') ? 'has-error' : ''}}">
    <label for="no_member" class="control-label">{{ 'No Member' }}</label>
    <input class="form-control" name="no_member" type="number" id="no_member" value="{{ isset($member_rental_kaset->no_member) ? $member_rental_kaset->no_member : ''}}" >
    {!! $errors->first('no_member', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('nama') ? 'has-error' : ''}}">
    <label for="nama" class="control-label">{{ 'Nama' }}</label>
    <input class="form-control" name="nama" type="text" id="nama" value="{{ isset($member_rental_kaset->nama) ? $member_rental_kaset->nama : ''}}" >
    {!! $errors->first('nama', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('alamat') ? 'has-error' : ''}}">
    <label for="alamat" class="control-label">{{ 'Alamat' }}</label>
    <input class="form-control" name="alamat" type="text" id="alamat" value="{{ isset($member_rental_kaset->alamat) ? $member_rental_kaset->alamat : ''}}" >
    {!! $errors->first('alamat', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
