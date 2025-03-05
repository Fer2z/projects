<?php 

include './inc/connection.php';
include './inc/form.php';
include './inc/select.php';
include './inc/db_close.php';




?>



<?php include_once './parts/header.php'; ?>




<div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
    <div class="col-md-5 p-lg-5 mx-auto ">
      <img src="images/Ferz.jpg" alt="">
      <h1 class="display-4 fw-normal">اربح مع فهد</h1>
      <p class="lead fw-normal">باقي عالتسجيل</p>
      <h3 id="countdown"></h3>
      <p class="lead fw-normal">السحب على ايفون</p>
    </div>
 
      
<div class="container">
<h3>للدخول في السحب اتبع مايلي:</h3>
<ul class="list-group list-group-flush" >
  <li class="list-group-item">تابع البث المباشر على صفحني على فيسبوك بالتاريخ المذكور اعلاه</li>
  <li class="list-group-item">سأقوم ببث مباشر لمدة ساعه عباره عن لعب مارفل</li>
  <li class="list-group-item">خلال فتره الساعه سيتم فتح موقع التسجيل هنا حيث ستقوم بتسجيل اسمك وايميلك</li>
  <li class="list-group-item">بنهايه البث سيتم السحب </li>
  <li class="list-group-item">الرابح سيحصل على ايفون 17 برو ماكس</li>
</ul>
</div>


  </div>





<div class="container">
<div class="position-relative text-center" >
    <div class="col-md-5 p-lg-5 mx-auto my-5" >

<form action="<?php $_SERVER['PHP_SELF']  ?>" method="POST">
<h3>الرجاء ادخل معلوماتك</h3>

  <div class="mb-3">
    <label for="firstName" class="form-label">الاسم الاول</label>
    <input type="text" name="firstName" class="form-control" id="firstName" value="<?php echo $firstName ?>">
    <div  class="form-text error"><?php  echo $errors['firstNameErorr'] ?></div>
  </div>

  <div class="mb-3">
    <label for="lastName" class="form-label">الاسم الاخير</label>
    <input type="text" name="lastName" class="form-control" id="lastName" value="<?php echo $lastName  ?>" >
    <div  class="form-text error"><?php  echo $errors['lastNameErorr'] ?></div>
  </div>

  <div class="mb-3">
    <label for="email" class="form-label">البريد الالكتروني</label>
    <input type="text"  name="email" class="form-control" id="email" value="<?php echo $email  ?>">
    <div  class="form-text error"><?php  echo $errors['emailErorr'] ?></div>
  </div>

  <button type="submit" name="submit" class="btn btn-primary">ارسال المعلومات</button>
</form>


    </div>
 
  </div>


<div class="loader-con">

  <div id="loader">
	<canvas id="circularLoader" width="200" height="200"></canvas>
</div>
</div>


<!-- Button trigger modal -->
<div class="d-grid gap-2 col-6 mx-auto my-5">
<button type="button" id="winner" class="btn btn-primary">
اختيار الرابح
</button>
</div>

<!-- Modal -->
<div class="modal fade" id="modal" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
  <div class="modal-dialog  modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
    
        <h5 class="modal-title" id="modalLabel"> الرابح في المسابقة </h5>
       
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <?php foreach($users as $user) : ?>
        <h1 class="display-3 text-center modal-title" id="modalLabel"> <?php echo htmlspecialchars( $user['firstName']) .' '.htmlspecialchars( $user['lastName'])  .'<br> ' ; ?> </h1>
        <?php endforeach; ?>
      </div>
      <div class="modal-footer">
      
      </div>
    </div>
  </div>
</div>





    
<?php include_once './parts/footer.php'; ?>