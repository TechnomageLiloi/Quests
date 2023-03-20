<style>
    #problem-group table
    {
        width: 100%;
    }

    #problem-group table td
    {
        border-bottom: silver 1px dashed;
    }

    #problem-group table tr:hover
    {
        background-color: #ffffbd;
    }

</style>
<div id="problem-group">
    <?php foreach($group as $id_type => $collection): ?>
        <h1><?php echo $types[$id_type]; ?></h1>
        <a href="javascript:void(0)" onclick="API.Problems.create('<?php echo $milestone->getKey(); ?>', '<?php echo $id_type; ?>', '<?php echo $uid; ?>')">Create</a>
        <table>
            <?php foreach($collection as $key_problem => $entity): ?>
            <tr>
                <td>
                    <a style="color: black;" href="javascript:void(0)" onclick="API.Problems.show('<?php echo $key_problem; ?>')">
                        <?php echo $entity->getTitle(); ?>
                    </a>
                </td>
                <td style="text-align: right; width: 100px;"><?php echo $entity->getMark(); ?></td>
                <td style="text-align: right; width: 300px;">
                    <a href="javascript:void(0)" onclick="API.Tickets.collection('<?php echo $key_problem; ?>')">Tickets</a>
                    &diams;
                    <a href="javascript:void(0)" onclick="API.Lessons.collection('<?php echo $key_problem; ?>')">Lessons</a>
                    &diams;
                    <a href="javascript:void(0)" onclick="API.Problems.edit('<?php echo $key_problem; ?>', '<?php echo $uid; ?>')">Edit</a>
                    &diams;
                    <a href="javascript:void(0)" onclick="API.Problems.remove('<?php echo $key_problem; ?>', '<?php echo $uid; ?>')">Remove</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    <?php endforeach; ?>
</div>