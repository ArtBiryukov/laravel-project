<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\News\UpdateRequest;
use App\Models\Category;
use App\Models\News;
use App\Queries\QueryBuilderNews;
use App\Services\UploadService;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
	 */
    public function index(QueryBuilderNews $news)
    {
        return view('admin.news.index', [
			'news' => $news->getNews()
		]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
	 */
    public function create()
    {
		$categories = Category::all();
        return view('admin.news.create', [
			'categories' => $categories
		]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
	 */
    public function store(Request $request)
    {
		$request->validate([
			'title' => ['required', 'string']
		]);
		$validated = $request->except(['_token', 'image']);
		$validated['slug'] = \Str::slug($validated['title']);

		$news = News::create($validated);
		if($news) {
			return redirect()->route('admin.news.index')
				->with('success', __('message.admin.news.create.success'));
		}

		return back()->with('error', __('message.admin.news.create.fail'));
	}

	/**
	 * Display the specified resource.
	 *
	 * @param News $news
	 * @return \Illuminate\Http\Response
	 */
    public function show(News $news)
    {
        //
    }

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param News $news
	 * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
	 */
    public function edit(News $news)
    {
		$categories = Category::all();
		return view('admin.news.edit', [
			'news' => $news,
			'categories' => $categories
		]);
    }

	/**
	 * Update the specified resource in storage.
	 *
	 * @param \Illuminate\Http\Request $request
	 * @param News $news
	 * @return \Illuminate\Http\RedirectResponse
	 */
    public function update(UpdateRequest $request, News $news, UploadService $uploadService)
    {
		$validated = $request->validated();
		$validated['slug'] = \Str::slug($validated['title']);

		//file upload
		if($request->hasFile('image')) {
			$validated['image'] = $uploadService->uploadImage($request->file('image'));
		}

		$news = $news->fill($validated);
		if($news->save()) {
			return redirect()->route('admin.news.index')
				->with('success', __('message.admin.news.update.success'));
		}

		return back()->with('error', __('message.admin.news.update.fail'));
    }

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param News $news
	 * @return \Illuminate\Http\JsonResponse
	 */
    public function destroy(News $news)
    {
        try{
			$news->delete();

			return response()->json('ok');
		}catch (\Exception $e) {
			\Log::error($e->getMessage());


			return response()->json('error', 400);
		}
    }
}
