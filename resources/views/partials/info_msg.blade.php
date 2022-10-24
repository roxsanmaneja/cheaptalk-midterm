
@if($error = Session::get('Error'))

    {{$error}}

<script>
    $(document).ready(function(){
       $("#msg_modal").modal("show");
    });

    setTimeout(function(){
       $("#msg_modal").modal("hide")
    }, 8000);
 </script>

<div class="modal fade bd-example-modal-sm" id="msg_modal" tabindex="-1" role="dialog" aria-labelledby="success_reg_modal" aria-hidden="true">
    <div class="modal-dialog modal-sm text-center">
        <div class="modal-content">
            <p class="mt-3"><i style="font-size: 5em;" class="fal fa-times-circle text-danger"></i></p>
            <h5 style="margin-top:-3%; color: rgb(206, 26, 26)">Error</h5>
            <p><strong>{{ $error }}</strong></p>
            <p><button type="button" data-dismiss="modal" aria-label="Close" class="btn ok-close-btn">OK</button></p>
        </div>

    </div>
</div>

@endif



@if($message = Session::get('Message'))

<script>
    $(document).ready(function(){
       $("#success_msg_modal").modal("show");
    });

    setTimeout(function(){
       $("#success_msg_modal").modal("hide")
    }, 8000);
 </script>

<div class="modal fade bd-example-modal-sm" id="success_msg_modal" tabindex="-1" role="dialog" aria-labelledby="success_reg_modal" aria-hidden="true">
    <div class="modal-dialog modal-sm text-center">
        <div class="modal-content">
            <p class="mt-3"><i style="font-size: 5em;" class="far fa-check-circle text-success font-weight-light"></i></p>
            <h5 style="margin-top:-3%; color: rgb(4, 51, 5)">Success</h5>
            <p><strong>{{ $message }}</strong></p>
            <p><button type="button" data-dismiss="modal" aria-label="Close" class="btn ok-close-btn">OK</button></p>
        </div>
    </div>
</div>

@endif

@if($info = Session::get('info'))

    {{$info}}


<script>
    $(document).ready(function(){
       $("#success_reg_modal").modal("show");
    });
    setTimeout(function(){
       $("#success_reg_modal").modal("hide")
    }, 2200);
 </script>

<div class="modal fade bd-example-modal-sm" id="success_reg_modal" tabindex="-1" role="dialog" aria-labelledby="success_reg_modal" aria-hidden="true">
    <div class="modal-dialog modal-md alert alert-success  text-center">
        {{$info}}
    </div>
  </div>

@endif
