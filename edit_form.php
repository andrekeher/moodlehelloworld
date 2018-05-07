<?php
class block_helloworld_edit_form extends block_edit_form {
    protected function specific_definition($mform) {
        global $CFG;

        $mform->addElement('header', 'configheader', get_string('blocksettings', 'block_helloworld'));

        $mform->addElement('text', 'config_title', get_string('configtitle', 'block_helloworld'));
        $mform->setType('config_title', PARAM_TEXT);
        $mform->addRule('config_title', null, 'required', null, 'client');

        $editoroptions = array('maxfiles' => EDITOR_UNLIMITED_FILES, 'noclean'=>true, 'context'=>$this->block->context);
        $mform->addElement('editor', 'config_content', get_string('configcontent', 'block_helloworld'), null, $editoroptions);
        $mform->setType('config_content', PARAM_RAW);
        $mform->addRule('config_content', null, 'required', null, 'client');
    }
}
