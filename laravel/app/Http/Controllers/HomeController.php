<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactUsFormRequest;
use App\Http\Requests\ResumeRequest;
use App\Mail\ContactUs;
use App\Mail\Resume;
use App\Mail\Welcome;
use App\Models\Contacts;
use App\Models\Portfolio;
use App\Models\Post;
use App\Services\Telegram\TelegramService;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Mail;
use Butschster\Head\Facades\Meta;

class HomeController extends Controller
{
    public function index(Post $post)
    {
        Meta::prependTitle(config('meta.Main.metaTitle'))
            ->setDescription(config('meta.Main.metaDescription'))
            ->setKeywords(config('meta.Main.keywords'));
        return view('home', [
            'posts' => $post->getThreePublishedPosts()
        ]);
    }

    public function company()
    {
        Meta::prependTitle(config('meta.About_Us.metaTitle'))
            ->setDescription(config('meta.About_Us.metaDescription'))
            ->setKeywords(config('meta.About_Us.keywords'));
        return view('about_us');
    }


    public function contacts()
    {
        Meta::prependTitle(config('meta.Contacts.metaTitle'))
            ->setDescription(config('meta.Contacts.metaDescription'))
            ->setKeywords(config('meta.Contacts.keywords'));
        return view('contact_us');
    }

    /**
     * @param ContactUsFormRequest $request
     * @param TelegramService $telegramService
     * @return JsonResponse
     */
    public function contactUs(ContactUsFormRequest $request, TelegramService $telegramService): JsonResponse
    {
        $data = $request->validated();
        $to = explode(',', env('MAIL_TO_ADDRESS'));
        try {
            Contacts::create($data);
            $telegramService->sendMessageFromRequest($data);
//            Mail::to($to)->send(new ContactUs($data));
            Mail::to($request->email)->send(new Welcome($data));
        } catch (\Exception $exception) {
            return response()->json(['errors' => [
                'email' => ["Email wasn't send"],
                "message" => [$exception->getMessage()]
            ]], 424);
        }
        return response()->json([
            "status" => "OK", "message" => "email was sent"
        ]);
    }

    public function sitemap()
    {
        $posts = Post::all();
        $portfolios = Portfolio::all();
        return response()->view('sitemap', ['posts' => $posts, 'portfolios' => $portfolios])->header('Content-Type', 'application/xml');
    }

    /**
     * @param ResumeRequest $request
     * @return JsonResponse
     */
    public function resumeSend(ResumeRequest $request): JsonResponse
    {
        $data = $request->validated();
        try {
            Mail::to(env('MAIL_TO_ADDRESS_HR'))->send(new Resume($data));
        } catch (\Exception $exception) {
            \Log::alert('Resume send is failed ' . json_encode($data));
            return response()->json(['errors' => [
                'email' => ["Email wasn't send"],
                "message" => [$exception->getMessage()]
            ]], 424);
        }
        return response()->json(['status' => true]);
    }
}
