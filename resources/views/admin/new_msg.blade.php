<!-- new_msg.blade.php -->

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
                                                <th width="100px">Status</th>
                                                
                                            </tr>
                                        </thead>
										
								
										
                                        <tbody>

                            @foreach($msgs as $msg)
                                            <tr>
                                            	<td>{{$msg->id}}</td>
                                                <td>{{$msg->userName}}</td>
                                                <td>{{$msg->userEmail}}</td>
                                                <td>{{$msg->userPhone}}</td>
                                                <td>{{$msg->userMsg}}</td>
                                                <td><a href="{{route('arch_message')}}" class="btn btn-primary">
												<span><i class="fa fa-check"></i></span>
												</a>
												</td>
                                            </tr>

                            @endforeach
                                        </tbody>
										
										
                                        <tfoot>
                                            <tr>
                                            	<th>Id</th>
												<th>Name</th>
                                                <th>Email</th>
                                                <th>Number</th>
                                                <th>Message</th>
                                                <th>Status</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>

                            </div>
                        </div>

@endsection