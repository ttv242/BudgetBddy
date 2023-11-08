<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use App\Models\User;

class AuthenticationController extends Controller
{
    //

    public function signUp(Request $request)
    {
        return view("BudgetBuddy.pages.authentication.sign-up");
    }

    public function signUp_(Request $request)
    {
        $requestData = $request->all();

        $full_name = $requestData['full_name'];
        $email = $requestData['email'];
        $username = $requestData['username'];
        $password = $requestData['password'];
        $confirm_password = $requestData['confirm_password'];

        if ($password !== $confirm_password) {
            return redirect()->back()->with("error", "Mật khẩu không khớp");
        }

        // Tiếp tục xử lý logic đăng ký
        try {
            // Kiểm tra xem email hoặc tên người dùng đã tồn tại trong hệ thống chưa
            if (User::where('email', $email)->orWhere('username', $username)->exists()) {
                return redirect()->back()->with("error", "Email hoặc tên người dùng đã tồn tại");
            }

            // Tạo người dùng mới
            $user = new User();
            $user->full_name = $full_name;
            $user->email = $email;
            $user->username = $username;
            $user->password = bcrypt($password);
            $user->save();

            // Đăng nhập ngay sau khi đăng ký thành công
            auth()->login($user);

            // Chuyển hướng đến trang chủ hoặc trang sau khi đăng ký thành công
            return redirect()->route('home')->with("success", "Đăng ký thành công");
        } catch (\Exception $e) {
            return redirect()->back()->with("error", "Đăng ký thất bại");
        }
    }

    public function signIn(Request $request)
    {
        return view("BudgetBuddy.pages.authentication.sign-in");
    }

    public function signIn_(Request $request)
    {

        $credentials = [
            'username' => $request->input('username'),
            'password' => $request->input('password')
        ];

        if (Auth::attempt($credentials)) {
            // Đăng nhập thành công, chuyển hướng đến trang sau khi đăng nhập thành công
            return Redirect::intended('/')->withSuccess('Đăng nhập thành công!');
        } else {
            // Đăng nhập thất bại, chuyển hướng đến trang đăng nhập và hiển thị thông báo lỗi
            return redirect()->route('sign-in')->withErrors('Tên đăng nhập hoặc mật khẩu không chính xác.');
        }
    }

    public function signOut()
    {
        Auth::logout();

        // Thực hiện các xử lý khác sau khi đăng xuất nếu cần

        return redirect()->route('sign-in');
    }

}
