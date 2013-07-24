
<h2><span>No due certificate.</span></h2>
<div class="clr"></div>
<div class="user_instructions">
    <p style="width:200px; float:left;">Please select of your choice.</p>
    <p style="width:200px; float:right;font-weight: bold;"><i><b>*</b> required fields</i></p>
    <div class="clr"></div>
</div>
<form id="appl_form" action="/students/no_due" suc_msg="No Due Request Submited Successfully." err_msg="You already applied for No-Due. Please check the status.">
    <input id="" name="rel" class="text" type="hidden" value="nodue"/>
    <ol>
        <li>
            <label><input type="radio" name="no_due" value="1" /> Apply for no due certificate.</label><br style="clear:both;"/>
            <label><input type="radio" name="no_due" value="0" /> Check the status.</label>
        </li>
        <li>
            <br/>
            <input type="button" name="imageField" id="imageField" class="send button j_gen_form_submit" value="Submit"/>
            <div class="clr"></div>
        </li>
    </ol>
</form>