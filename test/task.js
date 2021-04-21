$(document).ready(function() {
    // Show Tasks
    function loadTasks() {
        $.ajax({
            url: "show_tasks.php",
            type: "POST",
            success: function(data) {
                $("#tasks").html(data);
            }
        });
    }

    // Show Tasks done
    function loadTasksDone() {
        $.ajax({
            url: "show_tasksDone.php",
            type: "POST",
            success: function(data) {
                $("#tasks_done").html(data);
            }
        });
    }

    // Add Task
    $("#addBtn").on("click", function(e) {
        e.preventDefault();

        var task = $("#taskValue").val();

        $.ajax({
            url: "addtask.php",
            type: "POST",
            data: { task: task },
            success: function(data) {
                console.log(data);
                loadTasks();
                $("#taskValue").val('');
                if (data == 0) {
                    alert("Something wrong went. Please try again.");
                }
            }
        });
    });

    // Remove Task
    $(document).on("click", "#removeBtn", function(e) {
        e.preventDefault();
        var id = $(this).data('id');

        $.ajax({
            url: "delete_task.php",
            type: "POST",
            data: { id: id },
            success: function(data) {
                loadTasks();
                if (data == 0) {
                    alert("Something wrong went. Please try again.");
                }
            }
        });
    });


    // Remove TaskDone
    $(document).on("click", "#removeBtnDone", function(e) {
        e.preventDefault();
        var id = $(this).data('id');

        $.ajax({
            url: "delete_taskDone.php",
            type: "POST",
            data: { id: id },
            success: function(data) {
                loadTasksDone();
                if (data == 0) {
                    alert("Something wrong went. Please try again.");
                }
            }
        });
    });

    // Done Task
    $(document).on("click", "#doneBtn", function(e) {
        e.preventDefault();
        var id = $(this).data('id');

        // $.ajax({
        //     url: "php/delete_task.php",
        //     type: "POST",
        //     data: {id: id},
        //     success: function(data) {
        //         loadTasks();
        //         if (data == 0) {
        //             alert("Something wrong went. Please try again.");
        //         }
        //     }
        // });

        $.ajax({
            url: "done_task.php",
            type: "POST",
            data: { id: id },

            success: function(data) {
                loadTasks();
                loadTasksDone();
                if (data == 0) {
                    alert("Something wrong went. Please try again.");
                }
            }
        });



    });
});