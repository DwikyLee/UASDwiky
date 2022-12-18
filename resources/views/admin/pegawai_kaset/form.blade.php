<div class="form-group {{ $errors->has('no_pegawai') ? 'has-error' : ''}}">
    <label for="no_pegawai" class="control-label">{{ 'No Pegawai' }}</label>
    <input class="form-control" name="no_pegawai" type="number" id="no_pegawai" value="{{ isset($pegawai_kaset->no_pegawai) ? $pegawai_kaset->no_pegawai : ''}}" >
    {!! $errors->first('no_pegawai', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('nama') ? 'has-error' : ''}}">
    <label for="nama" class="control-label">{{ 'Nama' }}</label>
    <input class="form-control" name="nama" type="text" id="nama" value="{{ isset($pegawai_kaset->nama) ? $pegawai_kaset->nama : ''}}" >
    {!! $errors->first('nama', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('jam_kerja') ? 'has-error' : ''}}">
    <label for="jam_kerja" class="control-label">{{ 'Jam Kerja' }}</label>
    <input class="form-control" name="jam_kerja" type="time" id="jam_kerja" value="{{ isset($pegawai_kaset->jam_kerja) ? $pegawai_kaset->jam_kerja : ''}}" >
    {!! $errors->first('jam_kerja', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
