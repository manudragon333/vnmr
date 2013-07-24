<h2 align="left"><span><?php if(isset($form_data[0]->id)) echo 'Edit'; else echo 'Add'; ?> Item</span></h2>
<pre><?php // print_r($form_data); ?></pre>
<div class="user_instructions">
    <p style="width:200px; float:left;">Please enter your details below.</p>
    <p style="width:200px; float:right;font-weight: bold;"><i><b>*</b> required fields</i></p>
    <div class="clr"></div>
</div>
<form id="edit_items_form" action="" method="POST">
    <input id="" name="id" class="text" type="hidden" value="<?php if(isset($form_data[0]->id)) echo $form_data[0]->id; ?>"/>
    <ol>
        <li>
            <label for="college_id">Item Name:* </label>
            <input id="name" name="name" class="text required" title="Please enter a name" value="<?php if(isset($form_data[0]->name)) echo $form_data[0]->name; ?>">
        </li>
        <li>
            <label for="status">Status:* </label>
            <select id="status" name="status" class="text required" title="Please select a Status">
                <option value="1" <?php if(isset($form_data[0]->status) && $form_data[0]->status=='1') echo ' selected="selected" ' ?>>Active</option>
                <option value="0" <?php if(isset($form_data[0]->status) && $form_data[0]->status=='0') echo ' selected="selected" ' ?>>InActive</option>
            </select>
        </li>
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
</style>

<script type="text/javascript">
    $(function(){
        $('#edit_items_form').validate();
    });
</script>