@extends('layout.app')
@section('content')
        <h1 class="text-center"></h1>
        <div class="row justify-content-center text-center">
            <div class="col-md-8">
                <div class="card card-default">
                    <div class="card-header">
                        edit the registerd
                    </div>
                    <div class="card-body">
                      @if($errors->any())
                          <div class="alert alert-danger">
                              <ul class="list-group">
                                  <li class="list-group-item">
                                      @foreach ($errors->all() as $error )
                                                  {{ $error }}
                                      @endforeach
                                  </li>
                              </ul>
                          </div>
                       
                      @endif                                                                     
                   <form action="/todos/{{ $user->id }}/update" method="POST">
                    @csrf
                    <div class="from-group text-center col-md-4 col-form-label text-md-right">
                        <input type="text" placeholder='enter the name' name='name' class="form-control" value="{{ $user->name }}">
                       </div> 
                    <div class="from-group text-center col-md-4 col-form-label text-md-right">
                    <input type="password" name="password" placeholder='enter the password' class="form-control" value="{{ $user->password }}">
                    </div>  
                    <div class="from-group text-center col-md-4 col-form-label text-md-right ">
                    <input type="email" name="email" placeholder='enter the email account' class="form-control" value="{{ $user->email }}" >
                    </div>
                    <div class="from-group text-center" >
                    <button type="submit"class="btn btn-success my-2" >update todo</button>
                    </div>
            </form>
                    </div>
                </div>
            </div>
        </div>


@endsection