<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Form</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    </head>
    <body class="antialiased">

        @include('includes.alerts')

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">

                    <h1>Bedrijfsgegevens</h1>

                    <form method="POST" action="/form" enctype="multipart/form-data" aria-label="form">
                        @csrf

                        <div class="form-group row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Bedrijfsnaam') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('company_name') ? ' is-invalid' : '' }}" name="company_name" value="{{ old('company_name') }}" required autofocus>

                                @error('company_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-3">
                            <label for="legal_structure" class="col-md-4 col-form-label text-md-right">{{ __('Rechtsvorm') }}</label>

                            <div class="col-md-6">
                                <select id="legal_structure" class="form-control{{ $errors->has('legal_structure') ? ' is-invalid' : '' }}" name="legal_structure">
                                    <option value="Eenmanszaak" {{ old('legal_structure') === 'Eenmanszaak' ? 'selected' : '' }}>{{ __('Eenmanszaak') }}</option>
                                    <option value="VOF" {{ old('legal_structure') === 'VOF' ? 'selected' : '' }}>{{ __('VOF') }}</option>
                                    <option value="Maatschap" {{ old('legal_structure') === 'Maatschap' ? 'selected' : '' }}>{{ __('Maatschap') }}</option>
                                    <option value="Besloten vennootschap" {{ old('legal_structure') === 'Besloten vennootschap' ? 'selected' : '' }}>{{ __('Besloten vennootschap') }}</option>
                                    <option value="Naamloze vennootschap" {{ old('legal_structure') === 'Naamloze vennootschap' ? 'selected' : '' }}>{{ __('Naamloze vennootschap') }}</option>
                                    <option value="Stichting" {{ old('legal_structure') === 'Stichting' ? 'selected' : '' }}>{{ __('Stichting') }}</option>
                                    <option value="Vereniging" {{ old('legal_structure') === 'Vereniging' ? 'selected' : '' }}>{{ __('Vereniging') }}</option>
                                    <option value="Overig" {{ old('legal_structure') === 'Overig' ? 'selected' : '' }}>{{ __('Overig') }}</option>
                                </select>

                                @error('legal_structure')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-3">
                            <label for="street_name" class="col-md-4 col-form-label text-md-right">{{ __('Straatnaam') }}</label>

                            <div class="col-md-6">
                                <input id="street_name" type="text" class="form-control{{ $errors->has('street_name') ? ' is-invalid' : '' }}" name="street_name" value="{{ old('street_name') }}" required>

                                @error('street_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-3">
                            <label for="house_number" class="col-md-4 col-form-label text-md-right">{{ __('Huisnummer') }}</label>

                            <div class="col-md-6">
                                <input id="house_number" type="text" class="form-control{{ $errors->has('house_number') ? ' is-invalid' : '' }}" name="house_number" value="{{ old('house_number') }}" required>

                                @error('house_number')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-3">
                            <label for="postcode" class="col-md-4 col-form-label text-md-right">{{ __('Postcode') }}</label>

                            <div class="col-md-6">
                                <input id="postcode" type="text" class="form-control{{ $errors->has('postcode') ? ' is-invalid' : '' }}" name="postcode" value="{{ old('postcode') }}" required>

                                @error('postcode')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-3">
                            <label for="iban" class="col-md-4 col-form-label text-md-right">{{ __('IBAN') }}</label>

                            <div class="col-md-6">
                                <input id="iban" type="text" class="form-control{{ $errors->has('iban') ? ' is-invalid' : '' }}" name="iban" value="{{ old('iban') }}" required>

                                @error('iban')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-3">
                            <label for="email_of_client" class="col-md-4 col-form-label text-md-right">{{ __('E-mail adres Klant') }}</label>

                            <div class="col-md-6">
                                <input id="email_of_client" type="text" class="form-control{{ $errors->has('email_of_client') ? ' is-invalid' : '' }}" name="email_of_client" value="{{ old('email_of_client') }}" required>

                                @error('email_of_client')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-3">
                            <label for="email_of_financial_correspondence" class="col-md-4 col-form-label text-md-right">{{ __('E-mail adres Financiële correspondentie') }}</label>

                            <div class="col-md-6">
                                <input id="email_of_financial_correspondence" type="text" class="form-control{{ $errors->has('email_of_financial_correspondence') ? ' is-invalid' : '' }}" name="email_of_financial_correspondence" value="{{ old('email_of_financial_correspondence') }}" required>

                                @error('email_of_financial_correspondence')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Submit') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>
