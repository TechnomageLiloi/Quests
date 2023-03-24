<style>
    #blueprint-edit input,
    #blueprint-edit select,
    #blueprint-edit textarea
    {
        width: 50%;
    }

    #blueprint-edit textarea
    {
        height: 300px;
    }
</style>
<div id="testing-<?php echo $entity->getKey(); ?>">

    <div class="question">
        <a href="javascript:void(0)" onclick="Testing.turnAround('<?php echo $entity->getKey(); ?>');">Turn around</a>
        <hr/>
        <?php echo $entity->getElement('question'); ?>
    </div>

    <div class="answer" style="display: none;">
        <a href="javascript:void(0)" onclick="Testing.turnAround('<?php echo $entity->getKey(); ?>');">Turn around</a>
        <hr/>
        <?php echo $entity->getElement('answer'); ?>
    </div>
</div>