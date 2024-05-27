@extends('layouts.master')

@section('content')
<div class="container-fluid my-3">
    <div class="card border-none shadow p-3">
        <div class="d-flex justify-content-between my-3">
            <h5>Reviews</h5>
            <a href="{{ route('reviews.create') }}" class="btn btn-sm btn-primary d-block">
                <i class="fas fa-plus me-2"></i>
                Create
            </a>
        </div>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Image</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($reviews as $key => $review)
                    <tr>
                        <td>{{ ++$key }}</td>
                        <td>
                            <img src="{{ $review->img_url }}" width="200px" class="rounded shadow" alt="">
                        </td>
                        <td>
                            <a href="{{ route('reviews.show', $review->id) }}" class="btn btn-sm btn-warning me-2"><i class="fas fa-eye"></i></a>
                            <a href="{{ route('reviews.edit', $review->id) }}" class="btn btn-sm btn-success me-2"><i class="fas fa-pen-to-square"></i></a>
                            <form class="d-inline" action="{{ route('reviews.destroy', $review->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">
                                  <i class="fas fa-trash"></i>
                                </button>
                              </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
