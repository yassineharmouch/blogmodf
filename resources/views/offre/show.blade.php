@extends('layouts.app')

@section('content')

<div class="jumbotron text-center">
	<div align="right">
		<a href="{{ url('offres') }} " class="btn btn-default">Back</a>
	</div>
	<br />
   
  
    <div class="thumbnail"  >
    
      <img src="{{ asset('storage/'.$offre->photo) }}"  class="img-thumbnail">
      <div class="caption">
      
      <h3>Titre : {{ $offre->titre }} </h3>
	
      
      
      </div>
    
  </div>
 
</div>
@endsection
