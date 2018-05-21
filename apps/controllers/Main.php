<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	  public function __construct()
    {
            parent::__construct();
            $this->load->library('session');  // เรียกใช้งาน session
    }  
	
	public function index()
	{
		$data["place"] = $this->db->query("SELECT * FROM place");
		$this->load->view('main',$data);
	}

	public function requestform(){
		$this->load->view('requestform');
	}
	public function hostel($id = null){

		$data["hostel"] = $this->db->query("
			SELECT * 
			FROM hostel
			INNER JOIN place ON place.place_id = hostel.place_id
			WHERE hostel.place_id = ".$id);
		$data["img"] = $this->db->query("
			SELECT * 
			FROM hostel_photo
			WHERE hostel_id = ".$id."
			LIMIT 1");
		$this->load->view('hostel',$data);
	}
	public function room($id = null){
		
		$data["hostel"] = $this->db->query("
			SELECT *
			FROM hostel
			WHERE hostel.hostel_id = ".$id);
		$data["hostelimg"] = $this->db->query("
			SELECT * 
			FROM hostel_photo
			WHERE hostel_id = ".$id);
		$data["room"] = $this->db->query("
			SELECT * 
			FROM room
			INNER JOIN hostel ON hostel.hostel_id = room.hostel_id
			LEFT JOIN room_photo ON room_photo.room_id = room.room_id
			WHERE hostel.hostel_id = ".$id);
		$this->load->view('room',$data);
	}
}