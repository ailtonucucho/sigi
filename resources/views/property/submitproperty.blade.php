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
                        <form method="POST" enctype="multipart/form-data" action="{{ route('storeproperty') }}">
                                    @csrf
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
														<input type="text" class="form-control" name="title" required placeholder="Insira o título">
													</div>
												</div><!-- FOR MORE PROJECTS visit: codeastro.com -->
												<div class="form-group row">
													<label class="col-lg-2 col-form-label">Conteudo</label>
													<div class="col-lg-9">
														<textarea class="tinymce form-control" name="content" rows="10" cols="30"></textarea>
													</div>
												</div>
												
											</div>
											<div class="col-xl-6">
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Tipo de Propriedade</label>
													<div class="col-lg-9">
														<select class="form-control" required name="type">
															<option value="">Selecione o tipo</option>
															<option value="apartment">Apartamento</option>
															<option value="flat">Flat</option>
															<option value="building">Prédio</option>
															<option value="house">Casa</option>
															<option value="villa">Vila</option>
															<option value="office">Escritório</option>
														</select>
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Tipo de venda</label>
													<div class="col-lg-9">
														<select class="form-control" required name="stype">
															<option value="">Selecione Status</option>
															<option value="rent">Renda</option>
															<option value="sale">Venda</option>
														</select>
													</div>
												</div><!-- FOR MORE PROJECTS visit: codeastro.com -->
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Quarto de Banho</label>
													<div class="col-lg-9">
														<input type="text" class="form-control" name="bathroom" required placeholder="Digitar Quarto de banho (de no 1 a 10)">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Cozinha</label>
													<div class="col-lg-9">
														<input type="text" class="form-control" name="kitchen" required placeholder="Digitar Cozinha (de no 1 a 10)">
													</div>
												</div>
												
											</div>   
											<div class="col-xl-6">
												<!-- <div class="form-group row mb-3">
													<label class="col-lg-3 col-form-label">BHK</label>
													<div class="col-lg-9">
														<select class="form-control" required name="bhk">
															<option value="">Select BHK</option>
															<option value="1 BHK">1 BHK</option>
															<option value="2 BHK">2 BHK</option>
															<option value="3 BHK">3 BHK</option>
															<option value="4 BHK">4 BHK</option>
															<option value="5 BHK">5 BHK</option>
															<option value="1,2 BHK">1,2 BHK</option>
															<option value="2,3 BHK">2,3 BHK</option>
															<option value="2,3,4 BHK">2,3,4 BHK</option>
														</select>
													</div>
												</div> -->
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Quarto</label>
													<div class="col-lg-9">
														<input type="text" class="form-control" name="bedroom" required placeholder="Digitar Quarto  (de no 1 a 10)">
													</div>
												</div><!-- FOR MORE PROJECTS visit: codeastro.com -->
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Varanda</label>
													<div class="col-lg-9">
														<input type="text" class="form-control" name="balcony" required placeholder="Digitar Varanda  (de no 1 a 10)">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Salão</label>
													<div class="col-lg-9">
														<input type="text" class="form-control" name="hall" required placeholder="Digitar Salão  (de no 1 a 10)">
													</div>
												</div>
												
											</div><!-- FOR MORE PROJECTS visit: codeastro.com -->
										</div>
										<h5 class="text-secondary">Preço e localização</h5><hr>
										<div class="row">
											<div class="col-xl-6">
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Andar</label>
													<div class="col-lg-9">
														<select class="form-control" required name="floor">
															<option value="">Selecione Andar</option>
															<option value="1st Floor">1º Andar</option>
															<option value="2nd Floor">2º Andar</option>
															<option value="3rd Floor">3º Andar</option>
															<option value="4th Floor">4º Andar</option>
															<option value="5th Floor">5º Andar</option>
														</select>
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Preço</label>
													<div class="col-lg-9">
														<input type="text" class="form-control" name="price" required placeholder="Insira o preço">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Cidade</label>
													<div class="col-lg-9">
														<select class="form-control" name="city" required>
															<option value="">Selecione a cidade</option>
															@foreach (\App\Models\City::all() as $city)
																<option value="{{ $city->id }}">{{ $city->name }}</option>
															@endforeach
														</select>
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Bairro</label>
													<div class="col-lg-9">
														<select class="form-control" name="state" required>
															<option value="">Selecione o bairro</option>
															@foreach (\App\Models\District::all() as $district)
																<option value="{{ $district->id }}">{{ $district->name }}</option>
															@endforeach
														</select>
													</div>
												</div>
											</div><!-- FOR MORE PROJECTS visit: codeastro.com -->
											<div class="col-xl-6">
												<!-- <div class="form-group row">
													<label class="col-lg-3 col-form-label">Total Floor</label>
													<div class="col-lg-9">
														<select class="form-control" required name="totalfloor">
															<option value="">Select Floor</option>
															<option value="1 Floor">1 Floor</option>
															<option value="2 Floor">2 Floor</option>
															<option value="3 Floor">3 Floor</option>
															<option value="4 Floor">4 Floor</option>
															<option value="5 Floor">5 Floor</option>
															<option value="6 Floor">6 Floor</option>
															<option value="7 Floor">7 Floor</option>
															<option value="8 Floor">8 Floor</option>
															<option value="9 Floor">9 Floor</option>
															<option value="10 Floor">10 Floor</option>
															<option value="11 Floor">11 Floor</option>
															<option value="12 Floor">12 Floor</option>
															<option value="13 Floor">13 Floor</option>
															<option value="14 Floor">14 Floor</option>
															<option value="15 Floor">15 Floor</option>
														</select>
													</div>
												</div> -->
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Tamanho da área</label>
													<div class="col-lg-9">
														<input type="text" class="form-control" name="size" required placeholder="Digite o tamanho da área">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Endereço</label>
													<div class="col-lg-9">
														<input type="text" class="form-control" name="location" required placeholder="Insira o endereço">
													</div>
												</div>
												
											</div><!-- FOR MORE PROJECTS visit: codeastro.com -->
										</div>
										
										<div class="form-group row">
											<label class="col-lg-2 col-form-label">Recurso</label>
											<div class="col-lg-9">
											<p class="alert alert-danger">* Importante: Não remova o conteúdo abaixo, apenas altere <b>Sim</b> Ou <b>Não</b> ou detalhes e não adicione mais detalhes</p>
											
											<textarea class="tinymce form-control" name="feature" rows="10" cols="30">
												<!---feature area start--->
												<div class="col-md-4">
														<ul>
														<li class="mb-3"><span class="text-secondary font-weight-bold">Idade da propriedade : </span>10 Anos</li>
														<li class="mb-3"><span class="text-secondary font-weight-bold">Piscina : </span>Sim</li>
														<li class="mb-3"><span class="text-secondary font-weight-bold">Estacionamento : </span>Yes</li>
														<li class="mb-3"><span class="text-secondary font-weight-bold">Ginasio : </span>Yes</li>
														</ul>
													</div>
													<div class="col-md-4">
														<ul>
														<!-- <li class="mb-3"><span class="text-secondary font-weight-bold">Type : </span>Apartment</li> -->
														<li class="mb-3"><span class="text-secondary font-weight-bold">Segurança : </span>Sim</li>
														<li class="mb-3"><span class="text-secondary font-weight-bold">Capacidade de jantar : </span>10 Pessoas</li>
														<!-- <li class="mb-3"><span class="text-secondary font-weight-bold">Church/Temple  : </span>No</li> -->
														
														</ul>
													</div>
													<div class="col-md-4">
														<ul>
														<!-- <li class="mb-3"><span class="text-secondary font-weight-bold">3rd Party : </span>No</li>
														<li class="mb-3"><span class="text-secondary font-weight-bold">Elevator : </span>Yes</li> -->
														<li class="mb-3"><span class="text-secondary font-weight-bold">CCTV : </span>Sim</li>
														<li class="mb-3"><span class="text-secondary font-weight-bold">Fornecimento de água : </span>Água Subterrânea / Tanque</li>
														</ul>
													</div>
												<!---feature area end---->
											</textarea>
											</div><!-- FOR MORE PROJECTS visit: codeastro.com -->
										</div>
												
										<h5 class="text-secondary">Imagem e status</h5><hr>
										<div class="row">
											<div class="col-xl-6">
												
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Imagem</label>
													<div class="col-lg-9">
														<input class="form-control" name="image" type="file" required="">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Imagem 2</label>
													<div class="col-lg-9">
														<input class="form-control" name="image2" type="file" required="">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Imagem 4</label>
													<div class="col-lg-9">
														<input class="form-control" name="image4" type="file" required="">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Status</label>
													<div class="col-lg-9">
														<select class="form-control"  required name="status">
															<option value="">Selecionar Status</option>
															<option value="available">Disponivel</option>
															<!-- <option value="sold out">Sold Out</option> -->
														</select>
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label"> Imagem</label>
													<div class="col-lg-9">
														<input class="form-control" name="mapimage" type="file">
													</div><!-- FOR MORE PROJECTS visit: codeastro.com -->
												</div>
											</div>
											<div class="col-xl-6">
												
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Imagem 1</label>
													<div class="col-lg-9">
														<input class="form-control" name="image1" type="file" required="">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">imagem 3</label>
													<div class="col-lg-9">
														<input class="form-control" name="image3" type="file" required="">
													</div>
												</div>
												
												<div class="form-group row">
													<label class="col-lg-3 col-form-label"> Imagem</label>
													<div class="col-lg-9">
														<input class="form-control" name="topmapimage" type="file">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Imagem</label>
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
													<label class="col-lg-3 col-form-label"><b>Está em destaque?</b></label>
													<div class="col-lg-9">
														<select class="form-control" required name="isfeatured">
															<option value="">Selecione...</option>
															<option value="0">Não</option>
															<option value="1">Sim</option>
														</select>
													</div>
												</div>
											</div>
										</div>

										
											<input type="submit" value="Submeter Propriedade" class="btn btn-info" style="margin-left:200px;">
										
								</div>
							</form>
                    </div>            
            </div>
        </div>

@endsection