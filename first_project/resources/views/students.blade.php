<h1>Student Data</h1>
<!-- {{print_r($students)}} -->

<table>
    <tr>
        <!-- <th>ID</th> -->
        <th>Name</th>
        <th>Email</th>
        <th>City</th>
    </tr>
    <tr>
        <!-- <td>{{$students->ID}}</td> -->
        <td>{{$students->Name}}</td>
        <td>{{$students->Email}}</td>
        <td>{{$students->City}}</td>
    </tr>
</table>