@extends('layout.app')
@section('content')
        <h1 class="text-center"></h1>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card card-default">
                    <div class="card-header text-center">
                        todos registered
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
                   <form action="/todos-store"method="POST">
                    @csrf
                   <div class="from-group text-center col-md-4 col-form-label text-md-right">
                    <input type="text" placeholder='enter the name' name='name' class="form-control">
                   </div> 
                   <div class="from-group text-center col-md-4 col-form-label text-md-right">
                    <input type="password" name="password" placeholder='enter the password' class="form-control">
                    </div>  
                   <div class="from-group text-center col-md-4 col-form-label text-md-right ">
                    <input type="email" name="email" placeholder='enter the email account' class="form-control" >
                </div>
                <div class="from-group text-center" >
                    <button type="submit"class="btn btn-success">create todo</button>
                </div>
                        </form>
            
                    </div>
                </div>
            </div>
        </div>


@endsection