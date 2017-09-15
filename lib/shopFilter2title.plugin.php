<?php

class shopFilter2titlePlugin extends shopPlugin
{
    public function titleCategory($category)
    {
    	//echo '<pre>';
        //wa_dump(wa()->getView()->getVars());
        //wa_dump(waRequest::get());
        $category = wa()->getView()->getVars('category');
        $filters = wa()->getView()->getVars('filters');
        $data = array();
        foreach ($filters as $filter) {
            if (is_array($filter['values'])){
            	foreach($filter['values'] as $v_id=>$v){
            		if (in_array($v_id, (array)waRequest::get($filter['code']))){
        				$data[$filter['name']][] = $v;
            		}
            	}
        	}
        }
    	$txt = $category['name'];
    	foreach($data as $key=>$values){
    		if (count($values)){
    			$txt .= ', ' . $key . ': ' . implode(', ',$values);
    		}
    	}
        wa()->getResponse()->setTitle($txt);
    	//echo '</pre>';
    	return;
    }
}
