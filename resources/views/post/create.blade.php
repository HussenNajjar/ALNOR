<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .forms {
            background-color: #122e6b;
            width: 350px;
            height: 350px;
            display: flex;
            margin-left: 40%;
            justify-content: center;
            margin-top: 15%;

        }

        .form-floating {
            padding: 25px;
            margin-top: 50px;
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>

<body>

    <h1>Create Post</h1>



    <div class="forms">


    <form action="{{ route('post.store') }}" method="post" enctype="multipart/form-data">
    @csrf

    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">title</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="title" name="title">
    </div>
    <div class="mb-3">
        <textarea class="form-control" name="contents" placeholder="contents" id="floatingTextarea"></textarea>
        <label for "floatingTextarea">contents</label>
    </div>

    <div class="mb-3">
        <input type="file" class="form-control" name="video" aria-label="file example" required>
        <div class="invalid-feedback">video</div>
    </div>

    <div class="d-grid gap-2">
        <button class="btn btn-primary" type="submit">send</button>
    </div>
</form>

    </div>
</body>

</html>