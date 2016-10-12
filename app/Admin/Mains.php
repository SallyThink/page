<?php

use App\Mains;
use SleepingOwl\Admin\Model\ModelConfiguration;

AdminSection::registerModel(Mains::class, function (ModelConfiguration $model) {
    // Display
    $model->onDisplay(function () {
        $display = AdminDisplay::table()->setColumns([
            AdminColumn::link('name')->setLabel('Page Name')->setWidth('400px'),
        ]);
        $display->paginate(15);
        return $display;
    });
    // Create And Edit
    $model->onCreateAndEdit(function() {
        return $form = AdminForm::panel()->addBody(
            AdminFormElement::select('published','Published',['1'=>'Yes','0'=>'No']),
            AdminFormElement::text('name', 'Name')->required()->unique(),
            AdminFormElement::text('page_name', 'Page Name'),
           /* AdminFormElement::select('background','background',['image'=>'image','color'=>'color']),
            AdminFormElement::image('image','image'),*/
            AdminFormElement::text('background','Background')
        );
    });
})
    ->addMenuPage(Mains::class, 0)
    ->setIcon('fa fa-bank');