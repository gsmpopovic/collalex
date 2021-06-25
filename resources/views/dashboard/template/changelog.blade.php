@extends("dashboard.template.master")
@section('content')

    <h2>Created Entries</h2>
    <p> NB: "Attributes" in the "Created" table refers to the new columns:values of that entry. </p>
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">WHAT</th>
                <th scope="col">WHAT ID</th>
                <th>CHANGE</th>
                <th scope="col">WHO</th>
                <th scope="col">WHEN</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($created as $create)
                <tr>
                    <th scope="col">{{ $create->id }}</th>
                    <td scope="col">
                        @if ($create->subject_type == 'App\Models\Headword')

                            Headword

                        @elseif($create->subject_type == "App\Models\Sense")

                            Sense

                        @else

                            User

                        @endif
                    </td>
                    <td scope="col">{{ $create->subject_id }}</td>
                    <td scope="col">

                        <?php $properties = json_decode($create->properties); ?>

                        @forelse ($properties as $property)
                            Attributes:
                            <?php echo json_encode($property); ?>
                            @forelse($property as $attribute)
                            @empty

                            No change 

                            @endforelse
                        @empty

                        @endforelse
                    </td>

                    <td scope="col">User {{ $create->causer_id }}</td>
                    <td scope="col">{{ $create->created_at }}</td>
                </tr>
            @empty
                <h6>No entries</h6>
            @endforelse
        </tbody>
    </table>

    {{ $created->links() }}

    <h2>Updated Entries</h2>
    <p> NB: "Attributes" in the "Updated" table refers to the new, i.e., updated, columns:values of that entry. </p>
    <p> NB: "Old" refers to the columns:values of that entry prior to their being updated. </p>
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">WHAT</th>
                <th scope="col">WHAT ID</th>
                <th>CHANGE</th>
                <th scope="col">WHO</th>
                <th scope="col">WHEN</th>
            </tr>
        </thead>
        <tbody>

            @forelse ($updated as $update)
                <tr>
                    <th scope="col">{{ $update->id }}</th>
                    <td scope="col">
                        @if ($update->subject_type == 'App\Models\Headword')

                            Headword

                        @elseif($update->subject_type == "App\Models\Sense")

                            Sense

                        @else

                            User

                        @endif
                    </td>
                    <td scope="col">{{ $update->subject_id }}</td>
                    <td scope="col">

                        {{ $update->properties }}
                        {{-- @forelse ($create->properties as $property)
                  Attributes: 
                  @forelse($property as $attribute)
  
                  @empty
                      
                  @endforelse
              @empty
                  
              @endforelse --}}
                    </td>

                    <td scope="col">User {{ $update->causer_id }}</td>
                    <td scope="col">{{ $update->created_at }}</td>
                </tr>
            @empty
                <h6>No entries</h6>
            @endforelse
        </tbody>
    </table>

    {{ $updated->links() }}

@endsection
