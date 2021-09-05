<?php

function smarty_outputfilter_parsestacks ($output, Smarty_Internal_Template $template)
{
    global $___smarty_stacks;
    
    if (isset($___smarty_stacks)) {
        foreach ($___smarty_stacks as $stackName => $stackContents) {
           $output = str_replace("{{ stack_{$stackName} }}", implode("\n", $stackContents), $output);
        }
    }
    
    return $output;
}
