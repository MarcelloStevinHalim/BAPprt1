@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Mahasiswa2 {{ $mahasiswa2->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/mahasiswa/mahasiswa2') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/mahasiswa/mahasiswa2/' . $mahasiswa2->id . '/edit') }}" title="Edit Mahasiswa2"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('mahasiswa/mahasiswa2' . '/' . $mahasiswa2->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Mahasiswa2" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $mahasiswa2->id }}</td>
                                    </tr>
                                    <tr><th> StudentID </th><td> {{ $mahasiswa2->studentID }} </td></tr><tr><th> Nama </th><td> {{ $mahasiswa2->nama }} </td></tr><tr><th> Jurusan </th><td> {{ $mahasiswa2->jurusan }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
