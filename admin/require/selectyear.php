<div class="col-md-2">
    <div class="form-group">
        <select id="pyear" class="form-control selectpicker input-sm" data-style="btn-primary">
           <option selected disabled> Select Year</option>
            <option value="<?php 
                           if(isset($_GET['year'])){
                               $value=$_GET['year']; 
                               echo $value;
                           }
                           else{
                               echo date('Y');
                           }
                           ?>">
                <?php 
                if(isset($_GET['year'])){
                    $value=$_GET['year']; 
                    echo $value;
                }
                else{
                    echo date('Y');
                }
                ?></option>
            <?php
            for($y=2017; $y<=2020; $y++){
            ?>
            <option value="<?php echo $y ?>"><?php echo $y; ?></option>
            <?php
            }
            ?>
        </select>

    </div>
</div>


