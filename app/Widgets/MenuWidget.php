<?php

namespace App\Widgets;

use Arrilot\Widgets\AbstractWidget;
use DB; // подключение доступа к БД

class MenuWidget extends AbstractWidget
{
    /**
     * The configuration array.
     *
     * @var array
     */
    protected $config = [];

    /**
     * Treat this method as a controller action.
     * Return view() or other content to display.
     */
    public function run()
    {
        // Получние  меню в шапке
        $menuTop = DB::table('menu_items')
            ->leftJoin('menus','menu_items.menu_id','=','menus.id')
            ->leftJoin('menu_groups','menu_items.group_menu_id','=','menu_groups.id')
            ->where('menu_items.group_menu_id', '=' ,'1')
            ->get();


        return view('widgets.menu_widget', [
            'config' => $this->config,
            'menuTop' => $menuTop,
        ]);
    }
}
