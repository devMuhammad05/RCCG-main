<?php

namespace App\Observers;

use App\Models\Article;
use Illuminate\Support\Str;

class ArticleObserver
{
    private function generateUniqueSlug(string $title, $ignoreId = null): string
    {
        $slug = Str::slug($title);
        $originalSlug = $slug;
        $count = 1;

        while (
            Article::where('slug', $slug)
                ->when($ignoreId, fn ($q) => $q->where('id', '!=', $ignoreId))
                ->exists()
        ) {
            $slug = $originalSlug.'-'.$count++;
        }

        return $slug;
    }

    /**
     * Handle the Article "created" event.
     */
    public function creating(Article $article): void
    {
        if (empty($article->slug)) {
            $article->slug = $this->generateUniqueSlug($article->title);
        }
    }

    /**
     * Handle the Article "updated" event.
     */
    public function updating(Article $article): void
    {
        if ($article->isDirty('title')) {
            $article->slug = $this->generateUniqueSlug($article->title, $article->id);
        }
    }

    /**
     * Handle the Article "deleted" event.
     */
    public function deleted(Article $article): void
    {
        //
    }

    /**
     * Handle the Article "restored" event.
     */
    public function restored(Article $article): void
    {
        //
    }

    /**
     * Handle the Article "force deleted" event.
     */
    public function forceDeleted(Article $article): void
    {
        //
    }
}
