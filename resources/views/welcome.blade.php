@extends('layout_home.master')
@section('content')

            <!--	Banner Start   -->
            <div class="overlay-black w-100 slider-banner1 position-relative" style="background-image: url('{{asset("template/images/banner/rshmpg.jpg")}}'); background-size: cover; background-position: center center; background-repeat: no-repeat;">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-lg-12">
                            <div class="text-white">
                                <h1 class="mb-4"><span class="text-success">Deixe nos</span><br>
                                    Conduzir te para casa

                                </h1><!-- FOR MORE PROJECTS visit: codeastro.com -->
                                <form method="GET" action="property">
                                    <div class="row">
                                        <div class="col-md-6 col-lg-2">
                                            <div class="form-group">
                                                <select class="form-control" name="type">
                                                    <option value="">Selecionar Tipo</option>
                                                    <option value="apartment">Apartamento</option>
                                                    <option value="flat">Flat</option>
                                                    <option value="building">Edifício</option>
                                                    <option value="house">Casa</option>
                                                    <option value="villa">Vila</option>
                                                    <option value="office">Escritório</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-2">
                                            <div class="form-group">
                                                <select class="form-control" name="stype">
                                                    <option value="">Selecione o estado</option>
                                                    <option value="rent">Aluguer</option>
                                                    <option value="sale">Venda</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-8 col-lg-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="city" placeholder="Busque o bairro" required>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-lg-2">
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-success w-100">Buscar</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--	Banner End  -->

            <!--	Text Block One
		======================================================-->
            <div class="full-row bg-gray">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12"><!-- FOR MORE PROJECTS visit: codeastro.com -->
                            <h2 class="text-secondary double-down-line text-center mb-5">O que nos fazemos</h2>
                        </div>
                    </div>
                    <div class="text-box-one">
                        <div class="row">
                            <div class="col-lg-4 col-md-6">
                                <div class="p-4 text-center hover-bg-white hover-shadow rounded mb-4 transation-3s">
                                    <i class="flaticon-rent text-success flat-medium" aria-hidden="true"></i>
                                    <h5 class="text-secondary hover-text-success py-3 m-0"><a href="#">Serviços de venda</a></h5>
                                    <p></p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="p-4 text-center hover-bg-white hover-shadow rounded mb-4 transation-3s">
                                    <i class="flaticon-for-rent text-success flat-medium" aria-hidden="true"></i>
                                    <h5 class="text-secondary hover-text-success py-3 m-0"><a href="#">Serviços de arrendamento</a></h5>
                                    <p></p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="p-4 text-center hover-bg-white hover-shadow rounded mb-4 transation-3s">
                                    <i class="flaticon-list text-success flat-medium" aria-hidden="true"></i>
                                    <h5 class="text-secondary hover-text-success py-3 m-0"><a href="#">Classificados</a></h5>
                                    <p></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           
                        <div class="col-md-12"><!-- FOR MORE PROJECTS visit: codeastro.com -->
                            <div class="tab-content mt-4" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home">
                                    <div class="row">

                                        
                                        @foreach ($properties as $item)
                                            
                                        
                                        <div class="col-md-6 col-lg-4"><!-- FOR MORE PROJECTS visit: codeastro.com -->
                                            <div class="featured-thumb hover-zoomer mb-4">
                                                <div class="overlay-black overflow-hidden position-relative"> <img src="/storage/properties/{{ $item->image}}" alt="pimage">
                                                    <div class="featured bg-success text-white">Nova</div>
                                                    <div class="sale bg-success text-white text-capitalize">Por {{$item->user->name}}</div>
                                                    <div class="price text-primary"><b>MZN{{$item->price}} </b><span class="text-white">{{$item->size}} Sqft</span></div>
                                                </div>
                                                <div class="featured-thumb-data shadow-one">
                                                    <div class="p-3">
                                                        <h5 class="text-secondary hover-text-success mb-2 text-capitalize"><a href="#">{{$item->title}}</a></h5>
                                                        <span class="location text-capitalize"><i class="fas fa-map-marker-alt text-success"></i> {{$item->cityname->name}}, {{$item->districtname->name}}, {{$item->location}}</span>
                                                    </div>
                                                    <div class="bg-gray quantity px-4 pt-4">
                                                        <ul>
                                                            <li><span>{{$item->size}}</span> m2</li>
                                                            <li><span>{{$item->bedroom}}</span> Camas</li>
                                                            <li><span>{{$item->bathroom}}</span> WCs</li>
                                                            <li><span>{{$item->kitchen}}</span> Cozinha</li>
                                                            <li><span>{{$item->balcony}}</span> Varanda</li>

                                                        </ul>
                                                    </div>
                                                    <div class="p-4 d-inline-block w-100">
                                                        <div class="float-left text-capitalize"><i class="fas fa-user text-success mr-1"></i> Por : {{$item->user->name}}</div>
                                                        <div class="float-right"><i class="far fa-calendar-alt text-success mr-1"></i> {{ $item->created_at->format('d-m-Y')}}</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                        

                                    </div>
                                </div>



                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--	Recent Properties  -->

            <!--	Why Choose Us -->
            <div class="full-row living bg-one overlay-secondary-half" style="background-image: url('{{asset("template/images/01.jpg")}}'); background-size: cover; background-position: center center; background-repeat: no-repeat;">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-lg-6">
                            <div class="living-list pr-4">
                                <h3 class="pb-4 mb-3 text-white">Porquê nos</h3>
                                <ul>
                                    <li class="mb-4 text-white d-flex">
                                        <i class="flaticon-reward flat-medium float-left d-table mr-4 text-success" aria-hidden="true"></i>
                                        <div class="pl-2">
                                            <h5 class="mb-3">Melhores</h5>
                                            <p>Oferece eficiência, organização e segurança no processo de gestão imobiliária.</p>
                                        </div>
                                    </li>
                                    <li class="mb-4 text-white d-flex">
                                        <i class="flaticon-real-estate flat-medium float-left d-table mr-4 text-success" aria-hidden="true"></i>
                                        <div class="pl-2">
                                            <h5 class="mb-3">Qualidade e experiência</h5>
                                            <p>Imobiliárias eleva significativamente a qualidade dos serviços prestados e a experiência do usuário — tanto para corretores quanto para clientes.</p>
                                        </div>
                                    </li>
                                    <li class="mb-4 text-white d-flex">
                                        <i class="flaticon-seller flat-medium float-left d-table mr-4 text-success" aria-hidden="true"></i>
                                        <div class="pl-2">
                                            <h5 class="mb-3">
                                               Agentes experientes
                                            </h5>
                                            <p>Transações Imobiliárias potencializa ainda mais o desempenho profissional, combinando sua experiência prática com ferramentas digitais avançadas. </p>

