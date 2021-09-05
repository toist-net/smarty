<?php

function smarty_function_stack ($params, Smarty_Internal_Template $template)
{
    if ( ! isset($params['name'])) {
        throw new SmartyException("Missing 'name' param in stack function");
    }
    
    return "{{ stack_{$params['name']} }}";
}
