<?php

namespace App\Http\Controllers;

use App\Models\AllItem;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard.index', [
            'page_title' => 'Dashboard',
            'url' => 'dashboard',
            'active' => 'dashboard',
        ]);
    }

    public function showAllItems()
    {
        $allItems = AllItem::with('user')->paginate(10);

        $search = request('search');
        if ($search) {
            $allItems = AllItem::with('user')
                ->where('item_name', 'LIKE', "%{$search}%")
                ->orWhere('status', 'LIKE', "%{$search}%")
                ->orWhere('place', 'LIKE', "%{$search}%")
                ->orWhere('description', 'LIKE', "%{$search}%")
                ->paginate(10);
        }

        return view('dashboard.all_items.index', [
            'allItems' => $allItems,
            'page_title' => 'All Items',
            'url' => 'all-items',
            'active' => 'all-items',
        ]);
    }

    public function showCreateItem()
    {
        return view('dashboard.all_items.create', [
            'page_title' => 'Create Item',
            'url' => 'all-items/create',
            'active' => 'all-items',
        ]);
    }

    public function createItem(Request $request): RedirectResponse
    {
        $rules = $request->validate([
            'item_name' => ['required', 'min:3', 'max:20'],
            'amount' => ['required'],
            'status' => ['required'],
            'place' => ['required'],
            'description' => ['required', 'min:10', 'max:200'],
        ]);

        $rules['author_id'] = '66fe95823c63d';

        AllItem::create($rules);

        return redirect('/dashboard/all-items')->with('message', 'Item Success created!');
    }

    public function showEditItem(string $id)
    {
        $item = AllItem::find($id);

        return view('dashboard.all_items.edit', [
            'item' => $item,
            'page_title' => 'Edit Item',
            'url' => 'all-items/edit',
            'active' => 'all-items',
        ]);
    }

    public function showDescriptionItems()
    {
        return view('dashboard.description_items.index', [
            'page_title' => 'Description Items',
            'url' => 'description-items',
            'active' => 'description-items',
        ]);
    }

    public function showCreateDescriptionItem()
    {
        return view('dashboard.description_items.create', [
            'page_title' => 'Creat Description Item',
            'url' => 'description-items/create',
            'active' => 'description-items',
        ]);
    }

    public function showEditDescriptionItem()
    {
        return view('dashboard.description_items.edit', [
            'page_title' => 'Edit Description Item',
            'url' => 'description-items/edit',
            'active' => 'description-items',
        ]);
    }
}
