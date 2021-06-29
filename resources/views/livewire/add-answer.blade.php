<div class="container mt-2">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card" >
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-7">
                            <h5 class="card-title">Post a new Answer </h5>
                        </div>

                    </div>
                    @if($msg)
                        <div class="alert alert-success mt-2" role="alert">
                            A new answer has been posted successfully!
                        </div>
                    @endif
                    <form action="#" wire:submit.prevent="add_new_answer">

                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Body</label>
                            <textarea wire:model="body" name="" id="" cols="30" rows="10" class="form-control" id="exampleInputPassword1" required></textarea>
                            @error('body')
                            <div><span style="color:red;">{{ $message }}</span></div>
                            @enderror
                        </div>

                        <button type="submit" onclick="updateParent" class="btn btn-primary">Post the answer</button>
                    </form>

                </div>
            </div>

        </div>
    </div>
</div>
