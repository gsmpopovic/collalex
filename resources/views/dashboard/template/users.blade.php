@extends('dashboard.template.master')
@section('content')

<h2>Current Project's Users</h2>
<table class="table-responsive-sm table-hover">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">NAME</th>
        <th scope="col">EMAIL</th>
        <th scope="col">CREATED</th>
      </tr>
    </thead>
    <tbody>
@forelse ($users as $user)
<tr>
    <th scope="row">{{$user->id}}</th>
    <td>{{$user->name}}</td>
    <td>{{$user->email}}</td>
    <td>{{$user->created_at}}</td>
  </tr>
  <tr>
@empty
    No users
@endforelse
    </tbody>
  </table>

  {{$users->links()}}
@endsection