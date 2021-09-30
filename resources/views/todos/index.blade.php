@extends('layout.app')
@section('title')
todos page
@endsection

@section('content')
    <div class="row justify-content-center">
       <div class="col-md-12" >
        <div class="card-card-default">
            <div class="card-header">
                todos
            </div>
            <div class="card-body">
              <ul class="text-center" class="list-group">
                  <ul class="list-group-item justify-content-center">
                      @foreach ($users as $user)
                            {{ $user->name }}
                            <a href="/todos/{{ $user->id }}" class="btn btn-primary" btn-sm float-right >view</a><br>

                      @endforeach
              </ul>
                </ul>
            </div>
        </div>
       </div>
    </div>
 </div>
 @endsection

