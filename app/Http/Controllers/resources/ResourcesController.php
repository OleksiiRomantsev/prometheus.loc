<?php

namespace App\Http\Controllers\resources;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class ResourcesController extends Controller
{

    public function listPage() {
        $title = "Resources list page";

        // хлебные крошки
        $breadcrumbs = array(
            'Main Page' => route('mainPage'),
            $title => $title
        );

        return view('pages.resources.listPage', [
            'title' => $title,
            'breadcrumbs' => $breadcrumbs,
        ]);
    }


    public function createPage() {

        $title = 'Create a Resource';

        // хлебные крошки
        $breadcrumbs = array(
            'Main Page' => route('mainPage'),
            'Resource list' => route('resources.create'),
            $title => $title
        );

        return view('pages.resources.createPage', [
            'title' => $title,
            'breadcrumbs' => $breadcrumbs,
        ]);

    }


}
