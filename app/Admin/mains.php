<?php

use App\Mains;
use SleepingOwl\Admin\Model\ModelConfiguration;

AdminSection::registerModel(Mains::class, function (ModelConfiguration $model) {

    // Display
    $model->onDisplay(function () {
        $display = AdminDisplay::table()->setColumns([
            AdminColumn::link('menu')->setLabel('Title')->setWidth('400px'),
        ]);
        $display->paginate(15);
        return $display;
    });
    // Create And Edit
    $model->onCreateAndEdit(function() {
        return $form = AdminForm::panel()->addBody(
            AdminFormElement::text('menu', 'menu')->required()->unique(),
            AdminFormElement::textarea('header', 'header')->setRows(2),
            AdminFormElement::text('text', 'text')
        );
        return $form;
    });
})
    ->addMenuPage(Mains::class, 0)
    ->setIcon('fa fa-bank');