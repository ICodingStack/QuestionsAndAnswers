<div class="container">
    <div class="row justify-content-center">


        <div class="col-md-12">

                <div class="card" style="width: 100%;">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-10"><h4 class="card-title">{{$question->title}}</h4></div>
                            <div class="col-md-2" style="color: deepskyblue;"><i class="fa fa-eye"></i> {{$question->views}}</div>
                        </div>
                        <hr>
                        <p class="card-text">{{$question->body}}</p>
                        <div class="row justify-content-center">
                            <div class="col-md-4">
                                <a href="{{route('home')}}" class="btn btn-outline-secondary">Back to all questions</a>
                            </div>
                            <div class="col-md-8">
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
        </div>
        <div class="col-md-12 mt-2">
            <h4 class="card-title">Answers ({{$question->answers->count()}})</h4>
            <div class="card" style="width: 100%;">
               @if($question->answers->count() > 0)
                    @foreach($question->answers as $answer)
                        <div class="card-body">

                            <p class="card-text">{{$answer->body}}</p>
                            <div class="row justify-content-center">
                                <div class="col-md-4">
                                   &nbsp;
                                </div>
                                <div class="col-md-8">
                                    <div class="row mb-2" >
                                        <div class="col-md-4"><i class="fa fa-thumbs-up"></i><span>{{" ".$answer->like}}</span> <i class="fa fa-thumbs-down"></i><span>{{" ".$question->dislike}}</span></div>
                                        <div class="col-md-4"><i class="fa fa-user"></i> {{$answer->user->name}}</div>
                                        <div class="col-md-4"><i class="fa fa-clock"></i> {{$answer->created_at->diffForHumans()}}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                    @endforeach

                @else
                    <h4 class="card-title" align="center">No Answers</h4>
                @endif
            </div>
        </div>
        @livewire('add-answer',['question'=>$question])

    </div>
</div>
