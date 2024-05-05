<div class="col-lg-7 pb-5">
    <h3 class="font-weight-semi-bold">{{ $product->name }}</h3>
    <div class="d-flex mb-3">
        <div class="text-primary mr-2">
            @for($i=1; $i <= $product->rating; $i++)
                <small class="fas fa-star"></small>
            @endfor
            @for($i=1; $i <= (5-$product->rating); $i++)
                <small class="far fa-star"></small>
            @endfor
        </div>
        <small class="pt-1">({{ $product->views }} Reviews)</small>
    </div>
    @if($product->price->has_discount)
        <h3 class="font-weight-semi-bold mb-4">
            {{$product->price->currency->symbol}}{{ $product->price->discount }}
            <del>{{$product->price->currency->symbol}}{{ $product->price->format_price }}</del>
        </h3>
    @else
        <h3 class="font-weight-semi-bold mb-4">{{$product->price->currency->symbol}}{{ $product->price->format_price }}</h3>
    @endif

    <p class="mb-4">{{ $product->short_description }}</p>

    @foreach($product->categories as $category)
        @foreach($category->properties as $property)
            @if($product->properties($property)->count() > 1)
                <div class="d-flex mb-3">
                    <p class="text-dark font-weight-medium mb-0 mr-3">{{ $property->name }}:</p>
                    <form>
                        @foreach($product->properties($property) as $propertyValue)
                            <div class="custom-control custom-radio custom-control-inline">
                                <input @checked($loop->first) type="radio" class="custom-control-input" id="property-{{ $propertyValue->id }}" name="property[{{ $property->id }}]" value="{{ $propertyValue->id }}">
                                <label class="custom-control-label" for="property-{{ $propertyValue->id }}">{{ $propertyValue->value }}</label>
                            </div>
                        @endforeach
                    </form>
                </div>
            @endif
        @endforeach
    @endforeach

    <div class="d-flex align-items-center mb-4 pt-2">
        <div class="input-group quantity mr-3" style="width: 130px;">
            <div class="input-group-btn">
                <button wire:click="subCount" class="btn btn-primary btn-minus" >
                    <i class="fa fa-minus"></i>
                </button>
            </div>
            <input type="text" class="form-control bg-secondary text-center" wire:model="count">
            <div class="input-group-btn">
                <button wire:click="addCount" class="btn btn-primary btn-plus">
                    <i class="fa fa-plus"></i>
                </button>
            </div>
        </div>
        <button class="btn btn-primary px-3 mr-3"><i class="fa fa-shopping-cart mr-1"></i> Add To Cart</button>
        @if($product->isFavorite())
            <button type="button" wire:click="toggleFavorite" class="btn btn-primary px-3"><i class="fas fa-heart mr-1"></i> Remove From Favorite</button>
        @else
            <button type="button" wire:click="toggleFavorite" class="btn btn-primary px-3"><i class="fas fa-heart mr-1"></i> Add To Favorite</button>
        @endif
    </div>

    <div class="d-flex pt-2">
        <p class="text-dark font-weight-medium mb-0 mr-2">Share on:</p>
        <div class="d-inline-flex">
            <a class="text-dark px-2" href="">
                <i class="fab fa-facebook-f"></i>
            </a>
            <a class="text-dark px-2" href="">
                <i class="fab fa-twitter"></i>
            </a>
            <a class="text-dark px-2" href="">
                <i class="fab fa-linkedin-in"></i>
            </a>
            <a class="text-dark px-2" href="">
                <i class="fab fa-pinterest"></i>
            </a>
        </div>
    </div>
</div>
