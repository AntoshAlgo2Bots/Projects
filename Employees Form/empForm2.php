<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/empForm2.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.0.4/dist/tailwind.min.css" rel="stylesheet">
    <title>Employee Information Form</title>
</head>

<body>
    <div class="form-container">
        <form action="action.php" method="post" id="form">
        <div id="create_section" class="mt-5 border border-gray-900 p-5 rounded-lg mx-5">
        <h1 class="text-center underline text-3xl mb-3 font-bold">Create Employee Form</h1>
        <div class="block md:flex gap-x-4">
            <fieldset class="w-full border border-gray-500 p-4 rounded-md">
                <legend class="font-bold text-sm">Employee Information</legend>
                    <div class="">
                        <div class="flex gap-x-9 flex-wrap">

                            <div>
                                <label for="email"
                                    class="block  mb-2 font-bold text-xs font-medium text-gray-900 dark:text-white">Joiner(New/Old)
                                    :
                                </label>
                                <input type="text" name="joiner_info" placeholder="Enter joiner status"
                                    class="w-40 rounded-md border mb-3 text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                            </div>
                            <div class="">
                                <label
                                    class="block w-40 mb-2 font-bold text-xs font-medium text-gray-900 dark:text-white">S.
                                    No :  </label>
                                <input type="text" name="serial_no" placeholder="Enter serial number"
                                    class="w-40 rounded-md border mb-3 text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                            </div>
                            <div class="">
                                <label
                                    class="block w-40 mb-2 font-bold text-xs font-medium text-gray-900 dark:text-white">Name
                                    : </label>
                                <input type="text" name="emp_name"  placeholder="Enter full name"
                                    class="w-40 rounded-md border mb-3 text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                            </div>
                            <div class="">
                                <label
                                    class="block w-40 mb-2 font-bold text-xs font-medium text-gray-900 dark:text-white">DOB
                                    :
                                </label>
                                <input type="date" name="emp_dob"
                                    class="w-40 rounded-md border mb-3 text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                            </div>
                            <div class="">
                                <label
                                    class="block w-40 mb-2 font-bold text-xs font-medium text-gray-900 dark:text-white">Department
                                    :
                                </label>
                                <input type="text" name="emp_department" placeholder="Enter department"
                                    class="w-40 rounded-md border mb-3 text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                            </div>
                            <div class="">
                                <label
                                    class="block w-40 mb-2 font-bold text-xs font-medium text-gray-900 dark:text-white">Mobile
                                    No : </label>
                                <input type="date" name="emp_mobile_no" placeholder="Enter mobile number"
                                    class="w-40 rounded-md border mb-3 text-xs border-gray-500 bg-white pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                            </div>
                            <div class="">
                                <label
                                    class="block w-40 mb-2 font-bold text-xs font-medium text-gray-900 dark:text-white">Address
                                    :
                                </label>
                                <input type="text" name="emp_address"  placeholder="Enter address"
                                    class="w-40 rounded-md border mb-3 text-xs border-gray-500 bg-white pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                            </div>
                            <div class="">
                                <label
                                    class="block  mb-2 font-bold text-xs font-medium text-gray-900 dark:text-white">E-mail
                                    Address : </label>
                                <input type="text" name="emp_email"  placeholder="Enter email address"
                                    class="w-40 rounded-md border mb-3 text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                            </div>
                            <div class="">
                                <label
                                    class="block w-40 mb-2 font-bold text-xs font-medium text-gray-900 dark:text-white">Pan
                                    Card Number : </label>
                                <input type="text" name="emp_pan_card"  placeholder="Enter Pan Card"
                                    class="w-40 rounded-md border mb-3 text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                            </div>
                            <div class="">
                                <label
                                    class="block w-40 mb-2 font-bold text-xs font-medium text-gray-900 dark:text-white">Choose
                                    Image : </label>
                                <input type="file" name="emp_image" accept="image/*" onchange="previewImage(event)"
                                    class="w-40 border-none text-xs border-gray-500 bg-white text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                            </div>
                        </div>


                        <div class="flex justify-between flex-wrap">

                            
                        </div>
                    </div>
            </fieldset>
            <div class="w-44 h-44 mt-3 border border-gray-900 rounded-md">
                <img class="h-44 rounded-md" id="preview" alt="Item image">
            </div>
        </div>

        <div class="mt-6">
            <fieldset class="w-full border p-4 border-gray-500 rounded-md">
                <legend class="font-bold text-sm">Organization Information</legend>
                    <div class="flex flex-wrap items-center gap-x-9">
                        <div class="">
                            <label class="block mb-2 font-bold text-xs font-medium text-gray-900 dark:text-white">Old
                                Organization Name :
                            </label>
                            <input type="text" name="organization_name"  placeholder="Enter organization"
                                class="w-40 rounded-md border mb-3 text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        </div>
                        <div class="">
                            <label
                                class="block mb-2 font-bold text-xs font-medium text-gray-900 dark:text-white">Deputed
                                to (Location) :
                            </label>
                            <input type="text" name="deputed_location"  placeholder="Enter location"
                                class="w-40 rounded-md border mb-3 text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        </div>
                        <div class="">
                            <label class="block mb-2 font-bold text-xs font-medium text-gray-900 dark:text-white">Last
                                CTC :
                            </label>
                            <input type="text" name="last_ctc"  placeholder="Enter last CTC"
                                class="w-40 rounded-md border mb-3 text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        </div>
                        <div class="">
                            <label
                                class="block mb-2 font-bold text-xs font-medium text-gray-900 dark:text-white">Current
                                CTC Offered :
                            </label>
                            <input type="text" name="current_ctc"  placeholder="Enter current CTC"
                                class="w-40 rounded-md border  mb-3  text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        </div>
                        <div class="">
                            <label
                                class="block mb-2 font-bold text-xs font-medium text-gray-900 dark:text-white">Tentative
                                Date of Joining :
                            </label>
                            <input type="date" name="tentative_date"
                                class="w-40 rounded-md border  mb-3  text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        </div>
                        <div class="">
                            <label class="block mb-2 font-bold text-xs font-medium text-gray-900 dark:text-white">Exact
                                Date of Joining :
                            </label>
                            <input type="date" name="exact_date"
                                class="w-40 rounded-md border  mb-3  text-xs border-gray-500 bg-white pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        </div>
                    </div>


                    <div class="flex flex-wrap items-center gap-x-9">
                        <div class="">
                            <label class="block mb-2 font-bold text-xs font-medium text-gray-900 dark:text-white">Notice
                                Period :
                            </label>
                            <input type="text" name="notice_period"  placeholder="Enter notice period"
                                class="w-40 rounded-md border mb-3 text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        </div>
                        <div class="">
                            <label class="block mb-2 font-bold text-xs font-medium text-gray-900 dark:text-white">Notice
                                Served (Yes/No) :
                            </label>
                            <input type="text" name="notice_served"  placeholder="Enter yes or no"
                                class="w-40 rounded-md border mb-3 text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        </div>
                        <div class="">
                            <label class="block mb-2 font-bold text-xs font-medium text-gray-900 dark:text-white">Job
                                Role :
                            </label>
                            <input type="text" name="job_role"  placeholder="Enter role"
                                class="w-40 rounded-md border mb-3 text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        </div>
                        <div class="">
                            <label class="block mb-2 font-bold text-xs font-medium text-gray-900 dark:text-white">Job
                                Description :
                            </label>
                            <input type="text" name="job_description"  placeholder="Enter description"
                                class="w-40 rounded-md border mb-3 text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        </div>
                        <div class="">
                            <label class="block mb-2 font-bold text-xs font-medium text-gray-900 dark:text-white">Date
                                of Anniversary :
                            </label>
                            <input type="date"  name="date_of_anniversary"
                                class="w-40 rounded-md border mb-3 text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        </div>
                    </div>
                    <div class="">
                        <div class="">
                            <label class="block mb-2 font-bold text-xs font-medium text-gray-900 dark:text-white">Offer
                                Letter Release Date :
                            </label>
                            <input type="date" name="offer_letter_date"
                                class="w-40 rounded-md border mb-3 text-xs border-gray-500 bg-white pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                            <input type="file" name="offer_letter_file"
                                class="w-40 border-none text-xs border-gray-500 bg-white text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        </div>
                        <div class="">
                            <label class="block mb-2 font-bold text-xs font-medium text-gray-900 dark:text-white">Date of Leaving :
                            </label>
                            <input type="date" name="date_of_leaving"
                                class="w-40 rounded-md border text-xs border-gray-500 bg-white pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                            <input type="file" name="date_of_leaving_file"
                                class="w-40 border-none text-xs border-gray-500 bg-white text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        </div>
                    </div>
            </fieldset>
        </div>

        <div class="w-full mt-5 flex justify-center gap-x-5">
            <button type="text"
                class="w-28 text-white border border-blue-700 bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-md text-xs py-2.5 text-center me-2 mb-2 font-bold dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-500 dark:focus:ring-blue-800 ">Save</button>
            <!-- <button type="text"
                class="w-28 text-white border border-blue-700 bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-md text-xs  py-2.5 text-center me-2 mb-2 font-bold dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-500 dark:focus:ring-blue-800 ">Save</button> -->
            <div>
                <button type="submit"
                    class="w-28 text-white border border-blue-700 bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-md text-xs py-2.5 text-center me-2 font-bold dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-500 dark:focus:ring-blue-800 ">Submit
                    Now</button>
            </div>
        </div>
    </div>
        </form>

        <script>
            function previewImage(event) {
                var input = event.target;
                var image = document.getElementById('preview1');
                if (input.files && input.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function (e) {
                        image.src = e.target.result;
                    }
                    reader.readAsDataURL(input.files[0]);
                }
            }

            function resetForm() {
                $('#form')[0].reset();
            }

            $(document).ready(function () {
                // Capture form submission
                $('form').on('submit', function (e) {
                    e.preventDefault(); // Prevent the default form submission

                    // Create a FormData object to handle the form data
                    var formData = new FormData(this);

                    // Send the form data using AJAX
                    $.ajax({
                        url: $(this).attr('action'), // Get the form action URL
                        type: $(this).attr('method'), // Get the form method (GET/POST)
                        data: formData, // Send the form data
                        processData: false, // Prevent jQuery from automatically processing the data
                        contentType: false, // Prevent jQuery from automatically setting content type
                        success: function (response) {
                            // Handle the server response here
                            alert("Form submitted successfully: " + response);

                            resetForm();
                        },
                        error: function (xhr, status, error) {
                            // Handle any errors here
                            console.error("Error occurred: " + error);
                        }
                    });
                });
            });
        </script>
    </div>
</body>

</html>