<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Managment extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
            $this->load->library('session');  // เรียกใช้งาน session
        }  

        public function login(){
        	if (!isset($_SESSION['managment_signin'])) {
        		$this->load->view('managment/login');
        	}else{
        		redirect('/managment/dashboard');
        	}
        }

        public function dashboard()
        {
        	if (isset($_SESSION['managment_signin'])) {
        		$this->load->view('managment/dashboard');
        	}else{
        		redirect('/managment/login');
        	}
        }
        public function checklogin()
        {

        	$usr = $_POST["username"];
        	$pwd = $_POST["password"];


        	$query = $this->db->select('*');
        	$query = $this->db->from('managment_account');
        	$query = $this->db->where('username', $usr);
        	$query = $this->db->where('password', $pwd);
        	$query = $this->db->get();

        	if($query->num_rows() > 0)
        	{ 
        		foreach ($query->result_array() as $row){
        			
        			$_SESSION['managment_signin'] = "loged";
        			$_SESSION['managment_id'] = $row['managment_account_id'];

        		}
        		redirect('/managment/dashboard');
        	}
        	else
        	{
        		redirect('/managment/login');
        	}
        }

        public function logout(){
        	session_start();
        	session_destroy();
        	redirect('/managment/login');
        }

        public function place()
        {
        	if (isset($_SESSION['managment_signin'])) {
        		$data["place"] = $this->db->query("SELECT * FROM place");
        		$this->load->view('managment/place',$data);
        	}else{
        		redirect('/managment/login');
        	}

        }
        public function hostel()
        {
        	if (isset($_SESSION['managment_signin'])) {		
        		$data["place"] = $this->db->query("SELECT * FROM place");
        		$data["hostel"] = $this->db->query("
        			SELECT *
        			FROM hostel
        			INNER JOIN place ON place.place_id = hostel.place_id");
        		$this->load->view('managment/hostel',$data);
        	}else{
        		redirect('/managment/login');
        	}		
        }
        public function hostelphoto($id){
        	if (isset($_SESSION['managment_signin'])) {				
        		$data["hostelphoto"] = $this->db->query("
        			SELECT *
        			FROM hostel_photo
        			WHERE hostel_id = ".$id);
        		$data["hostel"] = $id;
        		$this->load->view('managment/hostelphoto',$data);
        	}else{
        		redirect('/managment/login');
        	}			
        }
        public function room()
        {
        	if (isset($_SESSION['managment_signin'])) {			
        		$data["hostel"] = $this->db->query("SELECT * FROM hostel");
        		$data["room"] = $this->db->query("
        			SELECT *
        			FROM room
        			LEFT JOIN hostel ON hostel.hostel_id = room.hostel_id ");
        		$this->load->view('managment/room',$data);
        	}else{
        		redirect('/managment/login');
        	}			
        }
	// public function roomphoto($id){
	// 	$data["roomphoto"] = $this->db->query("
	// 		SELECT *
	// 		FROM room_photo
	// 		WHERE room_id = ".$id);
	// 	$data["room"] = $id;
	// 	$this->load->view('managment/roomphoto',$data);
	// }

        public function user(){
        	$data["users"] = $this->db->query("SELECT * FROM users");
        	$this->load->view('managment/user',$data);
        }
        public function booking(){
        	$data["booking"] = $this->db->query("
        		SELECT *
        		FROM booking
        		LEFT JOIN users ON users.user_id = booking.user_id
        		INNER JOIN room ON room.room_id = booking.room_id");
        	$this->load->view('managment/booking',$data);
        }
        public function insertplace()
        {
        	$place_name = $_POST["insertname"];
        	if(move_uploaded_file($_FILES["filUpload"]["tmp_name"],"assets/images/place/".$_FILES["filUpload"]["name"]))
        	{
        		$sql = "INSERT INTO place (
        		place_name,
        		place_img
        		) VALUES (
        		".$this->db->escape($place_name).",
        		".$this->db->escape("assets/images/place/".$_FILES["filUpload"]["name"])."
        	)";

        	if($this->db->query($sql)){
        		redirect('managment/place');
        	} 

        }

    }

    public function editplace(){
    	$place_id = $_POST["editid"];
    	$place_name = $_POST["editname"];

    	if(move_uploaded_file($_FILES["filUpload"]["tmp_name"],"assets/images/place/".$_FILES["filUpload"]["name"]))
    	{

    		$sql = "UPDATE place SET
    		place_name = ".$this->db->escape($place_name).",
    		place_img = ".$this->db->escape("assets/images/place/".$_FILES["filUpload"]["name"])."
    		WHERE place_id=".$this->db->escape($place_id);
    		if($this->db->query($sql)){
    			redirect('managment/place');
    		}

    	}else{

    		$sql = "UPDATE place SET
    		place_name = ".$this->db->escape($place_name)."
    		WHERE place_id=".$this->db->escape($place_id);
    		if($this->db->query($sql)){
    			redirect('managment/place');
    		}

    	}

    }

    public function deleteplace()
    {
    	$place_id = $_POST["delplace"];
    	$sql = "DELETE FROM place WHERE place_id=".$this->db->escape($place_id)."";
    	if($this->db->query($sql)){
    		redirect('managment/place');
    	}
    }

	// Hostel Managment

    public function inserthostel(){


    	$place_id = $_POST["place"];
    	$hostel_name = $_POST["insertname"];
    	$hostel_phone = $_POST["insertphone"];
    	$hostel_level = $_POST["insertlevel"];
    	$hostel_price = $_POST["insertprice"];
    	$hostel_address = $_POST["insertaddress"];
    	$hostel_facilities = $_POST["insertfacilities"];

    	if(isset($_FILES["filUpload"]))
    	{

    		$sql = "INSERT INTO hostel (
    		place_id,
    		hostel_name,
    		hostel_phone,
    		hostel_level,
    		hostel_price,
    		hostel_address,
    		hostel_facilities
    		) VALUES (
    		".$this->db->escape($place_id).",
    		".$this->db->escape($hostel_name).",
    		".$this->db->escape($hostel_phone).",
    		".$this->db->escape($hostel_level).",
    		".$this->db->escape($hostel_price).",
    		".$this->db->escape($hostel_address).",
    		".$this->db->escape($hostel_facilities)."
    	)";

    	if($this->db->query($sql)){

    		$lastid = $this->db->insert_id();

    		foreach($_FILES['filUpload']['tmp_name'] as $key => $val)
    		{

    			$file_name = $_FILES['filUpload']['name'][$key];
    			$file_size =$_FILES['filUpload']['size'][$key];
    			$file_tmp =$_FILES['filUpload']['tmp_name'][$key];
    			$file_type=$_FILES['filUpload']['type'][$key];  
    			move_uploaded_file($file_tmp,"assets/images/hostel/".$file_name);

    			$sqlphoto = "INSERT INTO hostel_photo (
    			hostel_id,
    			hostel_photo_src
    			) VALUES (
    			".$this->db->escape($lastid).",
    			".$this->db->escape("assets/images/hostel/".$file_name).")";

    			if($this->db->query($sqlphoto)){

    			}


    		}

    		redirect('managment/hostel');
    	} 

    }else{
    	echo "Not found file";
    }

}


public function edithostel(){

	$place_id = $_POST["place"];
	$hostel_id = $_POST["editid"];
	$hostel_name = $_POST["editname"];
	$hostel_phone = $_POST["editphone"];
	$hostel_level = $_POST["editlevel"];
	$hostel_price = $_POST["editprice"];
	$hostel_address = $_POST["editaddress"];
	$hostel_facilities = $_POST["editfacilities"];

	$sql = "UPDATE hostel SET
	place_id = ".$this->db->escape($place_id).",
	hostel_name = ".$this->db->escape($hostel_name).",
	hostel_phone = ".$this->db->escape($hostel_phone).",
	hostel_level = ".$this->db->escape($hostel_level).",
	hostel_price = ".$this->db->escape($hostel_price).",
	hostel_address = ".$this->db->escape($hostel_address).",
	hostel_facilities = ".$this->db->escape($hostel_facilities)."
	WHERE hostel_id=".$this->db->escape($hostel_id);
	if($this->db->query($sql)){
		redirect('managment/hostel');
	}



}

public function deletehostel(){

	$hostel_id = $_POST["delhostel"];
	$sql = "DELETE FROM hostel WHERE hostel_id=".$this->db->escape($hostel_id)."";
	if($this->db->query($sql)){
		redirect('managment/hostel');
	}

}

public function inserthostelphoto(){

	$hotel_id = $_POST["hotelid"];

	if(move_uploaded_file($_FILES["filUpload"]["tmp_name"],"assets/images/hostel/".$_FILES["filUpload"]["name"]))
	{

		$sql = "INSERT INTO hostel_photo (
		hostel_id,
		hostel_photo_src
		) VALUES (
		".$this->db->escape($hotel_id).",
		".$this->db->escape("assets/images/hostel/".$_FILES["filUpload"]["name"])."
	)";

	if($this->db->query($sql)){
		redirect('managment/hostel_photo/'.$hotel_id);
	} 

}else{
	redirect('managment/hostel_photo/'.$hotel_id);
}

}


