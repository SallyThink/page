<?php


use SleepingOwl\Admin\Model\ModelConfiguration;
use App\GeneralSetting;


AdminSection::registerModel(GeneralSetting::class, function (ModelConfiguration $model) {

    $model->onDisplay(function () {

        $display = AdminDisplay::table()->setColumns([
            AdminColumn::link('headTitle')->setLabel('Head Title')->setWidth('400px'),
            AdminColumn::text('published')->setLabel('Head Title')->setWidth('400px'),
        ]);
        return $display;

    });
// Create and Edit
    $model->onCreateAndEdit(function() {
        return $form = AdminForm::panel()->addBody(
            AdminFormElement::select('published','Published',['1'=>'Yes','0'=>'No']),
            AdminFormElement::text('headTitle','Head Title'),
            AdminFormElement::select('direction', 'Direction',['vertical' => 'vertical',
                'horizontal' => 'horizontal', 'random' => 'random']),
            AdminFormElement::select('navigation', 'Navigation Bottoms', ['0'=>'No','1'=>'Yes']),
            /* AdminFormElement::select('background','background',['image'=>'image','color'=>'color']),
             AdminFormElement::image('image','image'),*/
            AdminFormElement::select('navigationPosition','Navigation Position',['left'=>'left','right'=>'right'])
        );
    });

})
    ->addMenuPage(GeneralSetting::class, 0)
    ->setIcon('fa fa-file-text-o');