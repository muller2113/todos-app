<?php

namespace App\Http\Controllers;
use App\user;
use App\User as AppUser;
use Illuminate\Http\Request;

class todoscontroller extends Controller
{


    public function index()
    {
           $users=User::all();
           return view('todos.index')->with('users',$users);

    }
    public function show(User $user)
    {
        //dd($userid);
          
          return view('todos.show')->with('user',$user);
    }
    public function create()
    {
        //dd(request()->all());
        return view('todos.create');
    }
    public function store()
    {
        $this->validate(request(),[
         'name'=>'required|max:11|min:2',
          'password'=>'required',
          'email'=>'required'

        ]);
        $data=request()->all();

        $user=new User;
        $user['name']=$data['name'];
        $user['email']=$data['email'];
        $user['password']=$data['password'];


        $user->save();
        session()->flash('success','you created succefully ');
        return redirect('/todos');
    }
    public function edit(User $user)

    {
        

        return view('todos.edit')->with('user',$user);
        # code...
    }  
    public function update(User $user){
        
        $this->validate(request(),[
            'name'=>'required|max:11|min:2',
             'password'=>'required',
             'email'=>'required'
   
           ]);
           
           $data=request()->all();
               #$user=new User;
              
             $user['name']=$data['name'];
             $user['email']=$data['email'];
            $user['password']=$data['password'];

            $user->save();
            session()->flash('success','you updated succefully ');
            

            return redirect('/todos');


    } 
    public function destroy(User $user)
    {
     

        $user->delete();
        session()->flash('success','you deleted succefully ');

        return redirect('/todos');
    }
    
   
}