<?php

class InstructionPorter extends MigrationTask {
    var $description = "Converting custom form instructions to HTML";

    function run($max_time) {
        foreach (DynamicForm::objects() as $F) {
            $F->instructions = Format::htmlchars($F->get('instructions'));
            $F->save();
        }
    }
}

return 'InstructionsPorter';
