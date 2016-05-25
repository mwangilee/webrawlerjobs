<?php

namespace App\Http\Controllers;

use Input;
use Request;
use DB;
use Auth;
use Crypt;
use Session;
use Mail;
use App\DBQueries;

class HomeController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct() {



        $this->middleware('auth', ['only' => ['jobs', 'approvals']]);
    }

    public function login() {


        if (Request::isMethod('post')) {
            if (Auth::attempt(['email' => Request::input('email'), 'password' => Request::input('password')])) {
                $message = '';
                $job_list = DBQueries::get_jobs('');
                $count = DBQueries::get_count();
                $count2 = DBQueries::get_count_all();
                return view('jobposts', ['jobs' => $job_list, 'message' => $message, 'countsize' => $count, 'approved' => $count2]);
            } else {
                return redirect()->intended('/home');
            }
        } else {
            return view('/home');
        }
    }

    public function jobs() {

        $message = '';
        $job_list = DBQueries::get_jobs('');
        $count = DBQueries::get_count();
        $count2 = DBQueries::get_count_all();
        return view('jobposts', ['jobs' => $job_list, 'message' => $message, 'countsize' => $count, 'approved' => $count2]);
        //
    }

    public function logout() {
        Auth::logout();
        Session::flush();
        return redirect()->to('/');
    }

    public function approvals($idx = null) {

        if (Request::isMethod('post')) {
            // dd(Request::input());

            $posttitle = Request::input('posttitle');
            $description = Request::input('description');
            $id = Request::input('postid');

            $data = [
                'title' => Request::input('posttitle'),
                'description' => Request::input('description'),
                'status' => '1'];

            if (isset($id) && $id > 0) {

                DB::table('jobs')->where('idx', '=', $id)->update($data);
                $job_list = DBQueries::get_jobs('');
                $message = 'You successfully approved the post';
                $count = DBQueries::get_count();
                $count2 = DBQueries::get_count_all();
                return view('notification', ['jobs' => $job_list, 'message' => $message, 'countsize' => $count, 'approved' => $count2]);
            }
        } else {
            $job_list = DB::Select("select idx,job_id,title,description,status from jobs where idx = '{$idx}'");
            $count = DBQueries::get_count();
            $message = 'You successfully approved the post';
            return view('editjobs', ['jobs' => $job_list, 'message' => $message, 'countsize' => $count]);
        }
    }

    public function delete_posts($idx) {

        DB::table('jobs')->where('idx', '=', $idx)->delete();
        $message = 'You successfully deleted the post';
        $job_list = DBQueries::get_jobs('');
        $count = DBQueries::get_count();
        $count2 = DBQueries::get_count_all();
        return view('notification', ['jobs' => $job_list, 'message' => $message, 'countsize' => $count, 'approved' => $count2]);
    }

    public function approve_posts($idx) {

        $data = ['status' => '1'];
        DB::table('jobs')->where('idx', '=', $idx)->update($data);
        $job_list = DBQueries::get_jobs('');
        $message = 'You successfully approved the post';
        $count = DBQueries::get_count();
        $count2 = DBQueries::get_count_all();
        return view('notification', ['jobs' => $job_list, 'message' => $message, 'countsize' => $count, 'approved' => $count2]);
    }
    
    public function fileupload() {

        $message = '';
        $job_list = DBQueries::get_jobs('');
        $count = DBQueries::get_count();
        $count2 = DBQueries::get_count_all();
        return view('fileupload', ['jobs' => $job_list, 'message' => $message, 'countsize' => $count, 'approved' => $count2]);
  
    }

}
