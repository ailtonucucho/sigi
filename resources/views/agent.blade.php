@extends('layout_home.master')
@section('content')

        <div class="full-row">
            <div class="container">
				<div class="row">
                    <div class="col-lg-12">
                        <h2 class="text-secondary double-down-line text-center mb-5">Agentes</h2>
                        </div>
                </div>
                <div class="row">
                <!-- FOR MORE PROJECTS visit: codeastro.com -->
                    
                            @foreach ($users as $item)
                                
                        <a href="property?user_id={{$item->id}}">  
                    <div class="col-md-6 col-lg-4">
                        <div class="hover-zoomer bg-white shadow-one mb-4">
                            <div class="overflow-hidden"> <img src="/storage/users/{{ $item->image}}" alt="aimage"> </div>
                            <div class="py-3 text-center">
                                <h5 class="text-secondary hover-text-success">{{$item->name}}</a></h5>
                                <span>Agente Imobiliário</span> <br>
                                <span>{{ $item->properties->count()}} Propriedades</span> </div>
                        </div>
                    </div>
                    </a> 
                     @endforeach
                   
                
                  
                </div>
            </div>
        </div>

@endsection