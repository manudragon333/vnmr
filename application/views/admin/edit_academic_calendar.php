
<h2 align="left"><span><?php if(isset($form_data[0]->id)) echo 'Edit'; else echo 'Add'; ?> Academic Calendar</span></h2>
<pre><?php // print_r($form_data); ?></pre>
<div class="user_instructions">
    <p style="width:200px; float:left;">Please enter your details below.</p>
    <p style="width:200px; float:right;font-weight: bold;"><i><b>*</b> required fields</i></p>
    <div class="clr"></div>
</div>
<form id="edit_academic_calendar_form" action="" method="POST">
    <input id="" name="id" class="text" type="hidden" value="<?php if(isset($form_data[0]->id)) echo $form_data[0]->id; ?>"/>
    <ol>
        <li>
            <label for="name">Calendar For Year:* </label>
            <select id="name" name="name" class="text required" title="Please select a Calender Year">
                <option value="">Select</option>
                <?php 
                    $html = '';
                    for ($i = date('Y') - 4; $i <= date('Y') + 4; $i++) {
                        $selected = '';
                        if (empty($form_data[0]->name) && date('Y') == $i) {
                            $selected.=" selected='selected' ";
                        }else if(!empty($form_data[0]->name) && $form_data[0]->name==$i.'-'.($i+1)){
                            $selected.=" selected='selected' ";
                        }
                        $html.="<option value='" . $i.'-'.($i+1) . "' " . $selected . ">" . $i.'-'.($i+1) . "</option>";
                    }
                    echo $html;
                ?>
            </select>
        </li>
        <li>
            <label for="college_id">College:* </label>
            <select id="college_id" name="college_id" class="text required" title="Please select a College">
                <option value="">Select</option>
                <?php if(isset($form_data[0]->college_id)) $college_id_select=$form_data[0]->college_id; else $college_id_select=0; echo load_select('colleges',$college_id_select); ?>
            </select>
        </li>
        <li>
            <label for="course_id">Course:* </label>
            <select id="course_id" name="course_id" class="text required" title="Please select a Course">
                <option value="">Select</option>
                <?php if(isset($form_data[0]->course_id)) $course_id_select=$form_data[0]->course_id; else $course_id_select=0; echo load_select('courses',$course_id_select); ?>
            </select>
        </li>
        <li>
            <label for="sem_ids">Year/Semester:* </label>
            <select id="sem_ids" name="sem_id[]" class="text required" multiple="multple" title="Please select a Year/Sem" style="height: 105px;">
                <option value="">Select</option>
                <?php 
                    if(!empty($calendar_sems)){
                        foreach($calendar_sems as $k=>$v){
                            echo "<option value='$v->id' selected='selected' >$v->branch_name - $v->sem_name</option>";
                        }
                    }
                ?>
            </select>
        </li>
        <li>
            <label for="status">Status:* </label>
            <select id="status" name="status" class="text required" title="Please select a Status">
                <option value="1" <?php if(isset($form_data[0]->status) && $form_data[0]->status=='1') echo ' selected="selected" ' ?>>Active</option>
                <option value="0" <?php if(isset($form_data[0]->status) && $form_data[0]->status=='0') echo ' selected="selected" ' ?>>InActive</option>
            </select>
        </li>
        <li>
            <input type="submit" name="imageField" id="imageField" class="send button " value=" Save Academic Calendar " />
            <input type="button" name="" id="" class="send button " value=" Cancel " style="margin-left: 20px;" onclick="javascript:window.location='<?php echo site_url('admin/academic_calendar'); ?>'"/>
            <div class="clr"></div>
        </li>
    </ol>
</form>


<style type="text/css">
    table.sample td {
        padding: 2px;
    }
    table.sample td input{
        width: 100px;
    }
</style>

<script type="text/javascript">
    $(function(){
        $('#edit_academic_calendar_form').validate();
        
        $('select[name=course_id]').live('change',function(){
            if($('#sem_ids').length>0){
             $.post(site_url+'admin/getCourseSemesters/'+$('select[name=college_id]').val(),'course_id='+$('select[name=course_id]').val(),function(dataR){
                 $('#sem_ids').html(dataR);
             })
            }
         });
    });
</script>