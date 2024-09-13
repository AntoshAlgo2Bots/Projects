<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.0.4/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.js"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>User Dashboard</title>
</head>


<body>


    <div>


        <?php include("./navBar.php"); ?>

        <div>



            <div class="flex">



                <div style="max-width: 20rem;"
                    class="relative flex h-[calc(100vh-2rem)] w-full max-w-[20rem] flex-col rounded-xl bg-white bg-clip-border p-4 text-gray-700 shadow-xl shadow-blue-gray-900/5">
                    <div class="p-4 mb-2">
                        <h5
                            class="block font-sans text-xl antialiased font-semibold leading-snug tracking-normal text-blue-gray-900">
                            Forms.
                        </h5>
                    </div>
                    <nav
                        class="flex min-w-[240px] flex-col gap-1 p-2 font-sans text-base font-normal text-blue-gray-700">
                        <div class="relative block w-full">
                            <div role="button"
                                class="flex items-center w-full p-0 leading-tight transition-all rounded-lg outline-none bg-blue-gray-50/50 text-start text-blue-gray-700 hover:bg-blue-gray-50 hover:bg-opacity-80 hover:text-blue-gray-900 focus:bg-blue-gray-50 focus:bg-opacity-80 focus:text-blue-gray-900 active:bg-blue-gray-50 active:bg-opacity-80 active:text-blue-gray-900">
                                <button type="button" onclick="userFormShowHide()"
                                    class="flex items-center justify-between w-full p-3 font-sans text-xl antialiased font-semibold leading-snug text-left transition-colors border-b-0 select-none border-b-blue-gray-100 text-blue-gray-900 hover:text-blue-gray-900">
                                    <div class="grid mr-4 place-items-center">
                                        <i class="fa-solid fa-user"></i>
                                        <path fill-rule="evenodd"
                                            d="M2.25 2.25a.75.75 0 000 1.5H3v10.5a3 3 0 003 3h1.21l-1.172 3.513a.75.75 0 001.424.474l.329-.987h8.418l.33.987a.75.75 0 001.422-.474l-1.17-3.513H18a3 3 0 003-3V3.75h.75a.75.75 0 000-1.5H2.25zm6.04 16.5l.5-1.5h6.42l.5 1.5H8.29zm7.46-12a.75.75 0 00-1.5 0v6a.75.75 0 001.5 0v-6zm-3 2.25a.75.75 0 00-1.5 0v3.75a.75.75 0 001.5 0V9zm-3 2.25a.75.75 0 00-1.5 0v1.5a.75.75 0 001.5 0v-1.5z"
                                            clip-rule="evenodd"></path>
                                        </svg>
                                    </div>
                                    <p
                                        class="block mr-auto font-sans text-base antialiased font-normal leading-relaxed text-blue-gray-900">
                                        User Form
                                    </p>
                                    <span class="ml-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="2.5" stroke="currentColor" aria-hidden="true"
                                            class="w-4 h-4 mx-auto transition-transform rotate-0">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M19.5 8.25l-7.5 7.5-7.5-7.5"></path>
                                        </svg>
                                    </span>

                                </button>

                            </div>
                            <div class="overflow-hidden  hidden " id="user-li-area">
                                <div
                                    class="block w-full py-1 font-sans text-sm antialiased font-light leading-normal text-gray-700">
                                    <nav name="nav"
                                        class="flex min-w-[240px] flex-col gap-1 p-0 font-sans text-base font-normal text-blue-gray-700">

                                        <a href="./User/create_User.php"
                                            class="flex items-center w-full p-3 leading-tight transition-all rounded-lg outline-none text-start hover:bg-blue-gray-50 hover:bg-opacity-80 hover:text-blue-gray-900 focus:bg-blue-gray-50 focus:bg-opacity-80 focus:text-blue-gray-900 active:bg-blue-gray-50 active:bg-opacity-80 active:text-blue-gray-900">
                                            <div class="grid mr-4 place-items-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                    stroke-width="3" stroke="currentColor" aria-hidden="true"
                                                    class="w-5 h-3">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M8.25 4.5l7.5 7.5-7.5 7.5"></path>
                                                </svg>
                                            </div>
                                            User Creation Form
                                        </a>

                                        <a href="./User/search_User.php"
                                            class="flex items-center w-full p-3 leading-tight transition-all rounded-lg outline-none text-start hover:bg-blue-gray-50 hover:bg-opacity-80 hover:text-blue-gray-900 focus:bg-blue-gray-50 focus:bg-opacity-80 focus:text-blue-gray-900 active:bg-blue-gray-50 active:bg-opacity-80 active:text-blue-gray-900">
                                            <div class="grid mr-4 place-items-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                    stroke-width="3" stroke="currentColor" aria-hidden="true"
                                                    class="w-5 h-3">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M8.25 4.5l7.5 7.5-7.5 7.5"></path>
                                                </svg>
                                            </div>
                                            User Search Form
                                        </a>

                                        <a href="./User/search_User.php"
                                            class="flex items-center w-full p-3 leading-tight transition-all rounded-lg outline-none text-start hover:bg-blue-gray-50 hover:bg-opacity-80 hover:text-blue-gray-900 focus:bg-blue-gray-50 focus:bg-opacity-80 focus:text-blue-gray-900 active:bg-blue-gray-50 active:bg-opacity-80 active:text-blue-gray-900">
                                            <div class="grid mr-4 place-items-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                    stroke-width="3" stroke="currentColor" aria-hidden="true"
                                                    class="w-5 h-3">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M8.25 4.5l7.5 7.5-7.5 7.5"></path>
                                                </svg>
                                            </div>
                                            User Report
                                        </a>

                                    </nav>
                                </div>
                            </div>
                        </div>
                        <div class="relative block w-full">
                            <div role="button"
                                class="flex items-center w-full p-0 leading-tight transition-all rounded-lg outline-none bg-blue-gray-50/50 text-start text-blue-gray-700 hover:bg-blue-gray-50 hover:bg-opacity-80 hover:text-blue-gray-900 focus:bg-blue-gray-50 focus:bg-opacity-80 focus:text-blue-gray-900 active:bg-blue-gray-50 active:bg-opacity-80 active:text-blue-gray-900">
                                <button type="button" onclick="membershipFormShowHide()"
                                    class="flex items-center justify-between w-full p-3 font-sans text-xl antialiased font-semibold leading-snug text-left transition-colors border-b-0 select-none border-b-blue-gray-100 text-blue-gray-900 hover:text-blue-gray-900">
                                    <div class="grid mr-4 place-items-center">
                                        <i class="fa-solid fa-receipt"></i>
                                        <path fill-rule="evenodd"
                                            d="M2.25 2.25a.75.75 0 000 1.5H3v10.5a3 3 0 003 3h1.21l-1.172 3.513a.75.75 0 001.424.474l.329-.987h8.418l.33.987a.75.75 0 001.422-.474l-1.17-3.513H18a3 3 0 003-3V3.75h.75a.75.75 0 000-1.5H2.25zm6.04 16.5l.5-1.5h6.42l.5 1.5H8.29zm7.46-12a.75.75 0 00-1.5 0v6a.75.75 0 001.5 0v-6zm-3 2.25a.75.75 0 00-1.5 0v3.75a.75.75 0 001.5 0V9zm-3 2.25a.75.75 0 00-1.5 0v1.5a.75.75 0 001.5 0v-1.5z"
                                            clip-rule="evenodd"></path>
                                        </svg>
                                    </div>
                                    <p
                                        class="block mr-auto font-sans text-base antialiased font-normal leading-relaxed text-blue-gray-900">
                                        Daily Transaction Book
                                    </p>
                                    <span class="ml-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="2.5" stroke="currentColor" aria-hidden="true"
                                            class="w-4 h-4 mx-auto transition-transform rotate-0">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M19.5 8.25l-7.5 7.5-7.5-7.5"></path>
                                        </svg>
                                    </span>

                                </button>

                            </div>
                            <div class="overflow-hidden hidden " id="membership-li-area">
                                <div
                                    class="block w-full py-1 font-sans text-sm antialiased font-light leading-normal text-gray-700">
                                    <nav name="nav"
                                        class="flex min-w-[240px] flex-col gap-1 p-0 font-sans text-base font-normal text-blue-gray-700">

                                        <a href="./membership/create_Membership.php"
                                            class="flex items-center w-full p-3 leading-tight transition-all rounded-lg outline-none text-start hover:bg-blue-gray-50 hover:bg-opacity-80 hover:text-blue-gray-900 focus:bg-blue-gray-50 focus:bg-opacity-80 focus:text-blue-gray-900 active:bg-blue-gray-50 active:bg-opacity-80 active:text-blue-gray-900">
                                            <div class="grid mr-4 place-items-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                    stroke-width="3" stroke="currentColor" aria-hidden="true"
                                                    class="w-5 h-3">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M8.25 4.5l7.5 7.5-7.5 7.5"></path>
                                                </svg>
                                            </div>
                                            Daily Txn Creation Form
                                        </a>

                                        <a href="./membership/search_Membership.php"
                                            class="flex items-center w-full p-3 leading-tight transition-all rounded-lg outline-none text-start hover:bg-blue-gray-50 hover:bg-opacity-80 hover:text-blue-gray-900 focus:bg-blue-gray-50 focus:bg-opacity-80 focus:text-blue-gray-900 active:bg-blue-gray-50 active:bg-opacity-80 active:text-blue-gray-900">
                                            <div class="grid mr-4 place-items-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                    stroke-width="3" stroke="currentColor" aria-hidden="true"
                                                    class="w-5 h-3">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M8.25 4.5l7.5 7.5-7.5 7.5"></path>
                                                </svg>
                                            </div>
                                            Daily Txn Search Form
                                        </a>


                                        <a href="./membership/search_Membership.php"
                                            class="flex items-center w-full p-3 leading-tight transition-all rounded-lg outline-none text-start hover:bg-blue-gray-50 hover:bg-opacity-80 hover:text-blue-gray-900 focus:bg-blue-gray-50 focus:bg-opacity-80 focus:text-blue-gray-900 active:bg-blue-gray-50 active:bg-opacity-80 active:text-blue-gray-900">
                                            <div class="grid mr-4 place-items-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                    stroke-width="3" stroke="currentColor" aria-hidden="true"
                                                    class="w-5 h-3">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M8.25 4.5l7.5 7.5-7.5 7.5"></path>
                                                </svg>
                                            </div>
                                            Daily Txn Report
                                        </a>

                                    </nav>
                                </div>
                            </div>
                        </div>
                        <div class="relative block w-full">


                            <div class="overflow-hidden hidden " id="memberRecipt-li-area">
                                <div
                                    class="block w-full py-1 font-sans text-sm antialiased font-light leading-normal text-gray-700">
                                    <nav name="nav"
                                        class="flex min-w-[240px] flex-col gap-1 p-0 font-sans text-base font-normal text-blue-gray-700">

                                        <a href="./Receipt/create_Receipt.php"
                                            class="flex items-center w-full p-3 leading-tight transition-all rounded-lg outline-none text-start hover:bg-blue-gray-50 hover:bg-opacity-80 hover:text-blue-gray-900 focus:bg-blue-gray-50 focus:bg-opacity-80 focus:text-blue-gray-900 active:bg-blue-gray-50 active:bg-opacity-80 active:text-blue-gray-900">
                                            <div class="grid mr-4 place-items-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                    stroke-width="3" stroke="currentColor" aria-hidden="true"
                                                    class="w-5 h-3">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M8.25 4.5l7.5 7.5-7.5 7.5"></path>
                                                </svg>
                                            </div>
                                            Receipt Creation Form
                                        </a>

                                        <a href="./Receipt/search_Receipt.php"
                                            class="flex items-center w-full p-3 leading-tight transition-all rounded-lg outline-none text-start hover:bg-blue-gray-50 hover:bg-opacity-80 hover:text-blue-gray-900 focus:bg-blue-gray-50 focus:bg-opacity-80 focus:text-blue-gray-900 active:bg-blue-gray-50 active:bg-opacity-80 active:text-blue-gray-900">
                                            <div class="grid mr-4 place-items-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                    stroke-width="3" stroke="currentColor" aria-hidden="true"
                                                    class="w-5 h-3">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M8.25 4.5l7.5 7.5-7.5 7.5"></path>
                                                </svg>
                                            </div>
                                            Receipt
                                            Search Report
                                        </a>

                                    </nav>
                                </div>
                            </div>
                        </div>


                        <hr class="my-2 border-blue-gray-50" />
                        <div class="">

                            <a role="button" href="./logout.php"
                                class="flex items-center w-full p-3 leading-tight transition-all rounded-lg outline-none text-start hover:bg-blue-gray-50 hover:bg-opacity-80 hover:text-blue-gray-900 focus:bg-blue-gray-50 focus:bg-opacity-80 focus:text-blue-gray-900 active:bg-blue-gray-50 active:bg-opacity-80 active:text-blue-gray-900">
                                <div class="grid mr-4 place-items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                        aria-hidden="true" class="w-5 h-5">
                                        <path fill-rule="evenodd"
                                            d="M12 2.25a.75.75 0 01.75.75v9a.75.75 0 01-1.5 0V3a.75.75 0 01.75-.75zM6.166 5.106a.75.75 0 010 1.06 8.25 8.25 0 1011.668 0 .75.75 0 111.06-1.06c3.808 3.807 3.808 9.98 0 13.788-3.807 3.808-9.98 3.808-13.788 0-3.808-3.807-3.808-9.98 0-13.788a.75.75 0 011.06 0z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    Log Out
                            </a>

                        </div>
                </div>
                </nav>
            </div>




            <div class="w-full border flex flex-wrap justify-center border-gray-2  00">

                <div class="datachart border-2 bg-gray-100 " style="width:26rem; height:17rem" id="receipt_details">
                </div>
                <div class="datachart border-2 bg-gray-100 " style="width:26rem; height:17rem" id="activeMembership">
                </div>
                <div class="datachart border-2 bg-gray-100 " style="width:26rem; height:17rem" id="paidMmbersByYear">
                </div>
                <div class="datachart border-2 bg-gray-100 " style="width:26rem; height:17rem" id="paidUnpaidByYear">
                </div>
                <div class="datachart border-2 bg-gray-100 " style="width:26rem; height:17rem" id="paidStatements">
                </div>
            </div>


        </div>








    </div>



    </div>

</body>

<script src="./js/pieLoad.js"></script>
<script src="node_modules/@material-tailwind/html@latest/scripts/ripple.js"></script>

<script src="https://unpkg.com/@material-tailwind/html@latest/scripts/ripple.js"></script>

<script src="./js/dashboard.js"></script>

</html>