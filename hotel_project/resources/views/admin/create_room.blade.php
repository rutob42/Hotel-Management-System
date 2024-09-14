<!DOCTYPE html>
<html lang="en">
<head>
    @include('admin.css')

    <style type="text/css">
        label {
            display: inline-block;
            width: 200px;
        }

        .div_deg {
            padding-top: 20px;
        }

        .div_center {
            text-align: center;
            padding-top: 40px;
        }

        .page-header {
            padding: 30px 0;
        }

        input[type="text"],
        input[type="number"],
        textarea,
        select {
            width: 300px;
            padding: 8px;
            margin-left: 20px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        input[type="file"] {
            margin-left: 20px;
            margin-bottom: 15px;
        }

        .btn {
            margin-top: 20px;
            padding: 10px 20px;
        }
    </style>
</head>
<body>
    @include('admin.header')
    @include('admin.slider')

    <div class="page-content">
        <div class="page-header">
            <div class="container-fluid">
                <div class="div_center">
                    <h1 style="font-size: 30px; font-weight: bold;">Add Rooms</h1>

                    <form action="{{url('add_room')}}" method="Post" enctype="multipart/form-data">
                    @csrf
                        <div class="div_deg">
                            <label>Room Title</label>
                            <input type="text" name="title">
                        </div>

                        <div class="div_deg">
                            <label>Description</label>
                            <textarea name="description" rows="4"></textarea>
                        </div>

                        <div class="div_deg">
                            <label>Price</label>
                            <input type="number" name="price">
                        </div>

                        <div class="div_deg">
                            <label>Room Type</label>
                            <select name="type">
                                <option value="regular" selected>Regular</option>
                                <option value="premium">Premium</option>
                                <option value="deluxe">Deluxe</option>
                            </select>
                        </div>

                        <div class="div_deg">
                            <label>Free Wifi</label>
                            <select name="wifi">
                                <option value="Yes" selected>Yes</option>
                                <option value="No">No</option>
                            </select>
                        </div>

                        <div class="div_deg">
                            <label>Upload Image</label>
                            <input type="file" name="image">
                        </div>

                        <div class="div_deg">
                            <input class="btn btn-primary" type="submit" value="Add Room">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    @include('admin.footer')
</body>
</html>
