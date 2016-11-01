<?php


use SleepingOwl\Admin\Model\ModelConfiguration;
use App\FormField;
use App\Content;

AdminSection::registerModel(FormField::class, function (ModelConfiguration $model) {

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
            AdminFormElement::select('content_id','Content', $content->getContentId()),
            AdminFormElement::text('name','Field Name'),
            AdminFormElement::select('type','Field Type',['text' => 'text', 'hidden' => 'hidden',
                'submit' => 'submit', 'file' => 'file', 'color' => 'color', 'date' => 'date',
                'datetime-local' => 'datetime-local', 'email' => 'email', 'number' => 'number',]),
            AdminFormElement::text('placeholder','Placeholder'),
            AdminFormElement::text('value','Value')
        );
    });

});


