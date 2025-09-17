<?php

namespace App\Http\Controllers\Api\V1;

use App\Enums\ArticleCategory;
use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): JsonResponse
    {
        $query = Article::active()->latest();

        if ($request->filled('category')) {
            $category = $request->get('category');

            // validate against enum values
            if (! in_array($category, array_column(ArticleCategory::cases(), 'value'))) {
                return $this->errorResponse('Invalid category provided', 422);
            }

            $query->where('category', $category);
        }

        $articles = $query->paginate(6);

        return $this->successResponse('Articles returned successfully', $articles);
    }

    public function show(Article $article): JsonResponse
    {
        $relatedArticles = Article::active()
            ->where('category', $article->category)
            ->where('id', '!=', $article->id)
            ->latest()
            ->limit(4)
            ->get();

        $data = [
            'article' => $article,
            'related_articles' => $relatedArticles,
        ];

        return $this->successResponse('Article returned successfully', $data);
    }
}
