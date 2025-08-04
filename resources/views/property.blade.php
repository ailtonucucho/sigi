@extends('layout_home.master')
@section('content')

            <div class="full-row">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-8">
                            <div class="row">
                                @forelse ($properties as $item)
                                    <div class="col-md-6">
                                            <div class="featured-thumb hover-zoomer mb-4">
                                                <div class="overlay-black overflow-hidden position-relative"> <img src="/storage/properties/{{ $item->image}}" alt="pimage">

                                                    <div class="sale bg-success text-white"> {{ $item->title }}</div>
                                                    <div class="price text-primary text-capitalize">MZN {{$item->price}} <span class="text-white">{{ $item->size}} sqft</span></div>

                                                </div><!-- FOR MORE PROJECTS visit: codeastro.com -->
                                                <div class="featured-thumb-data shadow-one">
                                                    <div class="p-4">
                                                        <h5 class="text-secondary hover-text-success mb-2 text-capitalize"><a href="{{ URL::to('/property/' . $item->id) }}">{{ $item->title}}</a></h5>
                                                        <span class="location text-capitalize"><i class="fas fa-map-marker-alt text-success"></i> {{ $item->cityname->name}}, {{ $item->districtname->name}}, {{ $item->location}} </span>
                                                    </div>
                                                    <div class="px-4 pb-4 d-inline-block w-100">
                                                        <div class="float-left text-capitalize"><i class="fas fa-user text-success mr-1"></i>By : {{ $item->user->name}}</div>
                                                        <div class="float-right"><i class="far fa-calendar-alt text-success mr-1"></i> {{ $item->created_at->format('d-m-Y')}}</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                @empty
                                    <h2>Nenhuma propriedade encontrada</h2>
                                @endforelse
                                    
                            
                            </div>
                        </div>

                        <div class="col-lg-4">
                            

                            <h4 class="double-down-line-left text-secondary position-relative pb-4 mb-4 mt-5">Propriedades em destaque</h4>
                            <ul class="property_list_widget">
                                @foreach ($properties_featured as $item)
                                    
                                    <li> <img src="/storage/properties/{{ $item->image}}" alt="pimage">
                                        <h6 class="text-secondary hover-text-success text-capitalize"><a href="{{ URL::to('/property/' . $item->id) }}">{{ $item->title }}</a></h6>
                                        <span class="font-14"><i class="fas fa-map-marker-alt icon-success icon-small"></i>{{ $item->cityname->name}}, {{ $item->districtname->name}}, {{ $item->location}}</span>

                                    </li>
                                    @endforeach
                                

                            </ul>

                            <div class="sidebar-widget mt-5">
                                <h4 class="double-down-line-left text-secondary position-relative pb-4 mb-4">Propriedades recentes</h4>
                                <ul class="property_list_widget"><!-- FOR MORE PROJECTS visit: codeastro.com -->

                                   
                                     @foreach ($properties_recent as $item)
                                    
                                    <li> <img src="/storage/properties/{{ $item->image}}" alt="pimage">
                                        <h6 class="text-secondary hover-text-success text-capitalize"><a href="{{ URL::to('/property/' . $item->id) }}">{{ $item->title }}</a></h6>
                                        <span class="font-14"><i class="fas fa-map-marker-alt icon-success icon-small"></i>{{ $item->cityname->name}}, {{ $item->districtname->name}}, {{ $item->location}}</span>

                                    </li>
                                    @endforeach
                                    

                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>


@endsection