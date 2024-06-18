<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class CompanyProfileController extends Controller
{
    public function __invoke(Request $request)
    {

        $pageTitle = 'Profil Perusahaan';
        return view('company', compact('pageTitle'));

    }
}