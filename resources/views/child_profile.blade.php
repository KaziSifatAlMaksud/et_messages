<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>User</title>
    <link rel="stylesheet" href="styles/style.css" />
</head>
<style>
    #drop-area.highlight {
        border-color: #0774e8;
    }

</style>
<body>
    <main class="w-full pb-6">
        <!-- navbar section -->
        <header class="md:px-[30px] lg:px-[50px] 2xl:px-[120px] px-3 flex flex-wrap sm:justify-start sm:flex-nowrap w-full bg-white text-sm py-4">
            <nav class="w-full mx-auto flex flex-wrap justify-between basis-full items-center" aria-label="Global">
                <a class="sm:order-1 flex-none text-xl font-semibold dark:text-white" href="#"><img class="w-[110px]" src="./assets/images/logo_horizontal2.png" alt="" /></a>

                <div class="sm:order-3 flex items-center gap-x-2">
                    <div class="hs-dropdown relative inline-flex">
                        <img class="w-[40px] rounded-[76px]" src="https://spruko.com/demo/tailwind/ynex/dist/assets/images/faces/11.jpg" alt="" />

                        <div class="hs-dropdown-menu transition-[opacity,margin] duration hs-dropdown-open:opacity-100 opacity-0 hidden min-w-40 bg-white shadow-md rounded-lg p-2 mt-2 after:h-4 after:absolute after:-bottom-4 after:start-0 after:w-full before:h-4 before:absolute before:-top-4 before:start-0 before:w-full" aria-labelledby="hs-dropdown-default">
                            <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-black-2 hover:bg-primary-20 focus:ring-2 focus:ring-blue-20 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300" href="profile.html">
                                Profile
                            </a>
                            <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-black-2 hover:bg-primary-20 focus:ring-2 focus:ring-blue-20 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300" href="index.html">
                                Logout
                            </a>
                        </div>
                    </div>
                </div>
            </nav>
        </header>

        <!-- bannar section -->
        <section class="md:px-[30px] lg:px-[50px] 2xl:px-[120px] px-3 pt-6">
            <div class="w-full">
                <div class="p-6 flex gap-6 rounded-[7px] shadow" style="
              background-image: url(./assets/images/profile_bannar.png);
              background-size: cover;
              background-position: center;
            ">
                    <div class="w-fit">
                        <div class="relative">
                            <img class="xl:size-[71px] size-[55px] rounded-full" src="https://spruko.com/demo/tailwind/ynex/dist/assets/images/faces/1.jpg" />

                            <div class="xl:size-[15.53px] size-[12px] xl:right-[5px] right-[2px] bottom-0 absolute border border-white bg-green rounded-full"></div>
                        </div>
                    </div>
                    <div class="flex flex-col lg:gap-6 gap-3 xl:pt-3 pt-2">
                        <div class="">
                            <div class="text-white xl:text-xl text-lg font-bold leading-tight">
                                Adam Smith
                            </div>

                            <div class="text-gray-2 text-xs font-medium leading-3">
                                adam@gmail.com
                            </div>
                        </div>
                        <div class="w-fit">
                            <p class="text-center text-white xl:text-[22px] text-[16px] font-bold">
                                9
                            </p>
                            <p class="text-gray-2 text-xs font-medium">Videos</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- card section -->
        <section id="container" class="md:px-[30px] lg:px-[50px] 2xl:px-[120px] px-3 pt-10">
            <div class="flex justify-between">
                <div class="flex gap-2 items-center">
                    <p class="text-zinc-800 text-[24px] font-semibold leading-normal">
                        Videos
                    </p>
                    <button type="button" class="text-primary cursor-pointer text-[14px] font-medium underline" data-hs-overlay="#hs-vertically-centered-modal">
                        Upload video +
                    </button>
                    <div id="hs-vertically-centered-modal" class="hs-overlay hidden size-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto pointer-events-none">
                        <div class="hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-0 opacity-0 ease-out transition-all sm:max-w-lg sm:w-full m-3 sm:mx-auto min-h-[calc(100%-3.5rem)] flex items-center">
                            <div class="w-full flex flex-col bg-white border shadow-sm rounded-xl pointer-events-auto dark:bg-gray-800 dark:border-gray-700 dark:shadow-slate-700/[.7]">
                                <div class="flex justify-between items-center py-3 px-4 border-b dark:border-gray-700">
                                    <div class="flex gap-1 items-center">
                                        <img class="h-4" src="./assets/images/bar.png" alt="bar.pmg" />
                                        <p class="text-zinc-800 text-[18px] text-center font-semibold">
                                            Upload Video
                                        </p>
                                    </div>
                                    <button type="button" class="flex justify-center items-center size-7 text-sm font-semibold rounded-full border border-transparent text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-gray-700" data-hs-overlay="#hs-vertically-centered-modal">
                                        <span class="sr-only">Close</span>
                                        <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M18 6 6 18"></path>
                                            <path d="m6 6 12 12"></path>
                                        </svg>
                                    </button>
                                </div>
                                <div class="md:px-[30px] px-[25px] mt-6 pb-[30px] pt-[3px] overflow-y-auto">
                                    <div class="pb-3">
                                        <label for="input-label" class="block text-xs font-medium mb-2 dark:text-white">Title</label>
                                        <input type="email" id="input-label" class="py-2 px-4 block w-full border-gray-200 rounded-lg text-xs focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600" placeholder="Enter video title" />
                                    </div>

                                    <div class="relative pb-3">
                                        <label for="input-label" class="block text-xs font-medium mb-2 dark:text-white">Tag</label>
                                        <select multiple data-hs-select='{
      "placeholder": "Select Tag...",
      "toggleTag": "<button type=\"button\"></button>",
      "toggleClasses": "hs-select-disabled:pointer-events-none hs-select-disabled:opacity-50 relative flex text-nowrap w-full cursor-pointer bg-white border border-red-600  rounded-lg text-start text-xs focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600",
      "dropdownClasses": "mt-2 z-50 w-full max-h-72 p-1 space-y-0.5 bg-white border border-gray-200 rounded-lg overflow-hidden overflow-y-auto dark:bg-slate-900 dark:border-gray-700",
      "optionClasses": "py-2 px-4 w-full text-xs text-gray-800 cursor-pointer hover:bg-gray-100 rounded-lg focus:outline-none focus:bg-gray-100 dark:bg-slate-900 dark:hover:bg-slate-800 dark:text-gray-200 dark:focus:bg-slate-800",
      "mode": "tags",
      "tagsClasses": "relative ps-0.5 pe-9 min-h-[35px] flex items-center flex-wrap text-nowrap w-full border border-gray-200 rounded-lg text-start text-xs focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600",
      "tagsItemTemplate": "<div class=\"flex flex-nowrap items-center relative z-10 bg-white border border-gray-200 rounded-full py-1 px-2 m-1 dark:bg-slate-900 dark:border-gray-700\"><div class=\"size-6 me-1\" data-icon></div><div class=\"whitespace-nowrap\" data-title></div><div class=\"inline-flex flex-shrink-0 justify-center items-center size-4 ms-2 rounded-full text-gray-800 bg-gray-200 hover:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-400 text-xs dark:bg-gray-700/50 dark:hover:bg-gray-700 dark:text-gray-400 cursor-pointer\" data-remove><svg class=\"flex-shrink-0 size-2\" xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><path d=\"M18 6 6 18\"/><path d=\"m6 6 12 12\"/></svg></div></div>",
      "tagsInputClasses": "absolute border-none inset-0 w-full py-2 px-4 pe-9 flex-1 text-xs rounded-lg focus-visible:ring-0 dark:bg-slate-900 dark:text-gray-400",
      "optionTemplate": "<div class=\"flex items-center\"><div class=\"size-8 me-2\" data-icon></div><div><div class=\"text-xs font-semibold text-gray-800 dark:text-gray-200\" data-title></div><div class=\"text-xs text-gray-500\" data-description></div></div><div class=\"ms-auto \"><span class=\"hidden  hs-selected:block\"><svg class=\"flex-shrink-0 size-4 text-blue-600\" xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" viewBox=\"0 0 16 16\"><path d=\"M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z\"/></svg></span></div></div>"
    }' class="hidden">
                                            <option value="">Choose</option>
                                            <option value="1">Horror</option>
                                            <option value="2">News</option>
                                            <option value="3">Sports</option>
                                        </select>

                                        <div class="absolute top-1/2 end-3 -translate-y-1/2">
                                            <svg class="flex-shrink-0 size-3.5 text-gray-500 dark:text-gray-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                <path d="m7 15 5 5 5-5" />
                                                <path d="m7 9 5-5 5 5" />
                                            </svg>
                                        </div>
                                    </div>

                                    <div id="drop-area" class="flex flex-col justify-center rounded-lg border-2 border-dashed border-gray-200 md:px-20 px-12 py-16 text-center gap-2" ondrop="dropHandler(event);" ondragover="dragOverHandler(event);" ondragenter="dragEnterHandler(event);" ondragleave="dragLeaveHandler(event);">
                                        <p id="drop-text" class="text-zinc-500 text-xs">
                                            Drag & drop your MP4 or MKV videos here
                                        </p>
                                        <p class="text-zinc-500 text-xs">or</p>
                                        <input type="file" id="fileInput" class="block w-full border border-gray-200 shadow-sm rounded-lg text-xs focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none file:bg-gray-50 file:border-0 file:me-4 file:py-2 file:px-4" onchange="fileInputChangeHandler(event)" />
                                    </div>
                                    <button class="btn-primary mt-3">Upload</button>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="grid xl:grid-cols-5 lg:grid-cols-4 md:grid-cols-3 gap-6 pt-6">
                <div class="flex flex-col gap-2 cursor-pointer">
                    <img class="w-full rounded-lg" src="../assets/images/video1.png" alt="" srcset="" />
                    <p class="w-fit 2xl:text-[16px] font-medium lg:text-[14px] md:text-[14px] text-[16px]">
                        The Sydney Harbour Bridge In Candy!!! Sticky
                    </p>

                    <div class="flex flex-wrap gap-2">
                        <span class="py-1 px-2 inline-flex items-center gap-x-1 2xl:text-xs text-[10px] font-medium bg-[#5B80FF] text-white rounded-lg">
                            Australia
                        </span>
                        <span class="py-1 px-2 inline-flex items-center gap-x-1 2xl:text-xs text-[10px] font-medium bg-[#5B80FF] text-white rounded-lg">
                            2 Opening
                        </span>
                        <span class="py-1 px-2 inline-flex items-center gap-x-1 2xl:text-xs text-[10px] font-medium bg-[#5B80FF] text-white rounded-lg">
                            Graduate
                        </span>
                    </div>
                </div>
                <div class="flex flex-col gap-2 cursor-pointer">
                    <img class="w-full rounded-lg" src="../assets/images/video2.png" alt="" srcset="" />
                    <p class="w-fit 2xl:text-[16px] font-medium lg:text-[14px] md:text-[14px] text-[16px]">
                        The Sydney Harbour Bridge In bla Candy!!! Sticky
                    </p>

                    <div class="flex flex-wrap gap-2">
                        <span class="py-1 px-2 inline-flex items-center gap-x-1 2xl:text-xs lg:text-[10px] text-xs font-medium bg-[#5B80FF] text-white rounded-lg">
                            Australia
                        </span>
                        <span class="py-1 px-2 inline-flex items-center gap-x-1 2xl:text-xs text-[10px] font-medium bg-[#5B80FF] text-white rounded-lg">
                            2 Opening
                        </span>
                        <span class="py-1 px-2 inline-flex items-center gap-x-1 2xl:text-xs text-[10px] font-medium bg-[#5B80FF] text-white rounded-lg">
                            Graduate
                        </span>
                    </div>
                </div>
                <div class="flex flex-col gap-2 cursor-pointer">
                    <img class="w-full rounded-lg" src="../assets/images/video3.png" alt="" srcset="" />
                    <p class="w-fit 2xl:text-[16px] font-medium lg:text-[14px] md:text-[14px] text-[16px]">
                        The Sydney Harbour Bridge In bla Candy!!! Sticky
                    </p>

                    <div class="flex flex-wrap gap-2">
                        <span class="py-1 px-2 inline-flex items-center gap-x-1 2xl:text-xs text-[10px] font-medium bg-[#5B80FF] text-white rounded-lg">
                            Australia
                        </span>
                        <span class="py-1 px-2 inline-flex items-center gap-x-1 2xl:text-xs text-[10px] font-medium bg-[#5B80FF] text-white rounded-lg">
                            2 Opening
                        </span>
                        <span class="py-1 px-2 inline-flex items-center gap-x-1 2xl:text-xs text-[10px] font-medium bg-[#5B80FF] text-white rounded-lg">
                            Graduate
                        </span>
                    </div>
                </div>
                <div class="flex flex-col gap-2 cursor-pointer">
                    <img class="w-full rounded-lg" src="../assets/images/video2.png" alt="" srcset="" />
                    <p class="w-fit 2xl:text-[16px] font-medium lg:text-[14px] md:text-[14px] text-[16px]">
                        The Sydney Harbour Bridge In bla Candy!!! Sticky
                    </p>

                    <div class="flex flex-wrap gap-2">
                        <span class="py-1 px-2 inline-flex items-center gap-x-1 2xl:text-xs text-[10px] font-medium bg-[#5B80FF] text-white rounded-lg">
                            Australia
                        </span>
                        <span class="py-1 px-2 inline-flex items-center gap-x-1 2xl:text-xs text-[10px] font-medium bg-[#5B80FF] text-white rounded-lg">
                            2 Opening
                        </span>
                        <span class="py-1 px-2 inline-flex items-center gap-x-1 2xl:text-xs text-[10px] font-medium bg-[#5B80FF] text-white rounded-lg">
                            Graduate
                        </span>
                    </div>
                </div>
                <div class="flex flex-col gap-2 cursor-pointer">
                    <img class="w-full rounded-lg" src="../assets/images/video1.png" alt="" srcset="" />
                    <p class="w-fit 2xl:text-[16px] font-medium lg:text-[14px] md:text-[14px] text-[16px]">
                        The Sydney Harbour Bridge In bla Candy!!! Sticky
                    </p>

                    <div class="flex flex-wrap gap-2">
                        <span class="py-1 px-2 inline-flex items-center gap-x-1 2xl:text-xs text-[10px] font-medium bg-[#5B80FF] text-white rounded-lg">
                            Australia
                        </span>
                        <span class="py-1 px-2 inline-flex items-center gap-x-1 2xl:text-xs text-[10px] font-medium bg-[#5B80FF] text-white rounded-lg">
                            2 Opening
                        </span>
                        <span class="py-1 px-2 inline-flex items-center gap-x-1 2xl:text-xs text-[10px] font-medium bg-[#5B80FF] text-white rounded-lg">
                            Graduate
                        </span>
                    </div>
                </div>
                <div class="flex flex-col gap-2 cursor-pointer">
                    <img class="w-full rounded-lg" src="../assets/images/video3.png" alt="" srcset="" />
                    <p class="w-fit 2xl:text-[16px] font-medium lg:text-[14px] md:text-[14px] text-[16px]">
                        The Sydney Harbour Bridge In bla Candy!!! Sticky
                    </p>

                    <div class="flex flex-wrap gap-2">
                        <span class="py-1 px-2 inline-flex items-center gap-x-1 2xl:text-xs text-[10px] font-medium bg-[#5B80FF] text-white rounded-lg">
                            Australia
                        </span>
                        <span class="py-1 px-2 inline-flex items-center gap-x-1 2xl:text-xs text-[10px] font-medium bg-[#5B80FF] text-white rounded-lg">
                            2 Opening
                        </span>
                        <span class="py-1 px-2 inline-flex items-center gap-x-1 2xl:text-xs text-[10px] font-medium bg-[#5B80FF] text-white rounded-lg">
                            Graduate
                        </span>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <script src="./node_modules/preline/dist/preline.js"></script>
    <script>
        function dragOverHandler(event) {
            event.preventDefault();
            event.stopPropagation();
            document.getElementById("drop-area").classList.add("highlight");
        }

        function dragEnterHandler(event) {
            event.preventDefault();
            event.stopPropagation();

            // Get the file name from the drag event and display it
            const files = event.dataTransfer.files;
            if (files.length > 0) {
                const fileName = files[0].name;
                document.getElementById(
                    "drop-text"
                ).innerText = `Drop ${fileName} here`;
            }

            document.getElementById("drop-area").classList.add("highlight");
        }

        function dragLeaveHandler(event) {
            event.preventDefault();
            event.stopPropagation();
            document.getElementById("drop-area").classList.remove("highlight");
            document.getElementById("drop-text").innerText =
                "Drag & drop your MP4 or MKV videos here";
        }

        function dropHandler(event) {
            event.preventDefault();
            event.stopPropagation();
            document.getElementById("drop-area").classList.remove("highlight");
            document.getElementById("drop-text").innerText =
                "Drag & drop your MP4 or MKV videos here";

            const files = event.dataTransfer.files;
            handleFiles(files);
        }

        function fileInputChangeHandler(event) {
            const files = event.target.files;
            handleFiles(files);
        }

        function handleFiles(files) {
            for (const file of files) {
                const fileName = file.name.toLowerCase();
                const allowedExtensions = [".mp4", ".mkv"];
                const fileExtension = fileName.substring(fileName.lastIndexOf("."));

                if (allowedExtensions.includes(fileExtension)) {
                    console.log("Video File:", file);
                    // Here you can perform any desired action with the video file, like uploading to a server
                } else {
                    alert("Only MP4 or MKV files are allowed!");
                    return;
                }
            }
        }

    </script>
</body>
</html>
