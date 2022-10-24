<a href="{{url('authors/'.$user->id)}}" class="btn m-2 usercard align-center {{($user->sex == 'Male') ? 'male' : 'female'}}">
    <div class="row text-dark">
        <div class="col">
            <div class="row mb-2 text-center">
                <div class="col">
                    <img src="{{$user->sex =='Male' ? asset('images/J.jpg') : asset('images/h.jpg')}}" class="rounded-circle" alt="" style="width: 80px;">
                </div>
            </div>
            <div class="row text-center">
                <div class="col">
                    <strong><h5>{{$user->name}}</h5></strong>
                </div>
            </div>
            <div class="row text-center">
                <div class="col">
                    No. of Posts: <strong>{{$user->posts()->count()}}</strong>
                </div>
            </div>
        </div>
    </div>
</a>
