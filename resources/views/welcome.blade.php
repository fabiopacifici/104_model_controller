@extends('layouts.app')


@section('page-title', 'Home page')

@section('content')

<div class="p-5 mb-4 bg-dark text-white rounded-3">
    <div class="container py-5">
        <h1 class="display-5 fw-bold">{{$heading}}</h1>
        <p class="col-md-8 fs-4">Using a series of utilities, you can create this jumbotron, just like the one in previous versions of Bootstrap. Check out the examples below for how you can remix and restyle it to your liking.</p>
        <button class="btn btn-primary btn-lg" type="button">Example button</button>
    </div>
</div>


<section class="books">
    <div class="container">
        <div class="row row-cols-1 row-cols-md-2 g-3">

            @forelse ($books as $book)
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <p>{{$book->title}}</p>
                    </div>
                </div>
            </div>
            @empty
            <div class="col">
                <p>No books no game!</p>
            </div>
            @endforelse
        </div>
    </div>
</section>
<!-- /.books -->





@endsection