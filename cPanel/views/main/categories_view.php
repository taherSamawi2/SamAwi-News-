<?php
include "headerAndSidebar.php";
require_once("../../Controllers/CategoriesController.php");
require_once("../../Controllers/PostsController.php");

    $Categories = new CategoriesController();
    $Posts = new PostsController();


$do=isset($_GET['do'])?$_GET['do']:'manage';
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <div class="container-full">
<?php
if($do == 'manage'){
?>
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="d-flex align-items-center">
                <div class="mr-auto">

                    <h3 class="page-title">إدارة التصنيفات  </h3>
                    <div class="d-inline-block align-items-center">
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
                                <li class="breadcrumb-item" aria-current="page">إدارة التصنيفات </li>
                                <li class="breadcrumb-item active" aria-current="page"> عرض</li>
                            </ol>
                        </nav>
                    </div>
                </div>
<!--                <div class="right-title">-->
<!--                    <div class="dropdown">-->
<!--                        <button class="btn btn-outline dropdown-toggle no-caret" type="button" data-toggle="dropdown"><i class="mdi mdi-dots-horizontal"></i></button>-->
<!--                        <div class="dropdown-menu dropdown-menu-right">-->
<!--                            <a class="dropdown-item" href="#"><i class="mdi mdi-share"></i>Activity</a>-->
<!--                            <a class="dropdown-item" href="#"><i class="mdi mdi-email"></i>Messages</a>-->
<!--                            <a class="dropdown-item" href="#"><i class="mdi mdi-help-circle-outline"></i>FAQ</a>-->
<!--                            <a class="dropdown-item" href="#"><i class="mdi mdi-settings"></i>Support</a>-->
<!--                            <div class="dropdown-divider"></div>-->
<!--                            <button type="button" class="btn btn-success">Submit</button>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
            </div>
        </div>
        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-12">
                    <div class="box">
                        <div class="box-header with-border">
                          <a href="categories_view.php?do=add"><button type="button" class="btn btn-success mb-5 pull-right"><i class="fa fa-plus"></i> اضافـة تصنيف جديد </button></a>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="table-responsive">
                                <table id="example1" class="table table-bordered table-striped text-center">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>اسم التصنيف</th>
                                        <th>الوصف</th>
                                        <th>نوع التصنيف</th>
                                        <th>التصنيف الأب</th>
                                        <th>عدد المقالات</th>
                                        <th>اخر تحديث بواسطة</th>
                                        <th>وقت اخر تحديث</th>
                                        <th>تعديل</th>
                                        <th>حذف </th>
                                        <th>الحالة </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    foreach ($Categories->getAllActiveCategories() as $cat){
                                        echo "<tr>";
                                        //col-1
                                        echo "<td>".  $cat->cat_id . "</td>";
                                        //col-2
                                        echo "<td>".  $cat->cat_name . "</td>";
                                        //col-3
                                        if($cat->cat_description!=null){
                                            echo "<td>". $cat->cat_description. "</td>";
                                        }
                                        else{
                                            echo "<td>—</td>";
                                        }


                                        //col-4 //col-5
                                        if($cat->parent == 0)
                                        {
                                            //col-4
                                            echo "<td>رئيسي</td>";
                                            //col-5
                                            echo "<td>—</td>";
                                        }
                                        else
                                        {
                                            //col-4
                                            echo "<td>فرعي</td>";
                                            //col-5
                                            foreach ($Categories->getNameCatByIdCat($cat->parent) as $catParent) {
                                                echo "<td>" . $catParent->cat_name . "</td>";
                                            }
                                        }
                                        //col-6
                                        foreach ($Posts->getCountRow($cat->cat_id) as $post){
                                            echo "<td>".  $post->countRow ."</td>";
                                        }
                                        //col-7
                                        echo "<td>".  $cat->create_date . "</td>";
                                        //col-8
                                        echo "<td>".  $cat->create_date . "</td>";

                                        //col-9
                                        echo "<td>
                                           <a href='categories_view.php?do=edit&catId=$cat->cat_id'> <i class='fa  fa-pencil-square-o text-info'></i></a>
                                        </td>";

                                        //col-10
                                        echo "<td>
                                            <a href='feedback.php?do=transferCatToTrash&catId=$cat->cat_id' name='transferCatToTrash'> <i class='fa fa-trash-o text-danger '></i></a>
                                        </td>";
                                        //col-11
                                        if($cat->visibility == 1 ){
                                            echo "<td><a href='categories_view.php?do=hideCat&catId=$cat->cat_id'><i class='fa fa-eye text-success'></i></a>
                                        </td>";
                                        }else {
                                            echo "<td><a href='categories_view.php?do=displayCat&catId=$cat->cat_id'><i class='fa  fa-eye-slash text-danger '></i></a>
                                        </td>";
                                        }
                                        echo "</tr>";
                                    }
                                    ?>

                                    </tbody>
<!--                                    <tfoot>-->
<!--                                    <tr>-->
<!--                                        <th>Name</th>-->
<!--                                        <th>Position</th>-->
<!--                                        <th>Office</th>-->
<!--                                        <th>Age</th>-->
<!--                                        <th>Start date</th>-->
<!--                                        <th>Salary</th>-->

<!--                                    </tr>-->
<!--                                    </tfoot>-->
                                </table>

                            </div>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </section>
        <!-- /.content -->
<?php
}

