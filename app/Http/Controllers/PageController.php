<?php

namespace App\Http\Controllers;

use App\Models\Content\Page;
use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request, string $url)
    {
        //check if page exists by chceking the url in the database

        $page = (new Page())
            ->newQuery()
            ->where('url', $url)
            ->first();

        if ($page) {
            return view('pages.show', [
                'page' => $page
            ]);
        }else{
            return abort(404);
        }

    }
}
