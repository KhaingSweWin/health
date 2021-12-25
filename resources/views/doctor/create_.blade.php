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
                <a href="{{route('doctor.index')}}" class="btn btn-primary " style="float:right">Back</a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                
                               
                    <form action="{{route('doctor.store')}}" method="POST" enctype="multipart/form-data">
                     @csrf
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-6">
                            <div class="form-group mt-3">
                                <strong>Doctor Name:</strong>
                                <input type="text" name="name" class="form-control" placeholder="Doctor Name">
                               
                            </div>
                        </div>
                        
                    </div>
                    <div class="row ">
                        <div class="col-xs-12 col-sm-12 col-md-6">
                            <div class="form-group mt-3">
                                <strong>Field Name:</strong>
                                <input type="text" name="field" class="form-control" placeholder="Field Name">
                               
                            </div>
                        </div>
                        
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-6">
                            <div class="form-group mt-3">
                                <strong>Mobile Phone:</strong>
                                <input type="text" name="phone" class="form-control" placeholder="Phone Number">
                               
                            </div>
                        </div>
                        
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-6">
                            <div class="form-group mt-3">
                                <strong>Upload Photo:</strong>
                                <input type="file" name="image" class="form-control" >
                               
                            </div>
                        </div>
                        
                    </div>
                    <div class="row mt-3">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <button type="submit" class="btn btn-primary ml-3">Submit</button>
                        </div>
                        
                    </div>
                </form>
            </div>
        </div>
        
        
    </div>
</main>
@endsection