<!-- File: /app/View/Posts/index.ctp  (edit links added) -->

<h1>Blog posts</h1>
<p><?php echo $this->Html->link("Add Post", array('action' => 'add')); ?></p>
<table>
    <tr>
        <th>Id</th>
        <th>Title</th>
        <th>Created</th>
        <th>Action</th>
    </tr>

<!-- Here's where we loop through our $posts array, printing out post info -->

<?php foreach ($posts as $blog): ?>
    <tr>
        <td><?php echo $blog['Post']['id']; ?></td>
        <td>
            <?php
                echo $this->Html->link(
                    $blog['Post']['title'],
                    array('action' => 'view', $blog['Post']['id'])
                );
            ?>
        </td>
        <td>
            <?php echo $blog['Post']['created']; ?>
        </td>
        <td>
            <?php
                echo $this->Html->link(
                    'Edit',
                    array('action' => 'edit', $blog['Post']['id'])
                );
                
                echo '&nbsp;';
                
                echo $this->Form->postLink(
                    'Delete',
                    array('action' => 'delete', $blog['Post']['id']),
                    array('confirm' => 'Are you sure?')
                );
            ?>
        </td>
        
    </tr>
<?php endforeach; ?>

</table>