@extends('layouts.app')

@section('content')
<section id="offres" class="services">
<div class="container">
      <div class="row">
          <div class="col-md-12">

          @can('create' , 'App\offre')
         <a href="{{ url('offres/create') }}" class="btn btn-success">Nouveau offre </a>
         @endcan
  
<
<br />
@if ($message = Session::get('success'))
<div class="alert alert-success">
	<p>{{ $message }}</p>
</div>
@endif
<h1> La liste de mes Offres </h1>
  <div class="row" >

 
          
          <div class="row" >
			@foreach($offres as $offre)
          <div class="col-sm-6 col-md-4" >
              <div class="thumbnail"  >
    
      <img src="{{ asset('storage/'.$offre->photo) }}" alt="Bootstrap" class="img-thumbnail">
      <div class="caption">
        <h3>{{ $offre->titre }}</h3>
        <p>...</p>
        <p>
        <form action=  "{{ url('offres',['id' => $offre->id]) }}" method="post">
                
                {{ csrf_field() }}
                {{ method_field('DELETE') }}
        <a href="{{ url('offres/'.$offre->id) }}" class="btn btn-primary" role="button">show</a>
        @can('update' , $offre)
         <a href="{{ url('offres/'.$offre->id.'/edit') }}" class="btn btn-warning" role="button">editer</a>
         @endcan
         @can('delete' , $offre)
         <button type="submit" class="btn btn-danger" role="button">supprimer</button>
         @endcan
         <a href="" class="btn btn-default"  title="Bootstrap 3 themes generator">postuler</a>
       
         </form>
         </p>
      </div>
      </div>
      </div>
    
  @endforeach
</div>
       
        </div>
    </div>
</div>  



@endsection
