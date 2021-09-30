@extends('layout.app')
@section('title')
details part
@endsection
@section('content')


            <div class="text-center my-5">
              <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card card-default">
                        <div class="card-header">
                            {{ $user->name }}
                        </div>
                        <div class="card-body">
                            {{ $user->email }}
                        </div>
                        
                    </div>
                    <a href="/todos/{{$user->id}}/edit" class="btn btn-info btn-sm my-2">edit</a>
                    <a href="/todos/{{$user->id}}/delete" class="btn btn-danger btn-sm my-2">delete</a>
                </div>
                 
              </div>
            </div>
        </div>
 @endsection       
