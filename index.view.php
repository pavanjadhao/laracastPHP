<DOCTYEPE html>
<html lang="eng">
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>
       <div class="container">
            <div class="table-responsive">          
            <table class="table">
                <thead style="background:#000203;color:fff;">
                <tr>
                    <th>#</th>
                    <th>Description</th>
                    <th>Completed</th>
                </tr>
                </thead>
                <tbody>
                    <?php foreach($tasks as $task) : ?>
                        <?php if($task->completed) : ?>
                            <tr style="background:#1EB771;color:#fff;">
                                <td><?= $task->id; ?></td>
                                <td><?= $task->description; ?></td>
                                <td><?= $task->completed = "True"; ?></td>
                            </tr>
                        <?php else : ?>
                            <tr style="background:#756292;color:#fff;">
                                <td><?= $task->id; ?></td>
                                <td><?= $task->description; ?></td>
                                <td><?= $task->completed = "False"; ?></td>
                            </tr>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
            </div>
        </div>
    </body>
</html>