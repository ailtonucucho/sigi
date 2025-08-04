@extends('layout_home.master')
@section('content')
<!--	Banner   --->
            <div class="banner-full-row page-banner" style="background-image:url('images/breadcromb.jpg');">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <h2 class="page-name float-left text-white text-uppercase mt-1 mb-0">
                                <b>Perfil</b>
                            </h2>
                        </div>
                        <div class="col-md-6">
                            <nav aria-label="breadcrumb" class="float-left float-md-right">
                                <ol class="breadcrumb bg-transparent m-0 p-0">
                                    <li class="breadcrumb-item text-white"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active">Perfil</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!--	Banner   --->


            <!--	Submit property   -->
            <div class="full-row">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <h2 class="text-secondary double-down-line text-center">Perfil</h2>
                        </div>
                    </div>
                    <div class="dashboard-personal-info p-5 bg-white row">

                        <div class="col-lg-5 col-md-12">
                            
                            <div class="user-info mt-md-50"> 
                                
                            
                            <img src="storage/users/{{ Auth::user()->image}}"
                                    alt="userimage"
                                    
                                   class="rounded-circle"
                                    >
                                <div class="mb-4 mt-3">

                                </div>

                                <div class="font-18">
                                    <div class="mb-1 text-capitalize"><b>Name:</b> {{Auth::user()->name }}</div>
                                    <div class="mb-1"><b>Email:</b> {{Auth::user()->email }}</div>
                                    <div class="mb-1"><b>Contact:</b> {{Auth::user()->phone }}</div>
                                    <div class="mb-1 text-capitalize"><b>Role:</b> {{Auth::user()->role }}</div>
                                </div>
                                
                            </div>
                        </div>

                        <div class="col-lg-6">

                            
                            <form action="#" method="post" enctype="multipart/form-data">



                                <div class="mb-3">
                                    <label for="nameField" class="form-label">Nome</label>
                                    <input type="text" class="form-control" id="nameField"
                                        value="{{Auth::user()->name}}" name="name" placeholder="">
                                </div>
                                <div class="mb-3">
                                    <label for="emailField" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="emailField" name="email"
                                        value="{{Auth::user()->email}}" placeholder="">
                                </div>

                                <div class="mb-3">
                                    <label for="phoneField" class="form-label">Telefone</label>
                                    <input type="text" name="phone" class="form-control" id="phoneField"
                                        value="{{Auth::user()->phone}}" placeholder="">
                                </div>

                                <div class="mb-3">
                                    <label for="phoneField" class="form-label">Sua senha</label>

                                    <input type="password" name="password" class="form-control"
                                        placeholder="Sua senha">
                                </div>


                                <div class="mb-3">
                                    <label for="formFile" class="form-label">Foto de Perfil</label>
                                    <input class="form-control" name="uimage" type="file" id="formFile">
                                </div>

                                <input type="hidden" name="update_profile" value='updating'>

                                <div class="mb-3">
                                    <button type="submit"
                                        class="btn btn-primary mb-3">Atualizar</button>
                                </div>

                            </form>

                        </div>
                    </div>

                </div>
            </div>
        </div>

        @endsection