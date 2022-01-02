<?php

namespace App\Http\Controllers;

use App\Mail\SendMails;
use App\Models\Certificate;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SendMailController extends Controller
{

    public function checkEmailRequest(Request $request){
        try{
            $certificates = $this->checkCertificateNumber($request);
            if($certificates->count()){
                $imageUrls = $this->createImageUrl($certificates);
                $result = $this->sendMail($request,$imageUrls);
                
                return view('welcome',[
                    'success' => true,
                    'error' => '',
                    'message' => 'certificate sent to your email!',
                    'data' => $result,
                ]);
            }
            else{
                return  view('welcome',[
                    'success' => false,
                    'error' => '',
                    'message' => 'certificate not found!',
                    'data' => '',
                ]);
            }
        }catch(Exception $e){
            echo 'Errors:' , $e->getMessage() , '\n';
        }
    }

    public function createImageUrl($certificates){
        $imageUrls = [];
        foreach($certificates as $certificate){
            array_push($imageUrls,$certificate->img_path);
        }
        return $imageUrls;
    }
    public function checkCertificateNumber($request){
        return Certificate::where(['code'=>$request->certificate])->get();
    }

    public function sendMail($request,$imageUrls){
        $message = [
            'title' => 'YOUR CERTIFICATE NUMBER IS',
            'body' => 'Your Certificate Confirmed.'
        ];
        $data['email'] = $request->email;
        $data['certificate'] = $request->certificate;
        $data['imageUrls'] = $imageUrls;
        $data['sendResult'] = Mail::to($data['email'])->send(new SendMails($message,$data));
        return $data;
    }
}
