<div class="container">
    <div class="row justify-content-center">


        <div class="col-md-12">
            @foreach($questions as $question)
                <div class="card" style="width: 100%;">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-9"><h5 class="card-title">{{\Illuminate\Support\Str::limit($question->title,100)}}</h5></div>
                            <div class="col-md-3" style="color: deepskyblue;"><i class="fa fa-eye"></i> {{$question->views}}</div>
                        </div>
                        <p class="card-text">{{\Illuminate\Support\Str::limit($question->body,400)}}</p>
                        <div class="row justify-content-center">
                           <div class="col-md-2">
                               <a href="{{route('display-question',['slug'=>$question->slug])}}" class="btn btn-primary">display</a>
                           </div>
                            <div class="col-md-10">
                                <div class="row mb-2" >
                                    <div class="col-md-3"><i class="fa fa-thumbs-up"></i><span>{{" ".$question->like}}</span> <i class="fa fa-thumbs-down"></i><span>{{" ".$question->dislike}}</span></div>
                                    <div class="col-md-3"><i class="fa fa-comments"></i> {{$question->answers->count()}}</div>
                                    <div class="col-md-3"><i class="fa fa-user"></i> {{$question->user->name}}</div>
                                    <div class="col-md-3"><i class="fa fa-clock"></i> {{$question->created_at->diffForHumans()}}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            {{$questions->links()}}
        </div>

    </div>
</div>
