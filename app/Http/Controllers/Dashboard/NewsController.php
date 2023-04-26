<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\News;
use Illuminate\Http\Request;
use App\Services\NewsService;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\Dashboard\NewsRequest;

class NewsController extends Controller
{
    public function __construct(protected NewsService $newsService)
    {
    }

    public function index()
    {
        $news = $this->newsService->getAllNews();
        return view('dashboard.news.index', compact('news'));
    }

    public function create()
    {
        return view('dashboard.news.create');
    }

    public function show($id)
    {
        $news = $this->newsService->getNewsById($id);
        return view('dashboard.news.show', compact('news'));
    }

    public function store(NewsRequest $request)
    {
        $attributes = $request->validated();

        if ($request->img) {
            $attributes['img'] = $request->img->store('news');
        }
        $this->newsService->createNews($attributes);
        return redirect()->route('news.index')->with('success', 'News created successfully');
    }

    public function edit($id)
    {
        $news = $this->newsService->getNewsById($id);
        return view('dashboard.news.edit', compact('news'));
    }

    public function update(NewsRequest $request, $id)
    {
        $attributes = $request->validated();
        if ($request->img) {
            Storage::delete($this->newsService->getNewsById($id)->img);
            $attributes['img'] = $request->img->store('news');
        };
        $this->newsService->updateNews($id, $attributes);
        return redirect()->route('news.index')->with('success', 'News updated successfully');
    }

    public function destroy($id)
    {
        Storage::delete($this->newsService->getNewsById($id)->img);
        $this->newsService->deleteNews($id);
        return redirect()->route('news.index')->with('success', 'News deleted successfully');
    }
}
