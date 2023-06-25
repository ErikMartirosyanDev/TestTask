<?php


abstract class BaseController
{
    public function view($name, $data = []) {
        $view = new stdClass();

        $view->name = $name;
        $view->data = $data;

        return $view;
    }
}