<?php
include "headerAndSidebar.php";
require_once("../../Controllers/CategoriesController.php");

$Categories= new CategoriesController();

$do=isset($_GET['do'])?$_GET['do']:'manage';
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <div class="container-full">
        <!-- Content Header (Page header) -->
        <div class="content-header">
                <div class="d-flex align-items-center">

                </div>
            </div>
        <!-- Main content -->
        <section class="content">
            <div class="row">
    <?php
if(isset($_POST['add_cat']) && $_GET['do']=='add_cat'){

    if($_SERVER['REQUEST_METHOD']=='POST')
    {

        $feedback= $Categories->insertCategory($_POST);
        $result= json_decode($feedback,true);


        if($result['feedback_id'] == 3)
            echo  '<h5 class="alert alert-success">'.$result['feedback_message'].'</h5>';

        elseif ($result['feedback_id'] ==  4)
            echo  '<h5 class="alert alert-danger">'.$result["feedback_message"].'</h5>';
        elseif ($result['feedback_id'] ==5)
            echo  '<h5 class="alert alert-danger">'.$result["feedback_message"].'</h5>';


    }

    else {
        echo  '<h5 class="alert alert-danger">+عفواً ... لايمكنك الوصول الى هذه الصفحة مباشرة</h5>';
    }
}
elseif(isset($_POST['update_cat']) && $_GET['do']=='update_cat'){

       if($_SERVER['REQUEST_METHOD'] == 'POST') {

           $feedback = $Categories->updateCategory($_POST);
           $result= json_decode($feedback,true);
           if($result['feedback_id'] ==1)
               echo  '<h5 class="alert alert-success">'.$result['feedback_message'].'</h5>';

           elseif ($result['feedback_id'] ==0)
               echo  '<h5 class="alert alert-danger">'.$result["feedback_message"].'</h5>';
           }
         else {
           echo  '<h5 class="alert alert-success">عفواً ... لايمكنك الوصول الى هذه الصفحة مباشرة</h5>';

              }
}
elseif($_GET['do']=='transferCatToTrash'){
    $catId =isset($_GET['catId']) && is_numeric($_GET['catId'])?intval($_GET['catId']):0;
    $Categories->transferCatToTrash($catId);
}
elseif(isset($_GET['do'])=='deleteCat'){
    $catId =isset($_GET['catId']) && is_numeric($_GET['catId'])?intval($_GET['catId']):0;
    $feedback =$Categories->deleteCategory($catId);
    $result = json_decode($feedback,true);

    if($result['feedback_id'] == 6)
        echo  '<h5 class="alert alert-success">'.$result['feedback_message'].'</h5>';
    elseif($result['feedback_id'] == 7)
        echo  '<h5 class="alert alert-danger">'.$result['feedback_message'].'</h5>';

}



else{
    echo  '<h5 class="alert alert-success">راجع روحك</h5>';


}

?>








            </div>
            <!-- /.row -->
        </section>
        <!-- /.content -->



    </div>
</div>
<!-- /.content-wrapper -->


<?php
include "footer.php";
?>
