<?php

require_once('../../../private/initialize.php');


  $test = $_GET['test'] ?? '';

  if($test == '404'){
    error_404();
  } elseif ($test == '500') {
      error_500();
  } elseif ($test == 'redirect') {
    redirect_to(url_for('/staff/subjects/index.php'));
  }else{
    echo 'NO ERROR';
  }


 ?>
 <?php $page_title = 'Edit Subject'; ?>
 <?php include(SHARED_PATH . '/staff_header.php'); ?>

 <a class="back_link" href="<?php echo url_for('/staff/subjects/index.php');?>">
   &laquo; Back to List</a>

 <div id="content">
  <a href="#"></a>
  <div class="subject edit">
    <h1>Edit Subject</h1>
    <form  action="" method="post">
      <dl class="">
        <dt>Menu Name</dt>
        <dd><input type="text" name="menu" value=""/></dd>

      </dl>
      <dl class="">
        <dt>Position</dt>
        <dd>
          <select class="" name="position">
            <option value="1">1</option>

          </select>
        </dd>

      </dl>
      <dl class="">
        <dt>Visible</dt>
        <dd>
          <input type="hidden" name="visible" value="0"/>
          <input type="checkbox" name="visible" value="1"/>

        </dd>
        </dl>

    <div id="operations">
      <input type="submit" value="Edit Subject" />
    </div>
    </form>
  </div>
 </div>
 <?php include(SHARED_PATH . '/staff_footer.php'); ?>
