<?php


                    include("./db.php");
                    $sql = "SELECT * FROM employees.employees_information;";


                         $result = mysqli_query($con ,$sql);
        


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Employees</title>
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.css" rel="stylesheet" />

</head>
<body>
    



    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class=" text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="w-full text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr class="whitespace-nowrap">
                    <th scope="col" class="px-6 py-3">
                       Joiner(New/Old)
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Employee No
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Name
                    </th>
                    <th scope="col" class="px-6 py-3">
                        DOB
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Department
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Email Address
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Pan Card No
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Old Organization Name
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Deputed to (Location)
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Last CTC
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Current CTC Offered
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Tentative Date of Joining
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Exact Date of Joining
                    </th>
                    <th scope="col" class="px-6 py-3">
                       Position
                    </th>
                    <th scope="col" class="px-6 py-3">
                       Job Description
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Designation
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Supervisor
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Supervisor Email Id
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Date Of Anniversary
                    </th>
                    <th scope="col" class="px-6 py-3">
                       Notice Period
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Notice Served(Yes/No)
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Offer Letter Release Date
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Date of Leaving
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Created By
                    </th>
                    <th scope="col" class="px-6 py-3">
                       Created Date
                    </th>
                    <th scope="col" class="px-6 py-3">
                       Updated By
                    </th>
                    <th scope="col" class="px-6 py-3">
                       Updated Date
                    </th>
                </tr>
            </thead>
            <tbody>


                    <?php

                    while($row =mysqli_fetch_assoc($result)){



                   


?>

                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    <?php echo $row['joiner_info']  ?>
                    </th>
                    <td class="px-6 py-4">
                        <?php echo $row['serial_no']  ?>
                    </td>
                    <td class="px-6 py-4">
                        <?php echo $row['emp_name']  ?>
                    </td>
                    <td class="px-6 py-4">
                        <?php echo $row['emp_dob']  ?>
                    </td>
                    <td class="px-6 py-4">
                        <?php echo $row['emp_department']  ?>
                    </td>
                    <td class="px-6 py-4">
                        <?php echo $row['emp_mobile_no']  ?>
                    </td>
                    <td class="px-6 py-4">
                        <?php echo $row['emp_address']  ?>
                    </td>
                    <td class="px-6 py-4">
                        <?php echo $row['emp_pan_card']  ?>
                    </td>
                    <td class="px-6 py-4">
                        <?php echo $row['emp_image']  ?>
                    </td>
                    <td class="px-6 py-4">
                        <?php echo $row['organization_name']  ?>
                    </td>
                    <td class="px-6 py-4">
                        <?php echo $row['deputed_location']  ?>
                    </td>
                    <td class="px-6 py-4">
                        <?php echo $row['last_ctc']  ?>
                    </td>
                    <td class="px-6 py-4">
                        <?php echo $row['current_ctc']  ?>
                    </td>
                    <td class="px-6 py-4">
                        <?php echo $row['tentative_date']  ?>
                    </td>
                    <td class="px-6 py-4">
                        <?php echo $row['exact_date']  ?>
                    </td>
                    <td class="px-6 py-4">
                        <?php echo $row['notice_period']  ?>
                    </td>
                    <td class="px-6 py-4">
                        <?php echo $row['notice_served']  ?>
                    </td>
                    <td class="px-6 py-4">
                        <?php echo $row['job_role']  ?>
                    </td>
                    <td class="px-6 py-4">
                        <?php echo $row['job_description']  ?>
                    </td>
                    <td class="px-6 py-4">
                        <?php echo $row['date_of_anniversary']  ?>
                    </td>
                    <td class="px-6 py-4">
                        <?php echo $row['offer_letter_date']  ?>
                    </td>
                    <td class="px-6 py-4">
                        <?php echo $row['offer_letter_file']  ?>
                    </td>
                    <td class="px-6 py-4">
                        <?php echo $row['date_of_leaving']  ?>
                    </td>
                    <td class="px-6 py-4">
                        <?php echo $row['date_of_leaving_file']  ?>
                    </td>
                    <td class="px-6 py-4">
                        <?php echo $row['created_by']  ?>
                    </td>
                    <td class="px-6 py-4">
                        <?php echo $row['created_date']  ?>
                    </td>
                    <td class="px-6 py-4">
                        <?php echo $row['updated_by']  ?>
                    </td>
                    <td class="px-6 py-4">
                        <?php echo $row['updated_date']  ?>
                    </td>
                        
                </tr>


                <?php


}


?>
            </tbody>
        </table>
    </div>
    
</body>
</html>