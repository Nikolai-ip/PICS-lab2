<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use App\Models\Article;

class ArticleController extends Controller
{

    public function index(Request $request)
    {
        $query = Article::query();
        
        if ($request->filled('code')) {
            $query->where('code', $request->get('code'));
        }
        
        if ($request->filled('title')) {
            $title = $request->get('title');
            $query->where('title', 'like', "%$title%");
        }

        if ($request->filled('tag')) {
            $query->where('tag', $request->get('tag'));
        }

        $articles = $query->paginate(20);
        
        return view('articles.index', compact('articles'));
    }

    public function filterByTag(Request $request, $code)
    {   

        $article= Article::where('code', $code)->first();
        if (!$article) {
            abort(404);
        }
        $tags = $article->tags()->orderBy('tag_title')->get();

        echo "<h3>Теги:</h3>";
        foreach ($tags as $tag) {
            echo $tag->tag_title ."<p>";   
        }

        return view('articles.code', compact('article', 'code'));
    }

}