<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// This can be removed if you use __autoload() in config.php OR use Modular Extensions
/** @noinspection PhpIncludeInspection */
require APPPATH . 'libraries/REST_Controller.php';

/**
 * This is an example of a few basic user interaction methods you could use
 * all done with a hardcoded array
 *
 * @package         CodeIgniter
 * @subpackage      Rest Server
 * @category        Controller
 * @author          Phil Sturgeon, Chris Kacerguis
 * @license         MIT
 * @link            https://github.com/chriskacerguis/codeigniter-restserver
 */
class User extends REST_Controller {

    function __construct()
    {
        // Construct the parent class
        parent::__construct();

        // Configure limits on our controller methods
        // Ensure you have created the 'limits' table and enabled 'limits' within application/config/rest.php
        $this->methods['users_get']['limit'] = 500; // 500 requests per hour per user/key
        $this->methods['users_post']['limit'] = 100; // 100 requests per hour per user/key
        $this->methods['users_delete']['limit'] = 50; // 50 requests per hour per user/key
		$this->load->library('email');
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('security');
		$this->load->model('Mobile_model');
		$this->load->library('zend');
    }

	public function login_post()
    {
        $mobile=$this->post('mobile');
        $check_login=$this->Mobile_model->check_login_details($mobile);
		if(count($check_login)>0){
				if($check_login['otp_verified']==1){
					$message = array('status'=>1,'user_id'=>$check_login['user_id'],'message'=>'User successfully Login');
					$this->response($message, REST_Controller::HTTP_OK);
				}else{
					$message = array('status'=>0, 'user_id'=>$check_login['user_id'],'message'=>'Your Mobile number not verified. Please verify your mobile number.');
					$this->response($message, REST_Controller::HTTP_OK);
				}
			}else{
				$message = array('status'=>0,'message'=>'Login Details are wrong. Plase try again.');
				$this->response($message, REST_Controller::HTTP_OK);
			}

	}	
	public function register_post()
    {
        $mobile=$this->post('mobile');
		if($mobile ==''){
			$message = array('status'=>0,'message'=>'Mobile number is required');
			$this->response($message, REST_Controller::HTTP_OK);			
		}
		$check=$this->Mobile_model->check_mobile_num($mobile);
		if(count($check)>0){
			if($check['otp_verified']==0){
				$message = array('status'=>0,'user_id'=>$check['user_id'],'message'=>'Your Mobile number not verified. Please verify your mobile number');
				$this->response($message, REST_Controller::HTTP_OK);
			}else{
				$message = array('status'=>0,'message'=>'Mobile number already used. Please use another Mobile number.');
				$this->response($message, REST_Controller::HTTP_OK);
			}
		}
		$otp = mt_rand(100000, 999999);
		$a_d=array(
			'mobile'=>isset($mobile)?$mobile:'',
			'otp'=>isset($otp)?$otp:'',
			'created_at'=>date('Y-m-d H:i:s'),
		);
		//echo '<pre>';print_r($a_d);exit;
		$save=$this->Mobile_model->save_user($a_d);
		if(count($save)>0){
			$apikey=$this->config->item('apikey');
			$sender=$this->config->item('sender');
			$msg = "Your register Otp is : ".$otp;
			$ch2 = curl_init();
			curl_setopt($ch2, CURLOPT_URL,'http://sms.pearlsms.com/public/sms/send');
			curl_setopt($ch2, CURLOPT_POST, 1);
			curl_setopt($ch2, CURLOPT_POSTFIELDS,'sender='.$sender.'&smstype=TRANS&numbers='.$mobile.'&apikey='.$apikey.'&message='.$msg.'');
			curl_setopt($ch2, CURLOPT_RETURNTRANSFER, true);
			$server_output = curl_exec ($ch2);
			curl_close ($ch2);			
			$message = array('status'=>1,'user_id'=>$save,'message'=>'Otp Send to your mobile number check it once');
			$this->response($message, REST_Controller::HTTP_OK);
		}else{
				$message = array('status'=>0,'message'=>'Technical problem will occured. Please try again.');
				$this->response($message, REST_Controller::HTTP_OK);
		}

	}
	public function mobileverify_post()
    {
        $user_id=$this->post('user_id');
        $name=$this->post('name');
        $email=$this->post('email');
        $otp=$this->post('otp');
		if($user_id ==''){
			$message = array('status'=>0,'message'=>'user_id is required');
			$this->response($message, REST_Controller::HTTP_OK);			
		}if($otp==''){
			$message = array('status'=>0,'message'=>'otp is required');
			$this->response($message, REST_Controller::HTTP_OK);			
		}if($name==''){
			$message = array('status'=>0,'message'=>'Name is required');
			$this->response($message, REST_Controller::HTTP_OK);			
		}if($email==''){
			$message = array('status'=>0,'message'=>'Email is required');
			$this->response($message, REST_Controller::HTTP_OK);			
		}
		$check=$this->Mobile_model->check_otp($user_id,$otp);
		if(count($check)>0){
				$u_a_d=array(
					'name'=>isset($name)?$name:'',
					'email'=>isset($email)?$email:'',
					'otp_verified'=>1,
					'updated_at'=>date('Y-m-d H:i:s'),
				);
				$update=$this->Mobile_model->update_verification($user_id,$u_a_d);
				if(count($update)>0){
					$message = array('status'=>1,'user_id'=>$user_id,'message'=>'Mobile verified successfully');
					$this->response($message, REST_Controller::HTTP_OK);
				}else{
					$message = array('status'=>0,'user_id'=>$user_id,'message'=>'Technical problem will occured. Please try again.');
					$this->response($message, REST_Controller::HTTP_OK);
				}
							
		}else{
			$message = array('status'=>0,'user_id'=>$user_id,'message'=>'Data not found. Please try again.');
			$this->response($message, REST_Controller::HTTP_OK);
		}

	}
	public function otpresend_post()
    {
        $user_id=$this->post('user_id');
		if($user_id ==''){
		$message = array('status'=>0,'message'=>'user_id is required');
		$this->response($message, REST_Controller::HTTP_OK);			
		}
		$check=$this->Mobile_model->check_user_details($user_id);
		//echo '<pre>';print_r($check);exit;
		if(count($check)>0){
				$u_a_d=array(
					'otp_verified'=>0,
					'updated_at'=>date('Y-m-d H:i:s'),
				);
				$update=$this->Mobile_model->update_verification($user_id,$u_a_d);
				if(count($update)>0){
						$apikey=$this->config->item('apikey');
						$sender=$this->config->item('sender');
						$msg = "Your register Otp is : ".$check['otp'];
						$mobile=$check['mobile'];
						$ch2 = curl_init();
						curl_setopt($ch2, CURLOPT_URL,'http://sms.pearlsms.com/public/sms/send');
						curl_setopt($ch2, CURLOPT_POST, 1);
						curl_setopt($ch2, CURLOPT_POSTFIELDS,'sender='.$sender.'&smstype=TRANS&numbers='.$mobile.'&apikey='.$apikey.'&message='.$msg.'');
						curl_setopt($ch2, CURLOPT_RETURNTRANSFER, true);
						$server_output = curl_exec ($ch2);
						curl_close ($ch2);	
						//echo '<pre>';print_r($server_output);exit;
						curl_close ($ch2);
					$message = array('status'=>1,'user_id'=>$user_id,'message'=>'Otp Send to your mobile number check it once');
					$this->response($message, REST_Controller::HTTP_OK);
				}else{
					$message = array('status'=>0,'user_id'=>$user_id,'message'=>'Technical problem will occured. Please try again.');
					$this->response($message, REST_Controller::HTTP_OK);
				}
							
		}else{
			$message = array('status'=>0,'user_id'=>$user_id,'message'=>'Already verified. Please try again.');
			$this->response($message, REST_Controller::HTTP_OK);
		}

	}
	public function details_post()
    {
        $user_id=$this->post('user_id');
		if($user_id ==''){
		$message = array('status'=>0,'message'=>'user_id is required');
		$this->response($message, REST_Controller::HTTP_OK);			
		}
		$details=$this->Mobile_model->get_user_details($user_id);
		if(count($details)>0){
			$message = array('status'=>1,'details'=>$details, 'path'=>base_url('assets/profile_pic'),'message'=>'User details are found');
			$this->response($message, REST_Controller::HTTP_OK);					
		}else{
			$message = array('status'=>0,'details'=>new stdClass(),'path'=>base_url('assets/profile_pic'),'message'=>'User details are not found. Please try again.');
			$this->response($message, REST_Controller::HTTP_OK);
		}

	}
	 
