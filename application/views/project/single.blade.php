@layout('layout');

@section('head')
    {{HTML::style('/css')}}
@endsection

@section('footer')
    {{HTML::script('/js/project/executor.js')}}
    {{HTML::script('/js/timeline.js')}}

@endsection

@section('content')
    <form action="/projects/update" method="post">
        <div class="panel panel-default">
            <div class="panel-heading">
                @if(isset($project))<input type="hidden" value="{{$project->id}}" name="id"/>@endif
                <div class="card card-title">
                    <input name="title" @if(isset($project))value="{{$project->title}}"
                           @endif placeholder="Put title here"/>
                </div>
                <div class="card card-img">
                    <input name="image" @if(isset($project))value="{{$project->image}}"
                           @endif placeholder="Put your image here"/>
                </div>
                <div class="card card-category">
                    <input name="category_id" @if(isset($project))value="{{$project->category}}"
                           @endif placeholder="Put category here"/>
                </div>
                <div class="card card-deadline">
                    <input type="datetime" id="datetime" name="deadline"
                           @if(isset($project))value="{{$project->deadline}}" @endif placeholder="Put deadline here"/>
                </div>
                <div class="card card-purpose">
                    <input name="purpose" @if(isset($project))value="{{$project->purpose}}"
                           @endif placeholder="Put purpose here"/>
                </div>
                <div class="card card-summary">
                    <input name="summary" @if(isset($project))value="{{$project->summary}}"
                           @endif placeholder="Put summary here"/>
                </div>
            </div>
            <div class="panel-body">
                <div id="task_holder">
                    @if(isset($tasks) && $tasks[0][0] != "Y")
                        @foreach($tasks as $column)
                            <div class="col-md-4">
                                @foreach($column as $task)

                                    <div class="panel panel-default task">
                                        <div class="panel-heading">
                                            <input type="hidden" name="task_id" value="{{$task->id}}"/>
                                            <input type="hidden" value="{{$task->project_id}}"/>
                                            <div class="row">
                                                <div class="card-title col-md-9">
                                                    <input value="{{$task->title}}" name="task_title" placeholder="Put title here"/>
                                                </div>
                                                <div class="col-md-2 tick">
                                                    <div class="checkbox check @if($task->done==1) is-checked @endif"></div>

                                                    <input type="hidden" name="task_done" value="{{$task->done}}" />
                                                </div>
                                                <div class="col-md-1">
                                                    <a href="javascript:void(0)" class="remove"><i class="fa fa-times"></i></a>
                                                </div>
                                            </div>


                                            <div class="card-category">
                                                <textarea placeholder="Put summary here" name="task_summary">{{$task->summary}}</textarea>
                                            </div>
                                            <div class="card-deadline">
                                                <input value="{{$task->deadline}}" name="task_deadline" type="text" class="datetime" />
                                            </div>
                                        </div>

                                        <div class="panel-footer">
                                            <div class="card-quotation">
                                                <p>Цитата</p>
                                            </div>
                                        </div>
                                    </div>



                                @endforeach
                            </div>


                        @endforeach
                    @endif
                </div>
                <div class="row">
                    <input type="button" class="btn-primary btn col-md-1 col-md-offset-10"
                           value="Add task" data-toggle="modal" data-target="#taskForm"/>
                </div>

            </div>

            <!-- Planner footer -->
            <div class="panel-footer">
                @if(isset($tasks) && $tasks[0][0] != "Y")
                <div>
                    <section class="cd-horizontal-timeline">
                        <div class="timeline">
                            <div class="events-wrapper">
                                <div class="events">
                                    <ul>
                                        @foreach($no_distr_tasks as $k => $task)

                                                <li><a href="#0" style="max-width: 50px;" data-date="{{date("d/n/Y", strtotime($task->deadline))}}"
                                                    @if($k == 0)
                                                       class="selected"
                                                    @endif>{{$task->title}}</a></li>

                                                <!-- other dates here -->

                                        @endforeach
                                    </ul>

                                    <span class="filling-line" aria-hidden="true"></span>
                                </div> <!-- .events -->
                            </div> <!-- .events-wrapper -->

                            <ul class="cd-timeline-navigation">
                                <li><a href="#0" class="prev inactive">Prev</a></li>
                                <li><a href="#0" class="next">Next</a></li>
                            </ul> <!-- .cd-timeline-navigation -->
                        </div> <!-- .timeline -->

                        <div class="events-content">
                            <ul>
                                @foreach($no_distr_tasks as $k => $task)

                                        <li data-date="{{date("d/n/Y", strtotime($task->deadline))}}"
                                        @if($k == 0)
                                                       class="selected"
                                        @endif>
                                            <h3>{{$task->title}}</h3>
                                            <em>{{date("M d,Y", strtotime($task->deadline))}}</em>
                                            <p>{{$task->summary}}</p>
                                        </li>


                                @endforeach


                            </ul>
                        </div> <!-- .events-content -->
                    </section>
                </div>
                @endif
                <div class="card-quotation">
                    <p>Цитата</p>
                </div>

            </div>
            <!-- Planner footer ends -->

        </div>
        <div class="row">
            <input type="submit" class="btn-primary btn col-md-3 col-md-offset-4"
                   value="@if(isset($project))Update@else Add @endif"/>
        </div>
    </form>







@endsection

@section('modal')
    <div class="modal fade" id="taskForm" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Modal title</h4>
                </div>
                <div class="modal-body">
                    <div class="card card-title">
                        <input name="task_title" placeholder="Put task title here"/>
                    </div>

                    <div class="card card-deadline">
                        <input type="datetime" class="datetime" name="task_deadline"
                               placeholder="Put task deadline here"/>
                    </div>
                    <div class="card card-summary">
                        <textarea name="task_summary" placeholder="Put task summary here" rows="3"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" id="addTask" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>

@endsection