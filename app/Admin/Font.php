<?php


use SleepingOwl\Admin\Model\ModelConfiguration;
use App\Font;

AdminSection::registerModel(Font::class, function (ModelConfiguration $model) {

    $model->onDisplay(function () {

        $display = AdminDisplay::table()->setColumns([
            AdminColumn::link('font_name')->setLabel('Form Name')->setWidth('400px'),
        ]);
        return $display;

    });
// Create and Edit
    $model->onCreateAndEdit(function() {
        return $form = AdminForm::panel()->addBody(
            AdminFormElement::text('font_name','Font Name'),
            AdminFormElement::text('font_url','Font URL'),
            AdminFormElement::select('published','Published',['1'=>'Yes','0'=>'No'])
        );
    });

});