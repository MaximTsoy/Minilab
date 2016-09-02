<?php
/**
 * Created by PhpStorm.
 * User: MiniRaptor
 * Date: 14.08.2016
 * Time: 0:25
 */

class Project_task_Controller extends Controller{
    public $restful = true;

    public function post_updateTask(){
        if(Input::get('task_id')){
            $task = Project_task::find(Input::get('task_id'));
            if($this->own_validate($task)){
                if(Input::get('task_title')){$task->title = Input::get('task_title');}
                if(Input::get('task_summary')){$task->summary = Input::get('task_summary');}
                if(Input::get('task_parent_id')){$task->parent_id = Input::get('task_parent_id');}
                if(Input::get('task_project_id')){$task->project_id = Input::get('id');}
                if(Input::get('task_deadline')){$task->deadline = Input::get('task_deadline');}
                if(Input::get('task_done')){$task->done = Input::get('task_done');}
                $task->user_id = Session::get('user_id');

                $task->save();
                return Response::json(array(
                    'task_title' => Input::get('task_title'),
                    'task_summary' => Input::get('task_summary'),
                    'task_parent_id' => Input::get('task_parent_id'),
                    'task_deadline' => Input::get('task_deadline'),
                    'task_done' => Input::get('task_done'),
                ));
            }else{
                return $results['error'] = 'Fuck off, please :)';
            }
        }else{
            $task = new Project_task;
            $task->title = Input::get('task_title');
            $task->summary = Input::get('task_summary');
            $task->parent_id = Input::get('task_parent_id') ? Input::get('task_parent_id') : "";
            $task->project_id = Input::get('task_project_id') ? Input::get('task_project_id') : "";
            $task->deadline = Input::get('task_deadline') ? Input::get('task_deadline') : "" ;
            $task->done = Input::get('done') ? Input::get('done') : 0;
            $task->user_id = Session::get('user_id');

            $task->save();

            return Response::json(array(
                'task_title' => Input::get('task_title'),
                'task_summary' => Input::get('task_summary'),
                'task_parent_id' => Input::get('task_parent_id'),
                'task_deadline' => Input::get('task_deadline'),
                'task_done' => Input::get('task_done'),
            ));

        }
    }

    public function post_tick(){
        if(Input::get('task_id')){
            $task = Project_task::find(Input::get('task_id'));
            $task->done = Input::get('task_done');
            $task->save();
        }else{
            die("Id not received");
        }
    }

    public function post_removeTask(){
        $task = Project_task::find(Input::get('task_id'));
        if($this->own_validate($task)){
            $task->delete();
        }else{
            return $results['error'] = 'Fuck off, please :)';
        }
    }


    private function own_validate($task){
        if(Session::get('user_id') == $task->user_id){
            return true;
        }else{
            return false;
        }
    }
}