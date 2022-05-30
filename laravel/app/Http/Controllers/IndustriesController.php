<?php

namespace App\Http\Controllers;

use Butschster\Head\Facades\Meta;

class IndustriesController extends Controller
{
    public function index()
    {
       Meta::prependTitle(config('meta.Industries.metaTitle'))
            ->setDescription(config('meta.Industries.metaDescription'))
            ->setKeywords(config('meta.Industries.keywords'));
        return view('industries.index');
    }

    public function indexDating()
    {
        Meta::prependTitle(config('meta.Industries.Dating.metaTitle'))
            ->setDescription(config('meta.Industries.Dating.metaDescription'))
            ->setKeywords(config('meta.Industries.Dating.keywords'));
        return view('industries.dating');
    }

    public function indexEducationLearning()
    {
        Meta::prependTitle(config('meta.Industries.Education_E_Learning.metaTitle'))
            ->setDescription(config('meta.Industries.Education_E_Learning.metaDescription'))
            ->setKeywords(config('meta.Industries.Education_E_Learning.keywords'));
        return view('industries.education-e-learning');
    }

    public function indexHealthcare()
    {
        Meta::prependTitle(config('meta.Industries.Healthcare.metaTitle'))
            ->setDescription(config('meta.Industries.Healthcare.metaDescription'))
            ->setKeywords(config('meta.Industries.Healthcare.keywords'));
        return view('industries.healthcare');
    }

    public function indexLogisticsTracking()
    {
        Meta::prependTitle(config('meta.Industries.Logistics_Tracking.metaTitle'))
            ->setDescription(config('meta.Industries.Logistics_Tracking.metaDescription'))
            ->setKeywords(config('meta.Industries.Logistics_Tracking.keywords'));
        return view('industries.logistics-tracking');
    }

    public function indexMediaEntertainment()
    {
        Meta::prependTitle(config('meta.Industries.Media_Entertainment.metaTitle'))
            ->setDescription(config('meta.Industries.Media_Entertainment.metaDescription'))
            ->setKeywords(config('meta.Industries.Media_Entertainment.keywords'));
        return view('industries.media-entertainment');
    }

    public function indexRealEstate()
    {
        Meta::prependTitle(config('meta.Industries.Real_Estate.metaTitle'))
            ->setDescription(config('meta.Industries.Real_Estate.metaDescription'))
            ->setKeywords(config('meta.Industries.Real_Estate.keywords'));
        return view('industries.real-estate');
    }

    public function indexRetailEcommerce()
    {
        Meta::prependTitle(config('meta.Industries.Retail_E_Commerce.metaTitle'))
            ->setDescription(config('meta.Industries.Retail_E_Commerce.metaDescription'))
            ->setKeywords(config('meta.Industries.Retail_E_Commerce.keywords'));
        return view('industries.retail-e-commerce');
    }

    public function indexSportsFitness()
    {
        Meta::prependTitle(config('meta.Industries.Sports_Fitness.metaTitle'))
            ->setDescription(config('meta.Industries.Sports_Fitness.metaDescription'))
            ->setKeywords(config('meta.Industries.Sports_Fitness.keywords'));
        return view('industries.sports-fitness');
    }

}
