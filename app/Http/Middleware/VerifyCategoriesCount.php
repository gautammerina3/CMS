<?php

namespace App\Http\Middleware;

use Closure;

class VerifyCategoriesCount
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {

        if(Category::all()->count())    
        {
            session()->flash('error','You need to add categories to be able to create a post.');
            return redirect(route('categories.create'));
        }
        return $next($request);
    }
}
