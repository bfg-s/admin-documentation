<div class="row">
    <div class="col-md-6">
        <h4 class="mb-4">{{ $product->countOfCommentaries() }} review for "{{ $product->name }}"</h4>
        @foreach($product->commentaries as $commentary)
            <div class="media mb-4">
{{--                <img src="{{ asset('img/user.jpg') }}" alt="Image" class="img-fluid mr-3 mt-1" style="width: 45px;">--}}
                <div class="media-body">
                    <h6>{{ $commentary->name }}<small> - <i>{{ beautiful_date($commentary->created_at) }}</i></small></h6>
                    <div class="text-primary mb-2">
                        @for($i=1; $i <= $commentary->rating; $i++)
                            <i class="fas fa-star"></i>
                        @endfor
                        @for($i=1; $i <= (5-$commentary->rating); $i++)
                            <i class="far fa-star"></i>
                        @endfor
                    </div>
                    <p>{{ $commentary->comment }}</p>
                </div>
            </div>
        @endforeach
    </div>
    <div class="col-md-6">
        <h4 class="mb-4">Leave a review</h4>
        <small>Your email address will not be published. Required fields are marked *</small>
        <div class="d-flex my-3">
            <p class="mb-0 mr-2">Your Rating * :</p>
            <div class="text-primary">
                @for($i=1; $i <= $stars; $i++)
                    <i class="fas fa-star" wire:click="setStars({{ $i }})" style="cursor: pointer"></i>
                @endfor
                @for($i=1; $i <= (5-$stars); $i++)
                    <i class="far fa-star" wire:click="setStars({{ $stars+$i }})" style="cursor: pointer"></i>
                @endfor
            </div>
        </div>
        <form wire:submit.stop="addComment">
            <div class="form-group">
                <label for="message">Your Review *</label>
                <textarea wire:model="comment" id="message" cols="30" rows="5" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <label for="name">Your Name</label>
                <input wire:model="name" type="text" class="form-control" id="name">
            </div>
            <div class="form-group">
                <label for="email">Your Email</label>
                <input wire:model="email" type="email" class="form-control" id="email">
            </div>
            <div class="form-group mb-0">
                <input type="submit" value="Leave Your Review" class="btn btn-primary px-3">
            </div>
        </form>
    </div>
</div>
