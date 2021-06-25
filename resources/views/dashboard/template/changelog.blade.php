@extends("dashboard.template.master")
@section('content')
  <h2>Created</h2>
<table class="table">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">WHAT</th>
        <th scope="col">WHAT ID</th>
        <th>WHAT CHANGED</th>
        <th scope="col">WHO</th>
        <th scope="col">WHEN</th>
      </tr>
    </thead>
    <tbody>
    @forelse ($created as $create)
    <tr>
        <th scope="col">{{$create->id}}</th>
        <td scope="col">{{$create->subject_type}}</td>
        <td scope="col">{{$create->subject_id}}</td>
        <td scope="col">
            @forelse ($create->propteries as $property)

                @forelse($property as $attribute)

                @empty
                    
                @endforelse
            @empty
                
            @endforelse
        </td>

        <td scope="col">User {{$create->causer_id}}</td>
        <td scope="col">{{$create->created_at}}</td>
      </tr>   
    @empty
        
    @endforelse
    </tbody>
  </table>

  
  <h2>Updated</h2>
<table class="table">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">WHAT</th>
        <th scope="col">WHAT ID</th>
        <th scope="col">WHO</th>
        <th scope="col">WHEN</th>
      </tr>
    </thead>
    <tbody>
    @forelse ($updated as $update)
    <tr>
        <th scope="col">{{$update->id}}</th> 
        <td scope="col">{{$update->subject_type}}</td>
        <td scope="col">{{$create->subject_id}}</td>
        <td scope="col">User {{$update->causer_id}}</td>
        <td scope="col">{{$update->created_at}}</td>
      </tr>   
    @empty
        
    @endforelse
    </tbody>
  </table>

@endsection