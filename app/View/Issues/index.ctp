<center>
    <h3>Issue Tags</h3>
    <table class="table table-striped table-bordered table-condensed">
        <tr>
            <th>Id</th>
            <th>Issue Link</th>
            <th>First Reported</th>
        </tr>

        <!-- Here is where we loop through our $posts array, printing out post info -->
<?php if($issues == null){
         echo '<tr ><td colspan="3" style="text-align:center" ><span class="label label-warning" >No Issues Found</span></td></tr><table></center>';
        return;
    }        
    ?>
        <?php foreach ($issues as $issue): ?>
        <tr>
            <td><?php echo $issue['Issue']['id']; ?></td>
            <td>
                <?php  echo $this->Html->link($issue['Issue']['issue_tag'],
                array('controller' => 'jobs', 'action' => 'view', 'issue', $issue['Issue']['id'])); ?>
            </td>
            <td><?php echo "hh:mm:ss"; ?></td>
        </tr>
    <?php endforeach; ?>
    <?php unset($issue); ?>
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