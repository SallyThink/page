<?php


use SleepingOwl\Admin\Model\ModelConfiguration;
use App\Form;
use App\Content;


AdminSection::registerModel(Form::class, function (ModelConfiguration $model) {

    $model->onDisplay(function () {

        $display = AdminDisplay::table()->setColumns([
            AdminColumn::link('name')->setLabel('Form Name')->setWidth('400px'),
            AdminColumn::text('content_id')->setLabel('Content ID')->setWidth('400px'),
        ]);
        return $display;

    });
// Create and Edit
    $model->onCreateAndEdit(function(Content $content) {
        return $form = AdminForm::panel()->addBody(
            AdminFormElement::select('published','Published',['1'=>'Yes','0'=>'No']),
            AdminFormElement::select('contents_id','Content Section', $content->getContentId()),
            AdminFormElement::text('name','Form Name'),
            AdminFormElement::text('background','Background')
        );
    });

})
    ->addMenuPage(Form::class, 0)
    ->setIcon('fa fa-file-text-o');