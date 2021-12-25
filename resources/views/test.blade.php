@extends('layouts.master')
@section('content')
<section>
<h2>Test Blade Templates</h2>
<h3>{{ count($data)}}</h3>

<ul>
    @forelse($data as $user)
    <li>{{ $user['name']  }},{{$user['email']}}</li>
    @empty
    <h3>No users</h3>
    @endforelse
</ul>

</section>



@endsection