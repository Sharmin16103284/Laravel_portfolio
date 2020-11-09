<!-- arch_message.blade.php -->


@extends('admin.admin_layout');

@section('content')

 
 <div class="page-wrapper">
           <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Unread Messages</h5>
                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                            	<th width="150px">Id</th>
                                                <th width="150px">Name</th>
                                                <th width="150px">Email</th>
                                                <th width="250px">Number</th>
                                                <th width="">Message</th>
                                                <th width="100px">Action</th>
                                                
                                            </tr>
                                        </thead>
										
								
										
                                        <tbody>

            
                                            <tr>
                                            	<td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td><a href="" class="btn btn-primary">
												<span><i class="fas fa-trash-alt"></i></i></span>
												</a>
												</td>
                                            </tr>
 			
                            
                                        </tbody>
										
										
                                        <tfoot>
                                            <tr>
                                            	<th>Id</th>
												<th>Name</th>
                                                <th>Email</th>
                                                <th>Number</th>
                                                <th>Message</th>
                                                <th>Action</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>

                            </div>
                        </div>

@endsection