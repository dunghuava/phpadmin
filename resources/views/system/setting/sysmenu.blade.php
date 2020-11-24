@extends('system.layouts.master')
@section('title','Danh mục hệ thống')
@section('content')
<div class="row">
    <div class="col-md-12">
        <form action="" class="form-group" data-parsley-validate>
            @csrf
            <table class="table">
                <tr>
                    <th class="lable">Tên danh mục</th>
                    <td><input name="title" required type="text" class="form-control col-md-4"></td>
                </tr>
                <tr>
                    <th class="lable">Icon</th>
                    <td><input name="icon" required type="text" class="form-control col-md-4"></td>
                </tr>
                <tr>
                    <th class="lable">Route</th>
                    <td><input name="route" required type="text" class="form-control col-md-4"></td>
                </tr>
                <tr>
                    <th class="lable">Thuộc về danh mục</th>
                    <td>
                        <select name="parrent_id" id="parrent_id" class="form-control col-md-4">
                            <option value="0">Chọn làm danh mục cha</option>
                            <option value="0">Bảo trì, nâng cấp</option>
                            <option value="0">Tạm khóa</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <th class="lable">Độ ưu tiên</th>
                    <td><input name="priority" type="number" class="form-control col-md-4"></td>
                </tr>
                <tr>
                    <th class="lable">Trạng thái</th>
                    <td>
                        <label style="width: 50%" for="hide">
                            <input value="0" type="radio" name="active" id="hide">
                           Ẩn
                        </label>
                        <label style="width: 50%" for="show">
                            <input checked value="1" type="radio" name="active" id="show">
                           Hiển trị
                        </label>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <button class="btn btn-success" type="submit">Lưu lại</button>
                        <button class="btn btn-danger" type="button">Hủy bỏ</button>
                    </td>
                </tr>
            </table>
        </form>
    </div>
</div>
@endsection