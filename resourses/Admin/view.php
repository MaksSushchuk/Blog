<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>View</title>
</head>
<body>


<div class="container">

    <div class="card mt-5">
        <div class="card-body">
            <h5 class="card-title"><?=$article['title']?></h5>
            <p class="card-text"><?=$article['text']?></p>
        </div>
    </div>
</div>
<a href="../../admin" class = "mainPage"><button type="button" class="btn btn-primary">main page</button></a>
<style>

    .mainPage{
        display:block;
        display:flex;
        justify-content:center;
        margin: 50px auto;
    }

    .card-title{
        margin: 50px auto;
        text-align: center;
        width: 350px;
    }
    .card-text{
        margin: 0 140px 0 170px;
    }
</style>
</body>
</html>