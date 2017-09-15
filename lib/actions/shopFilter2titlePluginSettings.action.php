<?php

class shopFilter2titlePluginSettingsAction extends waViewAction
{
    public function execute()
    {
        $this->view->assign('settings', wa('shop')->getPlugin('filter2title')->getSettings());
    }

}
