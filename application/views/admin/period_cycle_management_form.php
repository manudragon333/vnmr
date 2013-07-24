<h2 align="left"><span><?php if(isset($college_data[0]['id'])) echo 'Edit'; else echo 'Add'; ?> Period Cycle</span></h2>
<pre><?php // print_r($college_data); ?></pre>
<div class="user_instructions">
    <p style="width:200px; float:left;">Please enter your details below.</p>
    <p style="width:200px; float:right;font-weight: bold;"><i><b>*</b> required fields</i></p>
    <div class="clr"></div>
</div>
<form id="appl_form" action="/admin/generate_period_cycle">
    <input id="" name="rel" class="text" type="hidden" value="general"/>
    <input id="" name="id" class="text" type="hidden" value="<?php if(isset($college_data[0]['id'])) echo $college_data[0]['id']; ?>"/>
    <ol>
        <?php if(isset($college_data[0]['id'])){
            $s_data=$college_data[0];
        } ?>
        <li>
            <label for="college_id">College:* </label>
            <select id="college_id" name="college_id" class="text required" title="Please select a College">
                <option value="">Select</option>
                <?php if(isset($s_data['college_id'])) $college_id_select=$s_data['college_id']; else $college_id_select=0; echo load_select('colleges',$college_id_select); ?>
            </select>
        </li>
        
        <li>
            <label for="name">Cycle Name:* </label>
            <input id="name" name="name" class="text required" title="Please enter a Cycle Name" value="<?php if(isset($college_data[0]['name'])) echo $college_data[0]['name']; ?>">
        </li>
        <li>
            <label for="starting_time">Staring time:* </label>
            <input id="starting_time" name="starting_time" class="text required applyTimePicker" title="Please enter the Starting Time" value="<?php if(isset($college_data[0]['starting_time'])) echo $college_data[0]['starting_time']; ?>"  <?php if(isset($college_data[0]['id'])) echo ' readonly="readonly" ';?> />
        </li>
        <li>
            <label for="no_of_periods">No of periods:* </label>
            <input id="no_of_periods" name="no_of_periods" class="text required" title="Please enter a No. of periods" value="<?php if(isset($college_data[0]['no_of_periods'])) echo $college_data[0]['no_of_periods']; ?>"  <?php if(isset($college_data[0]['id'])) echo ' readonly="readonly" ';?> />
        </li>
        <li>
            <label for="time_period">Time period:* </label>
            <input id="time_period" name="time_period" class="text required applyTimePicker" title="Please enter the Time Period" value="<?php if(isset($college_data[0]['time_period'])) echo $college_data[0]['time_period']; ?>"  <?php if(isset($college_data[0]['id'])) echo ' readonly="readonly" ';?> />
        </li>


        
        <li>
            <label for="status">Status:* </label>
            <select id="status" name="status" class="text">
                <option value="1" <?php if(isset($college_data[0]['status']) && $college_data[0]['status']=='1') echo ' selected="selected" ' ?>>Active</option>
                <option value="0" <?php if(isset($college_data[0]['status']) && $college_data[0]['status']=='0') echo ' selected="selected" ' ?>>InActive</option>
            </select>
        </li>
        <li>
            <input type="button" name="imageField" id="imageField" class="send button j_gen_form_submit" value="<?php if(isset($college_data[0]['id'])) echo 'Save'; else echo 'Generate'; ?> Period Cycle" />
            <div class="clr"></div>
        </li>
    </ol>
</form>

<script type="text/javascript" language="javascript">
    $(function(){
        $('.applyTimePicker').attr('readonly','readonly');
        <?php if(isset($college_data[0]['id'])){}else{ ?>
        $('.applyTimePicker').timepicker({
           showSecond: true,
           hourGrid: 4,
           minuteGrid: 10,
           timeFormat: 'hh:mm:ss'
        });
        <?php }  ?>
    });
</script>