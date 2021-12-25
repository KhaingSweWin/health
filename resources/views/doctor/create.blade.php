
@extends('layouts.app')
@section('appcontent')
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Dashboard</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Dashboard</li>
        </ol>
        
        <div class="row">
            <div class="col-md-12">
                <form action="{{route('doctor.store')}}" enctype="multipart/form-data" method="post">
                   @csrf
                    <div class="form-group">
                        <label class="form-label">Doctor Name</label>
                        <input type="text" name="name" class="form-control">
                        @error('name')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label class="form-label">Field</label>
                        <input type="text" name="field" class="form-control">
                        @error('field')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label class="form-label">Age</label>
                        <input type="number" name="age" class="form-control">
                        @error('age')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group"> 
                        <label class="form-label">Phone Number:</label>
                        <input type="text" name="phone" class="form-control">
                        @error('phone')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label class="form-label">Upload photo</label>
                        <input type="file" name="image" class="form-control">
                        @error('image')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group mt-3">
                        <button class="btn btn-primary" type="submit"> Submit</button>
                    </div>
                </form>
            </div>
        </div>
       
        
        
    </div>
</main>
@endsection