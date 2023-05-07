@extends('layouts.utama')

@section('title', 'Tambahkan Kategori Baru')

@section('sidebar')
@parent

@endsection

@section('content')
<div class="row">

    <div class="col-md-6">

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <form action="{{route('category.store')}}" method="POST">
            @csrf

            <div class="form-group">
                <label for="category_name">Nama Kategori</label>
                <input class="form-control" type="text" name="category_name">
                @error('category_name')
                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="description">Deskripsi</label>
                <textarea name="description" id="description" cols="30" rows="10" class="form-control"></textarea>
                @error('description')
                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-md btn-primary">Simpan</button>
            <a class="btn btn-md btn-danger" href="{{ route('category.index') }}">Batal</a>
        </form>
    </div>
</div>
@endsection