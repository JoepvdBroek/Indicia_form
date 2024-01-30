@if (session('success') || !empty($success))
    <div class="container alert alert-success alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <strong>{{ __('Succes') }}</strong><br> {{ session('success') ?? $success }}
    </div>
@elseif(session('warning') || !empty($warning))
    <div class="container alert alert-warning alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <strong>{{ __('Waarschuwing') }}</strong><br> {{ session('warning') ?? $warning }}
    </div>
@elseif(session('error') || !empty($error))
    <div class="container alert alert-danger alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <strong>{{ __('Fout') }}</strong><br> {{ session('error') ?? $error }}
    </div>
@elseif (session('info') || !empty($info))
    <div class="container alert alert-info alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <strong>{{ __('Info') }}</strong><br> {{ session('info') ?? $info }}
    </div>
@endif
