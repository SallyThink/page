<?php


use SleepingOwl\Admin\Model\ModelConfiguration;
use App\Content;
use App\Mains;

AdminSection::registerModel(Content::class, function (ModelConfiguration $model) {

    // Display
    $model->onDisplay(function () {
        $display = AdminDisplay::table()->setColumns([
            AdminColumn::text('id'),
            AdminColumn::link('content_name')->setLabel('Content Name')->setWidth('400px'),
            AdminColumn::text('content')->setLabel('Text'),
            AdminColumn::text('positionX')->setLabel('Horizontal Position'),
            AdminColumn::text('positionY')->setLabel('Vertical Position')
        ]);
        $display->paginate(15);
        return $display;
    });



    // Create And Edit
    $model->onCreateAndEdit(function(Mains $mains) {
        $pages = $mains::select('id','page_name')->get();
        $pageForSelect = [];
        foreach($pages as $v)
        {
            $pageForSelect[$v->id] = $v->page_name;
        }



        return $form = AdminForm::panel()

            ->addHeader(AdminFormElement::columns()
                ->addColumn([
                    AdminFormElement::select('mains_id', 'Page', $pageForSelect)->required()
                ], 3)->addColumn([
                    AdminFormElement::text('content_name', 'Content Name')->required()
                ], 3)
            )

            ->addElement(
                AdminDisplay::tabbed([
                   'Content Text' => new \SleepingOwl\Admin\Form\FormElements([
                       AdminFormElement::ckeditor('content', 'Content Text'),
                   ]),
                    'Size and Position' => new \SleepingOwl\Admin\Form\FormElements([
                        AdminFormElement::select('width','Width',[1=>1, 2=>2, 3=>3, 4=>4, 5=>5, 6=>6, 7=>7, 8=>8, 9=>9, 10=>10, 11=>11, 12=>12])->required(),
                        AdminFormElement::radio('positionX','Horizontal Position',[1=>1, 2=>2, 3=>3, 4=>4, 5=>5, 6=>6, 7=>7, 8=>8, 9=>9, 10=>10, 11=>11, 12=>12])->required(),
                        AdminFormElement::radio('positionY','Vertical Position',[1=>1, 2=>2, 3=>3, 4=>4, 5=>5, 6=>6, 7=>7, 8=>8, 9=>9, 10=>10])->required()
                    ]),
                    'Settings' => new \SleepingOwl\Admin\Form\FormElements([
                        AdminFormElement::text('border', 'Border(for example: 1px solid black)'),
                        AdminFormElement::text('border_radius', 'Border radius(for exapmple 1px or 16px'),
                        AdminFormElement::text('color', 'Text color'),
                        AdminFormElement::select('background_color','Background', ['color' => 'Color', 'image' => 'Image']),
                        AdminFormElement::text('background_color','Color'),
                        AdminFormElement::image('background_image','Image'),
                    ]),
                ])
            )->setHtmlAttribute('id', 'pages');

            /*->addBody(



            AdminFormElement::textarea('content', 'Content Text')->setRows(3),
            AdminFormElement::select('width','Width',[1=>1, 2=>2, 3=>3, 4=>4, 5=>5, 6=>6, 7=>7, 8=>8, 9=>9, 10=>10, 11=>11, 12=>12]),
            AdminFormElement::radio('positionX','Horizontal Position',[1=>1, 2=>2, 3=>3, 4=>4, 5=>5, 6=>6, 7=>7, 8=>8, 9=>9, 10=>10, 11=>11, 12=>12]),
            AdminFormElement::radio('positionY','Vertical Position',[1=>1, 2=>2, 3=>3, 4=>4, 5=>5, 6=>6, 7=>7, 8=>8, 9=>9, 10=>10])

        );*/

    });



})
    ->addMenuPage(Content::class, 1)
    ->setIcon('fa fa-file-text-o');