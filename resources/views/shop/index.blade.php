@extends('layouts.master')

@section('title')
    Shopping made easy
@endsection

@section('content')
    @foreach($products->chunk(3) as $productCol)
        <div class="row">
            @foreach($productCol as $product)
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <img src="{{$product->imagePath}}" alt="..." class="img-responsive">
                    <div class="caption">
                        <h3>{{$product->title}}l</h3>
                        <p class="description">{{$product->description}}</p>
                        <div class="clearfix">
                            <div class="pull-left price">{{$product->price}} Lei</div>
                            <a href="#" class="btn btn-default btn-success pull-right" role="button">Add to Cart</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    @endforeach
@endsection