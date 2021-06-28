<div class="row">
    <div class="container">
        <div class="col-md-7">
            <div class="card" style="width: 60rem;">
                <div class="card-body">
                   <div class="row">
                       <div class="col-md-7">
                           <h5 class="card-title">Post a new question </h5>
                       </div>
                       <div class="col-md-5">
                           <a href="{{route('home')}}" class="btn btn-outline-secondary">Back to all question</a>
                       </div>
                   </div>
                   @if($msg)
                        <div class="alert alert-success mt-2" role="alert">
                            A new question has been posted successfully!
                        </div>
                    @endif
                    <form action="#" wire:submit="add_new_question">

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Title</label>
                            <input wire:model="title" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                           @error('title')
                            <div><span style="color:red;">{{ $message }}</span></div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Body</label>
                            <textarea wire:model="body" name="" id="" cols="30" rows="10" class="form-control" id="exampleInputPassword1" required></textarea>
                            @error('body')
                            <div><span style="color:red;">{{ $message }}</span></div>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary">Post the question</button>
                    </form>

                </div>
            </div>

        </div>
    </div>
</div>
