<?php


use SleepingOwl\Admin\Model\ModelConfiguration;
use App\Form;
use App\Content;


AdminSection::registerModel(Form::class, function (ModelConfiguration $model) {

    // Display
    $model->onDisplay(function () {

        $display = AdminDisplay::datatables()->setHtmlAttribute('class', 'table-info');
        $display->setColumns([
            AdminColumn::custom()->setLabel('Content Name')->setCallback(function (Form $form) {

                $content = new App\Content;
                $result = $content::select('content_name')->where('id', $form->content_id)->get();

                return $result[0]->content_name;
            }),
            AdminColumn::custom()->setLabel('Information')->setCallback(function (Form $form) {

                $result = '';
                foreach(json_decode($form->value) as $k => $v)
                {
                    $result .= $k.' : '.$v;
                    $result .= '<br>';
                }

                return '<div style="">'.$result.'</div>';
            }),
            AdminColumn::text('created_at')->setLabel('Created At')

        ]);
        $display->paginate(25);

        return $display;
    });

// Create and Edit
    $model->onCreateAndEdit(function($id, Form $form) {
       
        return $form = AdminForm::panel()->addBody(

        );
    });

})
    ->addMenuPage(Form::class, 0)
    ->setIcon('fa fa-bank')
    ->setTitle('Form Information');