<?php
include("connection.php");
//For Table employee
echo "Employee : </br>"  ;
$query_to_employee = mysql_query("select * from employee");

$json_response_employee = array();

while ($row_from_employee = mysql_fetch_array($query_to_employee, MYSQL_ASSOC))
        {
    	    $row_array_employee['id_employee'] = $row_from_employee['id_employee'];
	        $row_array_employee['emp_name'] = $row_from_employee['emp_name'];
	        $row_array_employee['designation'] = $row_from_employee['designation'];
	        $row_array_employee['date_joined'] = $row_from_employee['date_joined'];
	        $row_array_employee['salary'] = $row_from_employee['salary'];
	        $row_array_employee['id_dept'] = $row_from_employee['id_dept'];

	        //push the values in the array
	        array_push($json_response_employee,$row_array_employee);
	    }
	    echo json_encode($json_response_employee);

//End

//For Table designation

echo "Designation : </br>"  ;
$query_to_designation = mysql_query("SELECT * FROM designation");

$json_response_designation = array();

while($row_from_designation = mysql_fetch_array($query_to_designation, MYSQL_ASSOC))
{
    $row_array_designation['designation_id'] = $row_from_designation['designation_id'];
    $row_array_designation['designation_name'] = $row_from_designation['designation_name'];
    $row_array_designation['employee_number'] = $row_from_designation['employee_number'];

    array_push($json_response_designation,$row_array_designation);
}
echo json_encode($json_response_designation);

//End