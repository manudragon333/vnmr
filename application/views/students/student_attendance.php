<style type="text/css" rel="stylesheet">
    table.sample td {
        padding: 5px;
        text-align: center;
    }
</style>
<pre><?php //print_r($weekdays); ?></pre>
<pre><?php //print_r($cycle_periods); ?></pre>
<pre><?php //print_r($students_periods); ?></pre>
<?php


$cycleWeekdayPeriods=array();

if(!empty($students_periods)){
    foreach($students_periods as $k=>$v){
        $cycleWeekdayPeriods[$v['weekday_id']][$v['period_id']]=$v;
    }
}

if(!empty($weekdays) && !empty($cycle_periods) && !empty($students_periods)){
    ?>

    <br/>
    <h4>Schedule</h4>
    <table border="2" class="sample">
        <tr>
            <th>#</th>
            <?php foreach($cycle_periods as $cp_k=>$cp_v){ ?>
            <th><?php echo $cp_v['period_label'],' (',$cp_v['time_label'],')'; ?></th>
            <?php }  ?>
        </tr>
        <?php foreach($weekdays as $wd_k=>$wd_v){ ?>
        <tr>
            <td><?php echo $wd_v['name']; ?></td>

            <?php foreach($cycle_periods as $cp_k=>$cp_v){ ?>
            <td>
                <?php
                if(isset($cycleWeekdayPeriods[$wd_v['id']][$cp_v['id']]['subject_name'])){
                    echo $cycleWeekdayPeriods[$wd_v['id']][$cp_v['id']]['course_name'],' - ',$cycleWeekdayPeriods[$wd_v['id']][$cp_v['id']]['branch_name'],' - ',$cycleWeekdayPeriods[$wd_v['id']][$cp_v['id']]['sem_name'],' - ',$cycleWeekdayPeriods[$wd_v['id']][$cp_v['id']]['subject_name'];
                ?>
                <?php }else{ ?>
                    <i>-Not Alloted-</i><br/>
                <?php }?>
            </td>
            <?php }  ?>
            
        </tr>
        <?php } ?>
    </table>
<?php } else { ?>
    <div class="error">
        <p>No Periods are Scheduled in this Cycle for You.</p>
    </div>
<?php }  ?>

    <br/><br/>
    <a href="<?php echo site_url('students/student_attendance');  ?>" > <br> &lt;&lt; Back</a>
