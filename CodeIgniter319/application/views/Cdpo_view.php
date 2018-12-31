<main class="app-content">
 <!-- Start:  this is for error -->
  <div class="row" style="display: none">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">&nbsp;</div>
        <div class="card-body">&nbsp;</div>
        <div class="card-footer">&nbsp;</div>
      </div>
    </div>
  </div>
   <!-- End:  this is for error -->
<div class="row">
    <div class="col-md-12">
        <form id="submit_seller" name="form" action="<?php echo base_url(); ?>index.php/Cdpo/save/" method="post" >
      <div class="card">
        <div class="card-header">
           <h6 class="txt-dark capitalize-font" align="center"><i class="zmdi zmdi-account mr-10"></i>Beneficiary Information</h6>
        </div>

        <div class="card-body">
         
            <div class="form-body">
           
            <hr class="light-grey-hr"/>
            <div class="row">
              <div class="col-md-4">
                <div class="form-group">
                <label class="control-label mb-10">AWC Name</label>
                <select class="form-control" name="awc_name">
                <option value="" selected disabled>Select</option>
                <option value="awc1">AWC 1</option>
                <option value="awc2">AWC 2</option>
                <option value="awc3">AWC 3</option>
                <option value="awc4">AWC 4</option>
                </select>
                <span class="help-block"> </span> </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                <label class="control-label mb-10">Village Name</label>
                <select class="form-control" name="village_name">
                <option value="" selected disabled>Select</option>
                <option value="village1">VILLAGE 1</option>
                <option value="village2">VILLAGE 2</option>
                <option value="village3">VILLAGE 3</option>
                <option value="village4">VILLAGE 4</option>
                </select>
                <span class="help-block"> </span> </div>
              </div>
              <div class="col-md-4">
                <div class="form-group ">
                <label class="control-label mb-10">Sector Name</label>
                <select class="form-control" name="sector_name">
                <option value="" selected disabled>Select</option>
                <option value="sector1">SECTOR 1</option>
                <option value="village2">SECTOR 2</option>
                <option value="village3">SECTOR 3</option>
                <option value="village4">SECTOR 4</option>
                </select>
                <span class="help-block"> </span> </div>
              </div>
              <div class="col-md-6">
                <div class="form-group ">
                <label class="control-label mb-10">Project</label>
                <select class="form-control" name="project_name">
                <option value="" selected disabled>Select</option>
                <option value="sector1">PROJECT 1</option>
                <option value="village2">PROJECT 2</option>
                <option value="village3">PROJECT 3</option>
                <option value="village4">PROJECT 4</option>
                </select>
                <span class="help-block"> </span> </div>
              </div>
              <div class="col-md-6">
                <div class="form-group ">
                <label class="control-label mb-10">District</label>
                <select class="form-control" name="district_name">
                <option value="" selected disabled>Select</option>
                <option value="sector1">DISTRICT 1</option>
                <option value="village2">DISTRICT 2</option>
                <option value="village3">DISTRICT 3</option>
                <option value="village4">DISTRICT 4</option>
                </select>
                <span class="help-block"> </span> </div>
              </div>
            </div>
            </br>
            <hr>
            <div class="row">
              <div class="col-md-4">
                <div class="form-group ">
                <label class="control-label mb-10">Beneficiary Name</label>
                <input type="text" name="beneficiary_name" class="form-control" placeholder="Beneficiary Name">
                <span class="help-block"> </span> </div>
              </div>
              <div class="col-md-4">
                <div class="form-group ">
                <label class="control-label mb-10">Wife / Daughter of</label>
                <input type="text" name="wife_daughter_of" class="form-control" placeholder="Wife / Daughter of">
                <span class="help-block"> </span> </div>
              </div>
              <div class="col-md-4">
                <div class="form-group ">
                <label class="control-label mb-10">Address</label>
                <input type="text"  name="address" class="form-control" placeholder="Address">
                <span class="help-block"> </span> </div>
              </div>
              <div class="col-md-6">
                <div class="form-group ">
                <label class="control-label mb-10">Mobile No</label>
                <input type="text"  name="mobile_no" class="form-control" placeholder="Mobile No">
                <span class="help-block"> </span> </div>
              </div>
              <div class="col-md-6">
                <div class="form-group ">
                <label class="control-label mb-10">Email ID</label>
                <input type="text"  name="email_id" class="form-control" placeholder="Email ID"> 
                <span class="help-block"> </span> </div>
              </div>
            </div>
            </br>
            <hr>
            <div class="row">
            <div class="col-md-3">
            <div class="form-group ">
            <label class="control-label mb-10">Caste</label>
            <select class="form-control" name="caste">
            <option value="" selected disabled>Select</option>
            <option value="sector1">ST</option>
            <option value="village2">SC</option>
            <option value="village3">OBC</option>
            <option value="village4">GENERAL</option>
            </select>
            <span class="help-block"> </span> </div>
            </div>
            <div class="col-md-3">
            <div class="form-group ">
            <label class="control-label mb-10">PVTG</label>
            <select class="form-control" name="pvtg">
            <option value="" selected disabled>Select</option>
            <option value="sector1">YES</option>
            <option value="village2">NO</option>
            </select>
            <span class="help-block"> </span> </div>
            </div>
            <div class="col-md-3">
            <div class="form-group ">
            <label class="control-label mb-10">Community</label>
            <select class="form-control" name="community">
            <option value="" selected disabled>Select</option>
            <option value="sector1">HINDU</option>
            <option value="village2">MUSLIM</option>
            <option value="sector1">CHRISTIAN</option>
            <option value="village2">SIKHISM</option>
            <option value="sector1">OTHERS</option>
            </select>
            <span class="help-block"> </span> </div>
            </div>
            <div class="col-md-3">
            <div class="form-group ">
            <label class="control-label mb-10">Person with Disability</label>
            <select class="form-control" name="person_disability">
            <option value="" selected disabled>Select</option>
            <option value="sector1">YES</option>
            <option value="village2">NO</option>
            </select>
            <span class="help-block"> </span> </div>
            </div>
            </div>
            <hr>
            <div class="row">
            <div class="col-md-3">
            <div class="form-group ">
            <label class="control-label mb-10">Beneficiary D.O.B</label>
            <input type="date"  name="age" class="form-control" placeholder="Age">
            <span class="help-block"> </span> </div>
            </div>
            <div class="col-md-3">
            <div class="form-group ">
            <label class="control-label mb-10">Age Must be 19 or Above</label>
            <input type="text"  name="age" class="form-control" placeholder="Age">
            <span class="help-block"> </span> </div>
            </div>
            <div class="col-md-3">
            <div class="form-group ">
            <label class="control-label mb-10">No of live Births</label>
            <input type="text"  name="no_of_live_birth" class="form-control" placeholder="No of live Births">
            <span class="help-block"> </span> </div>
            </div>
            <div class="col-md-3">
            <div class="form-group ">
            <label class="control-label mb-10">Date of registration at AWC </label>
            <input type="date"  name="date_regd" class="form-control" placeholder="AADHAAR Card No">
            <span class="help-block"> </span> </div>
            </div>
            </div>
            <hr>
            <div class="row">
            <div class="col-md-4">
            <div class="form-group ">
            <label class="control-label mb-10">LMP (Date)</label>
            <input type="date"  name="lmp_date" class="form-control" placeholder="Confirm AADHAAR Card No">
            <span class="help-block"> </span> </div>
            </div>
            <div class="col-md-4">
            <div class="form-group ">
            <label class="control-label mb-10">EDD (Date)</label>
            <input type="date"  name="edd_date" class="form-control" placeholder="Confirm AADHAAR Card No">
            <span class="help-block"> </span> </div>
            </div>
            <div class="col-md-4">
            <div class="form-group ">
            <label class="control-label mb-10">Scheme Regd. Date</label>
            <input type="date"  name="scheme_regd_date" class="form-control" placeholder="Bank Name">
            <span class="help-block"> </span> </div>
            </div>
            <div class="col-md-6">
            <div class="form-group ">
            <label class="control-label mb-10">Signature / Thumb of Beneficiary</label>
            <input type="file"  name="signature_thumb" class="form-control" placeholder="Branch Name">
            <span class="help-block"> </span> </div>
            </div>
            <div class="col-md-6">
            <div class="form-group ">
            <label class="control-label mb-10">Husband /Father / Gaurdian Signature</label>
            <input type="file"  name="husband_father" class="form-control" placeholder="Bank Account No">
            <span class="help-block"> </span> </div>
            </div>
            </div>
            <hr>
            <div class="row">
            <div class="col-md-3">
            <div class="form-group ">
            <label class="control-label mb-10">Bank Name</label>
            <input type="text"  name="bank_name"  class="form-control" placeholder="Confirm Account No">
            <span class="help-block"> </span> </div>
            </div>
            <div class="col-md-3">
            <div class="form-group ">
            <label class="control-label mb-10">Branch Name</label>
            <input type="text"  name="branch_name"  class="form-control" placeholder="IFCE Code">
            <span class="help-block"> </span> </div>
            </div>
            <div class="col-md-3">
            <div class="form-group ">
            <label class="control-label mb-10">IFSC Code</label>
            <input type="text"  name="ifsc_code"   class="form-control" placeholder="Enter your Address">
            <span class="help-block"> </span> </div>
            </div>
            <div class="col-md-3">
            <div class="form-group ">
            <label class="control-label mb-10">Account No</label>
            <input type="text"  name="account_no"   class="form-control" placeholder="Enter your Address">
            <span class="help-block"> </span> </div>
            </div>
            </div>
            <hr>
            <div class="row">
            <div class="col-md-4">
            <div class="form-group ">
            <label class="control-label mb-10">MCT / RCH No.</label>
            <input type="text"  name="mct_rch_no"  class="form-control" placeholder="IFCE Code">
            <span class="help-block"> </span> </div>
            </div>
            <div class="col-md-4">
            <div class="form-group ">
            <label class="control-label mb-10">Photocopy of MCT / RCH No First page</label>
            <input type="file"  name="photo_mct_rch"  class="form-control" placeholder="IFCE Code">
            <span class="help-block"> </span> </div>
            </div>
            <div class="col-md-4">
            <div class="form-group ">
            <label class="control-label mb-10">Aadhaar / UID No.</label>
            <input type="text"  name="aadhar_no"  class="form-control" placeholder="IFCE Code">
            <span class="help-block"> </span> </div>
            </div>
            <div class="col-md-6">
            <div class="form-group ">
            <label class="control-label mb-10">Photocopy of Aadhaar / UID No.</label>
            <input type="file"  name="photo_aadhar"  class="form-control" placeholder="IFCE Code">
            <span class="help-block"> </span> </div>
            </div>
            <div class="col-md-6">
            <div class="form-group ">
            <label class="control-label mb-10">Upload Beneficiary Photo</label>
            <input type="file"  name="beneficiary_photo"  class="form-control" placeholder="IFCE Code">
            <span class="help-block"> </span> </div>
            </div>
            </div>
            </div>
           
         
        </div>

        <div class="card-footer"> <div class="form-actions mt-10" align="center">
            <input type="submit" name="save_dpo" class="btn btn-success  mr-10" value="Save">
            <button type="reset" value="Reset" class="btn btn-default">Reset</button>
            </div>
        </div>
      </div>
      </form>
    </div>
  </div>
 
</main>                        