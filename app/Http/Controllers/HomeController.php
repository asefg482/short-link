<?php

namespace App\Http\Controllers;

use App\Models\Link;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Requests\StoreLinkRequest;
use App\Http\Requests\UpdateLinkRequest;
use SebastianBergmann\Template\Exception;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    public function index()
    {
        return view('home');
    }

    public function store(StoreLinkRequest $request)
    {
        $validate = $request->validated();
        $urlValidate = Link::where('url', $validate['url'])->first();
        if ($urlValidate == null) {
            $counter = 1;
            $random = Str::random($counter);
            $short = Link::where('short', $random)->first();
            while ($short != null); {
                $counter++;
                $random = Str::random($counter);
                $short = Link::where('short', $random)->first();
            } 
            $validate['short'] = $random;
            $createResult = Link::create($validate);
        } else {
            $short = $urlValidate->short;
        }
        return redirect()->route('index')->withErrors($validate)->with('short', $createResult->short);
    }

    public function redirect(Link $short)
    {
        return redirect($short->url);
    }
}
