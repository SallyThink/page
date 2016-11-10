<?php


use SleepingOwl\Admin\Model\ModelConfiguration;
use App\GeneralSetting;


AdminSection::registerModel(GeneralSetting::class, function (ModelConfiguration $model) {

    $model->onDisplay(function () {

        $display = AdminDisplay::table()->setColumns([
            AdminColumn::link('headTitle')->setLabel('Head Title')->setWidth('400px'),
            AdminColumn::text('published')->setLabel('Head Title')->setWidth('400px'),
        ]);
        return $display;

    });
// Create and Edit
    $model->onCreateAndEdit(function() {

        return $form = AdminForm::panel()

            ->addHeader(AdminFormElement::columns()
                ->addColumn([
                    AdminFormElement::select('published','Published',['1'=>'Yes','0'=>'No'])
                ], 3)->addColumn([
                    AdminFormElement::text('headTitle','Head Title')
                ], 3)
            )

            ->addElement(
                AdminDisplay::tabbed([
                    'Content Text' => new \SleepingOwl\Admin\Form\FormElements([
                        AdminFormElement::select('direction', 'Direction',['vertical' => 'vertical',
                            'horizontal' => 'horizontal', 'random' => 'random']),
                        AdminFormElement::select('navigation', 'Navigation Bottoms', ['0'=>'No','1'=>'Yes']),
                        /* AdminFormElement::select('background','background',['image'=>'image','color'=>'color']),
                         AdminFormElement::image('image','image'),*/
                        AdminFormElement::select('navigationPosition','Navigation Position',['left'=>'left','right'=>'right'])
                    ]),
                    'Menu Buttons' => new \SleepingOwl\Admin\Form\FormElements([
                        AdminFormElement::text('color','Color'),
                        AdminFormElement::text('hover_color','Hover Color'),
                        AdminFormElement::text('border','Border'),
                        AdminFormElement::text('border_radius','Border Radius'),
                        AdminFormElement::text('background_color','Background Color'),
                        AdminFormElement::text('hover_background_color','Hover Background Color'),
                        AdminFormElement::text('active_background_color','Active Link Background Color')
                    ]),
                ])
            )
            ->setHtmlAttribute('id','general');
    });

})
    ->addMenuPage(GeneralSetting::class, 4)
    ->setIcon('fa fa-file-text-o');