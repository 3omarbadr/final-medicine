<?php

namespace App\Services;

use App\Models\News;
use App\Repositories\NewsRepository;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Validator;

class NewsService
{
    public function __construct(protected NewsRepository $newsRepository)
    {
    }

    public function getAllNews(): Collection
    {
        return $this->newsRepository->getAllNews();
    }

    public function getNewsById($id): ?News
    {
        return $this->newsRepository->getNewsById($id);
    }

    public function createNews($data): News
    {
        return $this->newsRepository->createNews($data);
    }

    public function updateNews($id, array $data): ?News
    {
        $news = $this->newsRepository->getNewsById($id);
        if (!$news) {
            return null;
        }
        $this->newsRepository->updateNews($news, $data);
        return $news;
    }

    public function deleteNews($id): ?News
    {
        $news = $this->newsRepository->getNewsById($id);
        if (!$news) {
            return null;
        }
        $this->newsRepository->deleteNews($news);
        return $news;
    }
}
