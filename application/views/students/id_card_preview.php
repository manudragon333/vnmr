<?php
if($this->session->userdata('preview_id_card')){
    $data[]=$this->session->userdata('preview_id_card');
}else{
    $data=0;
}
//echo '<pre>'; print_r($data); echo '</pre>';
if(count($data) && $data){
foreach($data as $k=>$v){?>
<form id="appl_form" action="/students/apply_idcard" >
    <input type="hidden" name="preview" value="1"/>
    <div style="border:2px solid; width:600px;position:relative;">
        <h4 style="width:115px; margin:0 auto;">MY COLLEGE</h4>
    <!--    <div>
            <img src="logo.png" width="50" height="50" style="position: absolute; top:60px; left:510px;">
        </div>-->
        <img src="<?php echo base_url(); ?>css/images/college_logo.png" width="60" height="60" style="position: absolute; top:15px; left:510px;"/>
        <img src="<?php echo base_url(); echo (isset($v['photo']) && !empty($v['photo']))?'uploads/'.$v['photo']:'css/images/no_photo.png'; ?>" id="photo" width="100" height="120" title="pic" style="position: absolute; top:80px; left:15px;"/>
        <div style="margin-left:160px;margin-top: 45px;">

            <pre>STUDENT NAME		:	<?php echo $v['name']; ?></pre>
            <pre>STUDENT NUMBER		:	<?php echo $v['stu_number']; ?></pre>
            <pre>BRANCH			:	<?php echo get_select_name($v['branch'],'branches'); ?></pre>
            <pre>YEAR OF JOIN		:	<?php echo $v['date_of_join']; ?></pre>
            <pre>ADDRESS			:	<?php echo $v['address']; ?></pre>
            <pre>MOBILE Number		:	<?php echo $v['mobile_no']; ?></pre>
            <br/>

        </div>
        <div style="clear:both;"></div>
    </div>
    <br/>
    <input type="button" name="imageField" id="imageField" class="send button  " value="Back" onclick="javascript:window.location.reload();"/>
    <input type="button" name="imageField" id="imageField" class="send button  j_gen_form_submit" value="Confirm"/>
</form>
<?php } }else{?>
<br/>
<p>Please Fill the form and try again.!</p>
<?php } ?>