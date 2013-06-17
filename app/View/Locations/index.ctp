<center>
    <h3>Locations Tags</h3>
    <table class="table table-striped table-bordered table-condensed">
        <tr>
            <th>Id</th>
            <th>Location</th>
            <th>Location Tag</th>
        </tr>

        <!-- Here is where we loop through our $posts array, printing out post info -->
<?php
        if($locations == null){
        echo '<tr ><td colspan="3" style="text-align:center" ><span class="label label-warning" >No Locations Found</span></td></tr><table></center>';
        return;
    }        
    ?>
    <?php foreach ($locations as $location): ?>
    <tr>
        <td><?php echo $location['Location']['id']; ?></td>
        <td><?php echo $location['Location']['location_tag']; ?></td>
        <td>
            <?php  echo $this->Html->link($location['Location']['location_tag'],
            array('controller' => 'jobs', 'action' => 'view', 'location', $location['Location']['id'])); ?>
        </td>

    </tr>
<?php endforeach; ?>
<?php unset($location); ?>
</table>
<?php echo $this->Paginator->numbers(array(
    'before' => '<div class="pagination"><ul>',
    'separator' => '',
    'currentClass' => 'active',
    'tag' => 'li',
    'currentTag' => 'a',
    'after' => '</ul></div>'
    )); ?>
</center>