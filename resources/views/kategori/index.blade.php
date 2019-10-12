@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Kategori</div>

                <div class="card-body">
                <a href="{{ route('kategori.create') }}" class="btn btn-success btn-sm mb-3">Tambah Kategori</a>
                <table class="table table-bordered" id="users-table">
                <thead>
                    <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Nama Kategori</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                    </tr>
                </thead>
                @foreach($liat as $li)
                <tbody>
                    <tr>
                    <th scope="row">{{ $li->id }}</th>
                    <td>{{ $li->nama_kategori }}</td>
                    <td><a href="{{ route('kategori.edit',$li->id) }}" class="btn btn-danger btn-sm">Edit</a></td>
                    {!! Form::open(['route'=>['kategori.destroy',$li->id],'method'=>'DELETE']) !!}
                    <td><button type="submit" name="submit" class="btn btn-danger btn-sm">Hapus</button></td>
                    {!! Form::close() !!}
                    </tr>
                </tbody>
                @endforeach
                </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
$(function() {
    $('#users-table').DataTable();
});
</script>
@endpush