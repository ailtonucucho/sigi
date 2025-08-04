@extends('layout_home.master')
@section('content')

        <div class="full-row">
            <div class="container">
                    <div class="row">
						<div class="col-lg-12">
							<h2 class="text-secondary double-down-line text-center">Enviar Propriedade</h2>
                        </div>
					</div>
                    <div class="row p-5 bg-white">
                        <form method="POST" enctype="multipart/form-data" action="{{ route('updateproperty', $property->id) }}">
						@csrf
						@method('PUT')
								<div class="description">
									<h5 class="text-secondary">Informações Básicas</h5><hr>
									@if (session('message'))
										<div class="alert alert-success">
											{{ session('message') }}
										</div>
									@endif
									
										<div class="row">
											<div class="col-xl-12">
												<div class="form-group row">
													<label class="col-lg-2 col-form-label">Nome da Casa</label>
													<div class="col-lg-9">
														<input type="text" value="{{ $property->title}}" class="form-control" name="title" required placeholder="Enter Title">
													</div>
												</div><!-- FOR MORE PROJECTS visit: codeastro.com -->
												<div class="form-group row">
													<label class="col-lg-2 col-form-label">Conteudo</label>
													<div class="col-lg-9">
														<textarea class="tinymce form-control" name="content" rows="10" cols="30">{{$property->content}}</textarea>
													</div>
												</div>
												
											</div>
											<div class="col-xl-6">
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Property Type</label>
													<div class="col-lg-9">
														<select class="form-control" value="{{ $property->type}}" required name="type">
															<option value="">Select Type</option>
															<option value="apartment" {{ $property->type == 'apartment' ? 'selected' : '' }}>Apartment</option>
															<option value="flat" {{ $property->type == 'flat' ? 'selected' : '' }}>Flat</option>
															<option value="building" {{ $property->type == 'building' ? 'selected' : '' }}>Building</option>
															<option value="house" {{ $property->type == 'house' ? 'selected' : '' }}>House</option>
															<option value="villa" {{ $property->type == 'villa' ? 'selected' : '' }}>Villa</option>
															<option value="office" {{ $property->type == 'office' ? 'selected' : '' }}>Office</option>
														</select>
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Selling Type</label>
													<div class="col-lg-9">
														<select class="form-control" required value="{{ $property->stype}}" name="stype">
															<option value="">Select Status</option>
															<option value="rent" {{ $property->stype == 'rent' ? 'selected' : '' }}>Rent</option>
															<option value="sale" {{ $property->stype == 'sale' ? 'selected' : '' }}>Sale</option>
														</select>
													</div>
												</div><!-- FOR MORE PROJECTS visit: codeastro.com -->
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Bathroom</label>
													<div class="col-lg-9">
														<input type="text" class="form-control" value="{{ $property->bathroom}}" name="bathroom" required placeholder="Enter Bathroom (only no 1 to 10)">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Kitchen</label>
													<div class="col-lg-9">
														<input type="text" class="form-control" value="{{ $property->kitchen}}" name="kitchen" required placeholder="Enter Kitchen (only no 1 to 10)">
													</div>
												</div>
												
											</div>   
											<div class="col-xl-6">
												<div class="form-group row mb-3">
													<label class="col-lg-3 col-form-label">BHK</label>
													<div class="col-lg-9">
														<select class="form-control" required  value="{{ $property->bhk}}" name="bhk">
															<option value="">Select BHK</option>
															<option value="1 BHK" {{ $property->bhk == '1 BHK' ? 'selected' : '' }}>1 BHK</option>
															<option value="2 BHK" {{ $property->bhk == '2 BHK' ? 'selected' : '' }}>2 BHK</option>
															<option value="3 BHK" {{ $property->bhk == '3 BHK' ? 'selected' : '' }}>3 BHK</option>
															<option value="4 BHK" {{ $property->bhk == '4 BHK' ? 'selected' : '' }}>4 BHK</option>
															<option value="5 BHK" {{ $property->bhk == '5 BHK' ? 'selected' : '' }}>5 BHK</option>
															<option value="1,2 BHK" {{ $property->bhk == '1,2 BHK' ? 'selected' : '' }}>1,2 BHK</option>
															<option value="2,3 BHK" {{ $property->bhk == '2,3 BHK' ? 'selected' : '' }}>2,3 BHK</option>
															<option value="2,3,4 BHK" {{ $property->bhk == '2,3,4 BHK' ? 'selected' : '' }}>2,3,4 BHK</option>
														</select>
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Bedroom</label>
													<div class="col-lg-9">
														<input type="text" class="form-control" value="{{ $property->bedroom}}" name="bedroom" required placeholder="Enter Bedroom  (only no 1 to 10)">
													</div>
												</div><!-- FOR MORE PROJECTS visit: codeastro.com -->
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Balcony</label>
													<div class="col-lg-9">
														<input type="text" class="form-control" value="{{ $property->balcony}}" name="balcony" required placeholder="Enter Balcony  (only no 1 to 10)">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Hall</label>
													<div class="col-lg-9">
														<input type="text" class="form-control" value="{{ $property->hall}}" name="hall" required placeholder="Enter Hall  (only no 1 to 10)">
													</div>
												</div>
												
											</div><!-- FOR MORE PROJECTS visit: codeastro.com -->
										</div>
										<h5 class="text-secondary">Price & Location</h5><hr>
										<div class="row">
											<div class="col-xl-6">
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Floor</label>
													<div class="col-lg-9">
														<select class="form-control" required value="{{ $property->floor}}" name="floor">
															<option value="">Select Floor</option>
															<option value="1st Floor" {{ $property->floor == '1st Floor' ? 'selected' : '' }}>1st Floor</option>
															<option value="2nd Floor" {{ $property->floor == '2st Floor' ? 'selected' : '' }}>2nd Floor</option>
															<option value="3rd Floor" {{ $property->floor == '3st Floor' ? 'selected' : '' }}>3rd Floor</option>
															<option value="4th Floor" {{ $property->floor == '4st Floor' ? 'selected' : '' }}>4th Floor</option>
															<option value="5th Floor" {{ $property->floor == '5st Floor' ? 'selected' : '' }}>5th Floor</option>
														</select>
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Price</label>
													<div class="col-lg-9">
														<input type="text" class="form-control" value="{{ $property->price}}" name="price" required placeholder="Enter Price">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Cidade</label>
													<div class="col-lg-9">
														<select class="form-control" name="city" value="{{ $property->city}}" required>
															<option value="">Selecione a cidade</option>
															@foreach (\App\Models\City::all() as $city)
																<option value="{{ $city->id }}" {{ $property->city == $city->id ? 'selected' : '' }}>{{ $city->name }}</option>
															@endforeach
														</select>
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Bairro</label>
													<div class="col-lg-9">
														<select class="form-control" name="state" value="{{ $property->state}}" required>
															<option value="">Selecione o bairro</option>
															@foreach (\App\Models\District::all() as $district)
																<option value="{{ $district->id }}" {{ $property->state == $district->id ? 'selected' : '' }}>{{ $district->name }}</option>
															@endforeach
														</select>
													</div>
												</div>
											</div><!-- FOR MORE PROJECTS visit: codeastro.com -->
											<div class="col-xl-6">
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Total Floor</label>
													<div class="col-lg-9">
														<select class="form-control" value="{{ $property->totalfloor}}" required name="totalfloor">
															<option value="">Select Floor</option>
															<option value="1 Floor" {{ $property->floor == '1st Floor' ? 'selected' : '' }}>1 Floor</option>
															<option value="2 Floor" {{ $property->floor == '2st Floor' ? 'selected' : '' }}>2 Floor</option>
															<option value="3 Floor" {{ $property->floor == '3st Floor' ? 'selected' : '' }}>3 Floor</option>
															<option value="4 Floor" {{ $property->floor == '4st Floor' ? 'selected' : '' }}>4 Floor</option>
															<option value="5 Floor" {{ $property->floor == '5st Floor' ? 'selected' : '' }}>5 Floor</option>
															<option value="6 Floor" {{ $property->floor == '6st Floor' ? 'selected' : '' }}>6 Floor</option>
															<option value="7 Floor" {{ $property->floor == '7st Floor' ? 'selected' : '' }}>7 Floor</option>
															<option value="8 Floor" {{ $property->floor == '8st Floor' ? 'selected' : '' }}>8 Floor</option>
															<option value="9 Floor" {{ $property->floor == '9st Floor' ? 'selected' : '' }}>9 Floor</option>
															<option value="10 Floor" {{ $property->floor == '10st Floor' ? 'selected' : '' }}>10 Floor</option>
															<option value="11 Floor" {{ $property->floor == '11st Floor' ? 'selected' : '' }}>11 Floor</option>
															<option value="12 Floor" {{ $property->floor == '12st Floor' ? 'selected' : '' }}>12 Floor</option>
															<option value="13 Floor" {{ $property->floor == '13st Floor' ? 'selected' : '' }}>13 Floor</option>
															<option value="14 Floor" {{ $property->floor == '14st Floor' ? 'selected' : '' }}>14 Floor</option>
															<option value="15 Floor" {{ $property->floor == '15st Floor' ? 'selected' : '' }}>15 Floor</option>
														</select>
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Area Size</label>
													<div class="col-lg-9">
														<input type="text" class="form-control" value="{{ $property->size}}" name="size" required placeholder="Enter Area Size (in sqrt)">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Address</label>
													<div class="col-lg-9">
														<input type="text" class="form-control" value="{{ $property->location}}" name="location" required placeholder="Enter Address">
													</div>
												</div>
												
											</div><!-- FOR MORE PROJECTS visit: codeastro.com -->
										</div>
										
										<div class="form-group row">
											<label class="col-lg-2 col-form-label">Feature</label>
											<div class="col-lg-9">
											<p class="alert alert-danger">* Important Please Do Not Remove Below Content Only Change <b>Yes</b> Or <b>No</b> or Details and Do Not Add More Details</p>
											
											<textarea class="tinymce form-control" name="feature" rows="10" cols="30">
												{{ $property->feature}}
											</textarea>
											</div><!-- FOR MORE PROJECTS visit: codeastro.com -->
										</div>
												
										<h5 class="text-secondary">Image & Status</h5><hr>
										<div class="row">
											<div class="col-xl-6">
												
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Image</label>
													<div class="col-lg-9">
														<input class="form-control" name="image" type="file" >
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Image 2</label>
													<div class="col-lg-9">
														<input class="form-control" name="image2" type="file" >
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Image 4</label>
													<div class="col-lg-9">
														<input class="form-control" name="image4" type="file" >
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Status</label>
													<div class="col-lg-9">
														<select class="form-control" value="{{ $property->status}}"  required name="status">
															<option value="">Select Status</option>
															<option value="available" {{ $property->status == 'available' ? 'selected' : '' }}>Available</option>
															<option value="sold out" {{ $property->status == 'sold out' ? 'selected' : '' }}>Sold Out</option>
														</select>
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Basement Floor Plan Image</label>
													<div class="col-lg-9">
														<input class="form-control" name="mapimage" type="file">
													</div><!-- FOR MORE PROJECTS visit: codeastro.com -->
												</div>
											</div>
											<div class="col-xl-6">
												
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Image 1</label>
													<div class="col-lg-9">
														<input class="form-control" name="image1" type="file" >
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">image 3</label>
													<div class="col-lg-9">
														<input class="form-control" name="image3" type="file" >
													</div>
												</div>
												
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Floor Plan Image</label>
													<div class="col-lg-9">
														<input class="form-control" name="topmapimage" type="file">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Ground Floor Plan Image</label>
													<div class="col-lg-9">
														<input class="form-control" name="groundmapimage" type="file">
													</div>
												</div>
											</div>
										</div>

										<hr>

										<div class="row"><!-- FOR MORE PROJECTS visit: codeastro.com -->
											<div class="col-md-6">
												<div class="form-group row">
													<label class="col-lg-3 col-form-label"><b>Is Featured?</b></label>
													<div class="col-lg-9">
														<select class="form-control" value="{{ $property->isfeatured}}" required name="isfeatured">
															<option value="">Select...</option>
															<option value="0" {{ $property->isfeatured == '0' ? 'selected' : '' }}>No</option>
															<option value="1" {{ $property->isfeatured == '1' ? 'selected' : '' }}>Yes</option>
														</select>
													</div>
												</div>
											</div>
										</div>

										
											<input type="submit" value="Submit Property" class="btn btn-info" style="margin-left:200px;">
										
								</div>
							</form>
                    </div>            
            </div>
        </div>

@endsection