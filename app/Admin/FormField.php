<?php


use SleepingOwl\Admin\Model\ModelConfiguration;
use App\Form;
use App\FormField;

AdminSection::registerModel(FormField::class, function (ModelConfiguration $model) {

    $model->onDisplay(function () {

        $display = AdminDisplay::table()->setColumns([
            AdminColumn::link('name')->setLabel('Form Name')->setWidth('400px'),
            AdminColumn::text('form_id')->setLabel('Content ID')->setWidth('400px'),
        ]);
        return $display;

    });
// Create and Edit
    $model->onCreateAndEdit(function(Form $form) {
        return $form = AdminForm::panel()->addBody(
            AdminFormElement::select('form_id','Form', $form->getFormId()),
            AdminFormElement::text('name','Field Name'),
            AdminFormElement::select('type','Field Type',['text' => 'text', 'hidden' => 'hidden',
                'submit' => 'submit', 'file' => 'file', 'color' => 'color', 'date' => 'date',
                'datetime-local' => 'datetime-local', 'email' => 'email', 'number' => 'number',]),
            AdminFormElement::text('placeholder','Placeholder')
        );
    });

})
    ->addMenuPage(FormField::class, 0)
    ->setIcon('fa fa-file-text-o');

