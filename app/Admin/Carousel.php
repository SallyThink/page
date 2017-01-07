<?php


use SleepingOwl\Admin\Model\ModelConfiguration;
use App\Carousel;

AdminSection::registerModel(Carousel::class, function (ModelConfiguration $model) {

    $model->onDisplay(function () {

        $display = AdminDisplay::table()->setColumns([
            AdminColumn::link('name')->setLabel('Form Name')->setWidth('400px'),
        ]);
        return $display;

    });
// Create and Edit
    $model->onCreateAndEdit(function(\App\Content $content) {
        return $form = AdminForm::panel()->addBody(
            AdminFormElement::text('name', 'Name'),
            AdminFormElement::select('content_id', 'Content', $content->getContentId()),
            AdminFormElement::image('images', 'Images')
        );
    });

    $model->creating(function(ModelConfiguration $model, Carousel $carousel) {
        dump($carousel);
    });

    $model->updating(function(ModelConfiguration $model, Carousel $carousel) {

    });
});