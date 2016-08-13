@layout('layout');
@section('content')
<div class="row">
    @foreach($results['projects'] as $column)
        <div class="col-md-4">
            @foreach($column as $project)

                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="card-title col-md-11">
                                    <a href="{{URL::to_route('single_project')}}?id={{$project->id}}">{{$project->title}}</a>
                                </div>
                                <div class="col-md-1">
                                    <a href="{{URL::to_route('remove_project')}}?id={{$project->id}}"><i class="fa fa-times"></i></a>
                                </div>
                            </div>


                            <div class="card-category">
                                {{$project->category}}
                            </div>
                            <div class="card-deadline">
                                {{$project->deadline}}
                            </div>
                        </div>
                        @if(isset($project->image))
                        <div class="panel-body">
                            <div class="card-img">
                                <img src="{{$project->image}}" />
                            </div>
                        </div>
                        @endif
                        <div class="panel-footer">
                            <div class="card-quotation">
                                <p>Цитата</p>
                            </div>
                        </div>
                    </div>



            @endforeach
        </div>


    @endforeach
</div>

    <div id="addProject" class="row">
        <div class="col-md-4 col-md-offset-4">
            <center>
                <a href="{{URL::to_route('add_project')}}" class="myIcon icon-primary">
                    <i class="fa fa-plus"><p class="text-darkgray" style="width: 200px; margin-left: -75px;">New Project</p></i></a>
            </center>
        </div>

    </div>

@endsection