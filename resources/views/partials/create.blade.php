<div class="modal fade" id="createPostModal" tabindex="-1" role="dialog" aria-labelledby="createPostModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header text-dark text-center">
            <h3 class="modal-title" id="createPostModalLabel">   st</h3> <hr>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body bg-success">
            {!! Form::open(["url" => "/dashboard", 'method' => 'post']) !!}
            @include('partials.form')
            <div class="form-group">
                <button class="btn btn-warning" id="actionBtn" onclick="btnload()"> Create Post</button>
            </div>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>
