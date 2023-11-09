<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class AccountController extends Controller
{
    //



    public function overview(Request $request)
    {
        return view("BudgetBuddy.pages.account.overview");
    }
    public function settings(Request $request)
    {
        return view("BudgetBuddy.pages.account.settings");
    }

    public function settings_(Request $request)
    {
        $data = $this->processPostRequest($request);
        if ($data != null) {
            $result = $this->updateData($data['id'], "users", $data['data']);
        }


        // Kiểm tra xem có tệp tin "avatar_img" đã được tải lên không
        if ($request->hasFile("avatar_img")) {
            $file = $request->file("avatar_img");
            $filepath = "BudgetBuddy/uploads/avatar_img/";

            $check = $this->imageExits($data["id"], "users", "avatar_img", $file, $filepath);
            if ($check == false) {
                // $this->uploadImage($data["id"], "users", "avatar_img",$file, $filepath);
            } else {
                // dd($check);
                $status = $this->uploadImage($data["id"], "users", "avatar_img",$file, $filepath);
                $this->unlinkImage($check, "BudgetBuddy/uploads/avatar_img/", $status);
                // Xoa anh cu
            }
        }

        if ($result == true) {
            return redirect()->route('settings')->with('success','Cập nhật thành công...!');
        }
    }


    public function billing(Request $request)
    {
        return view("BudgetBuddy.pages.account.billing");
    }

    public function statements(Request $request)
    {
        return view("BudgetBuddy.pages.account.statements");
    }
}
