<?php


use SleepingOwl\Admin\Model\ModelConfiguration;
use App\Admin\Model\Mains;

AdminSection::registerModel(Mains::class, function (ModelConfiguration $model) {

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
    $model->onCreateAndEdit(function() {
        return $form = AdminForm::panel()->addBody(
            AdminFormElement::hidden('id','id'),
            AdminFormElement::checkbox('published', 'Published'),
            AdminFormElement::text('menu', 'menu')->required()->unique(),
            AdminFormElement::text('header', 'header'),
            AdminFormElement::textarea('text', 'text')->setRows(2),
/*            AdminFormElement::select('background','background',['image'=>'image','color'=>'color']),
            AdminFormElement::image('image','image'),*/
            AdminFormElement::text('background','color')

        );

    });

    $model->creating(function(ModelConfiguration $model, Mains $mains) {
        $request = Request::all();
/*        empty($request['color']) || $request['color']=='#123456' ? $request['background'] = $request['image'] : $request['background'] = $request['color'];
        unset($request['color']);
        unset($request['image']);*/
        $mains::create($request);

        Session::flash('successMains', 'Done !');

        return false;
    });

    $model->updating(function(ModelConfiguration $model, Mains $mains) {
        $request = Request::all();
        //empty($request['color']) || $request['color']=='#123456' ? $request['background'] = $request['image'] : $request['background'] = $request['color'];

        $mains::where('id',$request['id'])->update(['text' => $request['text'], 'menu' => $request['menu'],
            'background' => $request['background'], 'header' => $request['header'], 'published' => $request['published']]);

        return false;
    });


})
    ->addMenuPage(Mains::class, 0)
    ->setIcon('fa fa-bank');