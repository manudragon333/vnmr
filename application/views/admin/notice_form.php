<h2 align="left"><span><?php if(isset($notice_data[0]['id'])) echo 'Edit'; else echo 'Add'; ?> Message</span></h2>
<!--<pre><?php //print_r($notice_data); ?></pre>-->
<div class="user_instructions">
    <p style="width:200px; float:left;">Please enter your details below.</p>
    <p style="width:200px; float:right;font-weight: bold;"><i><b>*</b> required fields</i></p>
    <div class="clr"></div>
</div>
<form id="appl_form" action="/admin/save_notice">
    <input id="" name="rel" class="text" type="hidden" value="notice_form"/>
    <input id="" name="id" class="text" type="hidden" value="<?php if(isset($notice_data[0]['id'])) echo $notice_data[0]['id']; ?>"/>
    <ol>
        <li>
            <label for="message">Message:* </label>
            <textarea cols="10" rows="5" name="message" id="message"><?php if(isset($notice_data[0]['message'])) echo $notice_data[0]['message']; ?></textarea>
        </li>
        <li>
            <input type="button" name="imageField" id="imageField" class="send button j_gen_form_submit" value="Save Message" />
            <div class="clr"></div>
        </li>
    </ol>
</form>