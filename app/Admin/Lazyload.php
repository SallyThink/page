<?php


use SleepingOwl\Admin\Model\ModelConfiguration;
use App\Lazyload;


AdminSection::registerModel(Lazyload::class, function (ModelConfiguration $model) {

    $model->onDisplay(function () {

        $display = AdminDisplay::table()->setColumns([
            AdminColumn::link('timeout')->setLabel('ID')->setWidth('400px'),
        ]);
        return $display;

    });
// Create and Edit
    $model->onCreateAndEdit(function() {
        return $form = AdminForm::panel()->addBody(

            AdminFormElement::select('published','Published',['1'=>'Yes','0'=>'No']),
            AdminFormElement::text('lazyload_id','LazyLoad')->required(),
            AdminFormElement::text('timeout','Set Timeout (seconds)'),
            AdminFormElement::select('background_color','Background', ['color' => 'Color', 'image' => 'Image']),
            AdminFormElement::text('background_color','Color'),
            AdminFormElement::image('background_image','Image')

        )->setHtmlAttribute('id','pages')
         ->setHtmlAttribute('class','lazyload');
    });

});

