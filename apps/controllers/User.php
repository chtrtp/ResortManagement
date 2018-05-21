<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
            $this->load->library('session');  // เรียกใช้งาน session
          }   
          public function index()
          {
            if (!isset($_SESSION['sign_in'])) {
             $this->load->view('login');
           }else{
            redirect('/');
          }
        }
        public function check(){

         $usr = $_POST["username"];
         $pwd = $_POST["password"];


         $query = $this->db->select('*');
         $query = $this->db->from('users');
         $query = $this->db->where('user_username', $usr);
         $query = $this->db->where('user_password', $pwd);
         $query = $this->db->get();

         if($query->num_rows() > 0)
         { 
          foreach ($query->result_array() as $row){

           $_SESSION['sign_in'] = "loged";
           $_SESSION['sign_id'] = $row['user_id'];

         }
         redirect('/');
       }
       else
       {
        redirect('/login');
      }
    }

    public function logout(){
      session_start();
      session_destroy();
      redirect('/');
    }

    public function register(){
      $this->load->view('register');
    }

    public function registercheck(){
     $usr = $_POST["username"];
     $pwd = $_POST["password"];
     $pwd2 = $_POST["password2"];
     $fullname = $_POST["fullname"];

     if (isset($_POST["username"]) 
      && isset($_POST["password"]) 
      && isset($_POST["password2"]) 
      && isset($_POST["fullname"])) {


       $query = $this->db->select('*');
     $query = $this->db->from('users');
     $query = $this->db->where('user_username', $usr);
     $query = $this->db->get();

     if($query->num_rows() > 0)
     { 
      redirect('/register?user_err=1');
    }else{

      
     if ($pwd == $pwd2) {



       $sql = "INSERT INTO users (
       user_username,
       user_password,
       user_fullname
       ) VALUES (
       ".$this->db->escape($usr).",
       ".$this->db->escape($pwd).",
       ".$this->db->escape($fullname)."
     )";

     if($this->db->query($sql)){

      redirect('/register?success=1');
    }

  }else{
    redirect('/register?pass_err=1');
  }

}

}else{
  redirect('/register?notdata=1');
}
}

public function bookinglist(){
 if (!isset($_SESSION['sign_in'])) {
  $this->load->view('bookinglist');
}else{
  $data["booking"] = $this->db->query("
   SELECT * 
   FROM users
   LEFT JOIN booking ON booking.user_id = users.user_id
   INNER JOIN room ON booking.room_id = room.room_id
   WHERE users.user_id =".$this->db->escape($_SESSION['sign_id']));
  $data["user"] = $this->db->query("SELECT * FROM users WHERE user_id=".$this->db->escape($_SESSION['sign_id']));
  $this->load->view('bookinglist',$data);
}

}

public function booking(){
 $user_id = $_SESSION['sign_id'];
 $room_id = $_POST["idroom"];
 $booking_name = $_POST["name"];
 $booking_phone = $_POST["phone"];
 $booking_email = $_POST["email"];
 $booking_checkin = $_POST["checkin"];
 $booking_checkout = $_POST["checkout"];

 $reservation_id = "EZVAC".rand(1000, 99999);
 $sql = "INSERT INTO booking (
 user_id,
 room_id,
 booking_name,
 booking_phone,
 booking_email,
 booking_checkin,
 booking_checkout,
 reservation_id
 ) VALUES (
 ".$this->db->escape($user_id).",
 ".$this->db->escape($room_id).",
 ".$this->db->escape($booking_name).",
 ".$this->db->escape($booking_phone).",
 ".$this->db->escape($booking_email).",
 ".$this->db->escape($booking_checkin).",
 ".$this->db->escape($booking_checkout).",
 ".$this->db->escape($reservation_id)."
)";

if($this->db->query($sql)){

 redirect('/bookinglist');
}


}



}