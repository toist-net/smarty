<?php

function smarty_block_push ($params, $content, Smarty_Internal_Template $template, &$repeat)
{
    global $___smarty_stacks;
    
    if ( ! isset($params['name'])) {
        throw new SmartyException("Missing 'name' param in push block");
    }
    
    // only output on the closing tag
    if ( ! $repeat && isset($content)) {
        if ( ! isset($___smarty_stacks)) {
            $___smarty_stacks = [];
        }
        
        if ( ! isset($___smarty_stacks[ $params['name'] ])) {
            $___smarty_stacks[ $params['name'] ] = [];
        }
        
        if (isset($params['once'])) {
            $___smarty_stacks[ $params['name'] ][ md5($content) ] = $content;
        } else {
            $___smarty_stacks[ $params['name'] ][] = $content;
        }
    }
}
