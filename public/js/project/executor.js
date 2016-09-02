/**
 * Created by MiniRaptor on 14.08.2016.
 */

$(document).ready(function(){
    /* Button initialization */
    $("#addTask").click(function(){
        var title = $("input[name='task_title']").val();
        var summary = $("textarea[name='task_summary']").val();
        var deadline = $("input[name='task_deadline']").val();
        var projectid = $("input[name='id']").val();

        /* Sending new task data */
        $.ajax({
            method: "POST",
            url: "/projects/task_update",
            data: {task_title: title, task_summary: summary, task_deadline: deadline, task_project_id: projectid},
            dataType: "json",

            success: function(){
                $("#task_holder").load("/projects/single/project #task_holder", 'id='+projectid);
            }
        });

        /* Close the Modal */
        $("#taskForm").modal('toggle');

    });


    /* ---Checkboxes activate--- */
    $('.task').dblclick(function(){
        $(this).find(".checkbox").eq(0).toggleClass('is-checked');
        if($(this).find("[name='task_done']").val() == "1"){
            $(this).find("[name='task_done']").val("0");
        }else{
            $(this).find("[name='task_done']").val("1");
        }

        var done = $(this).find("[name='task_done']").val();
        var id = $(this).find("[name='task_id']").val();

        $.ajax({
            method: "POST",
            url: "/projects/task_tick",
            data: {task_done: done, task_id: id}
        })
    });

    /* Update tasks */
    $(".task input, .task textarea").change(function(){
        var name = $(this).attr('name');
        var data = {};
        data['task_id'] = $(this).closest('.task').find("[name='task_id']").val();
        data[name] = $(this).val();
        $.ajax({
            method: "POST",
            url: "/projects/task_update",
            data: data
        })

    });

    $(".datetime").each(function(){
        $(this).on('dp.change', function(){
            var data = {};
            data['task_id'] = $(this).closest('.task').find("[name='task_id']").val();
            data['task_deadline'] = $(this).val();
            $.ajax({
                method: "POST",
                url: "/projects/task_update",
                data: data
            })
        })
    })

    /* Task Remove */
    $(".task .remove").click(function(){
        $(this).closest(".task").remove();
        var id = $(this).closest('.task').find("[name='task_id']").val();
        $.ajax({
            method: "POST",
            url: "/projects/task_remove",
            data: {task_id: id}
        })
    })

});