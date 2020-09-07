<?php

namespace App\Http\Controllers\ConfigTemplate;

use DataTables;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

// Models
use App\Models\Template;

class TemplateController extends Controller
{
    protected $route = 'config-template.template.';
    protected $view  = 'pages.configTemplate.';
    protected $title = 'Config Template';
    protected $path  = '/images/logo/';

    public function index()
    {
        $route = $this->route;
        $title = $this->title;
        $path  = $this->path;

        return view($this->view . 'index', compact(
            'route',
            'title',
            'path'
        ));
    }

    public function api()
    {
        $template = Template::all();

        return DataTables::of($template)
            ->addColumn('action', function ($p) {
                return "<a href='#' onclick='edit(" . $p->id . ")' title='Edit Permission'><i class='icon-pencil mr-1'></i></a>";
            })
            ->editColumn('logo',  function ($p) {
                if ($p->logo != null) {
                    return "<img width='50' class='img-fluid mx-auto d-block ' alt='foto' src='" . asset('images/logo/' . $p->logo) . "'>";
                } else {
                    return "<img width='50' class='rounded img-fluid mx-auto d-block' alt='foto' src='" . asset('images/boy.png') . "'>";
                }
            })
            ->editColumn('logo_title',  function ($p) {
                if ($p->logo_title != null) {
                    return "<img width='50' class='img-fluid mx-auto d-block ' alt='foto' src='" . asset('images/logo/' . $p->logo_title) . "'>";
                } else {
                    return "<img width='50' class='rounded img-fluid mx-auto d-block' alt='foto' src='" . asset('images/boy.png') . "'>";
                }
            })
            ->editColumn('logo_auth',  function ($p) {
                if ($p->logo_auth != null) {
                    return "<img width='50' class='img-fluid mx-auto d-block ' alt='foto' src='" . asset('images/logo/' . $p->logo_auth) . "'>";
                } else {
                    return "<img width='50' class='rounded img-fluid mx-auto d-block' alt='foto' src='" . asset('images/boy.png') . "'>";
                }
            })
            ->addIndexColumn()
            ->rawColumns(['action', 'logo', 'logo_title', 'logo_auth'])
            ->toJson();
    }
}
