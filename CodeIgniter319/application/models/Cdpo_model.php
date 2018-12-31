<?php
class Cdpo_model extends CI_Model{
	public $id;
	public $awc_name;
	public $village_name;
	public $sector_name;
	public $project_name;
	public $district_name;
	public $beneficiary_name;
	public $wife_daughter_of;
	public $address;
	public $mobile_no;
	public $email_id;
	public $caste;
	public $pvtg;
	public $community;
	public $person_disability;
	public $date_of_birth;
	public $age;
	public $no_of_live_birth;
	public $date_regd;
	public $lmp_date;
	public $edd_date;
	public $scheme_regd_date;
	public $signature_thumb;
	public $husband_father_signature;
	public $bank_name;
	public $branch_name;
	public $ifsc_code;
	public $account_no;
	public $mct_rch_no;
	public $photo_mct_rch;
	public $aadhar_no;
	public $photo_aadhar;
	public $beneficiary_photo;
	public $status;
	public $created_at;
	public $updated_at;
	public $deleted_at;


	function __construct(){
		// Call the Model constructor
		parent::__construct();
	}

	function insert(){
		$date               = new DateTime('now', new DateTimeZone('Asia/Kolkata'));
		$date               = $date->format('Y-m-d H:i:s');
		$this->created_at  = $date;
		$this->updated_at = $date;
		$data               = $this->InsertDetails();
		$this->db->trans_start();
		$this->db->insert('Cdpo', $data);
		$this->id = $this->db->insert_id();
        $this->db->trans_complete(); 
    }
    function InsertDetails(){
	$this->awc_name = $this->input->post('awc_name');
	$this->village_name = $this->input->post('village_name');
	$this->sector_name = $this->input->post('sector_name');
	$this->project_name = $this->input->post('project_name');
	$this->district_name = $this->input->post('district_name');
	$this->beneficiary_name = $this->input->post('beneficiary_name');
	$this->wife_daughter_of = $this->input->post('wife_daughter_of');
	$this->address = $this->input->post('address');
	$this->mobile_no = $this->input->post('mobile_no');
	$this->email_id = $this->input->post('email_id');
	$this->caste = $this->input->post('caste');
	$this->pvtg = $this->input->post('pvtg');
	$this->community = $this->input->post('community');
	$this->person_disability = $this->input->post('person_disability');
	$this->date_of_birth = $this->input->post('date_of_birth');
	$this->age = $this->input->post('age');
	$this->no_of_live_birth = $this->input->post('no_of_live_birth');
	$this->date_regd = $this->input->post('date_regd');
	$this->lmp_date = $this->input->post('lmp_date');
	$this->edd_date = $this->input->post('edd_date');
	$this->scheme_regd_date = $this->input->post('scheme_regd_date');
	$this->signature_thumb = $this->input->post('signature_thumb');
	$this->husband_father_signature = $this->input->post('husband_father_signature');
	$this->bank_name = $this->input->post('bank_name');
	$this->branch_name = $this->input->post('branch_name');
	$this->ifsc_code = $this->input->post('ifsc_code');
	$this->account_no = $this->input->post('account_no');
	$this->mct_rch_no = $this->input->post('mct_rch_no');
	$this->photo_mct_rch = $this->input->post('photo_mct_rch');
	$this->aadhar_no = $this->input->post('aadhar_no');
	$this->photo_aadhar = $this->input->post('photo_aadhar');
	$this->beneficiary_photo = $this->input->post('beneficiary_photo');
	$this->status = $this->input->post('status');
	$this->created_at = $this->input->post('created_at');
	$this->updated_at = $this->input->post('updated_at');
	$this->deleted_at = $this->input->post('deleted_at');
		return array(
			"awc_name" => $this->awc_name,
			"village_name" => $this->village_name,
			"sector_name" => $this->sector_name,
			"project_name" => $this->project_name,
			"district_name" => $this->district_name,
			"beneficiary_name" => $this->beneficiary_name,
			"wife_daughter_of" => $this->wife_daughter_of,
			"address" => $this->address,
			"mobile_no" => $this->mobile_no,
			"email_id" => $this->email_id,
			"caste" => $this->caste,
			"pvtg" => $this->pvtg,
			"community" => $this->community,
			"person_disability" => $this->person_disability,
			"date_of_birth" => $this->date_of_birth,
			"age" => $this->age,
			"no_of_live_birth" => $this->no_of_live_birth,
			"date_regd" => $this->date_regd,
			"lmp_date" => $this->lmp_date,
			"edd_date" => $this->edd_date,
			"scheme_regd_date" => $this->scheme_regd_date,
			"signature_thumb" => $this->signature_thumb,
			"husband_father_signature" => $this->husband_father_signature,
			"bank_name" => $this->bank_name,
			"branch_name" => $this->branch_name,
			"ifsc_code" => $this->ifsc_code,
			"account_no" => $this->account_no,
			"mct_rch_no" => $this->mct_rch_no,
			"photo_mct_rch" => $this->photo_mct_rch,
			"aadhar_no" => $this->aadhar_no,
			"photo_aadhar" => $this->photo_aadhar,
			"beneficiary_photo" => $this->beneficiary_photo,
			"status" => $this->status
		);
    }
}

?>