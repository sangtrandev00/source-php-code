   <?php
// include "";
// echo $_SESSION['username'];
// echo $_SESSION['iduser'];

$user = getuserinfobyid($_SESSION['iduser'])[0];
// var_dump($user);
// echo $user['name'], $user['email'], $user['user'], $user['phonenumber'], $user['address']
?>

   <!-- profile page section -->

   <div class="grid wide">
       <div class="profile-user">
           <div class="profile-user__wrap d-flex align-items-start profile">
               <div class="profile-user__sidebar nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist"
                   aria-orientation="vertical">
                   <div class="profile-user__avatar">
                       <img src="<?php echo $user['avatar'] ?>" alt="" class="profile-user__avatar-img">
                   </div>
                   <button class="profile-user__sidebar-nav-item nav-link active" id="v-pills-home-tab"
                       data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab"
                       aria-controls="v-pills-home" aria-selected="true">General Setting</button>
                   <button class="profile-user__sidebar-nav-item nav-link" id="v-pills-profile-tab"
                       data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab"
                       aria-controls="v-pills-profile" aria-selected="false">Password settings</button>
                   <!-- <button class="profile-user__sidebar-nav-item nav-link" id="v-pills-disabled-tab" data-bs-toggle="pill"
                            data-bs-target="#v-pills-disabled" type="button" role="tab" aria-controls="v-pills-disabled"
                            aria-selected="false" disabled>Disabled</button> -->
                   <button class="profile-user__sidebar-nav-item nav-link" id="v-pills-messages-tab"
                       data-bs-toggle="pill" data-bs-target="#v-pills-messages" type="button" role="tab"
                       aria-controls="v-pills-messages" aria-selected="false">History Orders</button>
                   <button class="profile-user__sidebar-nav-item nav-link" id="v-pills-settings-tab"
                       data-bs-toggle="pill" data-bs-target="#v-pills-settings" type="button" role="tab"
                       aria-controls="v-pills-settings" aria-selected="false">Reminder</button>
               </div>
               <div class="profile-user__content tab-content" id="v-pills-tabContent">
                   <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
                       aria-labelledby="v-pills-home-tab" tabindex="0">
                       <div class="tab-pane fade show active">
                           <div class="profile-user__label btn" id="home-tab-pane" role="tabpanel"
                               aria-labelledby="home-tab" tabindex="0">
                               General settings
                           </div>
                           <form action="./index.php?act=profilepage" method="post" enctype="multipart/form-data">
                               <div class="mb-3 row form-group">
                                   <label for="formFile" class="col-sm-2 col-form-label ">Profile
                                       picture</label>
                                   <div class="col-sm-10">
                                       <input name="avatarfile" class="form-control col-md-10" type="file"
                                           id="formFile">
                                   </div>
                               </div>
                               <div class="mb-3 row form-group">
                                   <label for="inputName" class="col-sm-2 col-form-label">Name: </label>
                                   <div class="col-sm-10">
                                       <input name="fullname" type="text" class="form-control" id="inputName">
                                   </div>
                               </div>
                               <div class="mb-3 row form-group">
                                   <label for="staticEmail" class="col-sm-2 col-form-label">Email Address</label>
                                   <div class="col-sm-10">
                                       <input name="email" type="email" class="form-control" id="staticEmail"
                                           value="email@example.com">
                                   </div>
                               </div>

                               <div class="mb-3 row form-group">
                                   <label for="inputPhone" class="col-sm-2 col-form-label">Phone number</label>
                                   <div class="col-sm-10">
                                       <input type="text" name="phonenumber" class="form-control" id="inputPhone">
                                   </div>
                               </div>
                               <div class="mb-3 row form-group">
                                   <label for="inputAddress" class="col-sm-2 col-form-label">Home Address</label>
                                   <div class="col-sm-10">
                                       <input type="text" name="homeaddress" class="form-control" id="inputAddress">
                                   </div>
                               </div>
                               <div class="form-group justify-content-end d-flex">
                                   <input type="submit" name="updateinfobtn"
                                       class="btn profile-user__btn profile-user__btn--edit" value="Save changes">
                               </div>
                           </form>
                       </div>
                   </div>
                   <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab"
                       tabindex="0">
                       <div class="profile-user__label btn" id="home-tab-pane" role="tabpanel"
                           aria-labelledby="home-tab" tabindex="0">
                           Password setting
                       </div>
                       <form action="./index.php?act=profilepage" method="post">
                           <div class="mb-3 row form-group">
                               <label for="inputName" class="col-sm-2 col-form-label">Current Password</label>
                               <div class="col-sm-10">
                                   <input type="text" name="currentpass" class="form-control" id="inputName">
                               </div>
                           </div>
                           <div class="mb-3 row form-group">
                               <label for="" class="col-sm-2 col-form-label">New Password</label>
                               <div class="col-sm-10">
                                   <input type="password" name="newpassword" class="form-control" id="">
                               </div>
                           </div>

                           <div class="mb-3 row form-group">
                               <label for="inputReenter" class="col-sm-2 col-form-label">Re-Enter New
                                   Password</label>
                               <div class="col-sm-10">
                                   <input type="password" name="reenterpass" class="form-control" id="inputReenter">
                               </div>
                           </div>
                           <div class="form-group justify-content-end d-flex">
                               <input name="changepassbtn" type="submit"
                                   class="btn profile-user__btn profile-user__btn--edit" value="Save changes">
                           </div>
                       </form>
                   </div>
                   <div class="tab-pane fade" id="v-pills-disabled" role="tabpanel"
                       aria-labelledby="v-pills-disabled-tab" tabindex="0">
                       <div class="profile-user__label btn" id="home-tab-pane" role="tabpanel"
                           aria-labelledby="home-tab" tabindex="0">
                           History Products
                       </div>
                   </div>
                   <div class="tab-pane fade" id="v-pills-messages" role="tabpanel"
                       aria-labelledby="v-pills-messages-tab" tabindex="0">
                       <div class="profile-user__label btn" id="home-tab-pane" role="tabpanel"
                           aria-labelledby="home-tab" tabindex="0">
                           Hisotory order
                       </div>
                       <table class="table mt-5 table-hover">
                           <thead class="text-dark bg-light">
                               <tr>
                                   <th scope="col">iddh</th>
                                   <th scope="col">Mã đơn hàng</th>
                                   <th scope="col">Hình ảnh</th>
                                   <th scope="col">Tên sản phẩm</th>
                                   <th scope="col">Số lượng</th>
                                   <th scope="col">Giá / 1sp</th>
                                   <th scope="col">Thời gian đặt hàng</th>

                               </tr>
                           </thead>
                           <tbody>
                               <?php

