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
    <a href="javascript:void(0)" onclick="API.Questions.create();">Create</a>
    <hr/>
    <table>
        <?php foreach($collection as $key_question => $entity): ?>
        <tr>
            <td><?php echo $entity->getTitle(); ?></td>
            <td style="text-align: right; width: 300px;">
                <a href="javascript:void(0)" onclick="API.Questions.edit('<?php echo $key_question; ?>', '<?php echo $uid; ?>')">Edit</a>
                &diams;
                <a href="javascript:void(0)" onclick="API.Questions.remove('<?php echo $key_question; ?>', '<?php echo $uid; ?>')">Remove</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</div>