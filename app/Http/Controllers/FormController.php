<?php

namespace App\Http\Controllers;

use App\Events\FormSubmitted;
use App\Http\Requests\FormPostRequest;
use App\Models\CompanyForm;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class FormController extends Controller
{

    public function get(): View {
        return view('form');
    }

    public function post(FormPostRequest $request): RedirectResponse
    {
        $company_form = CompanyForm::create($request->validated());

        FormSubmitted::dispatch($company_form);

        return redirect('form')->with('success', __('E-mail successvol verstuurd'));
    }
}
