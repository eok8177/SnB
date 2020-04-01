<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Page;
use App\Block;


class PageController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search', false);

        $page = Page::orderBy('id','asc');

        if ($search) {
            $page->where('title','LIKE', '%'.$search.'%')
                ->orWhere('text','LIKE', '%'.$search.'%');
        }

        return view('admin.page.index', [
            'pages' => $page->get(),
            'search' => $search
        ]);
    }

    public function create()
    {
        return view('admin.page.create', [
            'page' => new Page,
            'blocks' => Block::all()
        ]);
    }

    public function store(Request $request, Page $page)
    {
        $page = $page->create($request->all());

        return redirect()->route('admin.page.index')->with('success', 'Page created');
    }

    public function edit(Page $page)
    {
        return view('admin.page.edit', [
            'page' => $page,
            'blocks' => Block::all()
        ]);
    }

    public function update(Request $request, Page $page)
    {
        $page->update($request->all());

        return redirect()->route('admin.page.edit', ['page' => $page->id])->with('success', 'Page updated');
    }

    public function destroy(Page $page)
    {
        $page->delete();

        return response()->json([
            'status' => 'success'
        ]);
    }
}
