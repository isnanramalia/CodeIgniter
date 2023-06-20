<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas List</title>
    <link rel="stylesheet" href="<?= base_url('/css/bootstrap.min.css') ?>">
    <style>
        body {
            background-color: #f2f2f2;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #333;
        }

        .btn-custom {
            background-color: #17a2b8;
            color: #fff;
            border: none;
            transition: background-color 0.3s;
        }

        .btn-custom:hover {
            background-color: #138496;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Tugas List</h1>
        <a href="<?= base_url('/tugas/create') ?>" class="btn btn-custom mb-3">Create New Tugas</a>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Tugas</th>
                    <th scope="col">Deadline</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($tugas as $row) : ?>
                    <tr>
                        <th scope="row"><?= $row['id'] ?></th>
                        <td><?= $row['nama_tugas'] ?></td>
                        <td><?= $row['deadline'] ?></td>
                        <td>
                            <a href="<?= base_url('/tugas/edit/' . $row['id']) ?>" class="btn btn-warning btn-sm">Edit</a>
                            <a href="<?= base_url('/tugas/delete/' . $row['id']) ?>" onclick="return confirm('Are you sure you want to delete this?')" class="btn btn-danger btn-sm">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>

</html>