<section class="container justify">
    <div class="container-fluid">
        <div class="row content h-100">
            <div class="col-md-6 pt-5 order-2">
                @include('paginas.vocabulario.publi.superior50')
            </div>
            <div class="col-md-6 pt-5 order-1">
                {{$slot}}
            </div>
        </div>
    </div>
</section>
