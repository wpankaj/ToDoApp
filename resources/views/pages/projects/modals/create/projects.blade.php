<div id="createprojects" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
          {! Form::open(['method'=>'POST', action => 'ProjectController@store', class=> 'form-horizontal']) !}

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Add a New Project</h4>
            </div>


            <div class="modal-body">

              @include("pages.projects.forms.project")

            </div>


            <div class="modal-footer">
                <a href="" class="btn btn-success submitbutton"><i class="fa-fa-flash"></i>&nbsp;{{$submitTextButton}}</a>
                {! Form::close() !}
                <div class="success margin-top-20">
                  @include("errors.errors")
                </div>

            </div>

        </div>
    </div>
</div>
