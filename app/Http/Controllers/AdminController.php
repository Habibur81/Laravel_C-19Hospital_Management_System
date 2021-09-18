<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Auth;
use App\Models\appointment;
use CreateDoctorsTable;
use Illuminate\Http\Request;
use App\Models\doctor;
use App\Notifications\SendEmailNotification;
//use Illuminate\Notifications\Notification;
use Illuminate\Support\Facades\Notification;

class AdminController extends Controller
{
    public function addview(){

        if( Auth::id()){

            if(Auth::user()->usertype==1){

                return view('admin.add_doctor');
            }

            else{

                return redirect()->back();
            }

        }

        else{

            return redirect('login');
        }



    }

    public function upload( Request $request ){

        $doctor = new doctor;

        $image = $request->file;

        $imageName = time().'.'.$image->getClientOriginalExtension();

        $request->file->move('doctorImage',$imageName);

        $doctor->image = $imageName;

        $doctor->name = $request->name;

        $doctor->phone = $request->phone;

        $doctor->speciality = $request->speciality;

        $doctor->room = $request->room;


        $doctor->save();


        return redirect()->back()->with('message','Add Doctor Successfully');

    }


    public function showappointment(){

        if(Auth::id()){

            if(Auth::user()->usertype==1){

                $data = appointment::all();

                return view('admin.showappointment', compact('data'));

            }

            else{

                return redirect()->back();

            }


        }
        else{

            return redirect('login');

        }



    }

    public function appoved($id){

        $data = appointment::find($id);

        $data->status="appoved";

        $data->save();

        return redirect()->back();


    }


    public function cancel($id){

        $data = appointment::find($id);

        $data->status="canceled";

        $data->save();

        return redirect()->back();

    }


    public function showdoctor(){

        $data = doctor::all();

        return view('admin.showdoctor', compact('data'));

    }


    public function deletedoctor($id){

        $delete = doctor::find($id);

        $delete->delete();

        return redirect()->back();

    }


    public function updatedoctor($id){

        $data = doctor::find($id);


        return view('admin.updatedoctor',compact('data'));

    }


    public function editdoctor( Request $request ,$id){

            $doctor = doctor::find($id);

            $doctor->name = $request->name;

            $doctor->phone = $request->tel;

            $doctor->speciality = $request->speciality;

            $doctor->room = $request->room;

            $image = $request->file;

            if($image){

                $imageName = time().'.'.$image->getClientOriginalExtension();

                $request->file->move('doctorImage', $imageName);

                $doctor->image = $imageName;
          }

            $doctor->save();

            return redirect()->back()->with('message', 'Update Doctor Details Successfully');

    }


    public function emailview($id){

            $data = appointment::find($id);

            return view('admin.email_view', compact('data'));


    }


    public function sendemail(Request $request, $id){

        $data = appointment::find($id);

         $details = [

                'greeting' => $request->greeting,

                'body' => $request->body,

                'actiontext' => $request->actiontext,

                'actionurl' => $request->actionurl,

                'endpart' => $request->endpart

         ];

         Notification::send($data, new SendEmailNotification($details));

         return redirect()->back()->with('message', ' Email Send Successfully!!!!!!');

    }



}
