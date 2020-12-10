<?= $this->Form->create($tour); ?>

<fieldset>
    <legend>
        <?= __('Add Tour'); ?>
    </legend>
    <?= $this->Form->control('name'); ?>
    <?= $this->Form->control('date'); ?>
    <?= $this->Form->control('description'); ?>
    <?= $this->Form->control('cities'); ?>
    <?= $this->Form->control('include'); ?>
    <?= $this->Form->control('exclude'); ?>
    <?= $this->Form->control('tours_flight'); ?>
    <?= $this->Form->control('tours_price'); ?>
    <?= $this->Form->control('tours_settings'); ?>
    <?= $this->Form->submit('Submit me');; ?>
</fieldset>

<?= $this->Form->end(); ?>