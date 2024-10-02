<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        return view('dashboard.all_items.index', [
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

    public function showEditItem()
    {
        return view('dashboard.all_items.edit', [
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
