@extends('layouts.app')

@section('content')

<h1 class="text-center my-2">Create Todo</h1>

<div class="row justify-content-center">

    <div class="col-md-8 my-2">
       <div class="card card-default my-5">

            <div class="card card-header">Create new todo</div>

            <div class="card card-body">

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                             @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                             @endforeach
                        </ul>
                    </div>
                @endif

                <form action="/store-todo", method="POST">
                    @csrf
                    <div class="form-group">

                        <input class="input form-control" name="name" placeholder="Name">

                    </div>

                    <textarea name="description" class="form-control" placeholder="Description " id="" cols="5" rows="5"></textarea>

                    <div class="form form-group text-center my-2">
                        <button type="submit" class="btn btn-success">Create Todo</button>
                    </div>

                </form>
            </div>
       </div>
    </div>
</div>

@endsection
