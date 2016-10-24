<?php

use App\Mains;
use App\Font;
use SleepingOwl\Admin\Model\ModelConfiguration;

AdminSection::registerModel(Mains::class, function (ModelConfiguration $model) {

    $model->setTitle('Pages');

    // Display
    $model->onDisplay(function () {
        $display = AdminDisplay::table()->setColumns([
            AdminColumn::link('page_name')->setLabel('Page Name')->setWidth('400px'),
            AdminColumn::custom()->setLabel('Background')->setCallback(function (Mains $mains) {
                return '<div style="height:30px;width:30px;background-color:'.$mains->background.'"></div>';
            })

        ]);
        $display->paginate(15);
        return $display;
    });
    // Create And Edit

    $model->onCreateAndEdit(function(Font $font) {
        return $form = AdminForm::panel()->addBody(
            AdminFormElement::select('published','Published',['1'=>'Yes','0'=>'No']),
            AdminFormElement::text('page_name', 'Page Name')->required(),
            /* AdminFormElement::select('background','background',['image'=>'image','color'=>'color']),
             AdminFormElement::image('image','image'),*/
            AdminFormElement::text('background','Background'),
            AdminFormElement::select('font_id','Font',$font->getFontsId())
        );
    });
})
    ->addMenuPage(Mains::class, 0)
    ->setIcon('fa fa-bank');


