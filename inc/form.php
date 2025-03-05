<?php


$firstName = $_POST['firstName'] ?? '';
$lastName  = $_POST['lastName'] ?? '';
$email     = $_POST['email'] ?? '';





$errors = [
'firstNameErorr' => '',
'lastNameErorr' => '',
'emailErorr' => '',
];


if (isset ($_POST['submit'])){


//تحقق الاسم الاول
    if(empty($firstName)){
        $errors ['firstNameErorr'] = 'يرجى ادخال الاسم الاول';
//تحقق الاسم الاخير
    }if(empty($lastName)){
        $errors ['lastNameErorr'] = 'يرجى ادخال الاسم الاخير';
    //تحقق الايميل
    }if(empty($email)){
        $errors ['emailErorr'] = 'يرجى ادخال الايميل  ';
        
    }elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $errors ['emailErorr'] = 'يرجى ادخال ايميل صحيح ';

    }

    //تحقق لايوجد اخطاء
if (!array_filter($errors)){

    $firstName =  mysqli_real_escape_string($connection, $_POST['firstName']);
    $lastName  =  mysqli_real_escape_string($connection, $_POST['lastName']);
    $email     =  mysqli_real_escape_string($connection, $_POST['email']);

    $sql="INSERT INTO users(firstName, lastName, email) 
    VALUES ('$firstName' , '$lastName', '$email' )";
    if( mysqli_query($connection , $sql)){ 
        header('Location: ' . $_SERVER ['PHP_SELF']);
    }
    else{
    echo 'Erorr' . mysqli_error($connection);
    }

}



 

}