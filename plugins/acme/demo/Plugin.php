<?php namespace Acme\Demo;

use Backend;
use System\Classes\PluginBase;

/**
 * Demo Plugin Information File
 */
class Plugin extends PluginBase
{

    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'Demo',
            'description' => 'This will have our components demonstration',
            'author'      => 'Acme',
            'icon'        => 'icon-leaf'
        ];
    }

    /**
     * Registers any front-end components implemented in this plugin.
     *
     * @return array
     */
    public function registerComponents()
    {

        return [
            // 'Acme\Demo\Components\MyComponent' => 'myComponent',
            'Acme\Demo\Components\Todo' => 'todoList',
        ];
    }

    /**
     * Registers any back-end permissions used by this plugin.
     *
     * @return array
     */
    public function registerPermissions()
    {
        return []; // Remove this line to activate

        return [
            'acme.demo.some_permission' => [
                'tab' => 'Demo',
                'label' => 'Some permission'
            ],
        ];
    }

    /**
     * Registers back-end navigation items for this plugin.
     *
     * @return array
     */
    public function registerNavigation()
    {
        return []; // Remove this line to activate

        return [
            'demo' => [
                'label'       => 'Demo',
                'url'         => Backend::url('acme/demo/mycontroller'),
                'icon'        => 'icon-leaf',
                'permissions' => ['acme.demo.*'],
                'order'       => 500,
            ],
        ];
    }

}
