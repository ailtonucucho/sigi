@extends('layout_home.master')
@section('content')
 <div class="banner-full-row page-banner" style="background-image:url('images/breadcromb.jpg');">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h2 class="page-name float-left text-white text-uppercase mt-1 mb-0"><b>Propriedades Listadas do Usuario</b></h2>
                    </div>
                    <div class="col-md-6">
                        <nav aria-label="breadcrumb" class="float-left float-md-right">
                            <ol class="breadcrumb bg-transparent m-0 p-0">
                                <li class="breadcrumb-item text-white"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Propriedades</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
         <!--	Banner   --->
		 
		 
		<!--	Submit property   -->
        <div class="full-row bg-gray">
            <div class="container"><!-- FOR MORE PROJECTS visit: codeastro.com -->
                    <div class="row mb-5">
						<div class="col-lg-12">
							<h2 class="text-secondary double-down-line text-center">Propriedades</h2>
							@if (session('message'))
										<div class="alert alert-success">
											{{ session('message') }}
										</div>
									@endif
                        </div>
					</div><!-- FOR MORE PROJECTS visit: codeastro.com -->
					<table class="items-list col-lg-12 table-hover" style="border-collapse:inherit;">
                        <thead>
                             <tr  class="bg-dark">
                                <th class="text-white font-weight-bolder">Properties</th>
                                <th class="text-white font-weight-bolder">BHK</th>
                                <th class="text-white font-weight-bolder">Type</th>
                                <th class="text-white font-weight-bolder">Added Date</th>
								<th class="text-white font-weight-bolder">Status</th>
                                <th class="text-white font-weight-bolder">Update</th>
								<th class="text-white font-weight-bolder">Delete</th>
                             </tr>
                        </thead>
                        <tbody>
                            @foreach ($properties as $item)
                                
                            
                            <tr>
                                <td>
									<img src="/storage/properties/{{ $item->image }}" alt="pimage">
                                    <div class="property-info d-table">
                                        <h5 class="text-secondary text-capitalize"><a href="/property/{{$item->id}}">{{$item->title}}</a></h5>
                                        <span class="font-14 text-capitalize"><i class="fas fa-map-marker-alt text-success font-13"></i>&nbsp; {{$item->cityname->name}}, {{$item->districtname->name}}, {{$item->location}}</span>
                                        <div class="price mt-3">
											<span class="text-success">MZN{{$item->price}}</span>
										</div>
                                    </div>
								</td>
                                <td>{{$item->bhk}}</td>
                                <td class="text-capitalize">For {{$item->stype}}</td>
                                <td>{{$item->created_at->format('d-m-Y')}}</td>
								<td class="text-capitalize">{{$item->status}}</td>
                                <td><a class="btn btn-info" href="{{URL::to('/property/'.$item->id.'/edit')}}">Update</a></td>
								<td><a class="btn btn-danger" data-toggle="modal" data-target="#exampleModalCenter{{$item->id}}" title="Apagar">Delete</a></td>
                            </tr>
                            <div class="modal" id="exampleModalCenter{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle">Apagar propriedade: <br>"{{$item->title}}"</h5>
                                    
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    </div>
                                    <div class="modal-body">
                                    Confirmar Exclusão
                                    </div>
                                    <div class="modal-footer">
                                        <form method="POST" action="{{ route('property.destroy', $item->id)}}">
                                            @csrf
                                            @method('DELETE')
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                                            <button type="submit" class="btn btn-danger">Excluir</button>
                                        </form>
                                    
                                    </div>
                                </div>
                                </div>
                            </div>
							@endforeach
                        </tbody>
                    </table>            
            </div>
        </div>
	<!--	Submit property   -->
@endsection