 @include('admin.layouts.headermodule')
 <meta name="csrf-token" content="{{ csrf_token() }}">
 <link href="https://api.mapbox.com/mapbox-gl-js/v3.4.0/mapbox-gl.css" rel="stylesheet">
 <script src="https://api.mapbox.com/mapbox-gl-js/v3.4.0/mapbox-gl.js"></script>
 <link href="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-draw/v1.4.3/mapbox-gl-draw.css" rel="stylesheet">
 <script src="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-draw/v1.4.3/mapbox-gl-draw.js"></script>
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
 <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js"></script>
 <style>
   #map {
     height: 400px;
   }

   .calculation-box {
     height: 75px;
     width: 150px;
     position: absolute;
     bottom: 40px;
     left: 10px;
     background-color: rgba(255, 255, 255, 0.9);
     padding: 15px;
     text-align: center;
   }

   p {
     font-family: 'Open Sans';
     margin: 0;
     font-size: 13px;
   }
 </style>
 <div class="wrapper">
   @include('admin.layouts.header')
   @include('admin.layouts.sidebar')
   <div class="content-wrapper">
     <section class="content-header" style="padding-left: 26px;">
       <div class="container-fluid">
         <div class="row mb-2">
           <div class="col-sm-6 zw_back">
             <a onclick="history.back()" class="poppins-medium zw_18 zw_text_333333 zw_a zw_back">
               <i class="fas fa-arrow-left right mr-2"></i>Back
             </a>
           </div>
         </div>
         <div class="container mb-2">
           <div class="row align-items-center">
             <div class="col-lg-2">
               <h1 class="poppins-semibold zw_46 zw_text_AF2245 mt-2">Zone</h1>
             </div>
             <div class="col-lg-10 text-lg-left">
               <a class="btn zw_add_btn poppins-medium zw_18 mr-5 pr-5" href="{{route('admin/addcountry')}}">
                 <i class="fas fa-plus mr-5"></i>Add Country
               </a>
               <a class="btn zw_add_btn poppins-medium zw_18 mr-5 pr-5" href="{{route('admin/addcity')}}">
                 <i class="fas fa-plus mr-5"></i>Add City
               </a>
               <a class="btn zw_add_btn poppins-medium zw_18 mr-5 pr-5" href="{{route('admin/addzone')}}">
                 <i class="fas fa-plus mr-5"></i>Add Zone
               </a>
             </div>
           </div>
         </div>
         @if ($message = Session::get('success'))
         <div class="alert zw_alert_success" id="success-message">
           <p>{{ $message }}</p>
         </div>
         @endif
         <div class="card-body table-responsive p-0">
           <table class="table table-hover text-nowrap zw_table">
             <thead class="zw_bg_AF2245 zw_text_ffffff">
               <tr>
                 <th class="poppins-medium zw_18">En Country</th>
                 <th class="poppins-medium zw_18">Ar Country</th>
                 <th class="poppins-medium zw_18">EN City </th>
                 <th class="poppins-medium zw_18">Ar City</th>
                 <th class="poppins-medium zw_18">EN Zone </th>
                 <th class="poppins-medium zw_18" colspan="2">AR Zone </th>
               </tr>
             </thead>
             <tbody>
               @foreach ($zones as $zone)
               <tr>
                 <td class="poppins-regular zw_14 zw_text_333333">
                   {{ $zone->country->Enname ?? 'N/A' }}
                 </td>
                 <td class="poppins-regular zw_14 zw_text_333333">
                   {{ $zone->country->Arname ?? 'N/A' }}
                 </td>
                 <td class="poppins-regular zw_14 zw_text_333333">
                   {{ $zone->city->name ?? 'N/A' }}
                 </td>
                 <td class="poppins-regular zw_14 zw_text_333333">
                   {{ $zone->city->Arcityname ?? 'N/A' }}
                 </td>
                 <td class="poppins-regular zw_14 zw_text_333333">
                   {{ $zone->Enname ?? 'N/A' }}
                 </td>
                 <td class="poppins-regular zw_14 zw_text_333333">
                   {{ $zone->Arname ?? 'N/A' }}
                 </td>
                 <td class="poppins-regular zw_14 zw_text_333333 text-right">
                   <a class="btn zw_text_AF2245 zw_a zw_24" href="">
                     <i class="fa fa-edit" aria-hidden="true"></i>
                   </a>
                 </td>
               </tr>
               @endforeach

               <!-- <tr>
                 <td class="poppins-regular zw_14 zw_text_333333">Saudi Arabia</td>
                 <td class="poppins-regular zw_14 zw_text_333333">العربية السعودية</td>
                 <td class="poppins-regular zw_14 zw_text_333333">Dubai</td>
                 <td class="poppins-regular zw_14 zw_text_333333">دبي </td>
                 <td class="poppins-regular zw_14 zw_text_333333">Alarbua</td>
                 <td class="poppins-regular zw_14 zw_text_333333">الربوه</td>
                 <td class="poppins-regular zw_14 zw_text_333333 text-right">
                   <a class="btn zw_text_AF2245 zw_a zw_24" href=""><i class="fa fa-edit" aria-hidden="true"></i> </a>
                 </td>
               </tr> -->
             </tbody>
           </table>
         </div>
       </div>

     </section>
     <div class="container-fluid mt-4">
       <div id="map" class="offset-md-1 col-md-10"></div>
       <div class="calculation-box">
         <p>Click the map to draw a polygon.</p>
         <div id="calculated-area"></div>
       </div>
     </div>
   </div>
 </div>

 @include('admin.layouts.footer')
 <script src="https://api.mapbox.com/mapbox-gl-js/v2.6.1/mapbox-gl.js"></script>
 <script src="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-draw/v1.4.3/mapbox-gl-draw.js"></script>
 <script src="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v4.7.0/mapbox-gl-geocoder.min.js"></script>
 <!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> -->
 <script src="https://unpkg.com/@turf/turf@6/turf.min.js"></script>
 <script type="text/javascript">
   $(document).ready(function() {
     // Set up CSRF token for all AJAX requests
     $.ajaxSetup({
       headers: {
         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
       }
     });

     fetchAndDisplayShapes();
   });

   mapboxgl.accessToken = 'pk.eyJ1IjoiYWJkdWxyYTdtYW4iLCJhIjoiY2x0bzlvNTEwMDVoZTJrbWg4bHRxeXRwciJ9._WDrK6r6rayfB4WnardOwA';

   var map = new mapboxgl.Map({
     container: 'map',
     style: 'mapbox://styles/mapbox/streets-v11',
     center: [0, 0],
     zoom: 2
   });

  //  var draw = new MapboxDraw({
  //    displayControlsDefault: true,
  //    controls: {
  //      point: true,
  //      line_string: true,
  //      polygon: true,
  //      trash: true,
  //      combine_features: true,
  //      uncombine_features: true
  //    }
  //  });
  //  map.addControl(draw);

   map.addControl(new mapboxgl.NavigationControl());

   var geocoder = new MapboxGeocoder({
     accessToken: mapboxgl.accessToken,
     mapboxgl: mapboxgl,
     marker: true,
     placeholder: 'Search for a zone'
   });
   map.addControl(geocoder, 'top-left');

   map.on('draw.create', function(event) {
     const urlParams = new URLSearchParams(window.location.search);
     const id = urlParams.get('id') || '0';

     console.log(id);

     var coordinates = event.features[0].geometry.coordinates;
     var shapeType = event.features[0].geometry.type;

     var countryId = $('#zone_country_id').val();
     var cityId = $('#zone_city_id').val();
     var zoneId = $('#zone_id').val();

     var data = {
       country_id: countryId,
       city_id: cityId,
       zone_id: zoneId,
       shape_type: shapeType,
       coordinates: coordinates,
       healthcare_id: id
     };

     fetch('/save', {
         method: 'POST',
         headers: {
           'Content-Type': 'application/json',
           'Accept': 'application/json',
           'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
         },
         body: JSON.stringify(data)
       })
       .then(response => {
         if (!response.ok) {
           return response.json().then(err => {
             throw new Error(err.message);
           });
         }
         return response.json();
       })
       .then(data => {
         if (data.success) {
           //  Swal.fire({
           //    title: 'Success!',
           //    text: 'Zone saved successfully',
           //    icon: 'success',
           //    confirmButtonText: 'OK'
           //  });
         } else {
           //  Swal.fire({
           //    title: 'Error!',
           //    text: data.message,
           //    icon: 'error',
           //    confirmButtonText: 'OK'
           //  });
         }
         console.log('Response data:', data);
       })
       .catch(error => {
         //  Swal.fire({
         //    title: 'Error!',
         //    text: 'Zone Is Alredy Exit',
         //    icon: 'error',
         //    confirmButtonText: 'OK'
         //  });
         console.error('Error saving shape:', error);
       });

   });

   function fetchAndDisplayShapes() {
     const urlParams = new URLSearchParams(window.location.search);
     const id = urlParams.get('id') || '0';

     fetch(`/getrectangles?id=${id}`, {
         headers: {
           'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
           'Content-Type': 'application/json'
         }
       })
       .then(response => {
         if (!response.ok) {
           throw new Error('Network response was not ok');
         }
         return response.json();
       })
       .then(data => {
         data.forEach(shape => {
           var coordinates = JSON.parse(shape.coordinates);

           map.addLayer({
             id: `shape-${shape.id}`,
             type: 'fill',
             source: {
               type: 'geojson',
               data: {
                 type: 'Feature',
                 geometry: {
                   type: shape.shape_type,
                   coordinates: coordinates
                 }
               }
             },
             layout: {},
             paint: {
               'fill-color': '#888888',
               'fill-opacity': 0.4
             }
           });

           map.addLayer({
             id: `shape-outline-${shape.id}`,
             type: 'line',
             source: {
               type: 'geojson',
               data: {
                 type: 'Feature',
                 geometry: {
                   type: shape.shape_type,
                   coordinates: coordinates
                 }
               }
             },
             layout: {},
             paint: {
               'line-color': '#af2245',
               'line-width': 2
             }
           });
         });
       })
       .catch(error => {
         console.error('Error fetching shapes:', error);
       });
   }

   map.on('draw.create', updateArea);
   map.on('draw.delete', updateArea);
   map.on('draw.update', updateArea);

   function updateArea(e) {
     const data = draw.getAll();
     const answer = document.getElementById('calculated-area');
     if (data.features.length > 0) {
       const area = turf.area(data);
       const rounded_area = Math.round(area * 100) / 100;
       answer.innerHTML = `<p><strong>${rounded_area}</strong></p><p>square meters</p>`;
     } else {
       answer.innerHTML = '';
       if (e.type !== 'draw.delete') alert('Click the map to draw a polygon.');
     }
   }

   $('#zone_country_id').change(function() {
     var countryId = $(this).val();
     $.ajax({
       url: '{{ route("getCitiesByCountry", ":country_id") }}'.replace(':country_id', countryId),
       type: 'GET',
       success: function(data) {
         var citiesDropdown = $('#zone_city_id');
         citiesDropdown.empty();
         citiesDropdown.append('<option value="">Select a city</option>');
         $.each(data, function(index, city) {
           citiesDropdown.append('<option value="' + city.id + '">' + city.name + '</option>');
         });
       },
       error: function(error) {
         console.error('Error fetching cities:', error);
         if (error.status === 401) {
           window.location.href = '{{ route("login") }}';
         }
       }
     });
   });

   $('#zone_city_id').change(function() {
     var cityId = $(this).val();
     $.ajax({
       url: '{{ route("getZonesByCity", ":city_id") }}'.replace(':city_id', cityId),
       type: 'GET',
       success: function(data) {
         var zonesDropdown = $('#zone_id');
         zonesDropdown.empty();
         zonesDropdown.append('<option value="">Select a zone</option>');
         $.each(data, function(index, zone) {
           zonesDropdown.append('<option value="' + zone.id + '">' + zone.name + '</option>');
         });
       },
       error: function(error) {
         console.error('Error fetching zones:', error);
         if (error.status === 401) {
           window.location.href = '{{ route("login") }}';
         }
       }
     });
   });
 </script>
 <script>
   $(document).ready(function() {
     $('.StatusUpdate').change(function() {
       var status = $(this).prop('checked');
       var zid = $(this).closest('.statusForm').find('.zid').val();

       $.ajax({
         url: "{{ route('zupdate.status') }}",
         method: 'POST',
         data: {
           _token: "{{ csrf_token() }}",
           id: zid,
           status: status
         },
         success: function(response) {
           console.log('Status updated successfully');
           // You can add any additional logic here if needed
         },
         error: function(xhr, status, error) {
           console.error('Error updating status:', error);
         }
       });
     });
   });
 </script>
 <script>
   // Check if the success message is present
   const successMessage = document.getElementById('success-message');
   if (successMessage) {
     setTimeout(() => {
       successMessage.style.display = 'none'; // Hide the message after 3 seconds
     }, 3000); // 3000 milliseconds = 3 seconds
   }
 </script>