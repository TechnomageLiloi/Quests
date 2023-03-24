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
        <a href="javascript:void(0)" onclick="Testing.checkCheck('<?php echo $entity->getKey(); ?>');">Check</a>
        <hr/>
        <?php echo $entity->getElement('question'); ?>
    </div>

    <div class="answer">
        <hr/>
        <?php $answers = $entity->getElement('answers'); ?>
        <?php foreach($answers as $answer): ?>
            <input type="checkbox" name="check-<?php echo $entity->checkCheck(); ?>" data-correct="<?php echo $answer['correct'] ?? ''; ?>">
            <?php echo $answer['answer']; ?>
            <br/>
        <?php endforeach; ?>
    </div>
</div>