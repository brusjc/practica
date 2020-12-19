<section class="counts">
    <div class="container">
        <h2>{{ trans('message.pueden_interesar') }}</h2>
        <div class="row" data-aos="fade-left">
            <div class="col-lg-3 col-md-4">
                <div class="count-box">
                    <div class="icon-box h-100" data-aos="zoom-in" data-aos-delay="50">
                        <a href='/{{session("lang")}}/{{ $enlaces[1]["url"] }}'><img src='{{ $enlaces[1]["imagen"] }}' class="ri-store-line" style="color: #ffbb2c;"></img></a>
                        <p class="mt-3"><a href='/{{session("lang")}}/{{ $enlaces[1]["url"] }}'>{{ $enlaces[1]["nombre"] }}</a></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4">
                <div class="count-box">
                    <div class="icon-box h-100" data-aos="zoom-in" data-aos-delay="50">
                        <a href='/{{session("lang")}}/{{ $enlaces[2]["url"] }}'><img src='{{ $enlaces[2]["imagen"] }}' class="ri-store-line" style="color: #ffbb2c;"></img></a>
                        <p class="mt-3"><a href='/{{session("lang")}}/{{ $enlaces[2]["url"] }}'>{{ $enlaces[2]["nombre"] }}</a></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4">
                <div class="count-box">
                    <div class="icon-box h-100" data-aos="zoom-in" data-aos-delay="50">
                        <a href='/{{session("lang")}}/{{ $enlaces[3]["url"] }}'><img src='{{ $enlaces[3]["imagen"] }}' class="ri-store-line" style="color: #ffbb2c;"></img></a>
                        <p class="mt-3"><a href='/{{session("lang")}}/{{ $enlaces[3]["url"] }}'>{{ $enlaces[3]["nombre"] }}</a></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4">
                <div class="count-box">
                    <div class="icon-box h-100" data-aos="zoom-in" data-aos-delay="50">
                        <a href='/{{session("lang")}}/{{ $enlaces[4]["url"] }}'><img src='{{ $enlaces[4]["imagen"] }}' class="ri-store-line" style="color: #ffbb2c;"></img></a>
                        <p class="mt-3"><a href='/{{session("lang")}}/{{ $enlaces[4]["url"] }}'>{{ $enlaces[4]["nombre"] }}</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
