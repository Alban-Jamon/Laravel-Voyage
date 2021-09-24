@extends('Layouts.base')
@section('content') 

@php ($count = 1)
    <div class="container d-flex justify-content-center">
        <a href="{{route('addTrip')}}"> 
            <button type="button" class="btn btn-dark justify-content-center" >Ajouter Voyage</button>
        </a> 
    </div>
    @foreach ($voyages as $oneTrip)

    <div class="container d-flex justify-content-center">
        <div class="col col-lg-3">
            {{$oneTrip->id}} -- Voyage{{$count}} 
        </div>
        <div class="col col-lg-3">
            <a href="{{route('show', ['id' => $oneTrip->id])}}"> 
                <button type="button" class="btn btn-success" >Voir</button>
            </a>
            {{-- <a href="{{route('update', ['id' => $oneTrip->id])}}"> --}}
                <button type="button" class="btn btn-primary" >Editer</button>
            {{-- </a> --}}
            <a href="{{route('destroy', ['id' => $oneTrip->id])}}"> 
                <button type="button" class="btn btn-danger" >Supprimer</button>
            </a>  

        </div>
    </div>

    @php ($count++)
        
    @endforeach
@endsection