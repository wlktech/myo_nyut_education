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
                    <h5 class="mb-4">Edit Review</h5>
                    <div>
                        <a href="{{ route('reviews.index') }}" class="btn btn-sm btn-outline-primary"><i class="fas fa-arrow-left"></i></a>
                    </div>
                </div>
                <form action="{{ route('reviews.update', $review->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="" class="form-label">Image</label>
                        <input type="file" class="form-control" name="image">
                        @error('image')
                        <span class="d-block text-danger">*{{ $message }}</span>
                        @enderror
                    </div>
                    <img src="{{ $review->img_url }}" width="200px" alt="" class="img-thumbnail">
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
