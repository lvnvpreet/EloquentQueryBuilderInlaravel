<center>
    <h1>User Data</h1>

    <!-- <pre>{{ print_r($data, true) }}</pre> -->

     <table>
        <thead>
            <tr>
                
                <th>User Name</th>
                <th>User Email</th>
                <th>User Phone</th>
            </tr>
        </thead>
        <tbody>
            <!-- in this array loop data save in user veriable one by one this this data we print in table using $user  -->
            @foreach($data as $user)
            <tr>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->mobile}}</td>
               
            </tr>
           @endforeach
        </tbody>
    </table>

    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>

</center>
