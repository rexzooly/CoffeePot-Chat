<?php

// Auto-completes a user name

    $hint = $this->myGet('hint');
    
    if($this->hasData($hint)) {
        $words = explode(' ', trim($hint));
        $current_word = $words[count($words)-1];
        $users = $this->mySession('autocomplete');
        
        if(
            strpos(
                strtolower($users), 
                ',' . strtolower($current_word)
            ) !== FALSE
        ) {
            list($tmp, $tmp2) = explode(
                ',' . strtolower($current_word), 
                strtolower($users), 
                2
            );
            list($rem_name, $tmp3) = explode(',', $tmp2);
            echo $rem_name;   
        }
    }

?>