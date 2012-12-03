<?php

class HeartMenuHandler {
                                                                                                                                         
        /** @override */
        function handlePluginHook($name, $type, $items, $params) {                                                                       
                $result = array();
                foreach ($items as $item) {
                        switch ($item->getName()) {
                                case 'friends':
                                case 'add_friend':
                                case 'remove_friend':
                                        break;
                                default:
                                        $result[] = $item;
                                        break;
                        }
                }

                return $result;
        }
}                                                                                                                                        
