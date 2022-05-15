<?php

namespace App\Admin\Controllers;

use App\Models\Settings;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class SettingController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Settings';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Settings());

        $grid->column('id', __('Id'));
        $grid->column('logo', __('Logo'))->image(config('app.url').'uploads',50,50); 
                                            // to visualise logo in admin panel settings table
                                            // we define the path to avoid confusion
                                            // althogh we can get rid of the path beacuse we defined the path 
                                            // in the filesystem.php file
        $grid->column('home_title', __('Home title'));
        $grid->column('home_text', __('Home text'));
        $grid->column('contact_email', __('Contact email'));
        $grid->column('contact_number', __('Contact number'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(Settings::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('logo', __('Logo'));
        $show->field('home_title', __('Home title'));
        $show->field('home_text', __('Home text'));
        $show->field('contact_email', __('Contact email'));
        $show->field('contact_number', __('Contact number'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Settings());

        $form->image('logo', __('Logo'));
        $form->text('home_title', __('Home title'));
        $form->text('home_text', __('Home text'));
        $form->text('contact_email', __('Contact email'));
        $form->text('contact_number', __('Contact number'));

        return $form;
    }
}
