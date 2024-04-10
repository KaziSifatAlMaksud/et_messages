<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')

    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />

</head>
<body>
    <main class="login-page py-10 px-4 h-[100vh]">
        <div>
            <div class="flex justify-center items-center">
                <img class="md:w-[180px] w-[120px] origin-top-left " src="./assets/images/logo.svg" />
            </div>
            <div class="flex justify-center items-center">
                <div class="w-[513px] md:px-[69px] py-[40px] px-6 md:py-[79px] bg-white rounded-[20px] shadow backdrop-blur-[100px] flex-col justify-center items-center gap-[15px] md:gap-[34px] inline-flex">

                    <div class="self-stretch h-7 flex-col justify-center items-center gap-4 flex">
                        <div class="md:text-[28px] text-[20px] font-semibold leading-7">
                            Login
                        </div>
                    </div>
                    <form method="POST" action="{{ route('login') }}" class="self-stretch flex-col justify-start items-start md:gap-6 gap-4 flex">

                        @csrf
                        <div class="self-stretch flex-col justify-start items-start gap-3 flex">
                            <div class="self-stretch justify-start items-start gap-3 inline-flex">
                                <div class="grow shrink basis-0 text-slate-700 md:text-base text-[14px] font-normal  capitalize leading-none">
                                    Email
                                </div>
                            </div>
                            <div class="self-stretch justify-start items-start gap-2 inline-flex">
                                <input type="email" id="input-email-label" name="email" class="input_custom" placeholder="Enter your email" />
                            </div>
                        </div>
                        <div class="self-stretch flex-col justify-start items-start gap-3 flex">
                            <div class="self-stretch justify-start items-start inline-flex">
                                <div class="grow shrink basis-0 text-slate-700 md:text-base text-[14px] font-normal  capitalize leading-none">
                                    Password
                                </div>
                                <div class="text-right text-primary md:text-base text-[14px] font-normal  capitalize leading-none">
                                    Forgot？
                                </div>
                            </div>
                            <div class="self-stretch flex-col justify-start items-start gap-2 flex">
                                <div class="self-stretch  rounded-lg justify-start items-center gap-[5px] inline-flex">

                                    <input type="password" id="input-password-label" name="password" class="input_custom" placeholder="Enter your password" />
                                </div>
                            </div>
                        </div>
                        <div class="self-stretch pt-2">
                            <button type="submit" class="btn-primary w-full">
                                Login
                            </button>
                        </div>

                    </form>
                    <div class="self-stretch">
                        <div class="self-stretch">
                            <button type="button" class="btn-secondary w-full ">
                                <img src="./assets/images/google.png"> Continue with Google
                            </button>
                        </div>
                        <div class="self-stretch pt-3">
                            <div class="flex gap-2 md:text-[16px] text-[14px] justify-center">
                                <p>Don't have an account?</p> <a href="signUp.html" class="text-primary underline">SignUp</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>
</body>
</html>
