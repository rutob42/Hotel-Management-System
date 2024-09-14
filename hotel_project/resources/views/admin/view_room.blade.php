<!DOCTYPE html>
<html lang="en">
<head>
    @include('admin.css')

    <style type="text/css">
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f7f6;
            color: #333;
        }

        .table-container {
            margin: auto;
            padding: 25px;
            background: rgb(56,66,72);
background: linear-gradient(90deg, rgba(56,66,72,1) 20%, rgba(0,138,227,1) 100%);
            border-radius: 10px;
            width: 90%;
            margin-top: 40px;
        }

        .table-title {
            font-size: 28px;
            font-weight: bold;
            color: #2b5c66;
            text-align: center;
            margin-bottom: 20px;
            text-transform: uppercase;
            letter-spacing: 2px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            padding: 15px;
            text-align: center;
            border-bottom: 2px solid #ddd;
        }

        th {
            background-color: #4a90e2;
            color: white;
            text-transform: uppercase;
            font-weight: bold;
            letter-spacing: 1px;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        tr:hover {
            background-color: #e9f5ff;
            transform: scale(1.02);
            transition: 0.3s ease-in-out;
        }

        img {
            width: 80px;
            height: auto;
            border-radius: 5px;
        }

        .add-room-button {
            display: inline-block;
            padding: 20px 35px;
            background-color: #2b5c66;
            color: white;
            text-align: center;
            font-size: 16px;
            font-weight: bold;
            border-radius: 30px;
            transition: 0.3s ease;
            text-decoration: none;
            margin: 20px auto;
            display: block;
            width: 200px;
        }

        .add-room-button:hover {
            background-color: #357ab7;
            transform: translateY(-3px);
        }

        .page-header {
            margin-bottom: 50px;
        }

        .container-fluid {
            padding: 0 50px;
        }
    </style>
</head>
<body>

    <header class="header">
        @include('admin.header')
    </header>

    @include('admin.slider')

    <div class="page-content">
        <div class="page-header">
            <div class="container-fluid">
                <div class="table-container">
                    <div class="table-title">Rooms Overview</div>

                    <a href="{{ url('/create_room') }}" class="add-room-button">+ Add New Room</a>

                    <table>
                        <thead>
                            <tr>
                                <th>Room Title</th>
                                <th>Description</th>
                                <th>Price</th>
                                <th>Wifi</th>
                                <th>Room Type</th>
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $room)
                            <tr>
                                <td>{{ $room->room_title }}</td>
                                <td>{{ Str::limit($room->description, 100) }}</td>
                                <td>{{ $room->price }}$</td>
                                <td>{{ $room->wifi }}</td>
                                <td>{{ $room->room_type }}</td>
                                <td><img src="room/{{ $room->image }}" alt="Room Image"></td>
                                <td>
    <a class="btn btn-danger" href="{{ url('room_delete', $room->id) }}">Delete</a>
<br>
    <a class="btn btn-warning" href="{{ url('room_update', $room->id) }}">Update</a>

</td>
                               
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>



</body>
</html>
