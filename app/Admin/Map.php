<?php


use SleepingOwl\Admin\Model\ModelConfiguration;
use App\Map;
use App\Content;


AdminSection::registerModel(Map::class, function (ModelConfiguration $model) {

    $model->onDisplay(function () {

        $display = AdminDisplay::table()->setColumns([
            AdminColumn::link('lat')->setLabel('Lat')->setWidth('400px'),
            AdminColumn::link('lng')->setLabel('Lng')->setWidth('400px'),
        ]);
        return $display;

    });
// Create and Edit
    $model->onCreateAndEdit(function(Content $content) {
        return $form = AdminForm::panel()->addBody(
            AdminFormElement::select('content_id','Content', $content->getContentId())->required(),
            AdminFormElement::text('lat','Lat')->required(),
            AdminFormElement::text('lng','Lng')->required(),
            AdminFormElement::text('zoom','Zoom')->required(),
            AdminFormElement::text('height','Height')->required(),
            AdminFormElement::textarea('marker','Marker Info')
        );
    });

});