<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Validator;
use Hash;
use Session;

// Model Database
use App\Models\MsStaffModel;

class AuthenticationController extends Controller
{
    public function loginPage()
    {
        $titlePage = "Login";

        return view('main_contents.auth.auth_login', [
            'titlePage' => $titlePage,
        ]);
    }

    public function registerPage()
    {
        $titlePage = "Register";
        
        return view('main_contents.auth.auth_register', [
            'titlePage' => $titlePage,
        ]);
    }

    public function registerAct(Request $request)
    {
        $form_token = $request->token;
        $token_csrf = csrf_token();

        $data = null;

        if ($request->ajax()) {

            $validator = Validator::make($request->all(), [
                'tmp_namauser' => 'required',
                'tmp_username' => 'required',
                'tmp_password' => 'required',
                'tmp_email' => 'required',
            ]);

            if ($validator->fails())
            {
                $response_data['status'] = false;
                $response_code = "RC400";
                $message = "Form Tidak Tervalidasi Dengan Sistem";
            }else{
                if($form_token == $token_csrf)
                {
                    try {
                        DB::beginTransaction();
                    } catch (\Throwable $error) {
                        DB::rollback();
                        $status = false;
                        $response_code = "RC400";
                        $message = "Tidak Dapat Menyimpan Kedalam Database";
                    }
                }else{
                    $status = false;
                    $response_code = "RC400";
                    $message = "Token CSRF Tidak Sesuai Dengan Sistem";
                }
            }

        }else{
            $status = false;
            $response_code = "RC405";
            $message = "Format Request Tidak Sesuai Dengan Sistem";
        }

        $response_data['status'] = $status;
        $response_data['response_code'] = $response_code;
        $response_data['message'] = $message;
        $response_data['data'] = $data;

        return response()->json($response_data, 200);
    }

    public function forgotpasswordPage()
    {
        $titlePage = "Forgot Password";
        
        return view('main_contents.auth.auth_forgotpassword', [
            'titlePage' => $titlePage,
        ]);
    }
}
