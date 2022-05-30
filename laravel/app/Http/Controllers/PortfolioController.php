<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Industry;
use App\Models\Portfolio;
use App\Models\Service;
use App\Models\Technology;
use Butschster\Head\Facades\Meta;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PortfolioController extends Controller
{
    /**
     * @param Request $request
     * @param Portfolio $portfolio
     * @return View
     */
    public function index(Request $request, Portfolio $portfolio): View
    {
        Meta::prependTitle(config('meta.Portfolio.metaTitle'))
            ->setDescription(config('meta.Portfolio.metaDescription'))
            ->setKeywords(config('meta.Portfolio.keywords'));

        return view('portfolio.index', [
            'portfolio' => $portfolio->getAll($request),
            'dropdowns' => [
                [   'name' => 'Services',
                    'slug' => 'services',
                    'filters' => Service::get(['name', 'slug'])
                ],
                [   'name' => 'Technologies',
                    'slug' => 'technologies',
                    'filters' => Technology::get(['name', 'slug'])
                ],
                [   'name' => 'Industries',
                    'slug' => 'industries',
                    'filters' => Industry::get(['name', 'slug'])
                ],
            ],
        ]);
    }

    /**
     * @param Request $request
     * @param Portfolio $portfolio
     * @return JsonResponse
     */
    public function portfolioList(Request $request, Portfolio $portfolio): JsonResponse
    {
        return response()->json([
            'portfolio' => $portfolio->getAll($request),
        ]);
    }

    /**
     * @return JsonResponse
     */
    public function portfolioAll()
    {
        return response()->json(Portfolio::with(['picture', 'technologies'])->get());
    }

    public function indexAroundClock()
    {
        Meta::prependTitle(config('meta.Services.AroundClock.metaTitle'))
            ->setDescription(config('meta.Services.AroundClock.metaDescription'))
            ->setKeywords(config('meta.Services.AroundClock.keywords'));
        return view('portfolio.around-the-clock');
    }
}
