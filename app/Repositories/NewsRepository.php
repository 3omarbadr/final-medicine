<?php

namespace App\Repositories;

use App\Models\News;
use Illuminate\Database\Eloquent\Collection;

class NewsRepository
{
    public function getAllNews(): Collection
    {
        return News::all();
    }

    public function getNewsById($id): ?News
    {
        return News::findOrFail($id);
    }

    public function createNews(array $data): News
    {
        return News::create($data);
    }

    public function updateNews(News $news, array $data): void
    {
        $news->update($data);
    }

    public function deleteNews(News $news): void
    {
        $news->delete();
    }
}
