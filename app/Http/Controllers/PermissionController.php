<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PermissionController extends Controller
{
    //
    public function view_permission(){
        $items = config('roles.models.permission')::all();

        $data['items'] = $items;

        return view('vendor.laravelroles.laravelroles.cards.permissions-card', $data);
    }
}