	 public function updateprofile_post()
    {
		$user_id=$this->post('user_id');
		$email = $this->post('email');
		$name = $this->post('name');
		$mobile = $this->post('mobile');
		$address = $this->post('address');
       if($user_id=='') {
            $message = array('status' => 0,'message' => 'User id is required');
            $this->response($message, REST_Controller::HTTP_OK);
        }if($email=='') {
            $message = array('status' => 0,'message' => 'Email is required');
            $this->response($message, REST_Controller::HTTP_OK);
        }if($name=='') {
            $message = array('status' => 0,'message' => 'Name is required');
            $this->response($message, REST_Controller::HTTP_OK);
        }
		if($mobile=='') {
            $message = array('status' => 0,'message' => 'mobile is required');
            $this->response($message, REST_Controller::HTTP_OK);
        }if($address=='') {
            $message = array('status' => 0,'message' => 'Address is required');
            $this->response($message, REST_Controller::HTTP_OK);
        }
		$d=$this->Mobile_model->get_user_details($user_id);
		//echo '<pre>';print_r($d);exit;
			if($d['mobile']!=$mobile){
				$check=$this->Mobile_model->check_login_mobile($mobile);
				if(count($check)>0){
						 $message = array('status' => 0,'message' => 'Mobile number already exists. Please use another mobile number');
						$this->response($message, REST_Controller::HTTP_OK);				
				}
			}
			$add=array(
			'email'=>isset($email)?$email:'',
			'name'=>isset($name)?$name:'',
			'mobile'=>isset($mobile)?$mobile:'',
			'address'=>isset($address)?$address:'',
			'updated_at'=>date('Y-m-d H:i:s'),
			);
			$update=$this->Mobile_model->update_user($user_id,$add);
			if(count($update)>0){
					$message = array('status'=>1,'user_id'=>$user_id, 'message'=>'User details successfully Updated');
					$this->response($message, REST_Controller::HTTP_OK);
			}else{
				$message = array('status'=>0,'message'=>'Technical problem will occurred .Please try again');
				$this->response($message, REST_Controller::HTTP_OK);
			}
			
     }
	 public  function profileimage_post(){
		$user_id=$this->post('user_id');
		if($user_id=='') {
			$message = array('status' => 0,'message' => 'User id is required');
			$this->response($message, REST_Controller::HTTP_OK);
		}
		if(count($_FILES)==0){
			$message = array('status'=>0,'message'=>'upload image is required');
			$this->response($message, REST_Controller::HTTP_OK);	
		}
		$d=$this->Mobile_model->get_user_details($user_id);
		if($d['profile_pic']!=''){
			unlink('assets/profile_pic/'.$d['profile_pic']);
		}
		$pic=$_FILES['img']['name'];
		$picname = str_replace(" ", "", $pic);
		$imagename=microtime().basename($picname);
		$imgname = str_replace(" ", "", $imagename);
		if(move_uploaded_file($_FILES['img']['tmp_name'], 'assets/profile_pic/'.$imgname)){
			$addimg=array(
			'profile_pic'=>$imgname,
			);
			$save_img=$this->Mobile_model->update_user($user_id,$addimg);
			if(count($save_img)>0){
					$message = array('status'=>1,'user_id'=>$user_id,'path'=>base_url('assets/profile_pic/'),'message'=>'Image successfully Updated');
					$this->response($message, REST_Controller::HTTP_OK);
			}else{
				$message = array('status'=>0,'message'=>'Technical problem will occurred .Please try again');
				$this->response($message, REST_Controller::HTTP_OK);
			}
			
		}else{
			
			$message = array('status'=>0,'message'=>'Technical problem will occurred .Please try again');
				$this->response($message, REST_Controller::HTTP_OK);
		}
		
	 }
	 public function notifications_post()
    {
        $user_id=$this->post('user_id');
		if($user_id ==''){
		$message = array('status'=>0,'message'=>'user_id is required');
		$this->response($message, REST_Controller::HTTP_OK);			
		}
		$noti=$this->Mobile_model->get_user_notifications($user_id);
		if(count($noti)>0){
			$message = array('status'=>1,'list'=>$noti,'message'=>'Notifications are found');
			$this->response($message, REST_Controller::HTTP_OK);					
		}else{
			$message = array('status'=>0,'list'=>array(),'message'=>'Notifications are not found. Please try again.');
			$this->response($message, REST_Controller::HTTP_OK);
		}

	}
	public  function addnew_member_post(){
		$user_id=$this->post('user_id');
		$name=$this->post('name');
		$email=$this->post('email');
		$mobile=$this->post('mobile');
		$age=$this->post('age');
		$gender=$this->post('gender');
		if($user_id==''){
			$message = array('status'=>0,'message'=>'user_id is required');
			$this->response($message, REST_Controller::HTTP_OK);			
		}if($name==''){
				$message = array('status'=>0,'message'=>'Name is required');
			$this->response($message, REST_Controller::HTTP_OK);			
		}if($email==''){
				$message = array('status'=>0,'message'=>'Email is required');
			$this->response($message, REST_Controller::HTTP_OK);			
		}if($mobile==''){
				$message = array('status'=>0,'message'=>'Mobile is required');
			$this->response($message, REST_Controller::HTTP_OK);			
		}if($age==''){
				$message = array('status'=>0,'message'=>'Age is required');
				$this->response($message, REST_Controller::HTTP_OK);			
		}if($gender==''){
				$message = array('status'=>0,'message'=>'Gender is required');
			$this->response($message, REST_Controller::HTTP_OK);			
		}
		$n_a=array(
			'user_id'=>isset($user_id)?$user_id:'',
			'name'=>isset($name)?$name:'',
			'email'=>isset($email)?$email:'',
			'mobile'=>isset($mobile)?$mobile:'',
			'age'=>isset($age)?$age:'',
			'gender'=>isset($gender)?$gender:'',
			'created_at'=>date('Y-m-d H:i:s'),
			'created_by'=>isset($user_id)?$user_id:'',
		);
		$check=$this->Mobile_model->check_member_exits($user_id,$name);
		if(count($check)>0){
			$message = array('status'=>0,'f_m_id'=>$check['f_m_id'],'message'=>'New patient already exist. Please try again ');
			$this->response($message, REST_Controller::HTTP_OK);
		}else{
			$save=$this->Mobile_model->save_new_member_data($n_a);
			if(count($save)>0){
				$message = array('status'=>1,'f_m_id'=>$save,'message'=>'New patient added successfully.');
				$this->response($message, REST_Controller::HTTP_OK);
			}else{
				$message = array('status'=>0,'message'=>'Technical problem will occurred .Please try again');
				$this->response($message, REST_Controller::HTTP_OK);
			}
		}
		
	}
	public  function edit_new_member_post(){
		$f_m_id=$this->post('f_m_id');
		$name=$this->post('name');
		$email=$this->post('email');
		$mobile=$this->post('mobile');
		$age=$this->post('age');
		$gender=$this->post('gender');
		if($f_m_id==''){
			$message = array('status'=>0,'message'=>'Family member id is required');
			$this->response($message, REST_Controller::HTTP_OK);			
		}if($name==''){
				$message = array('status'=>0,'message'=>'Name is required');
			$this->response($message, REST_Controller::HTTP_OK);			
		}if($email==''){
				$message = array('status'=>0,'message'=>'Email is required');
			$this->response($message, REST_Controller::HTTP_OK);			
		}if($mobile==''){
				$message = array('status'=>0,'message'=>'Mobile is required');
			$this->response($message, REST_Controller::HTTP_OK);			
		}if($age==''){
				$message = array('status'=>0,'message'=>'Age is required');
				$this->response($message, REST_Controller::HTTP_OK);			
		}if($gender==''){
				$message = array('status'=>0,'message'=>'Gender is required');
			$this->response($message, REST_Controller::HTTP_OK);			
		}
		$n_a=array(
			'name'=>isset($name)?$name:'',
			'email'=>isset($email)?$email:'',
			'mobile'=>isset($mobile)?$mobile:'',
			'age'=>isset($age)?$age:'',
			'gender'=>isset($gender)?$gender:'',
			'updated_at'=>date('Y-m-d H:i:s'),
		);
		$update=$this->Mobile_model->update_member_status($f_m_id,$n_a);
		if(count($update)>0){
				$message = array('status'=>1,'f_m_id'=>$f_m_id,'message'=>'New patient successfully updated');
				$this->response($message, REST_Controller::HTTP_OK);
			}else{
				$message = array('status'=>0,'message'=>'Technical problem will occurred .Please try again');
				$this->response($message, REST_Controller::HTTP_OK);
			}
		
		
	}
	public  function new_member_status_post(){
		$f_m_id=$this->post('f_m_id');
		$statu=$this->post('status');
		if($f_m_id==''){
			$message = array('status'=>0,'message'=>'family member id is required');
			$this->response($message, REST_Controller::HTTP_OK);			
		}if($statu==''){
			$message = array('status'=>0,'message'=>'Statu type is required');
			$this->response($message, REST_Controller::HTTP_OK);			
		}
		$n_a=array(
			'status'=>isset($statu)?$statu:'',
			'updated_at'=>date('Y-m-d H:i:s'),
		);
		$update=$this->Mobile_model->update_member_status($f_m_id,$n_a);
			if(count($update)>0){
				if($statu==1){
					$message = array('status'=>1,'f_m_id'=>$f_m_id,'message'=>'New patient activate successfully');
				}else if($statu==2){
					$message = array('status'=>1,'f_m_id'=>$f_m_id,'message'=>'New patient deleted successfully');
				}else{
					$message = array('status'=>1,'f_m_id'=>$f_m_id,'message'=>'New patient deactivated successfully');
				}
				$this->response($message, REST_Controller::HTTP_OK);
			}else{
				$message = array('status'=>0,'message'=>'Technical problem will occurred .Please try again');
				$this->response($message, REST_Controller::HTTP_OK);
			}
	}
	public  function new_member_list_post(){
		$user_id=$this->post('user_id');
		if($user_id==''){
			$message = array('status'=>0,'message'=>'user id is required');
			$this->response($message, REST_Controller::HTTP_OK);			
		}
			$deatils=$this->Mobile_model->get_family_members_list($user_id);
			if(count($deatils)>0){
				$message = array('status'=>1,'list'=>$deatils,'message'=>'New patient details are found');
				$this->response($message, REST_Controller::HTTP_OK);
			}else{
				$message = array('status'=>0,'list'=>array(),'message'=>'New patient details are not found');
				$this->response($message, REST_Controller::HTTP_OK);
			}
	}
	public  function new_member_details_post(){
		$f_m_id=$this->post('f_m_id');
		if($f_m_id==''){
			$message = array('status'=>0,'message'=>'f_m_id id is required');
			$this->response($message, REST_Controller::HTTP_OK);			
		}
			$deatils=$this->Mobile_model->get_family_members_details($f_m_id);
			if(count($deatils)>0){
				$message = array('status'=>1,'list'=>$deatils,'message'=>'Details are found');
				$this->response($message, REST_Controller::HTTP_OK);
			}else{
				$message = array('status'=>0,'list'=>array(),'message'=>'Details are not found');
				$this->response($message, REST_Controller::HTTP_OK);
			}
	}
	public  function forgotpwd_post(){
			$email=$this->post('email');
			if($email==''){
				$message = array('status'=>0,'message'=>'Email id/Mobile is required');
				$this->response($message, REST_Controller::HTTP_OK);			
			}
			$checking=$this->Mobile_model->get_forgot_user_details($email);
			if(count($checking)>0){
				if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
						$this->load->library('email');
						$this->email->set_newline("\r\n");
						$this->email->set_mailtype("html");
						$this->email->from($checking['email']);
						$this->email->to('info@medarogya.com');
						$this->email->subject('forgot - password');
						$body =  $checking['name']." your account login password  is :  ".$checking['org_password'].'';
						$this->email->message($body);
						$this->email->send();
						
						$message = array('status'=>1,'message'=>'Temporary password sent to your registered Email address check it once');
						$this->response($message, REST_Controller::HTTP_OK);
				} else {
					$apikey=$this->config->item('apikey');
					$sender=$this->config->item('sender');
					$msg = $checking['name']." your account login password  is : <b> ".$checking['org_password'].'</b>';
					$ch2 = curl_init();
					curl_setopt($ch2, CURLOPT_URL,'http://sms.pearlsms.com/public/sms/send');
					curl_setopt($ch2, CURLOPT_POST, 1);
					curl_setopt($ch2, CURLOPT_POSTFIELDS,'sender='.$sender.'&smstype=TRANS&numbers='.$checking['mobile'].'&apikey='.$apikey.'&message='.$msg.'');
					curl_setopt($ch2, CURLOPT_RETURNTRANSFER, true);
					$server_output = curl_exec ($ch2);
					curl_close ($ch2);
					$message = array('status'=>1,'message'=>'Temporary password sent to your registered mobile number check it once');
					$this->response($message, REST_Controller::HTTP_OK);
				}
			
			}else{
					$message = array('status'=>1,'message'=>'Invalid enter email/mobile number . Please try again.');
					$this->response($message, REST_Controller::HTTP_OK);
			}
		
	}
	
	public  function  termsandpolicy_post(){
		$tdeatils=$this->Mobile_model->get_termsandconditions();
		if(count($tdeatils)>0){
			$message = array('status'=>1,'details'=>$tdeatils,'message'=>'Details are found');
			$this->response($message, REST_Controller::HTTP_OK);
		}else{
			$message = array('status'=>0,'details'=>array(),'message'=>'Details are not found');
			$this->response($message, REST_Controller::HTTP_OK);
		}
	}
	
	public  function update_token_post(){
			$user_id=$this->post('user_id');
			$token=$this->post('token');
			if($user_id==''){
				$message = array('status'=>0,'message'=>'User id is required');
				$this->response($message, REST_Controller::HTTP_OK);			
			}if($token==''){
				$message = array('status'=>0,'message'=>'token id is required');
				$this->response($message, REST_Controller::HTTP_OK);			
			}
			$ad=array('token'=>$token,'updated_at'=>date('Y-m-d H:i:s'));
			$update=$this->Mobile_model->update_verification($user_id,$ad);
				if(count($update)>0){
					$message = array('status'=>1,'user_id'=>$user_id,'message'=>'Token successfully updated');
					$this->response($message, REST_Controller::HTTP_OK);
				}else{
					$message = array('status'=>0, 'user_id'=>$user_id, 'message'=>'Technical problem will occurred .Please try again');
					$this->response($message, REST_Controller::HTTP_OK);
				}
	}
	
	public function sociallogin_post(){
			$uid=$this->post('uid');
			$source=$this->post('source');
			$name=$this->post('name');
			$email=$this->post('email');
			$mobile=$this->post('mobile');
			if($uid==''){
				$message = array('status'=>0,'message'=>'User id is required');
				$this->response($message, REST_Controller::HTTP_OK);			
			}if($source==''){
				$message = array('status'=>0,'message'=>'source is required');
				$this->response($message, REST_Controller::HTTP_OK);			
			}if($name==''){
				$message = array('status'=>0,'message'=>'name is required');
				$this->response($message, REST_Controller::HTTP_OK);			
			}
			$fourdigitrandom = rand(1000,9999);
			$newadd=array(
				'uid'=>isset($uid)?$uid:'',
				'source'=>isset($source)?$source:'',
				'name'=>isset($name)?$name:'',
				'email'=>isset($email)?$email:'',
				'mobile'=>isset($mobile)?$mobile:'',
				'referral_code'=>isset($fourdigitrandom)?$fourdigitrandom.ucfirst(substr($name, 0, 1)):'',
				'created_at'=>date('Y-m-d H:i:s'),
			);
			$check=$this->Mobile_model->check_social_user_exist($uid,$source);
			if(count($check)>0){
				if($check['otp_verified']==1){
					$message = array('status'=>1,'user_id'=>$check['user_id'],'otp_verified'=>$check['otp_verified'],'message'=>'Mobile verified successfully');
					$this->response($message, REST_Controller::HTTP_OK);
				}else{
					$message = array('status'=>1,'user_id'=>$check['user_id'],'otp_verified'=>$check['otp_verified'],'message'=>'Your mobile number not verified');
					$this->response($message, REST_Controller::HTTP_OK);
				}
				
			}else{
				$save=$this->Mobile_model->save_user($newadd);
				if(count($save)>0){
					$d=$this->Mobile_model->get_user_details($save);
					$message = array('status'=>1,'user_id'=>$save,'otp_verified'=>$d['otp_verified'],'message'=>'Verify your mobile number');
					$this->response($message, REST_Controller::HTTP_OK);
				}else{
					$message = array('status'=>0,'otp_verified'=>'','message'=>'Technical problem will occurred .Please try again');
					$this->response($message, REST_Controller::HTTP_OK);
				}
				
			}
			//echo '<pre>';print_r($check);exit;
	}
	
	public  function mobileotp_post(){
			$user_id=$this->post('user_id');
			$mobile=$this->post('mobile');
			$email=$this->post('email');
			if($user_id==''){
				$message = array('status'=>0,'message'=>'User id is required');
				$this->response($message, REST_Controller::HTTP_OK);			
			}if($mobile==''){
				$message = array('status'=>0,'message'=>'mobile is required');
				$this->response($message, REST_Controller::HTTP_OK);			
			}if($email==''){
				$message = array('status'=>0,'message'=>'email is required');
				$this->response($message, REST_Controller::HTTP_OK);			
			}
			if(!preg_match("/^[0-9]{10}$/", $mobile)){
					$message = array('status'=>0, 'message'=>'Invalid mobile number. Please try again.');
					$this->response($message, REST_Controller::HTTP_OK);	
			}
				$otp = mt_rand(100000, 999999);
				$u_a_d=array(
					'email'=>isset($email)?$email:'',
					'mobile'=>isset($mobile)?$mobile:'',
					'otp'=>$otp,
					'updated_at'=>date('Y-m-d H:i:s'),
				);
				
				$check=$this->Mobile_model->mobile_number_checking($mobile);
				if(count($check)>0){
					$message = array('status'=>0, 'message'=>'Mobile number already used .Please try again');
					$this->response($message, REST_Controller::HTTP_OK);
				}
				$update=$this->Mobile_model->update_verification($user_id,$u_a_d);
				if(count($update)>0){
						$apikey=$this->config->item('apikey');
						$sender=$this->config->item('sender');
						$msg = "Your mobile number verification code is : ".$otp;
						$ch2 = curl_init();
						curl_setopt($ch2, CURLOPT_URL,'http://sms.pearlsms.com/public/sms/send');
						curl_setopt($ch2, CURLOPT_POST, 1);
						curl_setopt($ch2, CURLOPT_POSTFIELDS,'sender='.$sender.'&smstype=TRANS&numbers='.$mobile.'&apikey='.$apikey.'&message='.$msg.'');
						curl_setopt($ch2, CURLOPT_RETURNTRANSFER, true);
						$server_output = curl_exec ($ch2);
						curl_close ($ch2);					
					$message = array('status'=>1,'user_id'=>$user_id,'message'=>'Otp Send to your mobile number check it once');
					$this->response($message, REST_Controller::HTTP_OK);

				}else{
					$message = array('status'=>0, 'message'=>'Technical problem will occurred .Please try again');
					$this->response($message, REST_Controller::HTTP_OK);
				}				
			
	}
	
	public  function add_address_post(){
			$user_id=$this->post('user_id');
			$name=$this->post('name');
			$mobile=$this->post('mobile');
			$email=$this->post('email');
			$address=$this->post('address');
			$landmark=$this->post('landmark');
			$city=$this->post('city');
			$state=$this->post('state');
			$country=$this->post('country');
			$pincode=$this->post('pincode');
			if($user_id==''){
				$message = array('status'=>0,'message'=>'User id is required');
				$this->response($message, REST_Controller::HTTP_OK);			
			}if($name==''){
				$message = array('status'=>0,'message'=>'Name  is required');
				$this->response($message, REST_Controller::HTTP_OK);			
			}if($mobile==''){
				$message = array('status'=>0,'message'=>'Mobile  is required');
				$this->response($message, REST_Controller::HTTP_OK);			
			}if($email==''){
				$message = array('status'=>0,'message'=>'Email  is required');
				$this->response($message, REST_Controller::HTTP_OK);			
			}if($address==''){
				$message = array('status'=>0,'message'=>'Address  is required');
				$this->response($message, REST_Controller::HTTP_OK);			
			}if($landmark==''){
				$message = array('status'=>0,'message'=>'Land Mark  is required');
				$this->response($message, REST_Controller::HTTP_OK);			
			}if($city==''){
				$message = array('status'=>0,'message'=>'City is required');
				$this->response($message, REST_Controller::HTTP_OK);			
			}if($state==''){
				$message = array('status'=>0,'message'=>'State is required');
				$this->response($message, REST_Controller::HTTP_OK);			
			}if($country==''){
				$message = array('status'=>0,'message'=>'Country is required');
				$this->response($message, REST_Controller::HTTP_OK);			
			}if($pincode==''){
				$message = array('status'=>0,'message'=>'Pincode is required');
				$this->response($message, REST_Controller::HTTP_OK);			
			}
			$add=array(
			'user_id'=>isset($user_id)?$user_id:'',
			'name'=>isset($name)?$name:'',
			'mobile'=>isset($mobile)?$mobile:'',
			'email'=>isset($email)?$email:'',
			'address'=>isset($address)?$address:'',
			'landmark'=>isset($landmark)?$landmark:'',
			'city'=>isset($city)?$city:'',
			'state'=>isset($state)?$state:'',
			'country'=>isset($country)?$country:'',
			'pincode'=>isset($pincode)?$pincode:'',
			'created_at'=>date('Y-m-d H:i:s'),
			'created_by'=>isset($user_id)?$user_id:'',
			);
			$save=$this->Mobile_model->save_shipping_address($add);
			if(count($save)>0){
					$message = array('status'=>1,'s_ad_id'=>$save,'message'=>'Shipping address added successfully');
			     	$this->response($message, REST_Controller::HTTP_OK);
			}else{
				$message = array('status'=>0, 'message'=>'Technical problem will occurred .Please try again');
				$this->response($message, REST_Controller::HTTP_OK);
			}
	}
	public  function edit_address_post(){
			$s_ad_id=$this->post('s_ad_id');
			$name=$this->post('name');
			$mobile=$this->post('mobile');
			$email=$this->post('email');
			$address=$this->post('address');
			$landmark=$this->post('landmark');
			$city=$this->post('city');
			$state=$this->post('state');
			$country=$this->post('country');
			$pincode=$this->post('pincode');
			if($s_ad_id==''){
				$message = array('status'=>0,'message'=>'Save address id is required');
				$this->response($message, REST_Controller::HTTP_OK);			
			}if($name==''){
				$message = array('status'=>0,'message'=>'Name  is required');
				$this->response($message, REST_Controller::HTTP_OK);			
			}if($mobile==''){
				$message = array('status'=>0,'message'=>'Mobile  is required');
				$this->response($message, REST_Controller::HTTP_OK);			
			}if($email==''){
				$message = array('status'=>0,'message'=>'Email  is required');
				$this->response($message, REST_Controller::HTTP_OK);			
			}if($address==''){
				$message = array('status'=>0,'message'=>'Address  is required');
				$this->response($message, REST_Controller::HTTP_OK);			
			}if($landmark==''){
				$message = array('status'=>0,'message'=>'Land Mark  is required');
				$this->response($message, REST_Controller::HTTP_OK);			
			}if($city==''){
				$message = array('status'=>0,'message'=>'City is required');
				$this->response($message, REST_Controller::HTTP_OK);			
			}if($state==''){
				$message = array('status'=>0,'message'=>'State is required');
				$this->response($message, REST_Controller::HTTP_OK);			
			}if($country==''){
				$message = array('status'=>0,'message'=>'Country is required');
				$this->response($message, REST_Controller::HTTP_OK);			
			}if($pincode==''){
				$message = array('status'=>0,'message'=>'Pincode is required');
				$this->response($message, REST_Controller::HTTP_OK);			
			}
			$ud=array(
			'name'=>isset($name)?$name:'',
			'mobile'=>isset($mobile)?$mobile:'',
			'email'=>isset($email)?$email:'',
			'address'=>isset($address)?$address:'',
			'landmark'=>isset($landmark)?$landmark:'',
			'city'=>isset($city)?$city:'',
			'state'=>isset($state)?$state:'',
			'country'=>isset($country)?$country:'',
			'pincode'=>isset($pincode)?$pincode:'',
			'updated_at'=>date('Y-m-d H:i:s'),
			);
			$update=$this->Mobile_model->update_shipping_address($s_ad_id,$ud);
			if(count($update)>0){
					$message = array('status'=>1,'s_ad_id'=>$s_ad_id,'message'=>'Shipping address updated successfully');
			     	$this->response($message, REST_Controller::HTTP_OK);
			}else{
				$message = array('status'=>0,'s_ad_id'=>$s_ad_id,'message'=>'Technical problem will occurred .Please try again');
				$this->response($message, REST_Controller::HTTP_OK);
			}
	}
	public  function delete_address_post(){
			$s_ad_id=$this->post('s_ad_id');
			if($s_ad_id==''){
				$message = array('status'=>0,'message'=>'Save address id is required');
				$this->response($message, REST_Controller::HTTP_OK);			
			}
			$ud=array(
			'status'=>2,
			'updated_at'=>date('Y-m-d H:i:s'),
			);
			$update=$this->Mobile_model->update_shipping_address($s_ad_id,$ud);
			if(count($update)>0){
					$message = array('status'=>1,'s_ad_id'=>$s_ad_id,'message'=>'Shipping address deleted successfully');
			     	$this->response($message, REST_Controller::HTTP_OK);
			}else{
				$message = array('status'=>0,'s_ad_id'=>$s_ad_id,'message'=>'Technical problem will occurred .Please try again');
				$this->response($message, REST_Controller::HTTP_OK);
			}
	}
	public  function delivery_address_list_post(){
			$user_id=$this->post('user_id');
			if($user_id==''){
				$message = array('status'=>0,'message'=>'User id is required');
				$this->response($message, REST_Controller::HTTP_OK);			
			}
			$a_list=$this->Mobile_model->get_shipping_address_list($user_id);
			if(count($a_list)>0){
				$message = array('status'=>1,'user_id'=>$user_id,'list'=>$a_list,'message'=>'Address list are found');
				$this->response($message, REST_Controller::HTTP_OK);
			}else{
				$message = array('status'=>0,'user_id'=>$user_id,'list'=>array(),'message'=>'Address list are not found');
				$this->response($message, REST_Controller::HTTP_OK);
			}
	}
	public  function parentcredential_post(){
				$details=array('key'=>'rzp_test_1CSnweG2HOTawb','API_keySecret'=>'5idRiZ46N5rQFBWwVwBgtABF');
				$message = array('status'=>1,'detail'=>$details,'message'=>'Details are found');
				$this->response($message, REST_Controller::HTTP_OK);
			
	}
	
	
	

}