if (isset($_SESSION['iduser'])) {
    $iduser = $_SESSION['iduser'];
    $cart_list = getshowcartbyiduser($iduser);
    // var_dump($cart_list);

    foreach ($cart_list as $cart_item) {
        # code...
        $img_url = $cart_item['hinhanh'];
        echo '

                    <tr>
                    <th scope="row">' . $cart_item['iddonhang'] . '</th>
                    <td>' . $cart_item['madonhang'] . '</td>
                    <td> <img width=100 height=100 style="object-fit: cover;" src="' . $img_url . '"/></td>
                    <td>' . $cart_item['tensp'] . '</td>
                    <td>' . $cart_item['soluong'] . '</td>
                    <td>$' . $cart_item['dongia'] . '</td>
                    <td>' . $cart_item['timeorder'] . '</td>
                </tr>
                    ';
    }
    ?>
                               <!-- <tr>
                                   <th scope="row">1</th>
                                   <td>Mark</td>
                                   <td>Otto</td>
                                   <td>@mdo</td>
                                   <td>@mdo</td>
                                   <td><a href="index.php?act=editproduct" class="btn-primary p-2">Sửa</a></td>
                                   <td><a href="index.php?act=deleteproduct" class="btn-danger p-2">Xóa</a></td>
                               </tr>
                               <tr>
                                   <th scope="row">2</th>
                                   <td>Jacob</td>
                                   <td>Thornton</td>
                                   <td>@fat</td>
                                   <td>@mdo</td>
                                   <td>@mdo</td>
                                   <td>@mdo</td>
                               </tr>
                               <tr>
                                   <th scope="row">3</th>
                                   <td colspan="2">Larry the Bird</td>
                                   <td>@twitter</td>
                                   <td>@mdo</td>
                                   <td>@mdo</td>
                                   <td>@mdo</td>
                               </tr> -->
                           </tbody>
                       </table>
                   </div>
                   <div class="tab-pane fade" id="v-pills-settings" role="tabpanel"
                       aria-labelledby="v-pills-settings-tab" tabindex="0">...</div>
               </div>
           </div>
       </div>
   </div>

   <?php
}
?>

   <?php

if (isset($_POST['updateinfobtn']) && $_POST['updateinfobtn']) {
    // $avatarurl = $_POST['']
    // $_FILES['avatarfile'];
    $target_dir = "assets/images/";
    $target_file = $target_dir . basename($_FILES["avatarfile"]["name"]);
    move_uploaded_file($_FILES["avatarfile"]["tmp_name"], $target_file);
    $iduser = $_SESSION['iduser'];
    $name = $_POST['fullname'];
    $email = $_POST['email'];
    $address = $_POST['homeaddress'];
    $phonenumber = $_POST['phonenumber'];
    updateuser($iduser, $target_file, $name, $email, $phonenumber, $address);
} else {
    // echo "NOTHING HAPPEN";
}

if (isset($_POST['changepassbtn']) && $_POST['changepassbtn']) {
    $iduser = $_SESSION['iduser'];
    $currentpass = $_POST['currentpass'];
    $newpassword = $_POST['newpassword'];
    $reenterpass = $_POST['reenterpass'];
    $username = $_SESSION['username'];
    $isRightPass = checkuser($username, $currentpass);
    if ($isRightPass == -1) {
        echo "YOU SHOULD ENTER RIGHT PASSWORD";
    } else {
        if ($newpassword == $reenterpass) {
            updatepass($iduser, $reenterpass);
        } else {

            echo "YOUR RE ENTER PASSWORD IS NOT CORRECT";

        }
    }

}
?>