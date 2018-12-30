<div class="modal fade adddispatchment" id="adddispatchment" tabindex="-1" role="dialog" aria-labelledby="largeModalHead" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <center>
                    <div id="modallabel" class="alert alert-danger" style="display:none;">
                        <center><span id="checkfield"></span></center>
                    </div>
                </center>
                <h4 class="modal-title">New Dispatchment</h4>
            </div>
            <div class="modal-body">
                <form id="dispatchform">
                    <div class="row">
                        <div class="col-md-6">
                            <input type="hidden" id="lat" name="lat"/>
                            <input type="hidden" id="long" name="long"/>
                            <div class="form-group">
                                <label >Service Number</label>
                                <input type="text" class="form-control input-sm" id="service_no" name="service_no" placeholder="Enter Service Number" required/>
                            </div>
                            <!--
<div class="form-group ">
<label >Date and Time of Call</label>
<div class="input-group date" id="datetimepicker1">
<input type="text" id="date_time_call" name="date_time_call" class="form-control" />
<span class="input-group-addon">
<span class="glyphicon glyphicon-calendar"></span>
</span>
</div>
</div>
-->
                            <div class="form-group">
                                <label >Ambulance</label>
                                <select  class="form-control selectpicker input-sm" data-live-search="true" data-style="btn-white" id="ambulance" name="ambulance">
                                    <option selected disabled value="#">Select</option>
                                    <?php
                                    require 'require/dbconnection.php';
                                    $query = $conn->query("SELECT * FROM `ambulance` where status = 'Unbooked'") or die(mysqli_error());

                                    while($fetch = $query->fetch_array()){
                                    ?>
                                    <option value="<?php echo $fetch['model'];?>"><?php echo $fetch['model'] . ' ' .$fetch['plate_no']?></option>
                                    <?php
                                    }
                                    ?> 
                                </select>
                            </div>
                            <div class="form-group">
                                <label >Dispatched for</label>
                                <select class="form-control selectpicker input-sm" data-live-search="true" data-style="btn-white" id="dispatched_for" name="dispatched_for">
                                    <optgroup label="Cardiovascular">
                                        <option value="" selected disabled>Select Option</option>
                                        <option value="Stroke/CVA">Stroke/CVA</option>
                                        <option value="Cardiac Related">Cardiac Related</option>
                                        <option value="Hypertension">Hypertension</option>
                                    </optgroup>
                                    <optgroup label="Respiratory">
                                        <option value="Airway Obstruction">Airway Obstruction</option>
                                        <option value="Respiratory Distress">Respiratory Distress</option>
                                        <option value="Respiratory Arrest">Respiratory Arrest</option>
                                    </optgroup>
                                    <optgroup label="Trauma">
                                        <option value="Major Trauma">Major Trauma</option>
                                        <option value="Trauma Penetrating">Trauma Penetrating</option>
                                        <option value="Bleeding/Hemorrhage">Bleeding/Hemorrhage</option>
                                        <option value="Amputation">Amputation</option>
                                        <option value="Head Injury">Head Injury</option>
                                        <option value="Fracture/Dislocation">Fracture/Dislocation</option>
                                        <option value="Spinal Injury">Spinal Injury</option>
                                        <option value="Soft Tissue Injury">Soft Tissue Injury</option>
                                    </optgroup>
                                    <optgroup label="Neurological">
                                        <option value="Seizure">Seizure</option>
                                        <option value="Shock">Shock</option>
                                        <option value="Substance Abuse">Substance Abuse</option>
                                        <option value="Unconscious/Unresponsive">Unconscious/Unresponsive</option>
                                        <option value="Behavioral Changes">Behavioral Changes</option>
                                        <option value="Obvious Death">Obvious Death</option>
                                        <option value="Suicide/Attempted Suicide">Suicide/Attempted Suicide</option>
                                        <option value="Neurological Distress">Neurological Distress</option>
                                    </optgroup>
                                    <optgroup label="Environmental">
                                        <option value="Environmental (Heat/Cold)">Environmental (Heat/Cold)</option>
                                        <option value="Hazardous materials">Hazardous materials</option>
                                        <option value="Animal Bites/Sting">Animal Bites/Sting</option>
                                        <option value="Poisoning">Poisoning</option>
                                        <option value="Allergic Reaction">Allergic Reaction</option>
                                        <option value="Increased Body Temperature">Increased Body Temperature</option>
                                    </optgroup>
                                    <optgroup label="Others">
                                        <option value="G.I Distress">G.I Distress</option>
                                        <option value="Diabetic Related">Diabetic Related</option>
                                        <option value="General Illness/Body Weakness">General Illness/Body Weakness</option>
                                        <option value="OB/GYN">OB/GYN</option>
                                        <option value="Nausea/Vomiting">Nausea/Vomiting</option>
                                        <option value="Body Pains">Body Pains</option>
                                        <option value="Nephro/Uro problems">Nephro/Uro problems</option>
                                    </optgroup>
                                </select>
                            </div>
                            <div class="form-group">
                                <label >Care in Progress</label>
                                <select class="form-control selectpicker input-sm" data-style="btn-white" id="care_in_progress" name="care_in_progress">
                                    <option value="" selected disabled>Select Option</option>
                                    <option value="None">None</option>
                                    <option value="Citizen">Citizen</option>
                                    <option value="Medical Practicioner / First Aider">Medical Practicioner / First Aider</option>
                                    <option value="Other Rescue Unit">Other Rescue Unit</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label >MOI/NOI</label>
                                <input type="text" class="form-control input-sm" id="moi_noi" name="moi_noi" placeholder="Enter MOI/NOI" required/>
                            </div>
                            <div class="form-group">
                                <label >Number of patients on-scene</label>
                                <input type="number" class="form-control input-sm" id="patients_on_scene" name="patients_on_scene" placeholder="Enter Number of patients on-scene" required/>
                            </div>
                        </div>
                        <div class="col-md-6">

                            <div class="form-group">
                                <label>On Board : TL</label>
                                <input type="number" class="form-control input-sm" id="on_board_tl" name="on_board_tl" placeholder="Enter On Board : TL" required/>
                            </div>
                            <div class="form-group">
                                <label>EMS</label>
                                <input type="text" class="form-control input-sm" id="ems" name="ems" placeholder="Enter EMS" required/>
                            </div>
                            <div class="form-group">
                                <label >Driver</label>
                                <select  class="form-control selectpicker input-sm" data-live-search="true" data-style="btn-white" id="driver" name="driver">
                                    <option value="#">Select</option>
                                    <?php
                                    require 'require/dbconnection.php';
                                    $query = $conn->query("SELECT * FROM `driver` where status = 'Unbook'") or die(mysqli_error());

                                    while($fetch = $query->fetch_array()){
                                    ?>
                                    <option value="<?php echo $fetch['driver_name'];?>"><?php echo $fetch['driver_name']?></option>
                                    <?php
                                    }
                                    ?> 
                                </select>
                            </div>
                            <div class="form-group">
                                <label >Call Location</label>
                                <?php 
                                require 'require/dbconnection.php';
                                $query = $conn->query("SELECT * FROM `call_logs` order by call_id DESC limit 1") or die(mysqli_error());
                                $fetch = $query->fetch_array();
                                ?>
                                <input type="text" class="form-control input-sm" id="call_location" name="call_location" value="<?php echo $fetch['complete_address']?>" placeholder="Enter Call Location" />
                            </div>
                            <div class="form-group">
                                <label >Mass Casualty</label>
                                <select class="form-control selectpicker input-sm" data-style="btn-white" id="mass_casualty" name="mass_casualty">
                                    <option value="" selected disabled>Select Option</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </form>
                <!-- end panel -->
            </div>
            <div class="modal-footer">
                <button type = "button" id="addnew" class = "btn btn-sm btn-success">Save</button>
                <button type="button" class="btn btn-sm btn-white" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>