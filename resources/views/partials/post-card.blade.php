<div class="rounded p-4 mb-4 {{($post->user->sex == 'Male') ? 'male' : 'female'}}">
    <div class="post pb-2">
        <div class="float-right">
            <button class="btn nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color: rgb(255, 216, 169, 0.3)">
                <img src="https://cdn-icons-png.flaticon.com/512/4370/4370688.png" width="25" height="25" class="rounded"> {{$post->category->category}}
            </button>
            <div class="dropdown-menu" style="background-color: rgba(81, 77, 72, 0.6)" aria-labelledby="navbarDropdown">
                @foreach(App\Models\User::getUserByCat($post->category) as $user)
                    <a class="dropdown-item" href="{{url('/authors/$user->id')}}"><strong>{{$user->name}}</strong></a>
                @endforeach
            </div>
        </div>
        <div class="post-user py-2">
            <h6>
            <img src="{{$post->user->sex =='Male' ? asset('images/avatar.png') : asset('images/female.png')}}" class="rounded-circle mb-1" alt="" style="width: 40px;">
            <a href="{{url('authors/'.$post->user_id)}}"class="" style="font-size:20px">{{$post->user->name}}</a>
            </h6>
        </div>
        <p class="post-text bg-white p-3 rounded">{{$post->post}}</p>
        <span class="text-dark float-right" style="font-size: 1.0em; font-weight:500">{{date('M d, Y h:i A', strtotime($post->created_at))}}</span>
    </div>
</div>
