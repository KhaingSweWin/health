@extends('layouts.app')
@section('appcontent')
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Dashboard</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Dashboard</li>
        </ol>
        <div class="row">
            <div class="col">
                <a href="{{route('doctor.create')}}" class="btn btn-primary">Add New Doctor</a>
            </div>
        </div>
       <table class="table table-striped">
           <thead>
               <tr>
                   <td>No</td>
                   <td>Name</td>
                   <td>Age</td>
                   <td>Field</td>
                   <td>Phone</td>
                   <td>Photo</td>
                   <td>Actions</td>
               </tr>
           </thead>
           <tbody>
               @forelse($doctors as $doctor)
                    <tr>
                        <td> {{$loop->iteration  }}                      
                        </td>
                        <td>{{$doctor->name}}</td>
                        <td>{{$doctor->age}}</td>
                        <td>{{$doctor->field}}</td>
                        <td>{{$doctor->phone}}</td>
                        <td><img src="/img/doctors/{{$doctor->image}}" width="100px" height="100px"></td>
                        <td>
                            <form action="{{route('doctor.destroy',$doctor->id)}}" method="post">
                                @csrf
                                @method('delete')
                           
                            <a class="btn btn-primary" href="{{route('doctor.show',$doctor->id)}}">View</a>
                            <a class="btn btn-warning" href="{{route('doctor.edit',$doctor->id)}}">Edit</a>
                            <button type="submit" name="submit" class="btn btn-danger">Delete</button>
                        </form>
                        </td>
                    </tr>
               @empty
                    <h3> No doctor Date</h3>
               @endforelse
           </tbody>
       </table>  
        
    </div>
</main>
@endsection