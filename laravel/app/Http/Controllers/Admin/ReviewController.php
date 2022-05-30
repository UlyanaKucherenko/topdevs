<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Http\Requests\Review\CreateReviewRequest;
use App\Http\Requests\Review\UpdateReviewRequest;
use App\Models\Review;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    /**
     * @param Request $request
     * @return JsonResponse
     */
    public function index(Request $request): JsonResponse
    {
        return response()->json([
            'data' => Review::paginate($request->per_page??10),
        ]);
    }

    /**
     * @param CreateReviewRequest $request
     * @param Review $review
     * @return JsonResponse
     */
    public function store(CreateReviewRequest $request, Review $review): JsonResponse
    {
        if ($review->create($request->all())) {
            return response()->json(['status' => 'ok']);
        }
        return response()->json(['error' => 'Review not created']);
    }

    /**
     * @param UpdateReviewRequest $request
     * @param Review $review
     * @return JsonResponse
     */
    public function update(UpdateReviewRequest $request, Review $review): JsonResponse
    {
        if ($review->update($request->all())) {
            return response()->json(['status' => 'ok']);
        }
        return response()->json(['error' => 'Review not updated']);
    }

    /**
     * @param Review $review
     * @return JsonResponse
     */
    public function show(Review $review): JsonResponse
    {
        return response()->json([
            'data' => $review,
        ]);
    }

    /**
     * @param Review $review
     * @return JsonResponse
     * @throws \Exception
     */
    public function destroy(Review $review): JsonResponse
    {
        $review->delete();
        return response()->json(['status' => 'ok']);
    }
}
