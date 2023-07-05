<?php
require_once __DIR__ . '/../layout_header.php';
use Model\Article;

?>
<div class="container">
<form method = "POST" >
  <div class="form-group" >
    <label for="exampleInputEmail1">Title</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name = 'title' placeholder="Enter title">
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Text</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name = "text"></textarea>
  </div>
  <div class="btnCreate">
    <button type="submit" class="btn btn-primary">Submit</button>
    <a href="../../admin"><button type="button" class="btn btn-primary">main page</button></a>
  </div>
</form>
</div>
<style>
  .btnCreate{
        margin-top: 30px;
        display:flex;
        justify-content:center;
    }
    .btn{
      margin-right:30px;
    }
    .container{
        margin-top: 200px;
        width:800px;
    }
</style>
<?php
if(($_POST['title'] != null) && ($_POST['text'] != null) ){
  Article::add($_POST['title'],$_POST['text']);
}

?>
<?php
require_once __DIR__ . '\..\layout_footer.php';
?>