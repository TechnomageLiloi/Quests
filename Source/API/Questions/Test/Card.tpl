<style>
    #testing-<?php echo $entity->getKey(); ?>
    {
        border: gray 2px solid;
        padding: 10px;
        border-radius: 5px;
        background-color: #ffffe3;
        margin: 10px;
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