public function deletehostelphoto(){
	$hotel_id = $_POST["hotelid"];
	$hostel_photo_id = $_POST["delphoto"];
	$sql = "DELETE FROM hostel_photo WHERE hostel_photo_id=".$this->db->escape($hostel_photo_id)."";
	if($this->db->query($sql)){
		redirect('managment/hostel_photo/'.$hotel_id);
	}
}


public function insertroom(){
	$hostel_id = $_POST["hostel"];
	$room_type = $_POST["inserttype"];
	$room_price = $_POST["insertprice"];
	$room_maxuser = $_POST["insertmaxuser"];
	$room_bed = $_POST["insertbed"];
	$room_access = $_POST["insertaccessories"];
	$room_toilet = $_POST["inserttoilet"];
	$room_other = $_POST["insertother"];



	if(move_uploaded_file($_FILES["filUpload"]["tmp_name"],"assets/images/room/".$_FILES["filUpload"]["name"]))
	{
		$sql = "INSERT INTO room (
		hostel_id,
		room_type_name,
		room_price,
		maximum_User,
		room_bed,
		room_accessories,
		room_toilet,
		room_other
		) VALUES (
		".$this->db->escape($hostel_id).",
		".$this->db->escape($room_type).",
		".$this->db->escape($room_price).",
		".$this->db->escape($room_maxuser).",
		".$this->db->escape($room_bed).",
		".$this->db->escape($room_access).",
		".$this->db->escape($room_toilet).",
		".$this->db->escape($room_other)."
	)";





	if($this->db->query($sql)){
		$lastid = $this->db->insert_id();

		$sql2 = "INSERT INTO room_photo (
		room_id,
		room_photo_src
		) VALUES (
		".$this->db->escape($lastid).",
		".$this->db->escape("assets/images/room/".$_FILES["filUpload"]["name"])."
	)";

	if($this->db->query($sql2)){

		redirect('managment/room');
	}
} 

}
}

