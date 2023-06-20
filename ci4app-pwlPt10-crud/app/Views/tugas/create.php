<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create New Tugas</title>
    <link rel="stylesheet" href="<?= base_url('/css/bootstrap.min.css') ?>">
    <style>
        body {
            background-color: #f2f2f2;
        }

        .container {
            max-width: 400px;
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

        .form-label {
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
        <h1>Create New Tugas</h1>
        <form action="<?= base_url('/tugas/store') ?>" method="POST">
            <div class="mb-3">
                <label for="tugas" class="form-label">Tugas</label>
                <input type="text" name="tugas" id="tugas" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="deadline" class="form-label">Deadline</label>
                <input type="date" name="deadline" id="deadline" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-custom">Submit</button>
        </form>
    </div>
</body>

</html>