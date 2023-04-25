<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\News;
use Illuminate\Http\Request;
use App\Services\NewsService;
use App\Http\Controllers\Controller;

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
        return redirect()->route('dashboard.news.show', compact('news'));
    }

    public function store(Request $request)
    {
        $data = $request->all();

        if ($request->img) {
            $attributes['img'] = $request->image->store('news');
        };
        $this->newsService->createNews($data);
        return redirect()->route('dashboard.news.index');
    }

    public function edit($id)
    {
        $news = $this->newsService->getNewsById($id);
        return view('news.edit', compact('news'));
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();
        $this->newsService->updateNews($id, $data);
        return redirect()->route('dashboard.news.index');
    }

    public function destroy($id)
    {
        $this->newsService->deleteNews($id);
        return redirect()->route('dashboard.news.index');
    }
}
