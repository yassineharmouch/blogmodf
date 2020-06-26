@extends('layouts.app')

@section('content')
<div class="container">
      <div class="row">
          <div class="col-md-12">

          @can('create' ,'App\annonce')
                <a href="{{ url('annonces/create') }}" class="btn btn-success">add </a>
                @endcan

               @if(session()->has('success'))
                  <div class="alert alert-success">
                 {{ session()->get('success') }}
                  </div>
                 @endif
                 
 
          <h1> La liste des annonces</h1>
         
          <div class="row" >
          @foreach($annonces as $annonce)
          <div class="col-sm-6 col-md-4" >
              <div class="thumbnail"  >
    
      <img src="{{ asset('storage/'.$annonce->photo) }}" alt="Bootstrap" class="img-thumbnail">
      <div class="caption">
        <h3>{{ $annonce->titre }}</h3>
        <p>...</p>
        <p>
        <form action=  "{{ url('annonces',['id' => $annonce->id]) }}" method="post">
                
                {{ csrf_field() }}
                {{ method_field('DELETE') }}
              
        <a href="{{ url('annonces/'.$annonce->id) }}" class="btn btn-primary" role="button">show</a>
        @can('update' , $annonce)
         <a href="{{ url('annonces/'.$annonce->id.'/edit') }}" class="btn btn-warning" role="button">editer</a>
         @endcan
         @can('delete' , $annonce)
         <button type="submit" class="btn btn-danger" role="button">supprimer</button>
         @endcan

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
