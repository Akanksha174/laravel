<h1>Student Data</h1>
<!-- {{print_r($students)}} -->

<table border="1">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>City</th>
    </tr>
    @foreach($students as $student)
    <tr>
        <td>{{$student->ID}}</td>
        <td>{{$student->Name}}</td>
        <td>{{$student->Email}}</td>
        <td>{{$student->City}}</td>
    </tr>
    @endforeach 
</table>