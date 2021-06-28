<div class="container">
    <div class="row justify-content-center">


        <div class="col-md-12">
            @foreach($questions as $question)
                <div class="card" style="width: 100%;">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-9"><h5 class="card-title">{{$question->title}}</h5></div>
                            <div class="col-md-3" style="color: deepskyblue;"><i class="fa fa-eye"></i> {{$question->views}}</div>
                        </div>
                        <p class="card-text">{{$question->body}}</p>
                        <div class="row justify-content-center">
                           <div class="col-md-4">
                               <a href="#" class="btn btn-primary">display</a>
                           </div>
                            <div class="col-md-8">
                                <div class="row mb-2" style="border: 2px solid deepskyblue;border-radius: 4px;background-color: #1d68a7;color: #fff;">
                                    <div class="col-md-4">&nbsp;</div>
                                    <div class="col-md-4"><i class="fa fa-thumbs-up"></i><span>{{" ".$question->like}}</span> <i class="fa fa-thumbs-down"></i><span>{{" ".$question->dislike}}</span></div>
                                    <div class="col-md-4"><i class="fa fa-comments"></i> {{$question->views}}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
</div>
