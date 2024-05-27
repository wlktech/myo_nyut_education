@extends('layouts.master')

@section('css')
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
@endsection


@section('content')
<div class="container my-3">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="card p-3 border border-none shadow">
                <div class="d-flex justify-content-between">
                    <h5 class="mb-4">Edit Post</h5>
                    <div>
                        <a href="{{ route('posts.index') }}" class="btn btn-sm btn-outline-primary"><i class="fas fa-arrow-left"></i></a>
                    </div>
                </div>
                <form action="{{ route('posts.update', $post->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="title" class="form-label">Title<span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="title" id="title" placeholder="Enter Title" value="{{ $post->title }}">
                        @error('title')
                        <span class="d-block text-danger">*{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Image<span class="text-danger">*</span></label>
                        <input type="file" class="form-control" name="image" placeholder="Enter Name">
                        @error('image')
                        <span class="d-block text-danger">*{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="content" class="form-label">Content<span class="text-danger">*</span></label>
                        <textarea name="content" id="" cols="30" rows="10" class="form-control" placeholder="Enter Content">{{ $post->content }}</textarea>
                        @error('content')
                        <span class="d-block text-danger">*{{ $message }}</span>
                        @enderror
                    </div>
                    <img src="{{ $post->img_url }}" width="200px" alt="" class="img-thumbnail">
                    <div class="d-flex justify-content-end">
                        <button class="btn btn-primary" type="submit"><i class="fas fa-pen-to-square mr-2"></i>Edit</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
@endsection

@section('script')
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
    $(document).ready(function() {
        $('.js-example-basic-multiple').select2();
    });
</script>
@endsection
