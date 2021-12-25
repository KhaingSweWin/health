
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
                
                    <div class="form-group">
                        <label class="form-label">Doctor Name</label>
                        <label class="form-label">{{$doctor->name}}</label>
                    </div>
                    
                    
                
            </div>
        </div>
       
        
        
    </div>
</main>
@endsection