<?php



namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ArticleController extends Controller
{
    
    private function generateUniqueSlug($title, $ignoreId = null)
{
    $slug = Str::slug($title);
    $original = $slug;
    $count = 1;

    while (Article::where('slug', $slug)
        ->when($ignoreId, fn($q) => $q->where('id', '!=', $ignoreId))
        ->exists()) {
        $slug = $original . '-' . $count++;
    }

    return $slug;
}

    
    public function index()
    {
        $articles = Article::latest()->paginate(9);

        return view('articles.index', [
            'articles' => $articles,
            'hero'     => $articles->first(),
        ]);
    }

    public function frontendIndex()
    {
        $articles = Article::latest()->paginate(9);

        return view('frontend.artikel', [
            'articles' => $articles,
            'hero'     => $articles->first(),
        ]);
    }

    public function frontendShow(Article $article)
    {
        $articles = Article::where('id', '!=', $article->id)
            ->latest()
            ->take(3)
            ->get();

        return view('frontend.artikel-show', [
            'article' => $article,
            'articles' => $articles,
        ]);
    }


    public function show($slug)
    {
        $article = Article::where('slug', $slug)->firstOrFail();

        // ambil 3 artikel lain sebagai "other blogs"
        $articles = Article::where('id', '!=', $article->id)
            ->latest()
            ->take(3)
            ->get();

        return view('artikel.show', compact('article', 'articles'));
    }


    public function create()
    {
        return view('articles.create');
    }

    public function store(Request $request)
{
    $request->validate([
        'title'       => 'required|string|max:255',
        'status'      => 'required|in:draft,published',
        'description' => 'required|string',
        'image'       => 'nullable|image|mimes:jpg,jpeg,png|max:10240',
    ]);

    $data = $request->only(['title', 'status', 'description']);
    $data['slug'] = $this->generateUniqueSlug($request->title);

    if ($request->hasFile('image')) {
        $data['image'] = $request->file('image')->store('articles', 'public');
    }

    Article::create($data);

    return redirect()->route('articles.index')->with('success', 'Artikel berhasil ditambahkan');
}


public function edit(Article $article)
{
    return view('articles.edit', compact('article'));
}

public function update(Request $request, Article $article)
{
    $request->validate([
        'title'       => 'required|string|max:255',
        'status'      => 'required|in:draft,published',
        'description' => 'required|string',
        'image'       => 'nullable|image|mimes:jpg,jpeg,png|max:10240',
    ]);

    $data = $request->only(['title', 'status', 'description']);
    $data['slug'] = $this->generateUniqueSlug($request->title, $article->id);

    if ($request->hasFile('image')) {
        if ($article->image) {
            Storage::disk('public')->delete($article->image);
        }
        $data['image'] = $request->file('image')->store('articles', 'public');
    }

    $article->update($data);

    return redirect()->route('articles.index')->with('success', 'Artikel berhasil diperbarui');
}


    public function destroy(Article $article)
    {
        if ($article->image) {
            Storage::disk('public')->delete($article->image);
        }

        $article->delete();

        return redirect()->route('articles.index')->with('success', 'Artikel berhasil dihapus');
    }
}
