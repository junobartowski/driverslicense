<?php
/* @var $this yii\web\View */

$this->title = 'Online Registration';
?>
<script type="text/javascript" src="../web/js/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" src="../web/js/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
<div class="container">
    <div class="col-sm-12 col-sm-offset-2">
        <div class="col-sm-2"><img class="logo-size" src="../web/images/logos/seal_philippines.png" /></div>
        <div class="col-sm-4">
            <div class="text-center text-uppercase">
                <strong>
                    Republic of the Philippines <br/>
                    Department of Transportation and Communications <br/>
                    Land Transportation Office
                </strong>
            </div>
        </div>
        <div class="col-sm-2"><img class="logo-size" src="../web/images/logos/lto_logo.png" /></div>
    </div>
    <div class="content">
        <div class="col-lg-4">
            <label for="txt_family_name">Family Name</label>
            <input type="text" id="txt_family_name" class="form-control" placeholder="Family Name" />
        </div>
        <div class="col-lg-4">
            <label for="txt_first_name">First Name</label>
            <input type="text" id="txt_first_name" class="form-control" placeholder="First Name" />
        </div>
        <div class="col-lg-4">
            <label for="txt_middle_name">Middle Name</label>
            <input type="text" id="txt_middle_name" class="form-control" placeholder="Middle Name" />
        </div>
        <div class="col-lg-12">
            <label for="txt_present_address">Present Address</label>
            <input type="text" id="txt_present_address" class="form-control" placeholder="Present Address" />
        </div>
        <div class="col-lg-3">
            <label for="opt_nationality">Nationality</label>
            <select class="form-control">
                <option>--- Nationality ---</option>
            </select>
        </div>
        <div class="col-lg-2">
            <label for="opt_gender">Gender</label>
            <select class="form-control">
                <option value="">--- Gender ---</option>
                <option value="1">Male</option>
                <option value="2">Female</option>
            </select>
        </div>
        <div class="col-lg-3">
            <label for="opt_gender">Birthdate</label>
            <div class="input-group date" data-provide="datepicker" id="birthdate_picker">
                <input type="text" class="form-control">
                <div class="input-group-addon">
                    <span class="glyphicon glyphicon-th"></span>
                </div>
            </div>
        </div>
        <div class="col-lg-2">
            <label for="txt_height">Height (cm)</label>
            <input type="text" id="txt_height" class="form-control" placeholder="Height (cm)" />
        </div>
        <div class="col-lg-2">
            <label for="txt_weight">Weight (kg)</label>
            <input type="text" id="txt_weight" class="form-control" placeholder="Weight (kg)" />
        </div>
        <div class="text-center text-uppercase">
            <span class="badge">
                <strong>Type of Application (TOA)</strong>
            </span>
        </div>
        <div class="col-lg-4">
            <label for="opt_type_of_application">Type of Application</label>
            <select class="form-control">
                <option value="">--- Type of Application ---</option>
                <option value="1">New</option>
                <option value="2">Deliquent / Dormant License</option>
                <option value="2">Change Classification</option>
                <option value="2">Foreign License Conversion</option>
                <option value="2">Renewal</option>
                <option value="2">Additional Restriction Code</option>
                <option value="2">Duplicate</option>
                <option value="2">Revision of Records</option>
                <option value="2">Change Civil Status</option>
                <option value="2">Change Name</option>
                <option value="2">Change Date of Birth</option>
                <option value="2">Others</option>
            </select>
        </div>
    </div>
</div>