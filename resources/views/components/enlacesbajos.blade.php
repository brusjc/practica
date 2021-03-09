@props(['enlaces'])

<section class="container justify mt-5">
    <div class="container-fluid">
        <h2 class="my-5 center">{{ trans('message.pueden_interesar') }}</h2>
        <div class="row" data-aos="fade-left">
            @foreach($enlaces as $key1 => $enlace)
                <div class="col-lg-3 col-md-4 center">
                    <div class="count-box">
                        <div class="icon-box h-100" data-aos="zoom-in" data-aos-delay="50">
                            <a href="/{{session('locale')}}/{{ $enlace['url'] }}">
                                <div class="center h-100">
                                <img src="{{ $enlace['imagen'] }}" class="ri-store-line center" style="color: #ffbb2c;"></img>
                                </div>
                                <p>{{ $enlace['nombre'] }}</p>
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
