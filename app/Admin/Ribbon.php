<?php


use SleepingOwl\Admin\Model\ModelConfiguration;
use App\Ribbon;


AdminSection::registerModel(Ribbon::class, function (ModelConfiguration $model) {

    $model->onDisplay(function () {

        $display = AdminDisplay::table()->setColumns([
            AdminColumn::link('first_text')->setLabel('First Text')->setWidth('400px'),
            AdminColumn::link('second_text')->setLabel('Second Text')->setWidth('400px'),
        ]);
        return $display;

    });
// Create and Edit
    $model->onCreateAndEdit(function() {
        return $form = AdminForm::panel()->addBody(

            AdminFormElement::select('published','Published',['1'=>'Yes','0'=>'No']),
            AdminFormElement::text('first_text','First Text')->required(),
            AdminFormElement::text('second_text','Second Text')->required(),
            AdminFormElement::ckeditor('main_text','Main Text')->required(),
            AdminFormElement::select('background_color','Background', ['color' => 'Color', 'image' => 'Image']),
            AdminFormElement::text('background_color','Color'),
            AdminFormElement::image('background_image','Image')
        )
            ->setHtmlAttribute('id', 'pages');
    });

});