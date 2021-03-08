@props(['url', 'title', 'alt'])

<section class="container justify my-5">
    <div class="container-fluid">
        <div class="row content h-100">
            <div class="col-md-4 pt-4 cajaflex" data-aos="fade-left">
                <img class="img-fluid" src="{{$url}}" width="60%" title="{{$title}}" alt="{{$alt}}"/>
            </div>
            <div class="col-md-8 pt-8">
                {{$slot}}
            </div>
        </div>
    </div>  
</section>
