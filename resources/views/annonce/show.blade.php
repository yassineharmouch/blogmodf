@extends('layouts.app')

@section('content')

<div class="jumbotron text-center">
	<div align="right">
		<a href="{{ url('annonces') }} " class="btn btn-default">Back</a>
	</div>
	<br />
   
  
    <div class="thumbnail"  >
    
      <img src="{{ asset('storage/'.$annonce->photo) }}"  class="img-thumbnail">
      <div class="caption">
      
      <h3>Titre : {{ $annonce->titre }} </h3>
	
      
      
      </div>
    
  </div>
 
</div>
@endsection
