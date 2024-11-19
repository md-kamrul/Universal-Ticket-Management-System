<!DOCTYPE html>
<html>

<head>
    <title>SignUp - UTMS</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@3.4.0/dist/full.css" rel="stylesheet" type="text/css" />
</head>

<body class="text-white">
    <div class="w-full h-full bg-[#18191a] pb-10">
        <!-- navbar -->
        <div class="navbar bg-[#242526] shadow-2xl">
            <div class="flex-1">
                <a class="btn btn-ghost text-xl">UTMS</a>
            </div>
            <div class="flex-none">
                <ul class="menu menu-horizontal px-1">
                    <li><a href="./login.php">LogIn</a></li>
                    <li><a href="./register.php">SignUp</a> </li>
                </ul>
            </div>
        </div>

        <!-- body -->
        <div class="w-[80%] mx-auto flex flex-col justify-center items-center pt-20">
            <div class="text-center lg:text-left">
                <h1 class="text-5xl font-bold mb-5">Create Your Account</h1>
            </div>
            <form action="signUp-process.php" method="post" class="card flex-shrink-0 w-[45%] mx-auto shadow-2xl bg-base-100">
                <div class="card-body">
                    <div class="form-control">
                        <label class="label">
                            <span class="label-text">Full Name</span>
                        </label>
                        <input name = "fullName" type="text" placeholder="Enter your full name" class="input input-bordered" />
                    </div>
                    <!-- <div class="form-control">
                        <label class="label">
                            <span class="label-text">Profile Picture</span>
                        </label>
                        <input type="text" placeholder="Enter your profile picture" class="input input-bordered" />
                    </div> -->
                    <div class="form-control">
                        <label class="label">
                            <span class="label-text">Email</span>
                        </label>
                        <input name="email" type="email" placeholder="Enter your email" class="input input-bordered" />
                    </div>
                    <div class="form-control">
                        <label class="label">
                            <span class="label-text">Password</span>
                        </label>
                        <input name = "password" type="password" placeholder="Enter your password" class="input input-bordered" />
                    </div>
                    <div class="form-control">
                        <label class="label">
                            <span class="label-text">Confirm Password</span>
                        </label>
                        <input type="password" placeholder="Enter your confirm password" class="input input-bordered" />
                    </div>

                    <!-- create account directly -->
                    <hr class="my-5">
                    <div class="media-options mb-3">
                        <a href="#"
                            class="field google flex flex-row gap-3 items-center border px-3 py-2 rounded-lg bg-base-200 justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-google" viewBox="0 0 16 16">
                                <path
                                    d="M15.545 6.558a9.4 9.4 0 0 1 .139 1.626c0 2.434-.87 4.492-2.384 5.885h.002C11.978 15.292 10.158 16 8 16A8 8 0 1 1 8 0a7.7 7.7 0 0 1 5.352 2.082l-2.284 2.284A4.35 4.35 0 0 0 8 3.166c-2.087 0-3.86 1.408-4.492 3.304a4.8 4.8 0 0 0 0 3.063h.003c.635 1.893 2.405 3.301 4.492 3.301 1.078 0 2.004-.276 2.722-.764h-.003a3.7 3.7 0 0 0 1.599-2.431H8v-3.08z" />
                            </svg>
                            <span>SignUp with Google</span>
                        </a>
                    </div>
                    <div class="media-options">
                        <a href="#"
                            class="field google flex flex-row gap-3 items-center border px-3 py-2 rounded-lg bg-base-200 justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-facebook" viewBox="0 0 16 16">
                                <path
                                    d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951" />
                            </svg>
                            <span>SignUp with Facebook</span>
                        </a>
                    </div>
                </div>

                <div class="form-control mt-2 pb-5">
                    <button class="btn w-[80%] mx-auto bg-[#1bd1a4] text-white">Create Account</button>
                    <i class="bi bi-0-square-fill"></i>
                </div>
            </form>
        </div>
    </div>
</body>

</html>