elseif($do == 'add'){ ?>
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="d-flex align-items-center">
            <div class="mr-auto">
                <h3 class="page-title"> التصنيفات</h3>
                <div class="d-inline-block align-items-center">
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
                            <li class="breadcrumb-item active" aria-current="page">إضافة تصنيف جديد </li>
                        </ol>
                    </nav>
                </div>
            </div>
<!--            <div class="right-title">-->
<!--                <div class="dropdown">-->
<!--                    <button class="btn btn-outline dropdown-toggle no-caret" type="button" data-toggle="dropdown"><i class="mdi mdi-dots-horizontal"></i></button>-->
<!--                    <div class="dropdown-menu dropdown-menu-right">-->
<!--                        <a class="dropdown-item" href="#"><i class="mdi mdi-share"></i>Activity</a>-->
<!--                        <a class="dropdown-item" href="#"><i class="mdi mdi-email"></i>Messages</a>-->
<!--                        <a class="dropdown-item" href="#"><i class="mdi mdi-help-circle-outline"></i>FAQ</a>-->
<!--                        <a class="dropdown-item" href="#"><i class="mdi mdi-settings"></i>Support</a>-->
<!--                        <div class="dropdown-divider"></div>-->
<!--                        <button type="button" class="btn btn-success">Submit</button>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
        </div>

    </div>

    <!-- Main content -->
    <section class="content">

        <div class="box box-default">

            <div class="box-body">
                <form action="feedback.php?do=add_cat" method="POST" class="">
                    <section>
                        <div class="row">
                            <div class="col-md-8">
                                <!-- <input type="hidden" name="update_by" value="--><?php //echo $_SESSION['user_name'];?><!--">-->
                                 <input type="hidden" name="create_by" value="<?php echo 'taher';?>">

                                <div class="form-group">
                                    <label for="cat_name"> اسم التصنيف</label>
                                    <input type="text" class="form-control required" id="cat_name" name="cat_name" value="">
                                </div>
                                <div class="form-group">
<!--                                    <label for="ordering"> ترتيب التصنيف</label>-->
                                    <input type="hidden" name="ordering" class="form-control required" id="ordering" name="cat_name" >
                                </div>

                                <div class="form-group">
                                    <label for="parent">التصنيف الأب</label>
                                    <select class="custom-select form-control required" id="parent" name="parent">
                                        <?php
                                        echo '<option value="0">بدون</option>';
                                        foreach( $Categories->getAllCategories() as $allCat)
                                        {
                                            echo "<option value='".$allCat->cat_id."'";
                                            echo ">".$allCat->cat_name."</option>";
                                        }
                                        ?>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="cat_description">الوصف</label>
                                    <textarea name="cat_description" id="cat_description" rows="6" class="form-control" ></textarea>
                                </div>


                            </div>


                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>هل تريد ان يكون التصنيف مرئي :</label>
                                    <input name="visibility" type="radio" id="vis-yes" value="1">
                                    <label for="vis-yes" class="block">نعم</label>
                                    <input name="visibility" type="radio" id="vis-no" value="0">
                                    <label for="vis-no">لا</label>
                                </div>

                                <div class="form-group">
                                    <label>هل تريد السماح بالتعليقات في هذا التصنيف :</label>
                                    <input name="allow_comments" type="radio" id="comm-yes" value="1" >
                                    <label for="comm-yes" class="block">نعم</label>
                                    <input name="allow_comments" type="radio" id="comm-no" value="0" >
                                    <label for="comm-no">لا</label>
                                </div>

                                <div class="form-group">
                                    <label>هل تريد ان تظهر الاعلانات في هذا التصنيف :</label>
                                    <input name="allow_ads" type="radio" id="ads-yes" value="1">
                                    <label for="ads-yes" class="block">نعم</label>
                                    <input name="allow_ads" type="radio" id="ads-no" value="0" >
                                    <label for="ads-no">لا</label>
                                </div>

                            </div>


                        </div>
                    </section>
                    <!-- /.box-body -->
                    <div class="box-footer pull-right">
                        <a href="categories_view.php">
                            <button type="button" class="btn btn-danger  mr-1 ">
                                <i class="ti-trash"></i> اغلاق
                            </button></a>
                        <input type="submit" name="add_cat" class="btn btn-success "> <i class="ti-save-alt"> </i>
                            اضافة تصنيف جديد
                        </input>
                    </div>
                </form>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </section>
    <!-- /.content -->
    <?php
}
elseif($do == 'edit') {
            $catId =isset($_GET['catId']) && is_numeric($_GET['catId'])?intval($_GET['catId']):0;
            foreach ($Categories->getDataOfCategories($catId) as $cat){
        ?>
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="d-flex align-items-center">
                <div class="mr-auto">
                    <h3 class="page-title"> التصنيفات</h3>
                    <div class="d-inline-block align-items-center">
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
                                <li class="breadcrumb-item active" aria-current="page">تحرير التصنيف </li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <div class="right-title">
                    <div class="dropdown">
                        <button class="btn btn-outline dropdown-toggle no-caret" type="button" data-toggle="dropdown"><i class="mdi mdi-dots-horizontal"></i></button>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="#"><i class="mdi mdi-share"></i>Activity</a>
                            <a class="dropdown-item" href="#"><i class="mdi mdi-email"></i>Messages</a>
                            <a class="dropdown-item" href="#"><i class="mdi mdi-help-circle-outline"></i>FAQ</a>
                            <a class="dropdown-item" href="#"><i class="mdi mdi-settings"></i>Support</a>
                            <div class="dropdown-divider"></div>
                            <button type="button" class="btn btn-success">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Main content -->
        <section class="content">

        <div class="box box-default">

            <div class="box-body">
                <form action="feedback.php?do=update_cat" method="POST" class="">
                    <section>
                        <div class="row">
                            <input type="hidden" name="cat_id" value="<?php echo $cat->cat_id;?>">
<!--                            <input type="hidden" name="update_by" value="--><?php //echo $_SESSION['user_name'];?><!--">-->
                            <input type="hidden" name="update_by" value="<?php echo 'taher';?>">
                            <input type="hidden" name="update_date" value="<?php echo date("Y-m-d h:i:sa");?>">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="cat_name"> اسم التصنيف</label>
                                    <input type="text" class="form-control required" id="cat_name" name="cat_name" value="<?php echo $cat->cat_name;?>">
                                </div>

                                <div class="form-group">
                                    <label for="parent">التصنيف الأب</label>
                                    <select class="custom-select form-control required" id="parent" name="parent">
                                        <?php
                                        echo '<option value="0">بدون</option>';
                                        foreach( $Categories->getAllCategories() as $allCat)
                                        {
                                            echo "<option value='".$allCat->cat_id."'";
                                            if($allCat->cat_id == $cat->parent){echo "selected";}
                                            echo ">".$allCat->cat_name."</option>";
                                        }
                                        ?>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="cat_description">الوصف</label>
                                    <textarea name="cat_description" id="cat_description" rows="6" class="form-control" ><?php echo $cat->cat_description?></textarea>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>هل تريد ان يكون التصنيف مرئي :</label>
                                    <input name="visibility" type="radio" id="vis-yes" value="1" <?php if($cat->visibility==1){echo 'checked';}?>>
                                    <label for="vis-yes" class="block">نعم</label>
                                    <input name="visibility" type="radio" id="vis-no" value="0" <?php if($cat->visibility==0){echo 'checked';}?>>
                                    <label for="vis-no">لا</label>
                                </div>

                                <div class="form-group">
                                    <label>هل تريد السماح بالتعليقات في هذا التصنيف :</label>
                                    <input name="allow_comments" type="radio" id="comm-yes" value="1" <?php if($cat->allow_comments==1){echo 'checked';}?>>
                                    <label for="comm-yes" class="block">نعم</label>
                                    <input name="allow_comments" type="radio" id="comm-no" value="0" <?php if($cat->allow_comments==0){echo 'checked';}?>>
                                    <label for="comm-no">لا</label>
                                </div>

                                <div class="form-group">
                                    <label>هل تريد ان تظهر الاعلانات في هذا التصنيف :</label>
                                    <input name="allow_ads" type="radio" id="ads-yes" value="1" <?php if($cat->allow_ads==1){echo 'checked';}?>>
                                    <label for="ads-yes" class="block">نعم</label>
                                    <input name="allow_ads" type="radio" id="ads-no" value="0" <?php if($cat->allow_ads==0){echo 'checked';}?>>
                                    <label for="ads-no">لا</label>
                                </div>

                            </div>


                        </div>
                    </section>
                    <!-- /.box-body -->
                    <div class="box-footer  ">
                        <a href="categories_view.php">
                        <button type="button" class="btn btn-danger px-40   ">
                            <i class="ti-trash"></i> اغلاق
                        </button></a>
                        <input type="submit" name="update_cat" class="btn btn-success px-40 pull-right"><i class="ti-save-alt"></i> تعديل
                        </input>
                    </div>
                </form>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
        </section>
        <!-- /.content -->
        <?php
    }
}
elseif($do == 'deleteCat' && isset($_GET['catId'])){
    $catId = is_numeric($_GET['catId'])?intval($_GET['catId']):0;
    $feedback = $Categories->deleteCategory($catId);
    $result = json_decode($feedback,true);
    echo  '<h5 class="alert alert-success">'.$result['feedback_message'].'</h5>';

}
elseif($do == 'recoveryCat' && isset($_GET['catId']) ) {
    $catId = is_numeric($_GET['catId']) ? intval($_GET['catId']) : 0;
    $Categories->recoveryCategory($catId);

}
elseif($do == 'displayCat' && isset($_GET['catId']) ){
    $catId = is_numeric($_GET['catId'])? intval($_GET['catId']):0;
    $Categories->showCategoryInSite($catId);
}

