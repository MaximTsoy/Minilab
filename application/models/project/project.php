<?php
/**
 * Created by PhpStorm.
 * User: MiniRaptor
 * Date: 28.07.2016
 * Time: 22:07
 */


/**
 * Class Project
 * in future should be fixed with polymorphism in Laravel 5
 */
class Project_project extends Eloquent
{
    public static $table = 'projects';

    public function getProjects($param, $criteria = 0)
    {
        switch ($param) {
            case 'urgent':

                //DateTime($year."-".$month."-01",new DateTimeZone("Asia/Almaty"));

                return $this->where('user_id', '=', Session::get('user_id'))
                    ->where_null('parent_id')
                    ->order_by('deadline', 'ASC')
                    ->take($criteria)
                    ->get();
                break;

            case 'latest':
                return $this->where('user_id', '=', Session::get('user_id'))
                    ->take($criteria)
                    ->get();
                break;

            case 'all':
                return $this->where('user_id', '=', Session::get('user_id'))
                    ->get();

                break;

            case 'byCategory':
                return $this->where('user_id', '=', Session::get('user_id'))
                    ->where('category_id', '=', $criteria)
                    ->get();
                break;

        }
    }

}