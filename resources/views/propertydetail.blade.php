@extends('layout_home.master')
@section('content')

           <div class="banner-full-row page-banner" style="background-image:url('images/breadcromb.jpg');">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h2 class="page-name float-left text-white text-uppercase mt-1 mb-0"><b>Detalhes da propriedade</b></h2>
                    </div>
                    <div class="col-md-6">
                        <nav aria-label="breadcrumb" class="float-left float-md-right">
                            <ol class="breadcrumb bg-transparent m-0 p-0">
                                <li class="breadcrumb-item text-white"><a href="#">Inicio</a></li>
                                <li class="breadcrumb-item active">Detalhes da propriedade</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
         <!--	Banner   --->

		
        <div class="full-row">
            <div class="container">
                <div class="row"><!-- FOR MORE PROJECTS visit: codeastro.com -->
				
					
                    <div class="col-lg-8">

                        <div class="row">
                            <div class="col-md-12">
                                <div id="single-property" style="width:1200px; height:700px; margin:30px auto 50px;"> 
                                    <!-- Slide 1-->
                                    <div class="ls-slide" data-ls="duration:7500; transition2d:5; kenburnszoom:in; kenburnsscale:1.2;"> <img width="1920" height="1080" src="/storage/properties/{{ $property->image}}" class="ls-bg" alt="" /> </div>
                                    
                                    <!-- Slide 2-->
                                    <div class="ls-slide" data-ls="duration:7500; transition2d:5; kenburnszoom:in; kenburnsscale:1.2;"> <img width="1920" height="1080" src="/storage/properties/{{ $property->image1}}" class="ls-bg" alt="" /> </div>
                                    
                                    <!-- Slide 3-->
                                    <div class="ls-slide" data-ls="duration:7500; transition2d:5; kenburnszoom:in; kenburnsscale:1.2;"> <img width="1920" height="1080" src="/storage/properties/{{ $property->image2}}" class="ls-bg" alt="" /> </div>
									
									<!-- Slide 4-->
									<div class="ls-slide" data-ls="duration:7500; transition2d:5; kenburnszoom:in; kenburnsscale:1.2;"> <img width="1920" height="1080" src="/storage/properties/{{ $property->image3}}" class="ls-bg" alt="" /> </div>
									
									<!-- Slide 5-->
									<div class="ls-slide" data-ls="duration:7500; transition2d:5; kenburnszoom:in; kenburnsscale:1.2;"> <img width="1920" height="1080" src="/storage/properties/{{ $property->image4}}" class="ls-bg" alt="" /> </div>
                                </div>
                            </div>
                        </div><!-- FOR MORE PROJECTS visit: codeastro.com -->
                        <div class="row mb-4">
                            <div class="col-md-6">
                                <div class="bg-success d-table px-3 py-2 rounded text-white text-capitalize">Aluger</div>
                                <h5 class="mt-2 text-secondary text-capitalize">{{$property->title}}</h5>
                                <span class="mb-sm-20 d-block text-capitalize"><i class="fas fa-map-marker-alt text-success font-12"></i> &nbsp;{{ $property->cityname->name}}, {{ $property->districtname->name}}, {{ $property->location}}</span>
							</div>
                            <div class="col-md-6">
                                <div class="text-success text-left h5 my-2 text-md-right">MZN{{$property->price}}</div>
                                <div class="text-left text-md-right">Preço</div>
                            </div>
                        </div>
                        <div class="property-details">
                            <div class="bg-gray property-quantity px-4 pt-4 w-100">
                                <ul>
                                    <!-- <li><span class="text-secondary">{{$property->size}}</span> Sqft</li> -->
                                    <li><span class="text-secondary">{{$property->bedroom}}</span> Quarto</li>
                                    <li><span class="text-secondary">{{$property->bathroom}}</span> Quarto de Banho</li>
                                    <li><span class="text-secondary">{{$property->balcony}}</span> Varanda</li>
                                    <li><span class="text-secondary">{{$property->hall}}</span> Salão</li>
                                    <li><span class="text-secondary">{{$property->kitchen}}</span> Cozinha</li>
                                </ul>
                            </div>
                            <h4 class="text-secondary my-4">Descrição</h4>
                            <p>{!! $property->content !!}</p>
                            
                            <h5 class="mt-5 mb-4 text-secondary">Resumo da propriedade</h5>
                            <div  class="table-striped font-14 pb-2">
                                <table class="w-100"><!-- FOR MORE PROJECTS visit: codeastro.com -->
                                    <tbody>
                                        <!-- <tr>
                                            <!-- <td>BHK :</td>
                                            <td class="text-capitalize">{{$property->bhk}}</td> -->
                                            <!-- <td>Property Type :</td>
                                            <td class="text-capitalize">{{$property->type}}</td> -->
                                        </tr>
                                        <tr>
                                            <!-- <td>Floor :</td>
                                            <td class="text-capitalize">{{$property->floor}}</td>
                                            <td>Total Floor :</td>
                                            <td class="text-capitalize">{{$property->totalfloor}}</td> -->
                                        </tr> 
                                        <tr>
                                            <td>Cidade :</td>
                                            <td class="text-capitalize">{{$property->cityname->name}}</td>
                                            <td>Bairro :</td>
                                            <td class="text-capitalize">{{$property->districtname->name}}</td>
                                        </tr>
                                        
                                    </tbody>
                                </table>
                            </div>
                            <h5 class="mt-5 mb-4 text-secondary">Imagens</h5>
                            <div class="row">
								{!! $property->feature !!}
								
                            </div>   
							<!-- FOR MORE PROJECTS visit: codeastro.com -->
                            <h5 class="mt-5 mb-4 text-secondary">Imagens</h5>
                            <div class="accordion" id="accordionExample">
                                <button class="bg-gray hover-bg-success hover-text-white text-ordinary py-3 px-4 mb-1 w-100 text-left rounded position-relative" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne"> Imagem 1 </button>
                                <div id="collapseOne" class="collapse show p-4" aria-labelledby="headingOne" data-parent="#accordionExample">
                                    <img src="/storage/properties/{{ $property->mapimage}}" alt="Not Available"> </div>
                                <button class="bg-gray hover-bg-success hover-text-white text-ordinary py-3 px-4 mb-1 w-100 text-left rounded position-relative collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Imagem 2</button>
                                <div id="collapseTwo" class="collapse p-4" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                    <img src="/storage/properties/{{ $property->topmapimage}}" alt="Not Available"> </div>
                                <button class="bg-gray hover-bg-success hover-text-white text-ordinary py-3 px-4 mb-1 w-100 text-left rounded position-relative collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Imagem 3</button>
                                <div id="collapseThree" class="collapse p-4" aria-labelledby="headingThree" data-parent="#accordionExample">
                                    <img src="/storage/properties/{{ $property->groundmapimage}}" alt="Not Available"> </div>
                            </div>

                            <h5 class="mt-5 mb-4 text-secondary double-down-line-left position-relative">Contacto do Agente</h5>
                            <div class="agent-contact pt-60">
                                <div class="row">
                                    <div class="col-sm-4 col-lg-3"> <img src="/storage/users/{{ $property->user->image}}" alt="" height="200" width="170"> </div>
                                    <div class="col-sm-8 col-lg-9">
                                        <div class="agent-data text-ordinary mt-sm-20">
                                            <h6 class="text-success text-capitalize">{{ $property->user->name}}</h6>
                                            <ul class="mb-3">
                                                <li>{{ $property->user->phone}}</li>
                                                <li>{{ $property->user->email}}</li>
                                            </ul>
                                            
                                            <div class="mt-3 text-secondary hover-text-success">
                                                <ul>
                                                    <li class="float-left mr-3"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                    <li class="float-left mr-3"><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                    <li class="float-left mr-3"><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                                    <li class="float-left mr-3"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                                    <li class="float-left mr-3"><a href="#"><i class="fas fa-rss"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- FOR MORE PROJECTS visit: codeastro.com -->
                                </div>
                            </div>
                        </div>
                    </div>
					
	
					
                    <div class="col-lg-4">
                        <!-- <h4 class="double-down-line-left text-secondary position-relative pb-4 mb-4 mt-md-50">Send Message</h4>
                        <form method="post" action="#">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Enter Name">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Enter Email">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Enter Phone">
                                    </div>
                                </div>
								<div class="col-md-12">
                                    <div class="form-group">
										<textarea class="form-control" placeholder="Enter Message"></textarea>
                                    </div>
                                </div>
								
                                <div class="col-md-12">
                                    <div class="form-group mt-4">
                                        <button type="submit" class="btn btn-success w-100">Search Property</button>
                                    </div>
                                </div>
                            </div>
                        </form> -->
                        <!-- <h4 class="double-down-line-left text-secondary position-relative pb-4 my-4">Instalment Calculator</h4> -->
                        
                        <!-- <h4 class="double-down-line-left text-secondary position-relative pb-4 mb-4 mt-5">Featured Property</h4> -->
                        <ul class="property_list_widget">
							
                            

                        </ul>

                        <div class="sidebar-widget mt-5">
                            <h4 class="double-down-line-left text-secondary position-relative pb-4 mb-4">Propriedade Adicionada Recentemente</h4>
                            <ul class="property_list_widget">
							

                                        @foreach ($properties_recent as $item)
                                    
                                    <li> <img src="/storage/properties/{{ $property->image}}" alt="pimage">
                                    <h6 class="text-secondary hover-text-success text-capitalize"><a href="{{ URL::to('/property/' . $item->id) }}">{{ $item->title}}</a></h6>
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