@extends('layout_admin.master')
@section('content')

						<!-- Page Wrapper -->
            <div class="page-wrapper">
                <div class="content container-fluid">

					<!-- Page Header -->
					<div class="page-header">
						<div class="row">
							<div class="col">
								<h3 class="page-title">Bairro</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="#">Dashboard</a></li>
									<li class="breadcrumb-item active">Bairro</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /Page Header -->
					
				<!-- city add section --> 
					<div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<h1 class="card-title">Adicionar Bairro</h1>
									
								</div>
								<form method="post" enctype="multipart/form-data">
									<div class="card-body">
											<div class="row">
												<div class="col-xl-6">
													<h5 class="card-title">Detalhes do Bairro</h5>
													<div class="form-group row">
														<label class="col-lg-3 col-form-label">Cidade</label>
														<div class="col-lg-9" >	
															<select class="form-control" name="state">
																<option value="">Selecionar</option>
																
																<option value="1" class="text-captalize">Beira</option>
																
															</select>
														</div>
													</div>
													<div class="form-group row">
														<label class="col-lg-3 col-form-label">Nome do Bairro</label>
														<div class="col-lg-9">
															<input type="text" class="form-control" name="state">
														</div>
													</div>
												</div>
											</div>
											<div class="text-left">
												<input type="submit" class="btn btn-primary"  value="Adicionar" name="insert" style="margin-left:200px;">
											</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				<!----End City add section  --->
				
				<!----view city  --->
				<div class="row">
						<div class="col-sm-12">
							<div class="card">
								<div class="card-header">
									<h4 class="card-title">Lista de Bairro</h4>
									
								</div>
								<div class="card-body">

									<table id="basic-datatable" class="table table-bordered table-hover">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Nome</th>
                                                    <th>Cidade</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                        
                                        
                                            <tbody>
												@foreach ($districts as $item)
													<tr>
														<td>{{$item->id}}</td>
														<td>{{$item->name}}</td>
														<td>Beira</td>
														<td><a class="btn btn-danger" data-toggle="modal" data-target="#exampleModalCenter{{$item->id}}" title="Apagar">Delete</a></td>

														<div class="modal" id="exampleModalCenter{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle">Apagar propriedade: <br>"{{$item->name}}"</h5>
                                    
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    </div>
                                    <div class="modal-body">
                                    Confirmar Exclusão
                                    </div>
                                    <div class="modal-footer">
                                        <form method="POST" action="{{ route('districts.destroy', $item->id)}}">
                                            @csrf
                                            @method('DELETE')
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                                            <button type="submit" class="btn btn-danger">Excluir</button>
                                        </form>
                                    
                                    </div>
                                </div>
                                </div>
                            </div>
													</tr>
												@endforeach  
                                            </tbody>
                                        </table>
								</div>
							</div>
						</div>
					</div>
				<!-- view City -->
				</div>			
			</div>
@endsection