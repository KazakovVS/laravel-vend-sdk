<?php

namespace SimpleSquid\LaravelVend\Controllers;

use SimpleSquid\LaravelVend\Facades\Vend;
use SimpleSquid\LaravelVend\VendTokenManager;

class VendOauthController
{
    public function __invoke(VendTokenManager $tokenManager)
    {
        if ($tokenManager->hasToken()) {
            return back();
        }

        return redirect()->away(Vend::getAuthorisationUrl(url()->previous()));
    }
}
