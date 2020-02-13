<?php

function array_to_xml($array, &$xml_user_info) {
    foreach($array as $k => $v) {
        if(is_array($v)) {
            if(!is_numeric($k)){
                $subnode = $xml_user_info->addChild("$k");
                array_to_xml($v, $subnode);
            }else{
                $subnode = $xml_user_info->addChild("item$k");
                array_to_xml($v, $subnode);
            }
        }else {
            $xml_user_info->addChild("$k",htmlspecialchars("$v"));
        }
    }
}
