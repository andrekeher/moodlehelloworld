<?php 
class block_helloworld extends block_base
{
    function init()
    {
        $this->title = get_string('helloworld', 'block_helloworld');
    }

    function get_content()
    {   
        if ($this->content !== null)
        {
            return $this->content;
        }

        $this->content = new stdClass;
        
        $context = context_block::instance($this->instance->id);
        if (!has_capability('block/helloworld:view', $context))
        {
            $this->content->text = 'Not admin!';
        }
        else
        {
            $this->content->text = 'Secret message to admins!';
            if(isset($this->config->content))
            {
                $this->content->text = $this->config->content['text'];
            }
        }
        $this->content->footer = 'Access <a href="http:example.com" target="_blank">here</a>.';
        return $this->content;
    }

    function has_config()
    {
        return true;
    }
}
