<?php $arr=array(0=>'15%',1=>'15%',2=>'26%',3=>'8%',4=>'7%',5=>'10%',6=>'10%',7=>'10%',8=>'10%')?>
<?php
global $user;
?>
<div class="thong_them_hocsinh mb-10">
  <div class="row">
    <div class="col-md-4">
      <h4 class="height-full align-items-center d-flex"><strong>Danh sách đội tàu</strong></h4>
    </div>
    <div class="col-md-8">
      <h4 class="height-full align-items-center d-flex">
        <div class="text-right full-width">
          <a class="btn btn-success" href="#" data-toggle="modal" data-target="#exampleModal_1"><i class="fa fa-search"></i> Tìm kiếm</a>
          <a href="#" class="tai_excel_tau btn btn-success" data-toggle="modal" data-target="#exampleModal_excel"><i class="fa fa-file-excel"></i> Tải danh sách</a>
          <?php if(isset($user->roles[3])):?>
          <a class="btn btn-primary" href="/excel-hoi-vien"><i class="fa fa-plus" aria-hidden="true"></i> Thêm hội viên / Đội tàu</a>
          <?php endif;?>
        </div>
      </h4>
    </div>
  </div>
</div>
<div class="cart-page-top table-responsive">
  <div class="thongbao-bang"></div>
  <form id="table-danhsachhocsinh">
    <table class="table table-hover table-bordered table-striped text-nowrap">
      <?php
      $str='<a href="/user/login">Đăng nhập</a>';
      if(isset($user->uid) && $user->uid!=0)
      {
        $str='';
      }
      ?>
      <?php if (!empty($header)) : ?>
        <thead>
        <tr>
          <?php $dem=0;?>
          <?php foreach ($header as $field => $label): ?>
            <th <?php print 'width="'.$arr[$dem].'"'?> <?php if($dem==5) print 'class="text-center"'?>>
              <?php  $dem++;?>
              <?php print $label; ?>
            </th>
          <?php endforeach; ?>
        </tr>
        </thead>
      <?php endif; ?>
      <tbody>
      <?php foreach ($rows as $row_count => $row): ?>
        <tr>
          <?php $dem=0;?>
          <?php foreach ($row as $field => $content): ?>
            <td <?php if($dem==7) print 'class="text-center"'?>>
              <?php (($str!='')&&($dem==9 || $dem==10 || $dem==11)) ? print $str : print $content; ?>
              <?php  $dem++;?>
            </td>
          <?php endforeach; ?>
        </tr>
      <?php endforeach; ?>
      </tbody>
    </table>
  </form>
</div>
