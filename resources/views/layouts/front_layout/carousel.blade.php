<?php
    $carouselImages = App\Models\Front\CarouselImage::getCarouselImages();
    $imagesCount = count($carouselImages);
    //echo "<pre>"; print_r($carouselImages); die;
?>

<!-- Carousel -->
@if($imagesCount > 0)
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <div class="carousel_layout"></div>
        <ol class="carousel-indicators" style="z-index: 999">
            @for($i = 0 ; $i <= $imagesCount-1 ; $i++)
                <li data-target="#carouselExampleIndicators" data-slide-to="{{$i}}" class="@if($i==0) active @endif"></li>
            @endfor
        </ol>
        <div class="carousel-inner">
            @foreach($carouselImages as $index=>$carouselImage)
                @php
                    $imagePath = 'images/admin_images/carousel_images/'.$carouselImage['image'];
                @endphp
                @if(!empty($carouselImage['image']) && file_exists($imagePath))
                    <div class="carousel-item @if($index == 0) active @endif">
                        <img class="d-block w-100" style="height:600px; display: inline-block" src="{{asset($imagePath)}}" alt="First slide">
                    </div>
                @endif
            @endforeach
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev" style="z-index: 999">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next" style="z-index: 999">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
@elseif($imagesCount == 0)
    @include('layouts.front_layout.default_carousel')
@endif

