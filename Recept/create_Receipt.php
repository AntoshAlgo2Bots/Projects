<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.0.4/dist/tailwind.min.css" rel="stylesheet">
    <!-- <script src="https://cdn.tailwindcss.com"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js">
    </script>
    <title>Create Receipt Form</title>
</head>

<body>
    <div id="create_section" class="mt-3 border border-gray-900 p-5 rounded-lg mx-5">
        <h1 class="text-center underline uppercase text-3xl mb-2 font-bold">Receipt Details Form
        </h1>
        <form action="action.php" method="post" id="myForm">
            <div class="">
                <div class="w-full flex flex-wrap justify-center">
                    <fieldset class="w-3/4 flex flex-wrap gap-x-14 border-2 border-gray-900 p-5 rounded-lg">
                        <legend class="font-bold">Membership Info</legend>
                        <div>
                            <label for=""
                                class="block  mb-1 font-bold text-xs font-medium text-gray-900 dark:text-white">Membership
                                No :
                            </label>
                            <input type="text" name="receipt_no"
                                class="w-60 rounded-md border h-8 mb-3 text-xs border-gray-500 bg-white py-3 p-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                            <button type="submit"
                                class="inline-flex items-center py-1 px-4 ms-2 text-sm font-medium text-white bg-blue-700 rounded-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search
                            </button>
                        </div>
                        <div class="">
                            <label
                                class="block w-60 mb-1 font-bold text-xs font-medium text-gray-900 dark:text-white">Membership
                                Name : </label>
                            <input type="text" name="receipt_no"
                                class="w-60 rounded-md border h-8 mb-3 text-xs border-gray-500 bg-white py-3 p-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                            <button type="submit"
                                class="inline-flex items-center py-1 px-4 ms-2 text-sm font-medium text-white bg-blue-700 rounded-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search
                            </button>
                        </div>

                    </fieldset>
                </div>
                <div class="w-full flex flex-wrap justify-center">
                    <fieldset class="w-3/4 flex flex-wrap gap-x-14 border-2 border-gray-900 p-5 rounded-lg">
                        <legend class="font-bold">Receipt Details</legend>
                        <div>
                            <label for=""
                                class="block  mb-1 font-bold text-xs font-medium text-gray-900 dark:text-white">Receipt
                                No :
                            </label>
                            <input type="text" name="receipt_no"
                                class="w-60 rounded-md border h-8 mb-3 text-xs border-gray-500 bg-white py-3 p-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        </div>
                        <div class="">
                            <label
                                class="block w-60 mb-1 font-bold text-xs font-medium text-gray-900 dark:text-white">Payment
                                Method : </label>
                            <select id="countries" name="payment_method"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full h-8 pl-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option selected disabled>Select One</option>
                                <option value="Credit Card">Credit Card</option>
                                <option value="Debit Card">Debit Card</option>
                                <option value="Bank Trasfer">Bank Trasfer </option>
                                <option value="Cash">Cash</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>
                        <div class="">
                            <label
                                class="block w-60 mb-1 font-bold text-xs font-medium text-gray-900 dark:text-white">Member
                                ship ( New/ Renew) : </label>
                            <select id="countries" name="membership_type"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full h-8 pl-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option selected disabled>Select One</option>
                                <option value="New">New</option>
                                <option value="Renew">Renew</option>
                            </select>
                        </div>
                    </fieldset>
                </div>

                <div class="overflow-x-scroll w-3/4 m-auto mt-3">
                    <fieldset class="border-2 border-gray-900 p-5 rounded-lg">
                        <legend class="font-bold">Membership Details</legend>
                        <div class="flex gap-x-14 w-auto">
                            <div class="">
                                <label
                                    class="block w-60 mb-1 font-bold text-xs font-medium text-gray-900 dark:text-white">Year
                                    of Membership : </label>
                                <select id="countries" name="year_of_membership"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full h-8 pl-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    <option selected disabled>Select One</option>
                                    <option value="2018-19">2018-19</option>
                                    <option value="2019-20">2019-20</option>
                                    <option value="2020-21">2020-21</option>
                                    <option value="2021-22">2021-22</option>
                                    <option value="2022-23">2022-23</option>
                                    <option value="2023-24">2023-24</option>
                                    <option value="2024-25">2024-25</option>
                                </select>
                            </div>
                            <div class="">
                                <label
                                    class="block w-60 mb-1 font-bold text-xs font-medium text-gray-900 dark:text-white">One
                                    Time Enrollment fee : </label>
                                <input type="text" name="one_time_enrollment_fee"
                                    class="w-60 rounded-md h-8 border mb-3 text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                            </div>
                            <div class="">
                                <label
                                    class="block w-60 mb-1 font-bold text-xs font-medium text-gray-900 dark:text-white">Yearly
                                    Charges : </label>
                                <input type="text" name="yearly_charges"
                                    class="w-60 rounded-md h-8 border mb-3 text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                            </div>
                            <div class="">
                                <label
                                    class="block w-60 mb-1 font-bold text-xs font-medium text-gray-900 dark:text-white">
                                    Share Allocated : </label>
                                <input type="text" name="share_allocated"
                                    class="w-60 rounded-md h-8 border mb-3 text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                            </div>
                            <div class="">
                                <label
                                    class="block w-60 mb-1 font-bold text-xs font-medium text-gray-900 dark:text-white">
                                    Total Amount : </label>
                                <input type="text" name="total_amount"
                                    class="w-60 rounded-md h-8 border mb-3 text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                            </div>
                        </div>
                    </fieldset>
                </div>


                <div class="w-full flex flex-wrap justify-center mt-4">
                    <fieldset class="w-3/4 flex flex-wrap gap-x-14 border-2 border-gray-900 p-5 rounded-lg">
                        <legend class="font-bold">Payment Details</legend>
                        <div>
                            <label for=""
                                class="block  mb-1 font-bold text-xs font-medium text-gray-900 dark:text-white">Next
                                Amount Due :
                            </label>
                            <input type="date" name="next_amount_due"
                                class="w-60 rounded-md border h-8 mb-3 text-xs border-gray-500 bg-white py-3 p-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        </div>
                        <div>
                            <label for=""
                                class="block  mb-1 font-bold text-xs font-medium text-gray-900 dark:text-white">Date of
                                Amount Paid :
                            </label>
                            <input type="date" name="date_amount_paid"
                                class="w-60 rounded-md border h-8 mb-3 text-xs border-gray-500 bg-white py-3 p-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        </div>
                        <div>
                            <label for=""
                                class="block  mb-1 font-bold text-xs font-medium text-gray-900 dark:text-white">UTR No :
                            </label>
                            <input type="text" name="utr_no"
                                class="w-60 rounded-md border h-8 mb-3 text-xs border-gray-500 bg-white py-3 p-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        </div>
                        <div>
                            <label for=""
                                class="block  mb-1 font-bold text-xs font-medium text-gray-900 dark:text-white">Transaction
                                Date :
                            </label>
                            <input type="date" name="transaction_date"
                                class="w-60 rounded-md border h-8 mb-3 text-xs border-gray-500 bg-white py-3 p-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        </div>
                        <div>
                            <label for=""
                                class="block  mb-1 font-bold text-xs font-medium text-gray-900 dark:text-white">Balance
                                :
                            </label>
                            <input type="number" name="balance"
                                class="w-60 rounded-md border h-8 mb-3 text-xs border-gray-500 bg-white py-3 p-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        </div>
                        <div class="">
                            <label
                                class="block w-60 mb-1 font-bold text-xs font-medium text-gray-900 dark:text-white">Status
                                : </label>
                            <select id="countries" name="status"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full h-8 pl-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option selected disabled>Select One</option>
                                <option value="Paid">Paid</option>
                                <option value="Unpaid">Unpaid</option>
                                <option value="Pending">Pending</option>
                            </select>
                        </div>
                    </fieldset>
                </div>
            </div>
            <div class="w-full mt-5 flex flex-wrap justify-around">
                <button type="text"
                    class="text-white border border-blue-700 bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-md text-xs px-5 py-2.5 text-center me-2 mb-1 font-bold dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-500 dark:focus:ring-blue-800 ">Save</button>
                <button type="submit"
                    class="text-white border border-blue-700 bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-md text-xs px-5 py-2.5 text-center me-2 mb-1 font-bold dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-500 dark:focus:ring-blue-800 ">Submit</button>
                <button type="text"
                    class="text-white border border-blue-700 bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-md text-xs px-5 py-2.5 text-center me-2 mb-1 font-bold dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-500 dark:focus:ring-blue-800 ">Receipt
                    Details</button>
            </div>
        </form>

    </div>


    <script>
        $(document).ready(function () {
            $('#myForm').submit(function (event) {
                event.preventDefault();
                var form = document.getElementById('myForm');
                var formData = new FormData(form);

                $.ajax({
                    url: 'action.php',
                    method: 'POST',
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function (response) {
                        alert('Your form has been sent successfully.');
                        console.log(response);
                    },
                    error: function (xhr, status, error) {
                        alert('Your form was not sent successfully.');
                        console.error(error);
                    }
                });
                var form = document.getElementById('myForm').reset();
            });
        });
    </script>
</body>

</html>