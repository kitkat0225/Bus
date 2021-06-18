<?php 
namespace App;
use Illuminate\Database\Eloquent\Model;
use App\Menu;

class Menu extends Model {

    public static function get_children ($pmenu) {
        $children = Menu::where('pid', $pmenu->id)->get();
        // die(print_r($children[0]->name));
        $new_pmenu = array(
            "id"=>$pmenu->id,
            "name"=> $pmenu->name,
            "title"=> $pmenu->title,
            "url"=> $pmenu->url,
            "pid"=> $pmenu->pid,
            "order_num"=> $pmenu->order_num,
            "icon"=> $pmenu->icon,
            "children"=> $children
        );
        // die(print_r($new_pmenu['name']));
        return $new_pmenu;
    }
}