public function editroom(){

	$room_id = $_POST["editid"];
	$hostel_id = $_POST["hostel"];
	$room_type = $_POST["edittype"];
	$room_price = $_POST["editprice"];
	$room_maxuser = $_POST["editmaxuser"];
	$room_bed = $_POST["editbed"];
	$room_access = $_POST["editaccessories"];
	$room_toilet = $_POST["edittoilet"];
	$room_other = $_POST["editother"];


	if(move_uploaded_file($_FILES["filUpload"]["tmp_name"],"assets/images/room/".$_FILES["filUpload"]["name"]))
	{




		$sql = "UPDATE room SET
		hostel_id = ".$this->db->escape($hostel_id).",
		room_type_name = ".$this->db->escape($room_type).",
		room_price = ".$this->db->escape($room_price).",
		maximum_User = ".$this->db->escape($room_maxuser).",
		room_bed = ".$this->db->escape($room_bed).",
		room_accessories = ".$this->db->escape($room_access).",
		room_toilet = ".$this->db->escape($room_toilet).",
		room_other = ".$this->db->escape($room_other)."
		WHERE room_id=".$this->db->escape($room_id);
		if($this->db->query($sql)){

			$sql2 = "UPDATE room_photo SET
			room_photo_src = ".$this->db->escape("assets/images/room/".$_FILES["filUpload"]["name"])."
			WHERE room_id=".$this->db->escape($room_id);
			if($this->db->query($sql2)){
				redirect('managment/room');
			}


		}



	}else{


		$sql = "UPDATE room SET
		hostel_id = ".$this->db->escape($hostel_id).",
		room_type_name = ".$this->db->escape($room_type).",
		room_price = ".$this->db->escape($room_price).",
		maximum_User = ".$this->db->escape($room_maxuser).",
		room_bed = ".$this->db->escape($room_bed).",
		room_accessories = ".$this->db->escape($room_access).",
		room_toilet = ".$this->db->escape($room_toilet).",
		room_other = ".$this->db->escape($room_other)."
		WHERE room_id=".$this->db->escape($room_id);
		if($this->db->query($sql)){
			redirect('managment/room');
		}


	}


}

