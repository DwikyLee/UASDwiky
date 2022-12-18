@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">member_rental_kaset {{ $member_rental_kaset->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/admin/member_rental_kaset') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/admin/member_rental_kaset/' . $member_rental_kaset->id . '/edit') }}" title="Edit member_rental_kaset"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('admin/member_rental_kaset' . '/' . $member_rental_kaset->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete member_rental_kaset" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $member_rental_kaset->id }}</td>
                                    </tr>
                                    <tr><th> No Member </th><td> {{ $member_rental_kaset->no_member }} </td></tr><tr><th> Nama </th><td> {{ $member_rental_kaset->nama }} </td></tr><tr><th> Alamat </th><td> {{ $member_rental_kaset->alamat }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
