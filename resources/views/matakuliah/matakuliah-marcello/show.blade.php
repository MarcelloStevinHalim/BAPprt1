@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">MatakuliahMarcello {{ $matakuliahmarcello->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/matakuliah/matakuliah-marcello') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/matakuliah/matakuliah-marcello/' . $matakuliahmarcello->id . '/edit') }}" title="Edit MatakuliahMarcello"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('matakuliah/matakuliahmarcello' . '/' . $matakuliahmarcello->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete MatakuliahMarcello" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $matakuliahmarcello->id }}</td>
                                    </tr>
                                    <tr><th> KodeMatakuliah </th><td> {{ $matakuliahmarcello->kodeMatakuliah }} </td></tr><tr><th> Matakuliah </th><td> {{ $matakuliahmarcello->matakuliah }} </td></tr><tr><th> Sks </th><td> {{ $matakuliahmarcello->sks }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
