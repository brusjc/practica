@props(['errors'])

<section class="container justify my-5">
    <div class="container-fluid">
        @foreach($errors as $error)
            <div class="alert alert-warning" role="alert">
              {!!$error!!}
            </div>
        @endforeach
    </div>
</section>
