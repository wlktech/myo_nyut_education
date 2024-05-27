@extends('layouts.master')

@section('css')
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
@endsection


@section('content')
<div class="container my-3">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card p-3 border border-none shadow">
                <div class="d-flex justify-content-between">
                    <h5 class="mb-4">Review Detail</h5>
                    <div>
                        <a href="{{ route('reviews.index') }}" class="btn btn-sm btn-outline-primary"><i class="fas fa-arrow-left"></i></a>
                    </div>
                </div>
                <div>
                    <img src="{{ $review->img_url }}" width="100%" class="img-thumbnail" alt="">
                </div>
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
