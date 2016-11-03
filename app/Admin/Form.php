<?php


use SleepingOwl\Admin\Model\ModelConfiguration;
use App\Form;



AdminSection::registerModel(Form::class, function (ModelConfiguration $model) {

    // Display
    $model->onDisplay(function () {
        $display = AdminDisplay::table()->setColumns([
            AdminColumn::link('id')->setLabel('ID')->setWidth('400px'),
            AdminColumn::custom()->setLabel('Background')->setCallback(function (Form $form) {
                $result = '';
                foreach(json_decode($form->value) as $k => $v)
                {
                    $result .= $k.' : '.$v;
                    $result .= '<br>';
                }
                //dd($result);
                return '<div style="">'.$result.'</div>';
            }),
            AdminColumn::text('created_at')->setLabel('ID')->setWidth('400px')

        ]);
        $display->paginate(15);
        return $display;
    });

// Create and Edit
    $model->onCreateAndEdit(function($id, Form $form) {
       
        return $form = AdminForm::panel()->addBody(

        );
    });

})
    ->addMenuPage(Form::class, 0)
    ->setIcon('fa fa-bank');