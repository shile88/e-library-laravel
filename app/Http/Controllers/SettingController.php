<?php

namespace App\Http\Controllers;

use App\Models\Publisher;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function showPolicy()
    {
        return view('settings.policy');
    }

    public function showCategories()
    {
        return view('settings.categories');
    }

    public function showGenres()
    {
        return view('settings.genres');
    }

    public function showPublishers()
    {
        $publishers = Publisher::all();

        return view('settings.publishers', ['publishers' => $publishers]);
    }

    public function showBindings()
    {
        return view('settings.bindings');
    }

    public function showFormats()
    {
        return view('settings.formats');
    }

    public function showLetters()
    {
        return view('settings.letters');
    }
}
