    <html lang="es">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield("contentheader_title")</title>
    @include('comunes.css')
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <meta name="csrf-token" content={{ csrf_token() }}>
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

    <meta name="description" content=@yield("descripcion")/>
    <meta name="keywords" content=@yield("keywords")/>
    <meta name="author" content="Bruno Jiménez">

    <script data-ad-client="ca-pub-7412986561454436" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>

    <script>
        window.trans = @php
            $lang_files = File::files(resource_path() . '/lang/' . App::getLocale());
            $trans = [];
            foreach ($lang_files as $f) {
                $filename = pathinfo($f)['filename'];
                $trans[$filename] = trans($filename);
            }
            $trans['adminlte_lang_message'] = trans('message');
            echo json_encode($trans);
        @endphp
    </script>
