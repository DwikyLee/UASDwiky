@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Transaksi_peminjaman_kaset</div>
                    <div class="card-body">
                        <a href="{{ url('/admin/transaksi_peminjaman_kaset/create') }}" class="btn btn-success btn-sm" title="Add New transaksi_peminjaman_kaset">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>

                        <form method="GET" action="{{ url('/admin/transaksi_peminjaman_kaset') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
                            <div class="input-group">
                                <input type="text" class="form-control" name="search" placeholder="Search..." value="{{ request('search') }}">
                                <span class="input-group-append">
                                    <button class="btn btn-secondary" type="submit">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                        </form>

                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th><th>No Transaksi</th><th>Pembayaran</th><th>Tgl Pinjam</th><th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($transaksi_peminjaman_kaset as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->no_transaksi }}</td><td>{{ $item->pembayaran }}</td><td>{{ $item->tgl_pinjam }}</td>
                                        <td>
                                            <a href="{{ url('/admin/transaksi_peminjaman_kaset/' . $item->id) }}" title="View transaksi_peminjaman_kaset"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/admin/transaksi_peminjaman_kaset/' . $item->id . '/edit') }}" title="Edit transaksi_peminjaman_kaset"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                                            <form method="POST" action="{{ url('/admin/transaksi_peminjaman_kaset' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete transaksi_peminjaman_kaset" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $transaksi_peminjaman_kaset->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
