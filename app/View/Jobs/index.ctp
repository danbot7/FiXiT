<center>
    <h3>List of Jobs</h3>
    <table class="table table-striped table-bordered table-condensed">
        <tr>
            <th>Id</th>
            <th>Issue</th>
            <th>Location</th>
            <th>Time</th>
            <th>Status</th>
        </tr>

        <!-- Here is where we loop through our $posts array, printing out post info -->
        <?php 
        if($jobs == null){
            echo '<tr ><td colspan="5" style="text-align:center" ><span class="label label-warning" >No Jobs Found</span></td></tr><table></center>';
            return;
        }        
        ?>

        <?php foreach ($jobs as $job): ?>
        <tr>
            <td><?php echo $job['Job']['id']; ?></td>

            <td>
                <?php  echo $this->Html->link($job['IssueTag']['issue_tag'],
                array('controller' => 'jobs', 'action' => 'view', 'issue', $job['Job']['issue_id'])); ?>
            </td>

            <td>
                <?php  echo $this->Html->link($job['LocationTag']['location_tag'],
                array('controller' => 'jobs', 'action' => 'view', 'location', $job['Job']['location_id'])); ?>
            </td>

            
            
            <td><?php echo $job['Job']['timestamp']; ?></td>
            <td><?php echo $job['Job']['status']; ?></td>
        </tr>
    <?php endforeach; ?>
    <?php unset($job); ?>
</table>

<div class="pagination"><ul>
    <?php echo $this->Paginator->prev('<<', array('tag' =>'li'), ' ', array('class' => 'previous disabled'));
    echo $this->Paginator->numbers(array( 
        'separator' => '',
        'currentClass' => 'active',
        'tag' => 'li',
        'ellipsis' => '...',
        'currentTag' => 'a'
        )); 
    echo $this->Paginator->next('>>', array('tag' =>'li'), ' ', array('class' => 'next disabled'));
    ?>
</ul></div>
</center>