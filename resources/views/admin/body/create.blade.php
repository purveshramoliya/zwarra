@include('admin.layouts.headermodule')
<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 20px;
        background-color: #f4f4f4;
        color: #333;
    }

    .container {
        max-width: 400px;
        margin: 0 auto;
        padding: 20px;
        background: #fff;
        border-radius: 8px;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
    }

    h1 {
        text-align: center;
        color: #4a4a4a;
        margin-bottom: 20px;
    }

    .dropdown {
        position: relative;
        display: inline-block;
        width: 100%;
    }

    .dropdown-button {
        width: 100%;
        padding: 12px;
        border-bottom: 2px solid #af2245;
        border-radius: 5px;
        background-color: #ffffff;
        font-size: 16px;
        text-align: left;
        cursor: pointer;
        transition: border-color 0.3s;
    }

    .dropdown-button:hover {
        border-color: #007bff;
    }

    .dropdown-content {
        display: none;
        position: absolute;
        background-color: #ffffff;
        border: 1px solid #ccc;
        border-radius: 5px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        z-index: 1;
        width: 100%;
        max-height: 200px;
        overflow-y: auto;
        margin-top: 2px;
    }

    .dropdown-content label {
        display: block;
        padding: 10px 15px;
        cursor: pointer;
        transition: background-color 0.2s;
    }

    .dropdown-content label:hover {
        background-color: #f1f1f1;
    }

    .show {
        display: block;
    }

    .select-all,
    .deselect-all {
        margin: 10px 15px;
        cursor: pointer;
        color: #007bff;
        font-weight: bold;
    }

    .select-all:hover,
    .deselect-all:hover {
        text-decoration: underline;
    }
</style>

