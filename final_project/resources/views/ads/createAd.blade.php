@extends('layouts.app')

@section('content')
<div class="container col-sm-6"  style="border-style: solid;" id="m">
    <h1 class="w3-wide well text-center">Create Your Ad</h1>

    <form name="f"  enctype="multipart/form-data" method="POST" action="{{route('ads.store')}}">
        @csrf
    <div class="text-center form-group"> <img id="uploadPreview" style="width: 300px; height: 200px;" />
        <input  type="file" id="cover_img" name="image" onchange="loadFile(event)" class="form-control" placeholder="image here"/>
    </div>
    <div class=" form-group">Category:
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
    </div>
    <div class="form-group"><input type="text" name="name"  placeholder="Item Name" class="form-control"></div>
    <div class="form-group"><input type="text" name="description"  placeholder="Brand/Model/Capacity-other info" class="form-control"></div>
    <div class="form-group"><input type="text" name="phone_no"  placeholder="Contact number" class="form-control"></div>
    <div class="form-group"><input type="text" name="price" placeholder="Enter the unit price" class="form-control"></div>
    <div class="form-group"><input type="text" name="quantity" placeholder="Enter the Quantity" class="form-control"></div>
    <p class="col-sm-4"><button type="submit" class="btn btn-primary">Submit</button></p>
    </form>


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

<script>
    var loadFile = function(event) {
      var reader = new FileReader();
      reader.onload = function(){
        var output = document.getElementById('uploadPreview');
        output.src = reader.result;
      };
      reader.readAsDataURL(event.target.files[0]);
    };
  </script>


@endsection
