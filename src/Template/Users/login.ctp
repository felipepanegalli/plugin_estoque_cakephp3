<div class="users form">
    <?= $this->Form->create() ?>
    <?php
        echo $this->Form->control('username');
        echo $this->Form->control('password');
        echo $this->Form->button(__('Submit'))
    ?>
    <?= $this->Form->end() ?>
</div>