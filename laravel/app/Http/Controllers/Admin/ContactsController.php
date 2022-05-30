<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\Contacts;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ContactsController extends Controller
{
    /**
     * @param Request $request
     * @return JsonResponse
     */
    public function index(Request $request): JsonResponse
    {
        return response()->json([
            'data' => Contacts::orderByDesc('created_at')->paginate($request->per_page??10),
        ]);
    }

    /**
     * @param Contacts $contact
     * @return JsonResponse
     */
    public function show(Contacts $contact): JsonResponse
    {
        return response()->json([
            'data' => $contact,
        ]);
    }

    /**
     * @param Contacts $contact
     * @return JsonResponse
     * @throws \Exception
     */
    public function destroy(Contacts $contact): JsonResponse
    {
        $contact->delete();
        return response()->json(['status' => 'ok']);
    }

    /**
     * @return JsonResponse
     */
    public function countOfUnreadLetters(): JsonResponse
    {
        return response()->json(['count' => Contacts::whereRead(0)->count()]);
    }

    /**
     * @param Contacts $contact
     * @return JsonResponse
     */
    public function readLetters(Contacts $contact)
    {
        $contact->update(['read' => true]);
        return response()->json(['status' => 'ok']);
    }
}
