@extends("partials.bodywithsidenav")

@section('title')
  Project Home
@stop

@section("content")

<div class="container">
  <div class="row text-left ">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xz-12 margin-top-70 lato">
        <h2>projects <span class="pull-right small">{{$today}} | {{$currenttime}}</span></h2>
      </div>

  </div>

  <div class="row ">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xz-12">
        <div class="pull-right">
          <a href="#createprojects" class="btn btn-success btn-sm" data-toggle="modal">
            <i class="fa fa-plus"></i>&nbsp; New Project</a>
        </div>
      </div>
  </div>

  <div class="row ">
       <div class="col-lg-12 col-md-12 col-sm-12 col-xz-12">
         @if(count($projects))

           <div class="table-responsive">

             <table class="table table-hover table-condensed">

               <thead>
                 <tr class="text-capitalize roboto">
                     <th>id</th>
                     <th>name</th>
                     <th>author</th>
                     <th>tasks</th>
                     <th>created</th>
                     <th>updated</th>
                     <th>due date</th>
                     <th>status</th>
                     <th>actions</th>
                 </tr>
               </thead>

            @foreach($projects as $k=>$project)

              <tbody>
                  <tr>
                    <td>{{ $project->id }}</td>
                    <td>{{ $project->name }}</td>
                    <td>{{ $project->user->name }}</td>
                    <td>{{ count($project->tasks()->get()) }}</td>
                    <td>{{ $project->created_date }}</td>
                    <td>{{ $project->updated_at }}</td>
                    <td>{{ $project->duedate }}</td>
                    <td>{{ ($project->completed == false) ? "pending": "completed" }}</td>
                    <td></td>
                  </tr>
                </tbody>

              @endforeach

             </table>

            </div>
          @else
              <p>Sorry! no projects found!
               <a href="#createprojects" class="" data-toggle="modal">Create a new one</a>
             </p>
          @endif


</div>

<!-modal window added-->
@include('pages.projects.modals.create.projects', ["submitTextButton"=>"ADD"])
<!-modal window added-->
@stop
