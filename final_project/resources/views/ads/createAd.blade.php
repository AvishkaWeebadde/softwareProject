@extends('layouts.app')

@section('content')
<div class="col-md-6" id="m">
    <h1 class="w3-wide well">Create Your Ad</h1>
    <div class="col-sm-3"></div>
    <div class="col-sm-6">
    <form name="f"  enctype="multipart/form-data" method="POST" action="{{route('ads.store')}}">
        @csrf
    <p> <img id="uploadPreview" style="width: 300px; height: 200px;" />
        <input  type="file" id="cover_img" name="image" onchange="PreviewImage();" class="form-control" placeholder="image here"/>
    </p>
    <p>Category:
       <select name="category">
        <option value="pc parts">PC Parts</option>
        <option value="laptop">Laptop/Parts</option>
        <option value="mobile">Mobile Devices</option>
        <option value="network">Network Devices</option>
        <option value="household">Household Devices</option>
        <option value="storage">Storage Devices</option>
        <option value="storage">Storage Device</option>
        <option value="other">Other Hardware</option>
       </select>
    </p>
    <p><input type="text" name="name"  placeholder="Item Name" class="form-control"></p>
    <p><input type="text" name="description"  placeholder="Brand/Model/Capacity-other info" class="form-control"></p>
    <p><input type="text" name="phone_no"  placeholder="Contact number" class="form-control"></p>
    <p><input type="text" name="price" placeholder="Enter the unit price" class="form-control"></p>
    <p><input type="text" name="quantity" placeholder="Enter the Quantity" class="form-control"></p>
    <p class="col-sm-4"><button type="submit" class="btn btn-primary">Submit</button></p>
    </form>
    </div>
    <div class="col-sm-3"></div>
    </div>

    <script type="text/javascript">

        function PreviewImage() {
            var oFReader = new FileReader();
            oFReader.readAsDataURL(document.getElementById("uploadImage").files[0]);

            oFReader.onload = function (oFREvent) {
                document.getElementById("uploadPreview").src = oFREvent.target.result;
            };
        };

    </script>


@endsection
