<?php
use yii\helpers\Html;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h4>View Interns</h4>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>University</th>
                <th>Created_on</th>
                <th>Action</th>
            </tr>
           
        </thead>

        <tbody>
            <?php foreach($query as $val){?>
            <tr>
                <td><?= $val['id'] ?></td>
                <td><?= $val['first_name'] ?></td>
                <td><?= $val['last_name'] ?></td>
                <td><?= $val['university_id'] ?></td>
                <td><?= $val['created_on'] ?></td>
                 <td>
            <?= Html::a(
                'Update',
                ['interns/update', 'id' => $val['id']],
                ['class' => 'btn btn-primary btn-sm']
            ) ?>
              &nbsp; &nbsp;
            <?= Html::a(
                'Delete',
                ['interns/delete', 'id' => $val['id']],
                [
                    'class' => 'btn btn-danger btn-sm',
                    'data' => [
                        'confirm' => 'Are you sure you want to delete this intern?',
                        'method' => 'post',
                    ],
                ]
            ) ?>
        </td>
            </tr>
            <?php } ?>

        </tbody>


    </table>
</body>
</html>