public function deleteroom(){
	$room_id = $_POST["delroom"];
	$sql = "DELETE FROM room WHERE room_id=".$this->db->escape($room_id)."";
	if($this->db->query($sql)){
		redirect('managment/room');
	}
}


// public function insertroomphoto(){
// 	$room_id = $_POST["roomid"];

// 	if(move_uploaded_file($_FILES["filUpload"]["tmp_name"],"assets/images/room/".$_FILES["filUpload"]["name"]))
// 	{

// 		$sql = "INSERT INTO room_photo (
// 		room_id,
// 		room_photo_src
// 		) VALUES (
// 		".$this->db->escape($room_id).",
// 		".$this->db->escape("assets/images/room/".$_FILES["filUpload"]["name"])."
// 	)";

// 	if($this->db->query($sql)){
// 		redirect('managment/room_photo/'.$room_id);
// 	} 

// }else{
// 	redirect('managment/room_photo/'.$room_id);
// }
// }

// public function deleteroomphoto(){
// 	$room_id = $_POST["roomid"];
// 	$room_photo_id = $_POST["delphoto"];
// 	$sql = "DELETE FROM room_photo WHERE room_photo_id=".$this->db->escape($room_photo_id)."";
// 	if($this->db->query($sql)){
// 		redirect('managment/room_photo/'.$room_id);
// 	}
// }

public function insertuser(){
	$username = $_POST["username"];
	$password = $_POST["password"];
	$fullname = $_POST["fullname"];

	$sql = "INSERT INTO users (
	user_username,
	user_password,
	user_fullname
	) VALUES (
	".$this->db->escape($username).",
	".$this->db->escape($password).",
	".$this->db->escape($fullname)."
)";

if($this->db->query($sql)){

	redirect('managment/user');
}
}

public function edituser(){

	$user_id = $_POST["editid"];
	$username = $_POST["username"];
	$password = $_POST["password"];
	$fullname = $_POST["fullname"];

	$sql = "UPDATE users SET
	user_username = ".$this->db->escape($username).",
	user_password = ".$this->db->escape($password).",
	user_fullname = ".$this->db->escape($fullname)."
	WHERE user_id=".$this->db->escape($user_id);
	if($this->db->query($sql)){
		redirect('managment/user');
	}

}

public function deleteuser(){
	$user_id = $_POST["deluser"];
	$sql = "DELETE FROM users WHERE user_id=".$this->db->escape($user_id)."";
	if($this->db->query($sql)){
		redirect('managment/user');
	}

}




}