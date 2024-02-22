@extends('layouts.app')

@section('title')
    Edit Category | Catshop Admin
@endsection

@section('content')
    <div class="container">
        <h3>Edit Categories</h3>
        <div class="form-login">
            <form action="{{ url('/category/update/' . $category->id_categories) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="form-group">
                    <label for="categories">Categories</label>
                    <input class="form-control" type="text" name="nama" id="categories" placeholder="Categories" value="{{ old('nama', $category->nama) }}" />
                    @error('nama')
                        <p class="error-message">{{ $message }}</p>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="price">Price</label>
                    <input class="form-control" type="text" name="harga" id="price" placeholder="Price" value="{{ old('harga', $category->harga) }}" />
                    @error('harga')
                        <p class="error-message">{{ $message }}</p>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="photo">Photo</label>
                    <img src="{{ asset('img_categories/' . $category->gambar) }}" alt="" width="200px">
                    <input type="file" name="gambar" id="photo" />
                    @error('gambar')
                        <p class="error-message">{{ $message }}</p>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary btn-simpan">Edit</button>
            </form>
        </div>
    </div>
@endsection

<style>
.container {
    margin-top: 50px;
}

.form-login {
    max-width: 400px;
    margin: 0 auto;
}

.form-group {
    margin-bottom: 20px;
}

.form-control {
    width: 100%;
    padding: 10px;
    font-size: 16px;
    border-radius: 5px;
    border: 1px solid #ccc;
}

.error-message {
    font-size: 14px;
    color: red;
    margin-top: 5px;
}

.btn-simpan {
    margin-top: 20px;
}
</style>