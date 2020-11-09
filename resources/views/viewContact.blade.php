<!-- view datalist form -->
  <table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Number</th>
      <th scope="col">Message</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>

@foreach($datas as $data)

    <tr>
      <th scope="row">{{$data->id}}</th>
      <td>{{$data->userName}}</td>
      <td>{{$data->userEmail}}</td>
      <td>{{$data->userPhone}}</td>
      <td>{{$data->userMsg}}</td>
      <td> 
        <a href="{{url('single_view/')}}/{{$data->id}}"><button type="button" class="btn btn-success">Edit</button></a>
        <a href="{{url('delete/')}}/{{$data->id}}"><button type="button" class="btn btn-danger">Delete</button></a>
      </td>
    </tr>
@endforeach

  </tbody>
</table>