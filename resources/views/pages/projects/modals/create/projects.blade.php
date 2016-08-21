<div id="createprojects" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <!--form started here-->
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Add a New Project</h4>
            </div>


            <div class="modal-body">

              <!--form included here-->

            </div>


            <div class="modal-footer">
                <button type="button" class="btn btn-primary">Save changes</button>
                <a href="" class="btn btn-success submitbutton"><i class="fa-fa-flash"></i>&nbsp;{{$submitTextButton}}</a>
                <!--form ended here-->
                <div class="success margin-top-20">
                  @includes("errors.errors")
                </div>

            </div>

        </div>
    </div>
</div>
