@extends('layout_home.master')
@section('content')
			<div class="full-row">
				<div class="container">
					<div class="row">
						<div class="col-lg-4 mb-5 bg-secondary">
							<div class="contact-info">
								<h3 class="mb-4 mt-4 text-white">Contactos</h3>

								<ul>
									<li class="d-flex mb-4"> <i class="fas fa-map-marker-alt text-white mr-2 font-13 mt-1"></i>
										<div class="contact-address">
											<h5 class="text-white">Endereço</h5>
											<span class="text-white">24 55 Ave Marteres da Revolução, Beira</span> <br>
											<!-- <span class="text-white">27 Ingram Street, Dayton</span> -->
										</div>
									</li>
									<li class="d-flex mb-4"> <i class="fas fa-phone-alt text-white mr-2 font-13 mt-1"></i>
										<div class="contact-address">
											<h5 class="text-white">Contacto</h5>
											<span class="d-table text-white">(+258) 84 62 84 152</span>
											<span class="text-white">(+258) 87 60 84 152</span>
										</div>
									</li>
									<li class="d-flex mb-4"> <i class="fas fa-envelope text-white mr-2 font-13 mt-1"></i>
										<div class="contact-address">
											<h5 class="text-white">Enderço de Email</h5>
											<span class="d-table text-white">acmsb@gmai.com</span>
											<!-- <span class="text-white">helpline@realestatest.com</span> -->
										</div>
									</li>
								</ul>
							</div>
						</div>
						<div class="col-lg-1"></div>
						<div class="col-md-12 col-lg-7">
							<div class="container">
								<div class="row">
									<div class="col-lg-12">
										<h2 class="text-secondary double-down-line text-center mb-5">Entre em contacto</h2>
										
									</div>
								</div><!-- FOR MORE PROJECTS visit: codeastro.com -->
								<div class="row">
									<div class="col-md-12">
										<form class="w-100" action="#" method="post">
											<div class="row">
												<div class="row mb-4">
													<div class="form-group col-lg-6">
														<input type="text" name="name" class="form-control" placeholder="Seu nome*">
													</div>
													<div class="form-group col-lg-6">
														<input type="text" name="email" class="form-control" placeholder="Endereço de Email*">
													</div>
													<div class="form-group col-lg-6">
														<input type="text" name="phone" class="form-control" placeholder="Telefone" maxlength="10">
													</div>
													<div class="form-group col-lg-6">
														<input type="text" name="subject" class="form-control" placeholder="Assunto">
													</div>
													<div class="col-lg-12">
														<div class="form-group">
															<textarea name="message" class="form-control" rows="5" placeholder="Digite comentários..."></textarea>
														</div>
													</div>
												</div>
												<button type="submit" value="send message" name="send" class="btn btn-success">Enviar mensagem</button>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div><!-- FOR MORE PROJECTS visit: codeastro.com -->
			<!--	Contact Inforamtion -->

			<!--	Map -->

			<iframe
				src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d966.3078766992635!2d34.890492695539955!3d-19.846649195539186!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e1!3m2!1sen!2smz!4v1727112972076!5m2!1sen!2smz"
				width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>



@endsection