elseif($do == 'hideCat' && isset($_GET['catId']) ){
    $catId = is_numeric($_GET['catId'])? intval($_GET['catId']):0;
    $Categories->hideCategoryFromSite($catId);
}
elseif($do == 'DeletedCats'){ ?>
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="d-flex align-items-center">
            <div class="mr-auto">
                <h3 class="page-title"> التصنيفات</h3>
                <div class="d-inline-block align-items-center">
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
                            <li class="breadcrumb-item active" aria-current="page">التصنيفات المحذوفة</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <!--            <div class="right-title">-->
            <!--                <div class="dropdown">-->
            <!--                    <button class="btn btn-outline dropdown-toggle no-caret" type="button" data-toggle="dropdown"><i class="mdi mdi-dots-horizontal"></i></button>-->
            <!--                    <div class="dropdown-menu dropdown-menu-right">-->
            <!--                        <a class="dropdown-item" href="#"><i class="mdi mdi-share"></i>Activity</a>-->
            <!--                        <a class="dropdown-item" href="#"><i class="mdi mdi-email"></i>Messages</a>-->
            <!--                        <a class="dropdown-item" href="#"><i class="mdi mdi-help-circle-outline"></i>FAQ</a>-->
            <!--                        <a class="dropdown-item" href="#"><i class="mdi mdi-settings"></i>Support</a>-->
            <!--                        <div class="dropdown-divider"></div>-->
            <!--                        <button type="button" class="btn btn-success">Submit</button>-->
            <!--                    </div>-->
            <!--                </div>-->
            <!--            </div>-->
        </div>

    </div>
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <?php
            foreach ($Categories->getAllNotActiveCategories() as $cat){
                 $cat->cat_name;
                 $cat->cat_id;?>
                <div class="col-md-12">
                    <div class="box">
                        <div class="box-header bg-danger">
                            <h4 class="box-title "><?php echo $cat->cat_name; ?></h4>

                        </div>

                        <div class="box-body">
                            <a href="categories_view.php?do=recoveryCat&catId=<?php echo $cat->cat_id; ?>" class=" text-success " data-animation="zoomOutRight"><i class="fa fa-play"></i> استعادة </a>
                            <a href="categories_view.php?do=deleteCat&catId=<?php echo $cat->cat_id; ?>" class="pull-right text-danger" "><i class="fa fa-trash"></i> حذف بشكل نهائي</a>
                        </div>
                    </div>
                </div>
          <?php  }?>


        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->

<?php }
?>

 </div>
</div>
<!-- /.content-wrapper -->
<?php
include "footer.php";
?>
