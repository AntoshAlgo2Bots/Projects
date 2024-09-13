<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.0.4/dist/tailwind.min.css" rel="stylesheet">
</head>

<body>





    <div class="h-full bg-gray-400 dark:bg-gray-900">
        <!-- Container -->
        <div class="mx-auto">
            <div class="flex justify-center px-6 py-12">
                <!-- Row -->
                <div class="w-full lg:w-11/12 flex">
                    <!-- Col -->

                    <!-- Col -->
                    <div class="w-full  bg-white dark:bg-gray-700 p-5 rounded-lg lg:rounded-l-none">
                        <h3 class="py-4 text-2xl text-center text-gray-800 dark:text-white">Register Location !!</h3>

                            <form action="#" method="post" class="px-8 pt-6 pb-8 mb-4 bg-white dark:bg-gray-800 rounded">
    
                                <div class="mb-4 md:flex md:justify-between">
                                    <div class="mb-4 md:mr-2 md:mb-0">
                                        <label class="block mb-2 text-sm name font-bold text-gray-700 dark:text-white" for="firstName">
                                            Company id
                                        </label>
                                        <input name="company_name" class="w-full px-3 py-2 text-sm leading-tight text-gray-700 dark:text-white border rounded shadow appearance-none focus:outline-none focus:shadow-outline" value=' . $_SESSION['mainCompanyId'] . ' id="firstName" type="text" placeholder="First Name" />
                                    </div>
                                    <div class="md:ml-2">
                                        <label class="block mb-2 text-sm font-bold text-gray-700 dark:text-white" for="lastName">
                                            company name
                                        </label>
                                        <input name="company_name" class="w-full px-3 py-2 text-sm leading-tight text-gray-700 dark:text-white border rounded shadow appearance-none focus:outline-none focus:shadow-outline" value=' . $_SESSION['mainCompany'] . ' id="firstName" type="text" placeholder="First Name" />
                                    </div>
    
    
                                    <div class="mb-4">
                                        <label class="block mb-2 text-sm font-bold text-gray-700 dark:text-white" for="email">
                                            Adress
                                        </label>
                                        <input name="company_address" class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 dark:text-white border rounded shadow appearance-none focus:outline-none focus:shadow-outline" id="email" type="txt" placeholder="Adress" />
                                    </div>
                                    <div class="mb-4">
                                        <label class="block mb-2 text-sm font-bold text-gray-700 dark:text-white" for="email">
                                            Category
                                        </label>
                                        <input name="Category" class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 dark:text-white border rounded shadow appearance-none focus:outline-none focus:shadow-outline" id="email" type="txt" placeholder="Category" />
                                    </div>
                                    <div class="mb-4">
                                        <label class="block mb-2 text-sm font-bold text-gray-700 dark:text-white" for="email">
                                            Contact Email Adress
                                        </label>
                                        <input name="Contact Email Adress" class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 dark:text-white border rounded shadow appearance-none focus:outline-none focus:shadow-outline" id="email" type="txt" placeholder="Email" />
                                    </div>
                                </div>
    
    
    
    
                                <div class="flex items-center mb-4">
                                    <input id="default-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                    <label for="default-checkbox" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300"> &nbsp &nbsp Bank Same as company</label>
                                </div>
    
    
                                <div class="mb-4 md:flex md:justify-between">
                                    <div class="mb-4 md:mr-2 md:mb-0">
                                        <label class="block mb-2 text-sm name font-bold text-gray-700 dark:text-white" for="firstName">
                                            Bank name
                                        </label>
                                        <input name="bank_name" value=' . $_SESSION["bankName"] . ' class="w-full px-3 py-2 text-sm leading-tight text-gray-700 dark:text-white border rounded shadow appearance-none focus:outline-none focus:shadow-outline" id="firstName" type="text" placeholder="Bank names" />
                                    </div>
                                    <div class="md:ml-2">
                                        <label class="block mb-2 text-sm font-bold text-gray-700 dark:text-white" for="lastName">
                                            Bank account number
                                        </label>
                                        <input name="bank_account_number" value=' . $_SESSION["bankAccountNumber"] . '  class="w-full px-3 py-2 text-sm leading-tight text-gray-700 dark:text-white border rounded shadow appearance-none focus:outline-none focus:shadow-outline" id="lastName" type="text" placeholder="Bank account number" />
                                    </div>
    
                                    <div class="mb-4 md:mr-2 md:mb-0">
                                        <label class="block mb-2 text-sm name font-bold text-gray-700 dark:text-white" for="firstName">
                                            Bank IFSC :
                                        </label>
                                        <input name="bank_ifsc_number" value=' . $_SESSION["bankIfscNumber"] . ' class="w-full px-3 py-2 text-sm leading-tight text-gray-700 dark:text-white border rounded shadow appearance-none focus:outline-none focus:shadow-outline" id="firstName" type="text" placeholder="Bank IFSC" />
                                    </div>
                                    <div class="md:ml-2">
                                        <label class="block mb-2 text-sm font-bold text-gray-700 dark:text-white" for="lastName">
                                            Bank branch name
                                        </label>
                                        <input name="bank_branch_name" value=' . $_SESSION["bankBranchName"] . ' class="w-full px-3 py-2 text-sm leading-tight text-gray-700 dark:text-white border rounded shadow appearance-none focus:outline-none focus:shadow-outline" id="lastName" type="text" placeholder="Bank branch name" />
                                    </div>
                                </div>
    
                                <div class="mb-4 md:flex md:justify-between">
    
                                    <!-- for another -->
    
                                </div>
    
                                <div class="mb-6 mt-3 text-center">
                                    <button class="w-full px-4 py-2 font-bold text-white bg-blue-500 rounded-full hover:bg-blue-700 dark:bg-blue-700 dark:text-white dark:hover:bg-blue-900 focus:outline-none focus:shadow-outline" type="submit">
                                        Submit
                                    </button>
                                </div>
                                <hr class="mb-6 border-t" />
    
    
                            </form>



                        ?>


                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>