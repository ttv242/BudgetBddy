<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function home(Request $request)
    {
        return view("BudgetBuddy.pages.subpages.home");
    }

    public function about(Request $request)
    {
        return view("BudgetBuddy.pages.subpages.about");
    }

    public function invoice(Request $request)
    {
        return view("BudgetBuddy.pages.subpages.invoice");
    }

    public function faq(Request $request)
    {
        return view("BudgetBuddy.pages.subpages.faq");
    }

    public function wizard(Request $request)
    {
        return view("BudgetBuddy.pages.subpages.wizard");
    }

}
