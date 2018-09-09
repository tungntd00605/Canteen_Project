<?php
/**
 * Created by PhpStorm.
 * User: TVD1104
 * Date: 9/10/2018
 * Time: 2:56 AM
 */

namespace App\Http\ViewComposers;


use App\Category;
use Illuminate\View\View;

class ClientLayoutComposer
{
    protected $nav_category;

    public function __construct(Category $categories)
    {
        // Dependencies automatically resolved by service container...
        $this->nav_category = $categories::select('id', 'name')->get();
    }

    public function compose(View $view)
    {
        $view->with('nav_category', $this->nav_category);
    }
}