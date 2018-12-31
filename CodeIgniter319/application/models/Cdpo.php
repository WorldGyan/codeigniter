<?php
class Cdpo_model extends CI_Model{
	`id` int(10) NOT NULL,
  `awc_name` varchar(30) NOT NULL,
  `village_name` varchar(30) NOT NULL,
  `sector_name` varchar(30) NOT NULL,
  `project_name` varchar(30) NOT NULL,
  `district_name` varchar(30) NOT NULL,
  `beneficiary_name` varchar(40) NOT NULL,
  `wife_daughter_of` varchar(40) NOT NULL,
  `address` varchar(255) NOT NULL,
  `mobile_no` varchar(30) NOT NULL,
  `email_id` varchar(40) NOT NULL,
  `caste` varchar(20) NOT NULL,
  `pvtg` varchar(20) NOT NULL,
  `community` varchar(20) NOT NULL,
  `person_disability` varchar(10) NOT NULL,
  `date_of_birth` date NOT NULL,
  `age` varchar(10) NOT NULL,
  `no_of_live_birth` varchar(10) NOT NULL,
  `date_regd` date NOT NULL,
  `lmp_date` date NOT NULL,
  `edd_date` date NOT NULL,
  `scheme_regd_date` date NOT NULL,
  `signature_thumb` varchar(255) NOT NULL,
  `husband_father_signature` varchar(255) NOT NULL,
  `bank_name` varchar(30) NOT NULL,
  `branch_name` varchar(30) NOT NULL,
  `ifsc_code` varchar(15) NOT NULL,
  `account_no` varchar(20) NOT NULL,
  `mct_rch_no` varchar(20) NOT NULL,
  `photo_mct_rch` varchar(255) NOT NULL,
  `aadhar_no` varchar(15) NOT NULL,
  `photo_aadhar` varchar(255) NOT NULL,
  `beneficiary_photo` varchar(255) NOT NULL,
  `status` int(4) NOT NULL DEFAULT '1' COMMENT '1 -> True 0 -> False',
  `creationDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_date` date NOT NULL

	function __construct(){
		// Call the Model constructor
		parent::__construct();
	}

	function Insert(){
		$date               = new DateTime('now', new DateTimeZone('Asia/Kolkata'));
		echo "hiii";
		// $date               = $date->format('Y-m-d H:i:s');
		// $this->createdDate  = $date;
		// $this->modifiedDate = $date;
		// $data               = $this->InsertDetails();
		// $this->db->trans_start();
		// $this->db->insert('Cdpo', $data);
		// $this->id = $this->db->insert_id();
  //       $this->db->trans_complete(); 
    }
    function InsertDetails(){
		$this->name    = $this->input->post('patient_name');
       
		
		return array(
			'CreatedDate' => $this->createdDate,
		
		);
    }