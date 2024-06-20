@extends('layouts.my-admin')

@section('content')
  <div class="container">
    <h1>Project</h1>

    <table class="table">
      <thead>
        <tr>
          <th scope="col">id</th>
          <th scope="col">name</th>
          <th scope="col">description</th>
          <th scope="col">programming_languages</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($projects as $project)
          <tr>
            <th scope="row">{{$project->id}}</th>
            <td>{{$project->name}}</td>
            <td>{{$project->description}}</td>
            <td>{{$project->programming_languages}}</td>
            <td>
              <a href="{{route('admin.projects.show', ['project' => $project->slug])}}" class="btn btn-success">SHOW</a>
            </td>
          </tr>
            
        @endforeach

      </tbody>
    </table>
  </div>


@endsection