@layout('layout');
@section('content')
    <form action="/projects/update" method="post">
    <div class="panel panel-default">
        <div class="panel-heading">
            @if(isset($project))<input type="hidden" value="{{$project->id}}" name="id" />@endif
            <div class="card card-title">
                <input name="title" @if(isset($project))value="{{$project->title}}" @endif placeholder="Put title here" />
            </div>
            <div class="card card-img">
                <input name="image" @if(isset($project))value="{{$project->image}}" @endif placeholder="Put your image here" />
            </div>
            <div class="card card-category">
                <input name="category_id" @if(isset($project))value="{{$project->category}}" @endif placeholder="Put category here" />
            </div>
            <div class="card card-deadline">
                <input type="datetime" id="datetime" name="deadline" @if(isset($project))value="{{$project->deadline}}" @endif placeholder="Put deadline here" />
            </div>
        </div>
        <div class="panel-body">
            <div class="card card-purpose">
                <input name="purpose" @if(isset($project))value="{{$project->purpose}}" @endif placeholder="Put purpose here" />
            </div>
            <div class="card card-summary">
                <input name="summary" @if(isset($project))value="{{$project->summary}}" @endif placeholder="Put summary here" />
            </div>
        </div>
        <div class="panel-footer">
            <div class="card-quotation">
                <p>Цитата</p>
            </div>

        </div>

    </div>
        <div class="row">
            <input type="submit" class="btn-primary btn col-md-3 col-md-offset-4" value="@if(isset($project))Update@else Add @endif" />
        </div>
    </form>

@endsection