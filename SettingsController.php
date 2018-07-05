<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Settings;

class SettingsController extends Controller
{
    public function index()
    {
      $settings = Settings::all();

      return view('admin.settings.index', compact('settings'));
    }

    public function update(Request $request, $id = null)
    {
        $this->validate($request, array(
          'name' => 'required|max:255',
          'value' => 'required',
        ));

        $settings::find($id);

        $settings->name = $request->input('name');
        $settings->value = $request->input('value');

        $settings->save();
    }
}
