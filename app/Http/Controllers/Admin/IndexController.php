<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class IndexController extends Controller
{

    //
    public function show()
    {

        $data = [
            'title'  => 'Laravel Project',
            'data'   => [
                'one'   => 'List 1',
                'two'   => 'List 2',
                'three' => 'List 3',
                'four'  => 'List 4',
                'five'  => 'List 5'
            ],
            'dataI'  => ['List 1', 'List 2', 'List 3', 'List 4', 'List 5'],
            'bvar'   => true,
            'script' => "<script>alert('hello')</script>",
        ];
//				$view = view( 'default.template' );
//				$view->with('titile', 'hello world');
//				$view->with('titile2', 'hello world2');
//				$view->with('titile3', 'hello world3');
        if (view()->exists("default.index")) {
            return view('default.index', $data);
//						$path = config('view.paths');
//						return view()->file($path[0].'/default/template.php')->withTitle('hello world');
//						return view('default.template')->withTitle('hello world');
        }
        abort(404);
    }
}
