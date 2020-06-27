@extends('layouts.app')

@section('content')

<h1 class="text-center my-2">Update Todo</h1>

<div class="row justify-content-center">

    <div class="col-md-8 my-2">
       <div class="card card-default my-5">

            <div class="card card-header">Update todo</div>

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

                <form action="/todos/{{$todo->id}}/update-todo", method="POST">
                    @csrf
                    <div class="form-group">

                        <input class="input form-control" name="name" placeholder="Name" value={{$todo->name}}>

                    </div>

                    <textarea name="description" class="form-control" placeholder="Description " id="" cols="5" rows="5" >{{$todo->description}}</textarea>

                    <div class="form form-group my-2">
                        <button type="submit" class="btn btn-info btn-sm my-2">Update Todo</button>
                    </div>

                </form>
            </div>
       </div>
    </div>
</div>

@endsection
