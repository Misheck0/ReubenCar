

 @extends('..layouts.app')
 @section('title',$getData['car_name'])
@section('content')

<div class="sidebar">
    <div class="image-slider">
        <img src="{{ asset('Images/' . $getData->img1)}}" alt="Image 1" class="slider-image active">
        <img src="/Images/1726058434.png" class="slider-image">
        <img src="/Images/1726058488.png" class="slider-image">
        <img src="/Images/17260130896.png" class="slider-image">
    </div>
</div>

<!-- Include this script at the bottom -->
<script>
   
</script>

<!-- Add some basic styling -->
<style>
    .sidebar {
        width: 200px;
        padding: 10px;
        background-color: #f0f0f0;
    }

    .image-slider {
        position: relative;
        height: 200px;
        overflow: hidden;
    }

    .slider-image {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
        opacity: 0;
        transition: opacity 0.5s ease-in-out;
    }

    .slider-image.active {
        opacity: 1;
    }
</style>

{{$getData->make}}-{{$getData->car_name}}
@endsection