<body class="hold-transition sidebar-mini zw_sidebar">
    <div class="wrapper">
        @include('admin.layouts.header')
        @include('admin.layouts.sidebar')

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="row mb-2">
                    <div class="col-sm-12 zw_back">
                        <a href="{{ route('ourservices.index') }}"
                            class="poppins-medium zw_18 zw_text_333333 zw_a zw_back">
                            <i class="fas fa-arrow-left right mr-2"></i>Back
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <h3 class="poppins-semibold zw_34 zw_text_AF2245 mt-3">Add a new body function</h3>
                    </div>
                    <!-- left column -->
                    <div class="col-md-12">
                        <!-- general form elements -->
                        <div class="">
                            <!-- /.card-header -->
                            <!-- form start -->
                            @if ($errors->any())
                            <div class="alert zw_alert_danger">
                                There were some problems with your input.<br><br>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif
                            <form action="{{ route('body.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    <div class="form-row zw_form_row">
                                        <div class="">
                                            <div class="form-row align-items-center">
                                                <div class="col-auto">
                                                    <img id="imagePreview" src="#" alt="Image Preview">
                                                </div>
                                                <div class="col-auto">
                                                    <label for="exampleInputLogo"
                                                        class="pt-5 zw_label_height zw_label_height zw_poppins_regular poppins-regular zw_18 zw_text_111535">Upload
                                                        Logo</label>
                                                    <div class="input-group">
                                                        <div class="custom-file">
                                                            <input type="file" name="Logo"
                                                                class="custom-file-input" id="exampleInputLogo"
                                                                onchange="updateFileName(this)">
                                                            <label class="custom-file-label zw_form_control"
                                                                style="display:none;" for="exampleInputLogo">Choose
                                                                file</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row zw_form_row">
                                        <div class="form-group col-md-6">
                                            <label
                                                class="zw_label_height zw_poppins_regular poppins-regular zw_20 zw_text_111535"
                                                for="exampleInputEnname">En name <span
                                                    style="color: red;">*</span></label>
                                            <input type="text" name="Enname"
                                                class="form-control poppins-regular zw_18 zw_text_898B9F zw_form_control"
                                                id="exampleInputEnname" placeholder="Name of service">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label
                                                class="zw_label_height zw_poppins_regular poppins-regular zw_20 zw_text_111535"
                                                for="exampleInputArname">Ar name <span
                                                    style="color: red;">*</span></label>
                                            <input type="text" name="Arname"
                                                class="form-control poppins-regular zw_18 zw_text_898B9F zw_form_control"
                                                id="exampleInputArname" placeholder="Name of service">
                                        </div>
                                    </div>
                                    <div class="form-row zw_form_row">
                                        <div class="form-group col-md-6">
                                            <label
                                                class="zw_label_height zw_poppins_regular poppins-regular zw_20 zw_text_111535"
                                                for="exampleInputEndescription">En Description</label>
                                            <textarea name="Endescription" class="form-control poppins-regular zw_18 zw_text_898B9F zw_form_control"
                                                id="exampleInputEndescription" rows="2" placeholder="Enter En Description"></textarea>
                                            <p class="mt-2 text-right" style="color:#AF2245">20/80 characters</p>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label
                                                class="zw_label_height zw_poppins_regular poppins-regular zw_20 zw_text_111535"
                                                for="exampleInputArdescription">Ar Description</label>
                                            <textarea name="Ardescription" class="form-control poppins-regular zw_18 zw_text_898B9F zw_form_control"
                                                id="exampleInputArdescription" rows="2" placeholder="Enter Ar Description"></textarea>
                                            <p class="mt-2 text-right" style="color:#AF2245">20/80 characters</p>
                                        </div>
                                    </div>
                                    <div class="form-row zw_form_row">
                                        <div class="form-group col-md-4">
                                            <label for="exampleInputtypeofservice" class="zw_label_height zw_label_height zw_poppins_regular poppins-regular zw_20 zw_text_111535">service</label>
                                            <select name="service" class="form-control zw_form_control">
                                                <option value="Medical">Medical</option>
                                                <option value="Non Medical">Non Medical</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label class="zw_label_height zw_poppins_regular poppins-regular zw_17 zw_text_111535" for="healthcare">main service type <span style="color: red;">*</span></label>
                                            <div class="dropdown">
                                                <div class="dropdown-button" onclick="toggleDropdown()">Select main service type </div>
                                                <div class="dropdown-content" id="healthcareDropdown">
                                                    <div class="select-all" onclick="selectAll()">Select All</div>
                                                    <div class="deselect-all" onclick="deselectAll()">Deselect All</div>
                                                    <label>
                                                        <input type="checkbox" name="mainservicetype[]" value="Laboratory"> Laboratory
                                                    </label>
                                                    <label>
                                                        <input type="checkbox" name="mainservicetype[]" value="Visit a doctor"> Visit a doctor
                                                    </label>
                                                    <label>
                                                        <input type="checkbox" name="mainservicetype[]" value="nurse"> nurse
                                                    </label>
                                                    <label>
                                                        <input type="checkbox" name="mainservicetype[]" value="physical therapy"> physical therapy
                                                    </label>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- <div class="form-group col-md-4">
                                            <label for="exampleInputtypeofservice" class="zw_label_height zw_label_height zw_poppins_regular poppins-regular zw_20 zw_text_111535">main service type</label>
                                            <select name="mainservicetype" class="form-control zw_form_control">
                                                <option value="Laboratory">Laboratory</option>
                                                <option value="Visit a doctor">Visit a doctor</option>
                                                <option value="nurse">nurse</option>
                                                <option value="physical therapy">physical therapy</option>
                                            </select>
                                        </div> -->
                                        <div class="form-group col-md-4">
                                            <label for="exampleInputtypeofservice" class="zw_label_height zw_label_height zw_poppins_regular poppins-regular zw_20 zw_text_111535">service type</label>
                                            <select name="servicetype" class="form-control zw_form_control">
                                                <option value="Single">Single</option>
                                                <option value="packages">packages</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-row zw_form_row">
                                        <div class="form-group col-md-12">
                                            <label for="exampleInputtypeofservice" class="zw_label_height zw_label_height zw_poppins_regular poppins-regular zw_20 zw_text_111535">packages</label>
                                            <select name="packages" class="form-control zw_form_control">
                                                <option value="Health Check Packages">Health Check Packages</option>
                                                <option value="Cardiac Profile">Cardiac Profile</option>
                                                <option value="Bariatric Surgery Follow up">Bariatric Surgery Follow up</option>
                                                <option value="Fitness Profile">Fitness Profile</option>
                                                <option value="Health Check Packages for women">Health Check Packages for women</option>
                                                <option value="Pregnancy Test Serum (BHCG)">Pregnancy Test Serum (BHCG)</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-row zw_form_row">
                                        <div class="form-group col-md-12">
                                            <label for="exampleInputtypeofservice" class="zw_label_height zw_label_height zw_poppins_regular poppins-regular zw_20 zw_text_111535">Single</label>
                                            <select name="Single" class="form-control zw_form_control">
                                                <option value="vit D">vit D</option>
                                                <option value="CBC">CBC</option>
                                                <option value="Cholesterol">Cholesterol</option>
                                                <option value="vit C">vit C</option>
                                                <option value="vit B12">vit B12</option>
                                                <option value="iron">iron</option>
                                                <option value="Fasting Blood Sugar">Fasting Blood Sugar</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-row zw_form_row">
                                        <div class="col-md-6">
                                            <label
                                                class="zw_label_height zw_poppins_regular poppins-regular zw_20 zw_text_111535"
                                                for="statusActive" style="color: #af2245;">Status</label><br>
                                            <input type="radio" class="mr-2" id="statusActive" style="width:20px;height:20px;" name="status" checked>
                                            <label for="statusActive" style="font-weight:400;">Active</label>
                                        </div>
                                        <div class="col-md-6">
                                            <br>
                                            <br>
                                            <button type="submit" class="zw_submit p-2 float-right" style="background:#af2245;color:white">Save</button>
                                            <button type="reset" class="zw_submit p-2 float-right mr-4" style="border:none !important">Reset</button>
                                        </div>
                                    </div>

                                </div>
                            </form>
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
        </div>
        <!--/.col (right) -->
    </div>
    </section>
    </div>
    @include('admin.layouts.footer')
    </div>
    <script>
        function updateFileName(input) {
            const file = input.files[0];
            const label = input.nextElementSibling;

            if (file) {
                label.textContent = file.name;
                const reader = new FileReader();
                reader.onload = function(e) {
                    const imagePreview = document.getElementById('imagePreview');
                    imagePreview.src = e.target.result;
                    imagePreview.style.display = 'inline'; // Show inline
                };
                reader.readAsDataURL(file);
            } else {
                label.textContent = 'Choose file';
                document.getElementById('imagePreview').style.display = 'none';
            }
        }
    </script>
    <script>
        const dropdownButton = document.querySelector('.dropdown-button');
        const dropdownContent = document.querySelector('.dropdown-content');

        dropdownButton.addEventListener('click', function() {
            dropdownContent.classList.toggle('show');

            // Position dropdown above the button if there's not enough space below
            const rect = dropdownButton.getBoundingClientRect();
            const spaceBelow = window.innerHeight - rect.bottom;
            const dropdownHeight = dropdownContent.offsetHeight;

            if (spaceBelow < dropdownHeight) {
                dropdownContent.style.bottom = `${dropdownHeight + 2}px`;
            } else {
                dropdownContent.style.bottom = 'auto';
            }
        });

        document.querySelector('.select-all').addEventListener('click', function() {
            const checkboxes = document.querySelectorAll('.dropdown-content input[type="checkbox"]');
            checkboxes.forEach(checkbox => checkbox.checked = true);
        });

        document.querySelector('.deselect-all').addEventListener('click', function() {
            const checkboxes = document.querySelectorAll('.dropdown-content input[type="checkbox"]');
            checkboxes.forEach(checkbox => checkbox.checked = false);
        });

        // Close the dropdown if clicked outside
        window.addEventListener('click', function(event) {
            if (!event.target.matches('.dropdown-button')) {
                dropdownContent.classList.remove('show');
            }
        });
    </script>
</body>

</html>