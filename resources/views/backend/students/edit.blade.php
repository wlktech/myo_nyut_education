@extends('layouts.master')

@section('css')
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
@endsection


@section('content')
<div class="container my-3">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="card p-3 shadow">
                <div class="d-flex justify-content-between">
                    <h5 class="mb-4">Edit Student</h5>
                    <div>
                        <a href="{{ route('students.index') }}" class="btn btn-sm btn-outline-primary"><i class="fas fa-arrow-left"></i></a>
                    </div>
                </div>
                <form action="{{ route('students.update', $student->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="name" class="form-label">Name<span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="Enter Name" value="{{ $student->name }}">
                        @error('name')
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
                        <label for="grade" class="form-label">Grade<span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="grade" id="grade" placeholder="Enter Grade" value="{{ $student->grade }}">
                        @error('grade')
                        <span class="d-block text-danger">*{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="prize" class="form-label">Prize<span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="prize" id="prize" placeholder="Enter Prize" value="{{ $student->prize }}">
                        @error('prize')
                        <span class="d-block text-danger">*{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="year" class="form-label">Year<span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="year" id="year" placeholder="Enter Year" value="{{ $student->year }}">
                        @error('year')
                        <span class="d-block text-danger">*{{ $message }}</span>
                        @enderror
                    </div>


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
