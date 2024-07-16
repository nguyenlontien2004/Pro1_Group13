<!-- Star_Main -->

<div class="main">
    <div class="content">
        <div class="contetn_dk">
            <h2>ĐĂNG KÝ</h2>
            <div class="h5tt">
                <h5>Thông tin khách hàng</h5>
            </div>
            <div class="main_dagnhap">
                <div class="content_form">
                    <div class="form">
                        <div class="content_dn">
                            <form action="index.php?act=dangky" method="post" onsubmit="return checkNull(); ">
                                <label for="">Username:</label>
                                <input class="ip_dk" type="text" name="user" id="nameuser" placeholder="Họ và Tên..."> <span id="nameuser_err"></span> <br>
                                <label for="">Email:</label> <br>
                                <input class="ip_dk" type="text" name="email" id="email" placeholder="Email...">
                                <span id="email_err"></span>
                                <br>
                                <label for="">Số điện thoại:</label>
                                <input class="ip_dk" type="text" name="phone" id="phone" placeholder="Số điện thoại..."> <span id="phone_err"></span>
                                <br>
                                <label for="">Mật khẩu:</label>
                                <input class="ip_dk" type="password" name="pass" id="password" placeholder="Mật khẩu..."> <span id="password_err"></span>
                                <br>
                                <div class="bnt_reemem">
                                    <!-- <p class="yestk0"><a href="index.php?act=dangnhap"></a></p> -->
                                    <a href="index.php?act=dangnhap">
                                        <p class="quenmk">Bạn đã có tài khoản?</p>
                                    </a>
                                </div>
                                <div class="bnt_dk3">
                                    <input class="bnt_dk" type="submit" onsubmit="return checkNull();" value="Đăng ký" name="dangky">
                                </div>

                            </form>

                            <script>
                                function checkNull() {

                                    var flag = true;
                                    var username = document.getElementById("nameuser").value;
                                    if (document.getElementById("nameuser").value == "") {
                                        document.getElementById("nameuser_err").innerHTML = "Bạn chưa nhập họ và tên";
                                        flag = false;
                                    }
                                    var email = document.getElementById("email").value;
                                    var checkemail = /^\w+@\w+(\.\w+){1,2}$/;
                                    if (document.getElementById("email").value == "") {
                                        document.getElementById("email_err").innerHTML = "Bạn chưa nhập email";
                                        flag = false;
                                    } else if (!checkemail.test(email)) {
                                        document.getElementById("email_err").innerHTML = "Bạn nhập sai định dạng email";
                                        flag = false;
                                    }
                                    var mk = document.getElementById("password").value;
                                    var checkmk = /^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{6,20}$/;
                                    if (document.getElementById("password").value == "") {
                                        document.getElementById("password_err").innerHTML = "Bạn chưa nhập mật khẩu";
                                        flag = false;
                                    } else if (!checkmk.test(mk)) {
                                        document.getElementById("password_err").innerHTML = "Bạn nhập mật khẩu sai định dạng";
                                        flag = false;

                                    }
                                    var phone = document.getElementById("phone").value;
                                    var checkphone = /^(0)[0-9]{9}$/;
                                    if (document.getElementById("phone").value == "") {
                                        document.getElementById("phone_err").innerHTML = "Bạn chưa nhập số điện thoại";
                                        flag = false;
                                    } else if (!checkphone.test(phone)) {
                                        document.getElementById("phone_err").innerHTML = "Bạn nhập điện thoại sai định dạng";
                                        flag = false;

                                    }
                                    return flag;

                                }
                            </script>
                            <?php
                            if (isset($thongbao) && ($thongbao) != "") {
                                echo $thongbao;
                            }
                            ?>
                        </div>
                    </div>
                    <div class="form">
                        <div class="content_dn">
                            <div class="img_dk">
                                <img src="img/logo/lOGODUAN1-removebg-preview.png" alt="">
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<hr>
<!-- End_main -->