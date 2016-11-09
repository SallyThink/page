<?php


use SleepingOwl\Admin\Model\ModelConfiguration;
use App\Lazyload;


AdminSection::registerModel(Lazyload::class, function (ModelConfiguration $model) {

    $model->onDisplay(function () {

        $display = AdminDisplay::table()->setColumns([
            AdminColumn::link('lazyload_id')->setLabel('ID')
        ]);
        return $display;

    });
// Create and Edit
    $model->onCreateAndEdit(function() {
        return $form = AdminForm::panel()->addBody(

            AdminFormElement::select('published','Published',['1'=>'Yes','0'=>'No']),
            AdminFormElement::text('lazyload_id','LazyLoad')->required()
        )->setHtmlAttribute('id','lazyload');
    });

});

