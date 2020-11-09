<!-- admin_index.blade.php --> 
@extends('admin.admin_layout');

@section('content')

	<div class="page-wrapper">
            
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Dashboard</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Library</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
	<div class="container-fluid">
               
                <div class="row">
                    <!-- Column -->
                    <div class="col-md-6 col-lg-3">
                        <div class="card card-hover">
                            <div class="box bg-cyan text-center">
                                <a href="index.php">
								<h1 class="font-light text-white"><i class="mdi mdi-view-dashboard"></i></h1>
                                <h6 class="text-white">Dashboard</h6>
								</a>
                            </div>
                        </div>
                    </div>
                   
                    <div class="col-md-6 col-lg-3">
                        <div class="card card-hover">
                            <div class="box bg-danger text-center">
                                <a href="{{route('new_message')}}">
								<h1 class="font-light text-white"><i class="far fa-envelope"></i></h1>
                                <h6 class="text-white">Messages</h6>
								</a>
                            </div>
                        </div>
                    </div>
					 
                </div>
		
	</div>
 </div>  

@endsection