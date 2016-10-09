<?php


use SleepingOwl\Admin\Model\ModelConfiguration;
use App\Admin\Model\Content;
use App\Admin\Model\Mains;


AdminSection::registerModel(Content::class, function (ModelConfiguration $model) {

    // Display
    $model->onDisplay(function () {
        $display = AdminDisplay::table()->setColumns([
            AdminColumn::link('menu')->setLabel('Title')->setWidth('400px'),
            AdminColumn::image('background')
                ->setLabel('Photo<br/><small>(image)</small>')
                ->setWidth('100px'),
        ]);
        $display->paginate(15);
        return $display;
    });
    // Create And Edit
    $model->onCreateAndEdit(function(Mains $mains) {
        $pages = $mains::select('id','menu')->get();
        $pageForSelect = [];
        foreach($pages as $v)
        {
            $pageForSelect[$v->id] = $v->menu;
        }

        return $form = AdminForm::panel()->addBody(
            
            AdminFormElement::select('mains_id', 'Page', $pageForSelect),
            AdminFormElement::text('content_name', 'Content Name'),
            AdminFormElement::textarea('content', 'Content Text')->setRows(3),
            AdminFormElement::radio('positionX','Horizontal Position',[1=>1, 2=>2, 3=>3, 4=>4, 5=>5, 6=>6, 7=>7, 8=>8, 9=>9, 10=>10, 11=>11, 12=>12]),
            AdminFormElement::radio('positionY','Vertical Position',[1=>1, 2=>2, 3=>3, 4=>4, 5=>5, 6=>6, 7=>7, 8=>8, 9=>9, 10=>10, 11=>11, 12=>12])

        );

    });



})
    ->addMenuPage(Content::class, 0)
    ->setIcon('fa fa-file-text-o');