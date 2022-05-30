<?php

namespace App\Http\Controllers;

use Butschster\Head\Facades\Meta;

class ServicesController extends Controller
{
    public function index()
    {
        Meta::prependTitle(config('meta.Services.metaTitle'))
            ->setDescription(config('meta.Services.metaDescription'))
            ->setKeywords(config('meta.Services.keywords'));
        return view('services.index');
    }

    public function indexOutsourcing()
    {
        Meta::prependTitle(config('meta.Services.IT_Outsourcing.metaTitle'))
            ->setDescription(config('meta.Services.IT_Outsourcing.metaDescription'))
            ->setKeywords(config('meta.Services.IT_Outsourcing.keywords'));
        return view('services.outsourcing');
    }

    public function indexOutstaffing()
    {
        Meta::prependTitle(config('meta.Services.IT_Outstaffing.metaTitle'))
            ->setDescription(config('meta.Services.IT_Outstaffing.metaDescription'))
            ->setKeywords(config('meta.Services.IT_Outstaffing.keywords'));
        return view('services.outstaffing');
    }

    public function indexWeb()
    {
        Meta::prependTitle(config('meta.Services.Web _Development.metaTitle'))
            ->setDescription(config('meta.Services.Web _Development.metaDescription'))
            ->setKeywords(config('meta.Services.Web _Development.keywords'));
        return view('services.web');
    }

    public function indexFullCycle()
    {
        Meta::prependTitle(config('meta.Services.Full_Cycle_Development.metaTitle'))
            ->setDescription(config('meta.Services.Full_Cycle_Development.metaDescription'))
            ->setKeywords(config('meta.Services.Full_Cycle_Development.keywords'));
        return view('services.full_cycle');
    }

    public function indexMobile()
    {
        Meta::prependTitle(config('meta.Services.Mobile_App_Development.metaTitle'))
            ->setDescription(config('meta.Services.Mobile_App_Development.metaDescription'))
            ->setKeywords(config('meta.Services.Mobile_App_Development.keywords'));
        return view('services.mobile');
    }

    public function indexDesign()
    {
        Meta::prependTitle(config('meta.Services.UX_UI_Design.metaTitle'))
            ->setDescription(config('meta.Services.UX_UI_Design.metaDescription'))
            ->setKeywords(config('meta.Services.UX_UI_Design.keywords'));
        return view('services.design');
    }

    public function indexMvp()
    {
        Meta::prependTitle(config('meta.Services.Mvp.metaTitle'))
            ->setDescription(config('meta.Services.Mvp.metaDescription'))
            ->setKeywords(config('meta.Services.Mvp.keywords'));
        return view('services.mvp');
    }


}
