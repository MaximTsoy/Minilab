<?php
/**
 * Created by PhpStorm.
 * User: MiniRaptor
 * Date: 14.08.2016
 * Time: 0:28
 */

class Project_task extends Eloquent
{
    public static $table = 'tasks';

    public function getByProject($id){
        if($result = $this->where('user_id', '=', Session::get('user_id'))
            ->where('project_id', '=', $id)
            ->get()){
            return $result;
        }else{
            return "You do not have any tasks";
        }

    }

}