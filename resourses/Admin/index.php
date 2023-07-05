<?php
require_once __DIR__ . '/../layout_header.php';

?>
<body>
    
<div class="container">

<a  class = 'addButton' href="http://blogmain/admin/create?>"><button class = 'btn btn-primary'>Add article</button></a>

<table class="table">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Title</th>
        <th scope="col">Text</th>
        
        <th scope="col"></th>
        <th scope="col"></th>
        <th scope="col"></th>

        <th scope="col ">Actions</th>
    </tr>
    </thead>
    <tbody>
    <?php
    function truncateText($text, $maxLength) {
        if (strlen($text) > $maxLength) {
            $text = substr($text, 0, $maxLength) . '...';
        }
        return $text;
    }
    ?>
    <?php foreach ($articles as $article):?>
    <tr>
        <th scope="row"><?= $article['id']?></th>
        <td><?= truncateText($article['title'],50)?></td>
        <td><?= truncateText($article['text'],40)?></td>
        <td></td>
        <td><a href="http://blogmain/admin/<?=$article['id']?>"><i class="fa-solid fa-eye"></i></a></td>
        <td><a href="http://blogmain/admin/edit/<?=$article['id']?>"><i class="fa-solid fa-plus"></i></a></td>
        <td><a href="http://blogmain/admin/delete/<?=$article['id']?>"><i class="fa-solid fa-trash"></i></a></td>

        
    </tr>
    <?php endforeach;?>
    </tbody>
</table>

    <style>
        .addButton{
            display: flex;
            justify-content: center;
        }
        .container{
            margin-top: 150px;
            width: 1200px;
        }
    </style>
</div>

<?php
require_once __DIR__ . '\..\layout_footer.php';
?>