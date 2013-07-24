<h2 align="left"><span><?php if(isset($college_data[0]['id'])) echo 'Edit'; else echo 'Add'; ?> Item</span></h2>
<pre><?php // print_r($college_data); ?></pre>
<div class="user_instructions">
    <p style="width:200px; float:left;">Please enter your details below.</p>
    <p style="width:200px; float:right;font-weight: bold;"><i><b>*</b> required fields</i></p>
    <div class="clr"></div>
</div>
<form id="edit_items_form" action="" method="POST">
    
    <ol class="form_box">
        <input id="" name="id[]" class="text" type="hidden" value="<?php if(isset($form_data[0]->id)) echo $form_data[0]->id; ?>"/>
        <li>
            <label for="name">Item Name:* </label>
            <input id="name" name="name[]" class="text required" title="Please enter a name" value="<?php if(isset($form_data[0]->name)) echo $form_data[0]->name; ?>">
        </li>
        <li>
            <label for="status">Status:* </label>
            <select id="status" name="status[]" class="text required" title="Please select a Status">
                <option value="1" <?php if(isset($form_data[0]->status) && $form_data[0]->status=='1') echo ' selected="selected" ' ?>>Active</option>
                <option value="0" <?php if(isset($form_data[0]->status) && $form_data[0]->status=='0') echo ' selected="selected" ' ?>>InActive</option>
            </select>
        </li>
        
        <li>
            <div class="clr"></div>
        </li>
    </ol>
    
    <ol>
        <li>
            <input type="button" name="" id="add_new_form_box" class="send button " value="Add Another Item" />
            <div class="clr"></div>
        </li>
    </ol>
    <ol>
        <li>
            <input type="submit" name="imageField" id="imageField" class="send button " value="Save Item" />
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
    .form_box{
        margin: 10px 0;
        border: 1px solid #999;
        box-shadow: 1px 1px 1px #ccc;
        padding: 10px;
    }
</style>

<script type="text/javascript">
    $(function(){
        $('#edit_items_form').validate();
        
        formBoxHtml=$('<div></div>').html($('.form_box:first').clone()).html();
        
        $('#add_new_form_box').live('click',function(){
            $('.form_box:last').after(formBoxHtml);
        });
    });
</script>