@extends('layouts.master')
@section('content')
<section class="my-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h3>Blade Lessons</h3>
                <h3>{{$data['name']}}</h3>
                <h4>My email is {{ $data['email'] }}</h4>
                <p>I live in {{ $data['address'] }}</p>
                <p>Username : {{ $username }}</p>
            </div>
            <div class="col-md-6">
                <table class="table table-striped">
                    <thead >
                        <tr>
                            <td>No</td>
                            <td>Name</td>
                            <td>Type</td>
                            <td>Price</td>
                        </tr>
                    </thead>
                    <tbody>
                        
                        @forelse($products as $product)
                        <tr @if($loop->first) class="bg-info" @elseif ($loop->last) class ="bg-info" @else class="bg-warning" @endif> 
                            <td>{{$loop->iteration}}</td>
                            <td>{{$product['name']}}</td>
                            <td>{{$product['type']}}</td>
                            <td>{{$product['price']}}</td>
                        </tr>
                        
                        @empty
                        <h3>No Data.</h3>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</section>
<section class="my-3">
<div class="container">
    <div class="row">
        
        
        @forelse($doctors as $doctor)
        <div class="col-md-3">
           <div class="card">
               <img src="/img/doctors/{{$doctor['photo']}}" class="card-img-top">
               <div class="card-body">
                   <h3>{{$doctor['name']}}</h3>
                   <p>{{$doctor['field']}}</p> 
                   <p>{{$doctor['phone']}}</p>                
                </div>
           </div> 
        </div>
        @empty
        <h3>No Doctors</h3>
        @endforelse
    </div>
    <div class="row">
        <div class="col-md-12 row1">
            @switch($count)
                @case(100)
                <h2>It is 100 users.</h2>
                @break
                @case(200)
                <h2>200 users</h2>
                @break
                @default
                Default users
            @endswitch
            <?php
            echo "Hello ";
            ?>
            @php
            echo "Hello World"
            @endphp
            
        </div>
    </div>
</div>

</section>

@endsection

@push('scripts')
<script>
   console.log('hello');
</script>

@endpush