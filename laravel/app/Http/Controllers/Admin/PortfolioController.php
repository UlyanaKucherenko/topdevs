<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Http\Requests\Portfolio\CreatePortfolioRequest;
use App\Http\Requests\Portfolio\UpdatePortfolioRequest;
use App\Http\Requests\Portfolio\SortPortfolioRequest;
use App\Models\Industry;
use App\Models\Portfolio;
use App\Models\Service;
use App\Models\Technology;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;
class PortfolioController extends Controller
{
    /**
     * @param Request $request
     * @return JsonResponse
     */
    public function index(Request $request): JsonResponse
    {
        if($request->per_page && $request->per_page === 'all') {
            $request->per_page = Portfolio::count();
        }

        return response()->json([
            'data' => Portfolio::with(['picture'])->orderBy('order')->paginate($request->per_page??10),
        ]);
    }

    /**
     * @param CreatePortfolioRequest $request
     * @param Portfolio $portfolio
     * @return JsonResponse
     */
    public function store(CreatePortfolioRequest $request, Portfolio $portfolio): JsonResponse
    {
        try {
            if ($portfolio->createPortfolio($request)) {
                return response()->json(['status' => 'ok']);
            }
        }catch (\Exception $exception){
            Log::error($exception->getMessage());
            return response()->json(['error' => 'Portfolio not created'],500);
        }
        return response()->json(['error' => 'Portfolio not created'],400);
    }

    /**
     * @param Portfolio $portfolio
     * @return JsonResponse
     */
    public function show(Portfolio $portfolio): JsonResponse
    {
        return response()->json([
            'portfolio' => $portfolio->loadMissing('picture', 'services', 'industries', 'technologies'),
            'picture_mime_type' => mime_content_type(storage_path('app/public/' . $portfolio->picture->path)),
        ]);
    }

    /**
     * @param UpdatePortfolioRequest $request
     * @param Portfolio $portfolio
     * @return JsonResponse
     */
    public function update(UpdatePortfolioRequest $request, Portfolio $portfolio): JsonResponse
    {
        try {
            if ($portfolio->updatePortfolio($request)) {
                return response()->json(['status' => 'ok']);
            }
        }catch (\Exception $exception){
            Log::error($exception->getMessage());
            return response()->json(['error' => 'Portfolio not updated'],500);
        }
        return response()->json(['error' => 'Portfolio not updated'],400);
    }

    /**
     * @param Portfolio $portfolio
     * @return JsonResponse
     */
    public function destroy(Portfolio $portfolio): JsonResponse
    {
        $portfolio->deletePortfolio();
        return response()->json(['status' => 'ok']);
    }

    /**
     * @param Service $service
     * @param Industry $industry
     * @param Technology $technology
     * @return JsonResponse
     */
    public function filters(Service $service, Industry $industry, Technology $technology): JsonResponse
    {
        return response()->json([
            [   'name' => 'Services',
                'slug' => 'services',
                'filters' => $service->get(['id', 'name', 'slug']),
            ],
            [   'name' => 'Industries',
                'slug' => 'industries',
                'filters' => $industry->get(['id', 'name', 'slug']),
            ],
            [   'name' => 'Technology',
                'slug' => 'technology',
                'filters' => $technology->get(['id', 'name', 'slug']),
            ],
        ]);
    }

    public function order(SortPortfolioRequest $request) {

        $index=1;    
        DB::beginTransaction();
           foreach ($request->order as $id) {
               
               DB::table('portfolios')
                  ->where('id', '=', $id)
                  ->update(['order' => $index++]);
           }
        DB::commit();
        return response()->json([
            'status' => true,
        ]);
    }
}
