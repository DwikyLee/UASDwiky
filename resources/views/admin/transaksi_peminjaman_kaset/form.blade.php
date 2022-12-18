<div class="form-group {{ $errors->has('no_transaksi') ? 'has-error' : ''}}">
    <label for="no_transaksi" class="control-label">{{ 'No Transaksi' }}</label>
    <input class="form-control" name="no_transaksi" type="number" id="no_transaksi" value="{{ isset($transaksi_peminjaman_kaset->no_transaksi) ? $transaksi_peminjaman_kaset->no_transaksi : ''}}" >
    {!! $errors->first('no_transaksi', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('pembayaran') ? 'has-error' : ''}}">
    <label for="pembayaran" class="control-label">{{ 'Pembayaran' }}</label>
    <input class="form-control" name="pembayaran" type="number" id="pembayaran" value="{{ isset($transaksi_peminjaman_kaset->pembayaran) ? $transaksi_peminjaman_kaset->pembayaran : ''}}" >
    {!! $errors->first('pembayaran', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('tgl_pinjam') ? 'has-error' : ''}}">
    <label for="tgl_pinjam" class="control-label">{{ 'Tgl Pinjam' }}</label>
    <input class="form-control" name="tgl_pinjam" type="datetime-local" id="tgl_pinjam" value="{{ isset($transaksi_peminjaman_kaset->tgl_pinjam) ? $transaksi_peminjaman_kaset->tgl_pinjam : ''}}" >
    {!! $errors->first('tgl_pinjam', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('tgl_pengembalian') ? 'has-error' : ''}}">
    <label for="tgl_pengembalian" class="control-label">{{ 'Tgl Pengembalian' }}</label>
    <input class="form-control" name="tgl_pengembalian" type="datetime-local" id="tgl_pengembalian" value="{{ isset($transaksi_peminjaman_kaset->tgl_pengembalian) ? $transaksi_peminjaman_kaset->tgl_pengembalian : ''}}" >
    {!! $errors->first('tgl_pengembalian', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
