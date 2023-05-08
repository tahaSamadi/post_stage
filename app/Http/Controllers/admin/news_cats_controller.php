<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\admin\news_cat\edit_news_cat_request;
use App\Http\Requests\admin\news_cat\news_cat_request;
use App\Models\admin\news;
use App\Models\admin\news_cats;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Session;
use PhpParser\Lexer\TokenEmulator\ReadonlyTokenEmulator;

class news_cats_controller extends Controller
{
    protected string $address_view = 'dashboard.admin.module.news_cats.';

    public function create()
    {
        $news_cats = news_cats::where('parent_id', null)
            ->get(['id', 'title', 'state', 'state_main', 'state_header', 'slug']);
        return view($this->address_view . 'create_news-cats', compact('news_cats'));
    }

    public function store(news_cat_request $request)
    {
        news_cats::create($request->all());
        return back()->with(['success' => 'دسته بندی خبر ایجاد شد']);
    }

    public function index(Request $request)
    {
        $news_cats = news_cats::where('parent_id', null)
            ->filter($request->get('title'))
            ->select(['id', 'title', 'state', 'state_main', 'state_header', 'slug'])
            ->paginate(10);
        if ($request->get('parent_id')) {
            $news_cats = news_cats::FilterType($request->get('parent_id'))
                ->filter($request->get('title'))
                ->select(['id', 'title', 'state', 'state_main'
                    , 'state_header', 'slug'])->paginate(10);
        }
        return view($this->address_view . 'index_news-cats'
            , compact('news_cats'));
    }

    public function edit(news_cats $news_cat)
    {
        $news_cats = news_cats::where('parent_id', null)->where('id', '!=', $news_cat["id"])
            ->get(['id', 'title', 'state', 'state_main', 'state_header', 'slug']);
        return view($this->address_view . 'edit_news-cats', compact('news_cat', 'news_cats'));
    }

    public function update(edit_news_cat_request $request, news_cats $news_cat)
    {
        $news_cat->update($request->all());
        return back()->with('success', 'تغییرات انجام شد');
    }

    public function delete()
    {
        $news_cats = news_cats::find(request()->get('id'));
        $redirect = route('news.cats.index');
        if ($news_cats["parent_id"] !== null) {
            Session::flash('success','ایتم با موفقیت حذف شد');
            $redirect = route('news.cats.index', ['parent_id' => $news_cats["parent_id"]]);
        }
        $news_cats->delete();
        Session::flash('success','ایتم با موفقیت حذف شد');
        return response()->json($redirect);
    }



    public function change_states_or_delete(Request $request){
        $params= $request->all();
        return (new news_cats())->crud($params);
    }
}
