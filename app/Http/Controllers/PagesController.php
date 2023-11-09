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

    public function wizard_(Request $request)
    {
        $requestData = $this->processPostRequest($request);

        if ($requestData) {
            $table = 'group';
            $data = $requestData['data'];

            $group_id = $this->insertData($table, $data);
            if ($group_id != null) {
                $table = 'member';
                $data = ["group_id" => $group_id];

                $member_id = $this->insertData($table, $data);
                if ($member_id != null) {
                    $data = ["group_id" => $group_id, "member_id" => $member_id, "role_group" => 1];
                    $status = $this->updateData($request->id, "users", $data);
                    dd($group_id);
                }
                
            }
        }

        return "Invalid data format!";
    }

}
