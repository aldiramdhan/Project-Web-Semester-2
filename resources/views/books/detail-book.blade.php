@extends('layouts.master')
@section('title', 'Book Rent')

@push('css')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
@endpush
@section('content')

    <div class="container">
        <h1 class="mb-5">Book Rent Form</h1>

        <div class="mt-5">
            @if (session('alert-class'))
                <div class="alert {{ session('alert-class') }}">
                    {{ session('message') }}
                </div>
            @endif
        </div>
        <div class="row">
        <div class="col-md-6">
            <img alt="Bootstrap Image Preview" src="{{ asset('storage/app/cover/'. $book->cover) }}" width="80%" height="80%" />
        </div>
        <div class="col-md-6">
            <table class="table mt-4">
                <thead>
                    <tr>
                        <td scope="row">Book Code : </td>
                        <td scope="row">{{ $book->book_code }}</td>
                    <tr>
                        <td scope="row">Title : </td>
                        <td scope="row">{{ $book->title }}</td>
                    </tr>
                    <tr>
                        <td scope="row">Status : </td>
                        <td scope="row">{{ $book->status }}</td>
                    </tr>
                </thead>
            </table>
            <form action="{{ route('detail-book.store') }}" method="post">
                @csrf
                <div class="mb-3">
                    <input type="text" name="book_id" value="{{ $book->id }}" hidden>

                    <input type="text" name="user_id" value="{{ auth()->user()->id }}" hidden>
                </div>
                <div>
                    <button type="submit" class="btn btn-primary w-100">Rent</button>
                </div>
            </form>
        </div>
    </div>
        @push('script')
            <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
            <script>
                $(document).ready(function() {
                    $('.inputbox').select2();
                });
            </script>
        @endpush
    @endsection