</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--	why choose us -->

            <!--	How it work -->
            <div class="full-row">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <h2 class="text-secondary double-down-line text-center mb-5">
                            Como funciona

                            </h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="icon-thumb-one text-center mb-5">
                                <div class="bg-success text-white rounded-circle position-absolute z-index-9">1</div>
                                <div class="left-arrow"><i class="flaticon-investor flat-medium icon-success" aria-hidden="true"></i></div>
                                <h5 class="text-secondary mt-5 mb-4">Discussão</h5>
                                <p>Essa fase é essencial para garantir a legalidade, confiança e agilidade no restante do processo.</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="icon-thumb-one text-center mb-5">
                                <div class="bg-success text-white rounded-circle position-absolute z-index-9">2</div>
                                <div class="left-arrow"><i class="flaticon-search flat-medium icon-success" aria-hidden="true"></i></div>
                                <h5 class="text-secondary mt-5 mb-4">Revisão documental</h5>
                                <p>Análise e atualização dos documentos do imóvel para garantir validade legal e digitalização no sistema.</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="icon-thumb-one text-center mb-5">
                                <div class="bg-success text-white rounded-circle position-absolute z-index-9">3</div>
                                <div><i class="flaticon-handshake flat-medium icon-success" aria-hidden="true"></i></div>
                                <h5 class="text-secondary mt-5 mb-4">Aquisição</h5>
                                <p>Conclusão da venda ou arrendamento, com atualização do status no sistema e emissão dos comprovativos.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--	How It Work -->

            <!--	Achievement
        ============================================================-->
            <div class="full-row overlay-secondary" style="background-image: url('{{asset("template/images/breadcromb.jpg")}}'); background-size: cover; background-position: center center; background-repeat: no-repeat;">
                <div class="container">
                    <div class="fact-counter">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="count wow text-center  mb-sm-50" data-wow-duration="300ms"> <i class="flaticon-house flat-large text-white" aria-hidden="true"></i>
                                   
                                        <div class="count-num text-success my-4" data-speed="3000" data-stop="{{ $properties_rent + $properties_sale }}">{{ $properties_rent + $properties_sale }}</div>
                                   
                                    <div class="text-white h5">Propriedades disponíveis</div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="count wow text-center  mb-sm-50" data-wow-duration="300ms"> <i class="flaticon-house flat-large text-white" aria-hidden="true"></i>
                                    
                                        <div class="count-num text-success my-4" data-speed="3000" data-stop="{{ $properties_sale }}">{{ $properties_sale }}</div>
                                 
                                    <div class="text-white h5">Propriedades a venda</div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="count wow text-center  mb-sm-50" data-wow-duration="300ms"> <i class="flaticon-house flat-large text-white" aria-hidden="true"></i>
                                        <div class="count-num text-success my-4" data-speed="3000" data-stop="{{ $properties_rent }}">{{ $properties_rent }}</div>
                                    <div class="text-white h5">Propriedades a renda</div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="count wow text-center  mb-sm-50" data-wow-duration="300ms"> <i class="flaticon-man flat-large text-white" aria-hidden="true"></i>
                                    
                                        <div class="count-num text-success my-4" data-speed="3000" data-stop="{{ $users }}">{{ $users }}</div>
                                   
                                    <div class="text-white h5">Usuários registados</div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <!--	Popular Place -->
            <div class="full-row bg-gray">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <h2 class="text-secondary double-down-line text-center mb-5">Lugares populares</h2>
                        </div>
                    </div><!-- FOR MORE PROJECTS visit: codeastro.com -->
                    <div class="col-lg-12">
                        <div class="row">

                            @foreach ($districts as $item)
                                <div class="col-md-6 col-lg-3 pb-1">
                                    <div class="overflow-hidden position-relative overlay-secondary hover-zoomer mx-n13 z-index-9"> <img src="{{asset('template/images/thumbnail4/2.jpg')}}" alt="">
                                        <div class="text-white xy-center z-index-9 position-absolute text-center w-100">
                                        
                                                <h4 class="hover-text-success text-capitalize"><a href="#">{{ $item->name}}</a></h4>
                                                <span>{{$item->properties_count}} Propriedades registadas</span>
                                        </div>
                                    
                                    </div>
                                </div>
                            @endforeach
                             
                          
                            
                            
                        </div>
                    </div>
                </div>
            </div>
            <!--	Popular Places -->

            <!--	Testonomial -->
            <div class="full-row">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="content-sidebar p-4">
                                <div class="mb-3 col-lg-12">
                                    <h4 class="double-down-line-left text-secondary position-relative pb-4 mb-4">Testemunho</h4>
                                    <div class="recent-review owl-carousel owl-dots-gray owl-dots-hover-success">

                                        
                                            <div class="item">
                                                <div class="p-4 bg-success down-angle-white position-relative">
                                                    <p class="text-white"><i class="fas fa-quote-left mr-2 text-white"></i>Muito Bom. <i class="fas fa-quote-right mr-2 text-white"></i></p>
                                                </div>
                                                <div class="p-2 mt-4">
                                                    <span class="text-success d-table text-capitalize">Ailton</span> <span class="text-capitalize">Cliente</span>
                                                </div>
                                            </div>
                                       

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--	Testonomial -->


           
@endsection