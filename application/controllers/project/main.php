<?php
/**
 * Created by PhpStorm.
 * User: MiniRaptor
 * Date: 28.07.2016
 * Time: 21:44
 */

class Project_main_Controller extends Controller{
    public $restful = true;

    public function get_index(){

        $project = new Project_project;

        $results['projects'] = $project->getProjects('urgent',20);
        $results['projects'] = $this->project_distribute($results['projects'], 3);

        return View::make('project.index')->with('results', $results);
    }

    public function get_single(){
        $project = Project_project::find(Input::get('id'));
        $tasks  =   new Project_task;
        $tasks = $tasks->getByProject(Input::get('id'));
        $tasks = $this->project_distribute($tasks, 3);
        if(Session::get('user_id') == $project->user_id){
            return View::make('project.single')
                ->with('tasks', $tasks)
                ->with('project', $project);
        }else{
            return Redirect::to_route('projects')
                ->with('notification', 'This is not your project');
        }
    }

    public function get_addProject(){
        return View::make('project.single');
    }

    public function get_removeProject(){
        $project = new Project_project;
        $project = $project->find(Input::get('id'));
        if($this->own_validate($project)){
            $project->delete();
            return Redirect::to('/projects');
        }else{
            return $results['error'] = 'Fuck off, please :)';
        }
    }

    public function post_updateProject(){
        $project = new Project_project;

        if(Input::get('id')){
            $project = $project->find(Input::get('id'));

            if($this->own_validate($project)){
                $project->title = Input::get('title');
                $project->summary = Input::get('summary');
                $project->image = Input::get('image');
                $project->deadline = Input::get('deadline');
                $project->purpose = Input::get('purpose');
                $project->category_id = Input::get('category_id');
                $project->user_id = Session::get('user_id');

                $project->save();
                return Redirect::to('/projects');
            }else{
                return $results['error'] = 'Fuck off, please :)';
            }
        }else{
            $project->title = Input::get('title');
            $project->summary = Input::get('summary');
            $project->image = Input::get('image');
            $project->deadline = Input::get('deadline');
            $project->purpose = Input::get('purpose');
            $project->category_id = Input::get('category_id');
            $project->user_id = Session::get('user_id');

            $project->save();
            return Redirect::to('/projects');
        }

    }

    /**
     * Distribute projects by columns like Pinterest
     * @param $data
     * @param $columns
     * @return array
     */
    private function project_distribute($data, $columns){
        $result = array();
        for($i = 0; $i < $columns; $i++){
            for($j = 0; $j < sizeof($data); $j++){
                if(($j % $columns) == $i){
                    $result[$i][] = $data[$j];
                }
            }
        }

        return $result;

    }

    private function own_validate($project){
        if(Session::get('user_id') == $project->user_id){
            return true;
        }else{
            return false;
        }
    }
}