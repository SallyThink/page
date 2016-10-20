<?php


use SleepingOwl\Admin\Model\ModelConfiguration;
use App\Admin\Model\GeneralSetting;


AdminSection::registerModel(GeneralSetting::class, function (ModelConfiguration $model) {

})
    ->addMenuPage(GeneralSetting::class, 0)
    ->setIcon('fa fa-file-text-o');