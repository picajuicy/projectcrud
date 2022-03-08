@extends('users.layout')
@section('content')
 
 
<div class="card">
  <div class="card-header">Users Page</div>
  <div class="card-body" style="background-color:#adf0d8;text-align:center;">
   
 
    <div class="card-body">
        <h5 class="card-title">Name : {{ $users->name }}</h5>
        <p class="card-text">Address : {{ $users->address }}</p>
        <p class="card-text">Mobile : {{ $users->mobile }}</p>
    </div>
  </div>
</div>