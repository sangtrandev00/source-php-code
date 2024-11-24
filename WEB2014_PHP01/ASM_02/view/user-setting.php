<div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab"
    tabindex="0">
    <div class="tab-pane fade show active">
        <div class="profile-user__label btn" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
            General settings
        </div>
        <form action="./index.php?act=profilepage" method="post">
            <div class="mb-3 row form-group">
                <label for="formFile" class="col-sm-2 col-form-label ">Profile
                    picture</label>
                <div class="col-sm-10">
                    <input name="avatarfile" class="form-control col-md-10" type="file" id="formFile">
                </div>
            </div>
            <div class="mb-3 row form-group">
                <label for="inputName" class="col-sm-2 col-form-label">Name: </label>
                <div class="col-sm-10">
                    <input type="text" name="fullname" class="form-control" id="inputName"
                        value="<?php echo $user['name'] ?>">
                </div>
            </div>
            <div class="mb-3 row form-group">
                <label for="staticEmail" class="col-sm-2 col-form-label">Email Address</label>
                <div class="col-sm-10">
                    <input type="email" name="email" class="form-control" id="staticEmail"
                        value="<?php echo $user['email'] ?>">
                </div>
            </div>

            <div class="mb-3 row form-group">
                <label for="inputPhone" class="col-sm-2 col-form-label">Phone number</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="phonenumber"
                        value="<?php echo $user['phonenumber'] ?>" id="inputPhone">
                </div>
            </div>
            <div class="mb-3 row form-group">
                <label for="inputAddress" class="col-sm-2 col-form-label">Home Address</label>
                <div class="col-sm-10">
                    <input type="text" name="homeaddress" value="<?php echo $user['address'] ?>" class="form-control"
                        id="inputAddress">
                </div>
            </div>
            <div class="form-group justify-content-end d-flex">
                <input name="updateinfobtn" type="submit" class="btn profile-user__btn profile-user__btn--edit"
                    value="Save changes">
            </div>
        </form>
    </div>
</div>