<h2 align="left"><span><?php if(isset($college_data[0]['id'])) echo 'Edit'; else echo 'Add'; ?> Semester</span></h2>
<pre><?php // print_r($college_data); ?></pre>
<div class="user_instructions">
    <p style="width:200px; float:left;">Please enter your details below.</p>
    <p style="width:200px; float:right;font-weight: bold;"><i><b>*</b> required fields</i></p>
    <div class="clr"></div>
</div>
<form id="appl_form" action="/admin/save_semester">
    <input id="" name="rel" class="text" type="hidden" value="branch_management"/>
    <input id="" name="id" class="text" type="hidden" value="<?php if(isset($college_data[0]['id'])) echo $college_data[0]['id']; ?>"/>
    <ol>
        <?php if(isset($college_data[0]['id'])){
            $s_data=$college_data[0];
        } ?>
        <li>
            <label for="college_id">College:* </label>
            <select id="college_id" name="college_id" class="text">
                <option value="">Select</option>
                <?php if(isset($s_data['college_id'])) $college_id_select=$s_data['college_id']; else $college_id_select=0; echo load_select('colleges',$college_id_select); ?>
            </select>
        </li>
        <li>
            <label for="course_id">Course:* </label>
            <select id="course_id" name="course_id" class="text">
                <option value="">Select</option>
                <?php if(isset($s_data['course_id'])) $course_id_select=$s_data['course_id']; else $course_id_select=0; echo load_select('courses',$course_id_select,array('status'=>'1','college_id'=>$college_id_select)); ?>
            </select>
        </li>
        <li>
            <label for="branch_id">Branch:* </label>
            <select id="branch_id" name="branch_id" class="text required">
                <option value="">Select</option>
                <?php if(isset($s_data['branch_id'])) $branch_id_select=$s_data['branch_id']; else $branch_id_select=0; echo load_select('branches',$branch_id_select,array('status'=>'1','course_id'=>$course_id_select)); ?>
            </select>
        </li>
        <?php if(isset($college_data[0]['id']) && !empty($college_data[0]['id'])){ // This is a Update Process ?>
        <li>
            <label for="semester_names">Semester Name:* </label>
            <input id="name" name="semester_names[]" class="text required" title="Please enter a semester name" value="<?php if(isset($college_data[0]['name'])) echo $college_data[0]['name']; ?>">
        </li>
        <?php }else{ // This is a Adding Process  
            for($i=1;$i<=10;$i++){
            ?>
            <li>
                <label for="semester_names">Semester Name <?php echo $i;  ?>:* </label>
                <input id="semester_names" name="semester_names[]" class="text required" title="Please enter a semester name" value="">
            </li>
        <?php
            }
        }
        ?>
        <li>
            <label for="year">Year:* </label>
            <select id="year" name="year" class="text required" title="Please select the Year of Semester">
                <option value="">Select</option>
                <?php
                    if(isset($s_data['year'])) $year_select=$s_data['year']; else $year_select=0;
                    for($i=1;$i<=5; $i++){
                ?>
                <option value="<?php echo $i;  ?>" <?php if($year_select==$i){ echo 'selected="selected"'; }  ?>><?php echo $i;  ?></option>
                <?php }  ?>
            </select>
        </li>
        <li>
            <label for="status">Status:* </label>
            <select id="status" name="status" class="text">
                <option value="1" <?php if(isset($college_data[0]['status']) && $college_data[0]['status']=='1') echo ' selected="selected" ' ?>>Active</option>
                <option value="0" <?php if(isset($college_data[0]['status']) && $college_data[0]['status']=='0') echo ' selected="selected" ' ?>>InActive</option>
            </select>
        </li>
        <li>
            <input type="button" name="imageField" id="imageField" class="send button j_gen_form_submit" value="Save Semester" />
            <div class="clr"></div>
        </li>
    </ol>
</form>