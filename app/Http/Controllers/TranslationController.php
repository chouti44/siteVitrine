<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Cookie;
use Symfony\Component\HttpFoundation\Request;


/**
 * @Middleware("web")
 */
class TranslationController extends Controller {

    /**
     *
    * Change session locale
    * @param  Request $request
    * @return Response
    */
    public function changeLocale(Request $request) {
        $this->validate($request, ['locale' => 'required|in:fr,en']);
        Session::put('locale', $request->locale);

        return redirect()->back();
    }


}
