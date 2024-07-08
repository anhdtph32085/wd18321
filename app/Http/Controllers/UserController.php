<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    function showUser(){

        // $listuser = DB::table('users')->get();
        //  return view('list-user')->with([
        //     'listuser' => $listuser
        // ]);
        // $result = DB::table('users')->where('id','=','4')->first();
        // $result = DB::table('users')->find('4');

        // 3. Lấy thuộc tính 'name' của user có id = 16
        // $result = DB::table('users')->where('id','=','16')->value('name');

        // 4. Lấy danh sách id của user có phòng ban 'Ban giám hiệu'
        // $idpb = DB::table('phongban')->where('ten_donvi','like','%Ban giám hiệu%')->value('id');
        // $result = DB::table('users')->where('phongban_id','=',$idpb)->pluck('id');

        // 5. Tìm user có độ tuổi lớn nhất trong công ty 
        // $result = DB::table('users')->where('tuoi','=',DB::table('users')->max('tuoi'))->get() ;

        // 6. Tìm user có độ tuổi nhỏ nhất trong công ty
        // $result = DB::table('users')->where('tuoi','=',DB::table('users')->min('tuoi'))->get() ;

        // 7. Đếm xem phòng ban 'Ban giám hiệu' có bao nhiêu user 
        // $idpb = DB::table('phongban')->where('ten_donvi','like','%Ban giám hiệu%')->value('id');
        // $result = DB::table('users')->where('phongban_id','=',$idpb)->count('id');

        // 8. Lấy danh sách tuổi các user 
        // $result = DB::table('users')->distinct()->pluck('tuoi');

        // 9. Tìm danh sách user có tên 'Khải' hoặc có tên 'Thanh'
        // $result = DB::table('users')->where('name','like','%Khải')->orWhere('name','like','%Thanh')->get();

        // 10. Lấy danh sách user ở phòng ban 'Ban đào tạo'
        //  $idpb = DB::table('phongban')->where('ten_donvi','like','%Ban đào tạo%')->value('id');
        // $result = DB::table('users')->where('phongban_id','=',$idpb)->select('id','name','email')->get();

        // 11. Lấy danh sách user có tuổi lớn hơn hoặc bằng 30, danh sách sắp xếp tăng dần
        // $result = DB::table('users')->where('tuoi','>=','30')->orderBy('tuoi','asc')->select('id','name','email','tuoi')->get();

        // 12. Lấy danh sách 10 user sắp xếp giảm dần độ tuổi, bỏ qua 5 user đầu tiên
        // $result = DB::table('users')->orderBy('tuoi','desc')->select('id','name','email','tuoi')->offset(5)->limit(10)->get();

        // 13. Thêm một user mới vào công ty
        // $data = [
        //     'name'=>'Đỗ Tuấn Anh1',
        //     'email'=>'anhdtpa@gmail.com',
        //     'phongban_id'=>1,
        //     'created_at' => Carbon::now(),
        //     'updated_at' => Carbon::now()
        // ];
        // DB::table('users')->insert($data);
        // 14. Thêm chữ 'PĐT' sau tên tất cả user ở phòng ban 'Ban đào tạo' 
        //  $idpb = DB::table('phongban')->where('ten_donvi','like','%Ban đào tạo%')->value('id');
        //  $result = DB::table('users')->where('phongban_id','=',$idpb)->get();
        //  foreach ($result as $key => $value) {
        //     DB::table('users')->where('phongban_id','=',$idpb)->update([
        //         'name' => $value->name.' PDT'
        //     ]);
        //  }
       

        // 15. Xóa user nghỉ quá 15 ngày
        // DB::table('users')->where('songaynghi','>',15)->delete();
        // dd($result);
        echo "hi";
    }

    function getUser($id,$name = null){
        echo 'id = '.$id.'<br>';
        echo 'name = '.$name;
    }

    function updateUser(Request $req){
        echo $req -> id;
    }

    public function listUser() {
        $listUsers = DB::table('users')
        ->join('phongban','phongban.id','=','users.phongban_id')
        ->select('users.id','users.name','users.email','users.tuoi','users.phongban_id','phongban.ten_donvi')
        ->get();
        return view('users.listUsers')->with([
            'listUsers' => $listUsers
        ]);
    }
    
    public function addUser(){
        $phongBan = DB::table('phongban')->select('id','ten_donvi')->get();
        return view('users.addUsers')->with(
            ['phongBan' => $phongBan]
        );
    }
    public function add_User(Request $req){
        $data = [
            'name' => $req->name,
            'tuoi' => $req->tuoi,
            'phongban_id' => $req->pb,
            'email' => $req->email,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ];

        DB::table('users')->insert($data);
        return redirect() -> route('user.list');
    }

    public function del_User($id){
        DB::table('users')->where('id','=',$id)->delete();
        return redirect() -> route('user.list');
    }

    public function editUser($id){
        $user = DB::table('users')->where('id','=',$id)->first();
        $phongBan = DB::table('phongban')->select('id','ten_donvi')->get();
        return view('users.editUsers')->with(
            ['phongBan' => $phongBan,
             'user' => $user]
        );
    }

    public function update_User(Request $req,$id){
        $data = [
            'name' => $req->name,
            'tuoi' => $req->tuoi,
            'phongban_id' => $req->pb,
            'email' => $req->email,
            'updated_at' => Carbon::now()
        ];

        DB::table('users')->where('id','=',$id)->update($data);
        return redirect() -> route('user.list');
    }
}
