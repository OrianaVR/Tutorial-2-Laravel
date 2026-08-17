@extends('layouts.app') 
@section('title', $viewData["title"])
@section('subtitle', $viewData["subtitle"]) 
@section('content') 

<div class="text-center"> 
  <div class="container"> 
    <div class="row"> 
      
      <div class="col-lg-4 ms-auto"> 
        <p class="lead">Name: Oriana Valoyes</p> 
      </div> 

      <div class="col-lg-4 me-auto"> 
        <p class="lead">Email: info@onlinestore.com</p> 
      </div> 

      <div class="col-lg-4 me-auto"> 
        <p class="lead">Address: Medellín, Colombia</p> 
      </div> 

      <div class="col-lg-4 me-auto"> 
        <p class="lead">Phone: +57 300 123 4567</p> 
      </div> 

    </div> 
  </div> 
</div>

@endsection 