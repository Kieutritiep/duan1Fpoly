<?php
    require_once $_SERVER['DOCUMENT_ROOT'] .'/baseDuanpoly/app/views/users/layout/header.php';
?>
    <div class="container1">
        <div class="wrapper">
            <span class="bg-animate"></span>
            <span class="bg-animate2"></span>
            <div class="form-box login">
                <h2 class="animation" style="--i:0; --j:27">Login</h2>
                <form action="">
                    <div class="input-box animation" style="--i:1; --j:28">
                        <input type="text" id="username" name="username" placeholder=" ">
                        <label for="username">Username</label>
                        <i class="fa-solid fa-user"></i>
                    </div>
                    <div class="input-box animation" style="--i:2; --j:29">
                        <input type="password" id="password" name="password" placeholder=" ">
                        <label for="password">Password</label>
                        <i class="fa-solid fa-lock"></i>
                    </div>
                    <button type="submit" class="btn animation" style="--i:3; --j:30">Login</button>
                    <div class="logreg-link animation" style="--i:4; --j:31">
                        <p>Don't have an account? <a href="#" class="register_link">Sign Up</a></p>
                    </div>
                </form>
            </div>
            <div class="info-text login">
                <h2 class="animation" style="--i:0; --j:25">Chào mừng trở lại</h2>
                <p class="animation" style="--i:1;--j:26">
                    iphone Lux luôn đồng hành cùng khách hàng
                </p>
            </div>

            <div class="form-box register">
                <h2 class="animation" style="--i:17; --j:4">Sing Up</h2>
                <form action="">
                    <div class="input-box animation"  style="--i:18;">
                        <input type="text" id="username" name="username" placeholder=" ">
                        <label for="username">Username</label>
                        <i class="fa-solid fa-user"></i>
                    </div>
                    <div class="input-box animation"  style="--i:19;  --j:1;">
                        <input type="text" id="username" name="username" placeholder=" ">
                        <label for="username">Email</label>
                        <i class="fa-solid fa-envelope"></i>
                    </div>
                   
                    <div class="input-box animation"  style="--i:20; --j:2;">
                        <input type="password" id="password" name="password" placeholder=" ">
                        <label for="password">Password</label>
                        <i class="fa-solid fa-lock"></i>
                    </div>
                    <div class="input-box animation"  style="--i:21; --j:3;">
                        <input type="password" id="password" name="password" placeholder=" ">
                        <label for="password">Re password</label>
                        <i class="fa-solid fa-lock"></i>
                    </div>
                    <button type="submit" class="btn animation"  style="--i:22; --j:4">Login</button>
                    <div class="logreg-link animation"  style="--i:23; --j:5;">
                        <p>bạn đã có tài khoản? <a href="#" class="login_link">Sign Up</a></p>
                    </div>
                </form>
            </div>
            <div class="info-text register ">
                <h2 class="animation" style="--i:24; --j:0">Chào mừng quý khách</h2>
                <p class="animation" style="--i:24; --j:1">
                    iphone Lux luôn đồng hành cùng khách hàng
                </p>
            </div>
        </div>
    </div>
    <script>
        const wrapper = document.querySelector('.wrapper')
        const registerLink = document.querySelector('.register_link')
        const loginLink = document.querySelector('.login_link')
        registerLink.onclick = () =>{
            wrapper.classList.add('active')
        }
        loginLink.onclick = () => {
            wrapper.classList.remove('active'); 
        };
    </script>
</body>
</html>
