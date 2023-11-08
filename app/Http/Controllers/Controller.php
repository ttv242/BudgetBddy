<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Carbon\Carbon;
use DB;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function __construct()
    {
        // Kiểm tra xem người dùng đã đăng nhập hay chưa
        if (auth()->check()) {
            // Truy xuất thông tin người dùng
            $user = auth()->user();

            // Tiếp tục xử lý hoặc gán biến $user cho các phương thức khác
        }
    }

    public function uploadImage($id, $table, $column, $file, $filepath)
    {
        $name = $file->getClientOriginalName();

        // Lưu file ảnh vào đường dẫn chỉ định
        if ($file->move($filepath, $name)) {
            $tableQuery = DB::table($table)->where('id', $id);
            $row = $tableQuery->first();
            $oldImage = $row->$column; // Ảnh cũ
            $row->$column = $name; // Cập nhật giá trị của cột thành tên tệp tin mới
            $row->updated_at = Carbon::now(); // Cập nhật trường updated_at
            $tableQuery->update((array) $row);

            // Xóa ảnh cũ
            // if ($oldImage != null && $oldImage != $name) {
                $this->unlinkImage($oldImage, $filepath, true);
            // }
            return true; // Tải lên thành công
        } else {
            return false; // Tải lên không thành công
        }
    }

    // Hủy liên kết, xóa ảnh
    public function unlinkImage($file, $filepath, $defaul = false)
    {
        if ($defaul == true) {
            if (file_exists($filepath . $file)) {
                unlink($filepath . $file);
            }
        }
    }

    public function getColumnValue($id, $table, $column)
    {
        $tableQuery = DB::table($table)->where('id', $id);

        if ($tableQuery->exists()) {
            $row = $tableQuery->select($column)->first();
            $value = $row->$column;
            return is_null($value) ? null : $value;
        } else {
            return null; // Bản ghi với ID đã cho không tồn tại
        }
    }

    // Kiểm tra ảnh có tồn tại
    public function imageExits($id, $table, $column, $file, $filepath)
    {
        $oldImage = $this->getColumnValue($id, $table, $column);
        $name = $file->getClientOriginalName();
        $imagePath = $filepath . $name;

        if (file_exists($imagePath) || $name == $oldImage) {
            // File tồn tại
            return $oldImage;
        } else {
            // File không tồn tại
            return true;
        }
    }


    public function processPostRequest($request)
    {
        if (isset($request) && !empty($request->all())) {
            $data = $request->all();
            $id = $data['id'];
            unset($data['_token'], $data['id'], $data['avatar_img']);

            if (isset($id) && isset($data)) {
                if (!empty($id) && !empty($data)) {
                    return [
                        'id' => $id,
                        'data' => $data,
                    ];
                }
            }
        }

        return null;
    }

    // Cập nhật dữ liệu
    public function updateData($id, $table, $data)
    {
        $tableQuery = DB::table($table)->where('id', $id);

        if ($tableQuery->exists()) {
            $selectedColumns = array_keys($data);
            $row = $tableQuery->select($selectedColumns)->first();
            $row->updated_at = Carbon::now(); // Set the updated_at column to the current timestamp

            foreach ($data as $key => $value) {
                $row->$key = $value;
            }

            $tableQuery->update((array) $row);

            return true; // Update successful
        } else {
            return false; // Record with the given ID doesn't exist
        }
    }
}
