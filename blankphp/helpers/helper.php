<?php
if (! function_exists('app')) {
    function app($abstract)
    {
        if (class_exists($abstract) || interface_exists($abstract))
            return \Blankphp\Application::getInstance()->make($abstract);
        else
            return \Blankphp\Application::getInstance()->getSignal($abstract);
    }
}

if (! function_exists('config')) {
    function config($name)
    {
        return \Blankphp\Application::getInstance()->getSignal('config')[$name];
    }
}


if (! function_exists('view')) {
    function view($view = null, $data = [])
    {
        $factory = app(\Blankphp\Contract\View::class);
        if (func_num_args() === 0) {
            return $factory;
        }
        return $factory->view($view, $data);
    }
}
