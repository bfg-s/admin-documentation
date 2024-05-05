<div class="col-lg-4 col-md-6 col-sm-12 pb-1">
    <div class="card product-item border-0 mb-4">
        <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
            <img class="img-fluid" style="height: 400px;" src="{{ asset($product->images()->first()?->photo ?: '/vendor/admin-shopify/product-photo-no-available.png') }}" alt="">
        </div>
        <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
            <h6 class="text-truncate mb-3">{{ $product->name }}</h6>
            <div class="d-flex justify-content-center">
                @if($product->price->has_discount)
                    <h6>{{$product->price->currency->symbol}}{{ $product->price->discount }}</h6>
                    <h6 class="text-muted ml-2"><del>{{$product->price->currency->symbol}}{{ $product->price->format_price }}</del></h6>
                @else
                    <h6>{{$product->price->currency->symbol}}{{ $product->price->format_price }}</h6>
                @endif
            </div>
        </div>
        <div class="card-footer d-flex justify-content-between bg-light border">
            <a href="{{ $product->route('product') }}" class="btn btn-sm text-dark p-0">
                <i class="fas fa-eye text-primary mr-1"></i>
                View Detail
            </a>
            <a href="javascript:void(0)" class="btn btn-sm text-dark p-0">
                <i class="fas fa-shopping-cart text-primary mr-1"></i>
                Add To Cart
            </a>
        </div>
    </div>
</div>
