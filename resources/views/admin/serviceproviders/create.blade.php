@include('admin.layouts.headermodule')
<style>
  /* styles.css */
  body {
    font-family: Arial, sans-serif;
  }

  h1 {
    text-align: center;
  }

  #phone-container {
    width: 350px;
    margin: 20px auto;
    display: flex;
    flex-direction: column;
    align-items: center;
  }

  #country-select {
    width: 100%;
    margin-bottom: 10px;
  }

  #phone-wrapper {
    display: flex;
    align-items: center;
    border-radius: 4px;
    overflow: hidden;
    width: 100%;
  }

  #country-flag {
    width: 32px;
    height: 32px;
    background-size: cover;
    background-position: center;
    border-right: 1px solid #ddd;
  }

  #country-code {
    font-weight: bold;
    padding: 0 10px;
    border-right: 1px solid #ddd;
    line-height: 32px;
  }

  #phone-input {
    flex: 1;
    padding: 8px;
    font-size: 16px;
    border: none;
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
            <a href="{{ route('serviceproviders.index') }}" class="poppins-medium zw_18 zw_text_333333 zw_a zw_back">
              <i class="fas fa-arrow-left right mr-2"></i>Back
            </a>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12">
            <h3 class="poppins-semibold zw_34 zw_text_AF2245 mt-3">Healthcare</h3>
          </div>
          <!-- left column -->
          <div class="col-md-12">
            <!-- <div class="pull-right">
              <a class="btn btn-primary m-2" href="{{ route('serviceproviders.index') }}"> Back</a>
            </div> -->
            <!-- general form elements -->
            <div class="card card-primary">
              <!-- <div class="card-header m-2">
                <h3 class="card-title">Add new service provider</h3>
              </div> -->
              <!-- /.card-header -->
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
              <!-- form start -->
              <form action="{{ route('serviceproviders.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                  <div class="form-row zw_form_row">
                    <div class="form-group col-md-4">
                      <label for="exampleInputErname" class="zw_label_height zw_poppins_regular poppins-regular zw_20 zw_text_111535">En name</label><span style="color: red;">*</span></label>
                      <input type="text" name="Enname" class="pb35 form-control poppins-regular zw_18 zw_text_898B9F zw_form_control" id="exampleInputErname" placeholder="Enter Enname" value="{{ old('Enname') }}">
                    </div>
                    <div class="form-group col-md-4">
                      <label for="exampleInputarname" class="zw_label_height zw_poppins_regular poppins-regular zw_20 zw_text_111535">Ar name </label><span style="color: red;">*</span></label>
                      <input type="text" name="Arname" class="pb35 form-control poppins-regular zw_18 zw_text_898B9F zw_form_control" id="exampleInputarname" placeholder="Enter Arname" value="{{ old('Arname') }}">
                    </div>
                    <div class="form-group col-md-4">
                      <label for="exampleInputEmail1" class="zw_label_height zw_poppins_regular poppins-regular zw_20 zw_text_111535">Email<span style="color: red;">*</span></label>
                      <input type="email" name="Email" class="pb35 form-control @error('Email') is-invalid @enderror poppins-regular zw_18 zw_text_898B9F zw_form_control" id="exampleInputEmail1" placeholder="Enter email" value="{{ old('Email') }}" required autofocus>
                    </div>
                    @error('Email')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  </div>
                  <div class="form-row zw_form_row">
                    <div class="form-group col-md-4">
                      <label for="exampleInputPassword1" class="zw_label_height zw_poppins_regular poppins-regular zw_20 zw_text_111535">Password <span style="color: red;">*</span></label>
                      <input type="password" name="Password" class="pb35 form-control poppins-regular zw_18 zw_text_898B9F zw_form_control" id="exampleInputPassword1" placeholder="Password" value="{{ old('Password') }}" pattern="^\S+$"
                        title="Password must not contain any spaces."
                        required>
                      @error('Password')
                      <div class="text-danger">{{ $message }}</div>
                      @enderror
                    </div>
                    <div class="form-group col-md-4">
                      <label for="exampleInputphone" class="zw_label_height zw_poppins_regular poppins-regular zw_20 zw_text_111535">Phone <span style="color: red;">*</span></label>
                      <div id="phone-wrapper">

                        <input type="tel" name="Phone" class="pb35 form-control poppins-regular zw_18 zw_text_898B9F zw_form_control" id="exampleInputphone" placeholder="Enter phone" id="phone-input" value="{{ old('Phone') }}" pattern="\d{1,10}"
                          maxlength="10"
                          title="Please enter up to 10 digits only">
                      </div>
                    </div>
                    <!-- <div class="form-group col-md-4">
                      <label for="exampleInputphone" class="zw_label_height zw_poppins_regular poppins-regular zw_20 zw_text_111535">Phone <span style="color: red;">*</span></label>
                      <input type="phone" name="Phone" class="pb35 form-control poppins-regular zw_18 zw_text_898B9F zw_form_control" id="exampleInputphone" placeholder="Enter phone" value="{{ old('Phone') }}">
                    </div> -->
                    <div class="form-group col-md-4">
                      <label for="exampleInputcommerticalregisternumber" class="zw_label_height zw_poppins_regular poppins-regular zw_20 zw_text_111535">Commerical register number <span style="color: red;">*</span></label>
                      <input type="phone" name="Crnumber" class="pb35 form-control poppins-regular zw_18 zw_text_898B9F zw_form_control" id="exampleInputcommerticalregisternumber" placeholder="Enter commerical register number" value="{{ old('Crnumber') }}" style="font-size: 17px;">
                    </div>
                  </div>
                  <div class="form-row zw_form_row">
                    <div class="form-group col-md-4">
                      <label for="exampleInputcity" class="zw_label_height zw_poppins_regular poppins-regular zw_20 zw_text_111535">Select city <span style="color: red;">*</span></label>
                      <select name="City" class="form-control zw_form_control">
                        <option value="">Select</option>
                        <option value="Riyadh">Riyadh</option>
                        <option value="Jeddah">Jeddah</option>
                        <option value="Mecca">Mecca</option>
                        <option value="Medina">Medina</option>
                        <option value="Ad Dammām">Ad Dammām</option>
                        <option value="Tabūk">Tabūk</option>
                        <option value="Al Hufūf">Al Hufūf</option>
                        <option value="Al Qaţīf">Al Qaţīf</option>
                        <option value="Al Ḩillah">Al Ḩillah</option>
                        <option value="Aţ Ţā’if">Aţ Ţā’if</option>
                        <option value="Al Jubayl">Al Jubayl</option>
                        <option value="Buraydah">Buraydah</option>
                        <option value="Ḩafr al Bāţin">Ḩafr al Bāţin</option>
                        <option value="Yanbu">Yanbu</option>
                        <option value="Ḩā’il">Ḩā’il</option>
                        <option value="Abhā">Abhā</option>
                        <option value="Sakākā">Sakākā</option>
                        <option value="Al Qurayyāt">Al Qurayyāt</option>
                        <option value="Jāzān">Jāzān</option>
                        <option value="Najrān">Najrān</option>
                        <option value="Al Wajh">Al Wajh</option>
                        <option value="Arar">Arar</option>
                        <option value="Al Bāḩah">Al Bāḩah</option>
                        <option value="Tathlīth">Tathlīth</option>
                      </select>
                    </div>
                    <div class="form-group col-md-4">
                      <label for="exampleInputcountrycode" class="zw_label_height zw_poppins_regular poppins-regular zw_20 zw_text_111535">Country code <span style="color: red;">*</span></label>
                      <div id="country-info" class="d-flex align-items-center">
                        <span id="country-flag"></span>
                        <span id="country-code"></span>
                        <select id="country-select" name="Countrycode" class="form-control poppins-regular zw_18 zw_text_898B9F zw_form_control"></select>
                      </div>
                      <!-- <input type="text" name="Countrycode" class="pb35 form-control poppins-regular zw_18 zw_text_898B9F zw_form_control" id="exampleInputcountrycode" placeholder="Enter country code" value="{{ old('Countrycode') }}"> -->
                    </div>
                    <!-- <div class="form-group col-md-4">
                      <label for="exampleInputcountrycode" class="zw_label_height zw_poppins_regular poppins-regular zw_20 zw_text_111535">Country code <span style="color: red;">*</span></label>
                      <input type="text" name="Countrycode" class="pb35 form-control poppins-regular zw_18 zw_text_898B9F zw_form_control" id="exampleInputcountrycode" placeholder="Enter country code" value="{{ old('Countrycode') }}">
                    </div> -->
                    <div class="form-group col-md-4">
                      <label for="exampleInputvat" class="zw_label_height zw_poppins_regular poppins-regular zw_20 zw_text_111535">VAT <span style="color: red;">*</span></label>
                      <input type="text" name="Vat" class="pb35 form-control poppins-regular zw_18 zw_text_898B9F zw_form_control" id="exampleInputvat" placeholder="VAT" value="{{ old('Vat') }}">
                    </div>
                  </div>
                  <div class="form-row zw_form_row">
                    <div class="form-group col-md-4 zw_select_file">
                      <div class="inline-container">
                        <label for="exampleInputvatcertificate" class="upload-label  zw_poppins_regular poppins-regular zw_19 zw_text_111535">
                          Upload VAT Registration Certificate<span style="color: red;">*</span>
                        </label>
                        <div class="upload-button">Upload</div>
                      </div>
                      <div class="input-group">
                        <div class="custom-file">
                          <input type="file" name="Regcertificate" class="custom-file-input" id="exampleInputvatcertificate" onchange="updateFileName(this)">
                          <label class="custom-file-label zw_form_control" for="exampleInputvatcertificate">Choose file</label>
                        </div>
                      </div>
                      <!-- <input type="file" name="Regcertificate" id="Regcertificate"> -->
                    </div>
                    <div class="form-group col-md-4 zw_select_file">
                      <div class="inline-container">
                        <label for="exampleInputlogo" class="upload-label zw_label_height zw_label_height zw_poppins_regular poppins-regular zw_20 zw_text_111535">Upload logo<span style="color: red;">*</span></label>
                        <div class="upload-button">Upload</div>
                      </div>
                      <div class="input-group">
                        <div class="custom-file">
                          <input type="file" name="Logo" class="custom-file-input" id="exampleInputlogo" onchange="updateFileName(this)">
                          <label class="custom-file-label zw_form_control" for="exampleInputlogo">Choose file</label>
                        </div>
                      </div>
                      <!-- <input type="file" name="Logo" id="Logo"> -->
                    </div>
                    <div class="form-group col-md-4 zw_select_file">
                      <div class="inline-container">
                        <label for="exampleInputcomregister" class="upload-label zw_label_height zw_label_height zw_poppins_regular poppins-regular zw_20 zw_text_111535">Upload commercial register<span style="color: red;">*</span></label>
                        <div class="upload-button">Upload</div>
                      </div>
                      <div class="input-group">
                        <div class="custom-file">
                          <input type="file" name="Comcerregister" class="custom-file-input" id="exampleInputcomregister" onchange="updateFileName(this)">
                          <label class="custom-file-label zw_form_control" for="exampleInputcomregister">Choose file</label>
                        </div>
                      </div>
                      <!-- <input type="file" name="Comcerregister" id="Comcerregister"> -->
                    </div>
                  </div>
                  <div class="form-row zw_form_row">
                    <div class="form-group col-md-4 zw_select_file">
                      <div class="inline-container">
                        <label for="exampleInputhealthlicence" class="upload-label zw_label_height zw_label_height zw_poppins_regular poppins-regular zw_20 zw_text_111535">Upload ministry health licence<span style="color: red;">*</span></label>
                        <div class="upload-button">Upload</div>
                      </div>
                      <div class="input-group">
                        <div class="custom-file">
                          <input type="file" name="Healthlicence" class="custom-file-input" id="exampleInputhealthlicence" onchange="updateFileName(this)">
                          <label class="custom-file-label zw_form_control" for="exampleInputhealthlicence">Choose file</label>
                        </div>
                      </div>
                    </div>
                    <div class="form-group col-md-4">
                      <label for="exampleInputtypeofservice" class="zw_label_height zw_label_height zw_poppins_regular poppins-regular zw_20 zw_text_111535">Type of services </label>
                      <select name="Typeofservice" class="form-control zw_form_control">
                        <option value="">Select</option>
                        <option value="Medical">Medical</option>
                        <option value="Non Medical">Non Medical</option>
                        <option value="Various Visits">Various Visits</option>
                        <option value="Visiting Individuals">Visiting Individuals/Independents</option>
                      </select>
                    </div>
                    <!-- <div class="form-group col-md-4">
                      <label for="exampleInputShare" class="zw_label_height zw_label_height zw_poppins_regular poppins-regular zw_20 zw_text_111535">Fin. share type </label>
                      <select name="Share" class="custom-select poppins-regular zw_18 zw_text_898B9F zw_form_control zw_box_shadow_none">
                        <option value="">Select</option>
                        <option value="Percantage">Percantage</option>
                        <option value="Amount">Amount</option>
                      </select>
                    </div> -->
                    <div class="form-group col-md-4">
                      <label for="exampleInputfinancialsahre" class="zw_label_height zw_label_height zw_poppins_regular poppins-regular zw_20 zw_text_111535">Financial share </label>
                      <select name="Financialshare" class="form-control zw_form_control">
                        <option value="">Select</option>
                        <option value="Percantage">Percantage</option>
                        <option value="Amount">Amount</option>
                      </select>
                      <!-- <input type="text" name="Financialshare" class="pb35 form-control poppins-regular zw_18 zw_text_898B9F zw_form_control" id="exampleInputfinancialsahre" placeholder="Enter Financial share" value="{{ old('Financialshare') }}"> -->
                    </div>
                  </div>
                  <div class="form-row zw_form_row">
                    <div class="form-group col-md-4">
                      <label for="exampleInputfinancialsahre" class="zw_label_height zw_label_height zw_poppins_regular poppins-regular zw_20 zw_text_111535">Add the Share number</label>
                      <input type="text" name="Share" class="pb35 form-control poppins-regular zw_18 zw_text_898B9F zw_form_control" placeholder="Enter The visit fee">
                    </div>
                    <div class="form-group col-md-4">
                      <label class="zw_label_height zw_poppins_regular poppins-regular zw_20 zw_text_111535" for="exampleInputEndescription">Time Slot </label>
                      <select name="EstimatedTime" class="form-control zw_form_control">
                        <option>Select</option>
                        <option value="00:30">00:30</option>
                        <option value="00:45">00:45 </option>
                        <option value="01:00">01:00</option>
                        <option value="01:30">01:30</option>
                        <option value="02:00">02:00</option>
                        <option value="02:30">02:30</option>
                        <option value="03:00">03:00</option>
                      </select>
                    </div>
                    <div class="form-group col-md-4">
                    <label for="exampleInputvisitfees" class="zw_label_height zw_label_height zw_poppins_regular poppins-regular zw_20 zw_text_111535"></label>
                      <div class="form-check form-check-inline pb35">
                        <input type="radio" name="Location" id="visitCenter" class="form-check-input" value="Visit Center" checked>
                        <label for="visitCenter" class="form-check-label poppins-regular zw_18 zw_text_898B9F">Visit Center</label>
                      </div>

                      <div class="form-check form-check-inline pb35">
                        <input type="radio" name="Location" id="visitHome" class="form-check-input" value="Visit Home">
                        <label for="visitHome" class="form-check-label poppins-regular zw_18 zw_text_898B9F">Visit Home</label>
                      </div>
                    </div>
                    <div class="form-group col-md-4">
                      <label for="exampleInputvisitfees" class="zw_label_height zw_label_height zw_poppins_regular poppins-regular zw_20 zw_text_111535">Visiting Fee</label>
                      <input type="text" name="Visitfees" class="pb35 form-control poppins-regular zw_18 zw_text_898B9F zw_form_control" id="exampleInputfinancialsahre" placeholder="Enter The visit fee" value="{{ old('Visitfees') }}">
                    </div>
                    <!-- <div class="form-group col-md-4">
                      <label for="exampleInputLocation" class="zw_label_height zw_poppins_regular poppins-regular zw_20 zw_text_111535">Select location </label>
                      <select name="Location" class="custom-select poppins-regular zw_18 zw_text_898B9F zw_form_control zw_box_shadow_none">
                        <option value="">Select</option>
                        <option value="Center visit">Center visit</option>
                        <option value="Home visit">Home visit</option>
                        <option value="Both">Both</option>
                      </select>
                    </div> -->

                  </div>
                  <!-- <div class="form-row zw_form_row">
                    <div class="form-group col-md-4">
                      <label for="exampleInputvisitfees" class="zw_label_height zw_label_height zw_poppins_regular poppins-regular zw_20 zw_text_111535">Visit Fees </label>
                      <input type="text" name="Visitfees" class="form-control poppins-regular zw_18 zw_text_898B9F zw_form_control" id="exampleInputfinancialsahre" placeholder="Enter The visit fee" value="{{ old('Visitfees') }}">
                    </div>
                  </div> -->
                  <div class="row">
                    <div class="col-12">
                      <button type="submit" class="btn zw_submit zw_submit_wh">Submit</button>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
                <!-- <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div> -->
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
    (function($) {
      $.fn.countrySelector = function(options) {
        // Default settings
        var settings = $.extend({
          countries: [],
          onSelect: null
        }, options);

        return this.each(function() {
          var $select = $(this);
          $select.empty();

          // Build the options list
          settings.countries.forEach(function(country) {
            var option = $('<option></option>')
              .val(country.code)
              .data('flag', country.flag)
              .data('code', country.phoneCode)
              .text(country.name);
            $select.append(option);
          });

          // Event handler
          $select.on('change', function() {
            var selectedOption = $(this).find('option:selected');
            var flag = selectedOption.data('flag');
            var phoneCode = selectedOption.data('code');
            var name = selectedOption.text();

            if (settings.onSelect) {
              settings.onSelect({
                flag: flag,
                phoneCode: phoneCode,
                name: name
              });
            }
          });

          // Trigger change event to set initial values
          $select.trigger('change');
        });
      };
    })(jQuery);
  </script>
  <script>
    $(document).ready(function() {
      var countries = [{
          "code": "AF",
          "flag": "af",
          "phoneCode": "+93",
          "name": "Afghanistan"
        },
        {
          "code": "AL",
          "flag": "al",
          "phoneCode": "+355",
          "name": "Albania"
        },
        {
          "code": "DZ",
          "flag": "dz",
          "phoneCode": "+213",
          "name": "Algeria"
        },
        {
          "code": "AD",
          "flag": "ad",
          "phoneCode": "+376",
          "name": "Andorra"
        },
        {
          "code": "AO",
          "flag": "ao",
          "phoneCode": "+244",
          "name": "Angola"
        },
        {
          "code": "AG",
          "flag": "ag",
          "phoneCode": "+1-268",
          "name": "Antigua and Barbuda"
        },
        {
          "code": "AR",
          "flag": "ar",
          "phoneCode": "+54",
          "name": "Argentina"
        },
        {
          "code": "AM",
          "flag": "am",
          "phoneCode": "+374",
          "name": "Armenia"
        },
        {
          "code": "AU",
          "flag": "au",
          "phoneCode": "+61",
          "name": "Australia"
        },
        {
          "code": "AT",
          "flag": "at",
          "phoneCode": "+43",
          "name": "Austria"
        },
        {
          "code": "AZ",
          "flag": "az",
          "phoneCode": "+994",
          "name": "Azerbaijan"
        },
        {
          "code": "BS",
          "flag": "bs",
          "phoneCode": "+1-242",
          "name": "Bahamas"
        },
        {
          "code": "BH",
          "flag": "bh",
          "phoneCode": "+973",
          "name": "Bahrain"
        },
        {
          "code": "BD",
          "flag": "bd",
          "phoneCode": "+880",
          "name": "Bangladesh"
        },
        {
          "code": "BB",
          "flag": "bb",
          "phoneCode": "+1-246",
          "name": "Barbados"
        },
        {
          "code": "BY",
          "flag": "by",
          "phoneCode": "+375",
          "name": "Belarus"
        },
        {
          "code": "BE",
          "flag": "be",
          "phoneCode": "+32",
          "name": "Belgium"
        },
        {
          "code": "BZ",
          "flag": "bz",
          "phoneCode": "+501",
          "name": "Belize"
        },
        {
          "code": "BJ",
          "flag": "bj",
          "phoneCode": "+229",
          "name": "Benin"
        },
        {
          "code": "BT",
          "flag": "bt",
          "phoneCode": "+975",
          "name": "Bhutan"
        },
        {
          "code": "BO",
          "flag": "bo",
          "phoneCode": "+591",
          "name": "Bolivia"
        },
        {
          "code": "BA",
          "flag": "ba",
          "phoneCode": "+387",
          "name": "Bosnia and Herzegovina"
        },
        {
          "code": "BW",
          "flag": "bw",
          "phoneCode": "+267",
          "name": "Botswana"
        },
        {
          "code": "BR",
          "flag": "br",
          "phoneCode": "+55",
          "name": "Brazil"
        },
        {
          "code": "BN",
          "flag": "bn",
          "phoneCode": "+673",
          "name": "Brunei"
        },
        {
          "code": "BG",
          "flag": "bg",
          "phoneCode": "+359",
          "name": "Bulgaria"
        },
        {
          "code": "BF",
          "flag": "bf",
          "phoneCode": "+226",
          "name": "Burkina Faso"
        },
        {
          "code": "BI",
          "flag": "bi",
          "phoneCode": "+257",
          "name": "Burundi"
        },
        {
          "code": "KH",
          "flag": "kh",
          "phoneCode": "+855",
          "name": "Cambodia"
        },
        {
          "code": "CM",
          "flag": "cm",
          "phoneCode": "+237",
          "name": "Cameroon"
        },
        {
          "code": "CA",
          "flag": "ca",
          "phoneCode": "+1",
          "name": "Canada"
        },
        {
          "code": "CV",
          "flag": "cv",
          "phoneCode": "+238",
          "name": "Cape Verde"
        },
        {
          "code": "KY",
          "flag": "ky",
          "phoneCode": "+1-345",
          "name": "Cayman Islands"
        },
        {
          "code": "CF",
          "flag": "cf",
          "phoneCode": "+236",
          "name": "Central African Republic"
        },
        {
          "code": "TD",
          "flag": "td",
          "phoneCode": "+235",
          "name": "Chad"
        },
        {
          "code": "CL",
          "flag": "cl",
          "phoneCode": "+56",
          "name": "Chile"
        },
        {
          "code": "CN",
          "flag": "cn",
          "phoneCode": "+86",
          "name": "China"
        },
        {
          "code": "CX",
          "flag": "cx",
          "phoneCode": "+61",
          "name": "Christmas Island"
        },
        {
          "code": "CC",
          "flag": "cc",
          "phoneCode": "+61",
          "name": "Cocos (Keeling) Islands"
        },
        {
          "code": "CO",
          "flag": "co",
          "phoneCode": "+57",
          "name": "Colombia"
        },
        {
          "code": "KM",
          "flag": "km",
          "phoneCode": "+269",
          "name": "Comoros"
        },
        {
          "code": "CG",
          "flag": "cg",
          "phoneCode": "+242",
          "name": "Congo"
        },
        {
          "code": "CD",
          "flag": "cd",
          "phoneCode": "+243",
          "name": "Congo, Democratic Republic of the"
        },
        {
          "code": "CK",
          "flag": "ck",
          "phoneCode": "+682",
          "name": "Cook Islands"
        },
        {
          "code": "CR",
          "flag": "cr",
          "phoneCode": "+506",
          "name": "Costa Rica"
        },
        {
          "code": "CI",
          "flag": "ci",
          "phoneCode": "+225",
          "name": "Ivory Coast"
        },
        {
          "code": "HR",
          "flag": "hr",
          "phoneCode": "+385",
          "name": "Croatia"
        },
        {
          "code": "CU",
          "flag": "cu",
          "phoneCode": "+53",
          "name": "Cuba"
        },
        {
          "code": "CW",
          "flag": "cw",
          "phoneCode": "+599",
          "name": "Curacao"
        },
        {
          "code": "CY",
          "flag": "cy",
          "phoneCode": "+357",
          "name": "Cyprus"
        },
        {
          "code": "CZ",
          "flag": "cz",
          "phoneCode": "+420",
          "name": "Czech Republic"
        },
        {
          "code": "DK",
          "flag": "dk",
          "phoneCode": "+45",
          "name": "Denmark"
        },
        {
          "code": "DJ",
          "flag": "dj",
          "phoneCode": "+253",
          "name": "Djibouti"
        },
        {
          "code": "DM",
          "flag": "dm",
          "phoneCode": "+1-767",
          "name": "Dominica"
        },
        {
          "code": "DO",
          "flag": "do",
          "phoneCode": "+1-809",
          "name": "Dominican Republic"
        },
        {
          "code": "EC",
          "flag": "ec",
          "phoneCode": "+593",
          "name": "Ecuador"
        },
        {
          "code": "EG",
          "flag": "eg",
          "phoneCode": "+20",
          "name": "Egypt"
        },
        {
          "code": "SV",
          "flag": "sv",
          "phoneCode": "+503",
          "name": "El Salvador"
        },
        {
          "code": "GQ",
          "flag": "gq",
          "phoneCode": "+240",
          "name": "Equatorial Guinea"
        },
        {
          "code": "ER",
          "flag": "er",
          "phoneCode": "+291",
          "name": "Eritrea"
        },
        {
          "code": "EE",
          "flag": "ee",
          "phoneCode": "+372",
          "name": "Estonia"
        },
        {
          "code": "ET",
          "flag": "et",
          "phoneCode": "+251",
          "name": "Ethiopia"
        },
        {
          "code": "FK",
          "flag": "fk",
          "phoneCode": "+500",
          "name": "Falkland Islands"
        },
        {
          "code": "FO",
          "flag": "fo",
          "phoneCode": "+298",
          "name": "Faroe Islands"
        },
        {
          "code": "FJ",
          "flag": "fj",
          "phoneCode": "+679",
          "name": "Fiji"
        },
        {
          "code": "FI",
          "flag": "fi",
          "phoneCode": "+358",
          "name": "Finland"
        },
        {
          "code": "FR",
          "flag": "fr",
          "phoneCode": "+33",
          "name": "France"
        },
        {
          "code": "GF",
          "flag": "gf",
          "phoneCode": "+594",
          "name": "French Guiana"
        },
        {
          "code": "PF",
          "flag": "pf",
          "phoneCode": "+689",
          "name": "French Polynesia"
        },
        {
          "code": "GA",
          "flag": "ga",
          "phoneCode": "+241",
          "name": "Gabon"
        },
        {
          "code": "GM",
          "flag": "gm",
          "phoneCode": "+220",
          "name": "Gambia"
        },
        {
          "code": "GE",
          "flag": "ge",
          "phoneCode": "+995",
          "name": "Georgia"
        },
        {
          "code": "DE",
          "flag": "de",
          "phoneCode": "+49",
          "name": "Germany"
        },
        {
          "code": "GH",
          "flag": "gh",
          "phoneCode": "+233",
          "name": "Ghana"
        },
        {
          "code": "GI",
          "flag": "gi",
          "phoneCode": "+350",
          "name": "Gibraltar"
        },
        {
          "code": "GR",
          "flag": "gr",
          "phoneCode": "+30",
          "name": "Greece"
        },
        {
          "code": "GL",
          "flag": "gl",
          "phoneCode": "+299",
          "name": "Greenland"
        },
        {
          "code": "GD",
          "flag": "gd",
          "phoneCode": "+1-473",
          "name": "Grenada"
        },
        {
          "code": "GP",
          "flag": "gp",
          "phoneCode": "+590",
          "name": "Guadeloupe"
        },
        {
          "code": "GU",
          "flag": "gu",
          "phoneCode": "+1-671",
          "name": "Guam"
        },
        {
          "code": "GT",
          "flag": "gt",
          "phoneCode": "+502",
          "name": "Guatemala"
        },
        {
          "code": "GG",
          "flag": "gg",
          "phoneCode": "+44-1481",
          "name": "Guernsey"
        },
        {
          "code": "GN",
          "flag": "gn",
          "phoneCode": "+224",
          "name": "Guinea"
        },
        {
          "code": "GW",
          "flag": "gw",
          "phoneCode": "+245",
          "name": "Guinea-Bissau"
        },
        {
          "code": "GY",
          "flag": "gy",
          "phoneCode": "+592",
          "name": "Guyana"
        },
        {
          "code": "HT",
          "flag": "ht",
          "phoneCode": "+509",
          "name": "Haiti"
        },
        {
          "code": "HM",
          "flag": "hm",
          "phoneCode": "+672",
          "name": "Heard Island and McDonald Islands"
        },
        {
          "code": "VA",
          "flag": "va",
          "phoneCode": "+379",
          "name": "Vatican City"
        },
        {
          "code": "HN",
          "flag": "hn",
          "phoneCode": "+504",
          "name": "Honduras"
        },
        {
          "code": "HK",
          "flag": "hk",
          "phoneCode": "+852",
          "name": "Hong Kong"
        },
        {
          "code": "HU",
          "flag": "hu",
          "phoneCode": "+36",
          "name": "Hungary"
        },
        {
          "code": "IS",
          "flag": "is",
          "phoneCode": "+354",
          "name": "Iceland"
        },
        {
          "code": "IN",
          "flag": "in",
          "phoneCode": "+91",
          "name": "India"
        },
        {
          "code": "ID",
          "flag": "id",
          "phoneCode": "+62",
          "name": "Indonesia"
        },
        {
          "code": "IR",
          "flag": "ir",
          "phoneCode": "+98",
          "name": "Iran"
        },
        {
          "code": "IQ",
          "flag": "iq",
          "phoneCode": "+964",
          "name": "Iraq"
        },
        {
          "code": "IE",
          "flag": "ie",
          "phoneCode": "+353",
          "name": "Ireland"
        },
        {
          "code": "IM",
          "flag": "im",
          "phoneCode": "+44-1624",
          "name": "Isle of Man"
        },
        {
          "code": "IL",
          "flag": "il",
          "phoneCode": "+972",
          "name": "Israel"
        },
        {
          "code": "IT",
          "flag": "it",
          "phoneCode": "+39",
          "name": "Italy"
        },
        {
          "code": "JE",
          "flag": "je",
          "phoneCode": "+44-1534",
          "name": "Jersey"
        },
        {
          "code": "JP",
          "flag": "jp",
          "phoneCode": "+81",
          "name": "Japan"
        },
        {
          "code": "JO",
          "flag": "jo",
          "phoneCode": "+962",
          "name": "Jordan"
        },
        {
          "code": "KZ",
          "flag": "kz",
          "phoneCode": "+7",
          "name": "Kazakhstan"
        },
        {
          "code": "KE",
          "flag": "ke",
          "phoneCode": "+254",
          "name": "Kenya"
        },
        {
          "code": "KI",
          "flag": "ki",
          "phoneCode": "+686",
          "name": "Kiribati"
        },
        {
          "code": "KP",
          "flag": "kp",
          "phoneCode": "+850",
          "name": "North Korea"
        },
        {
          "code": "KR",
          "flag": "kr",
          "phoneCode": "+82",
          "name": "South Korea"
        },
        {
          "code": "KW",
          "flag": "kw",
          "phoneCode": "+965",
          "name": "Kuwait"
        },
        {
          "code": "KG",
          "flag": "kg",
          "phoneCode": "+996",
          "name": "Kyrgyzstan"
        },
        {
          "code": "LA",
          "flag": "la",
          "phoneCode": "+856",
          "name": "Laos"
        },
        {
          "code": "LV",
          "flag": "lv",
          "phoneCode": "+371",
          "name": "Latvia"
        },
        {
          "code": "LB",
          "flag": "lb",
          "phoneCode": "+961",
          "name": "Lebanon"
        },
        {
          "code": "LS",
          "flag": "ls",
          "phoneCode": "+266",
          "name": "Lesotho"
        },
        {
          "code": "LR",
          "flag": "lr",
          "phoneCode": "+231",
          "name": "Liberia"
        },
        {
          "code": "LY",
          "flag": "ly",
          "phoneCode": "+218",
          "name": "Libya"
        },
        {
          "code": "LI",
          "flag": "li",
          "phoneCode": "+423",
          "name": "Liechtenstein"
        },
        {
          "code": "LT",
          "flag": "lt",
          "phoneCode": "+370",
          "name": "Lithuania"
        },
        {
          "code": "LU",
          "flag": "lu",
          "phoneCode": "+352",
          "name": "Luxembourg"
        },
        {
          "code": "MO",
          "flag": "mo",
          "phoneCode": "+853",
          "name": "Macau"
        },
        {
          "code": "MK",
          "flag": "mk",
          "phoneCode": "+389",
          "name": "North Macedonia"
        },
        {
          "code": "MG",
          "flag": "mg",
          "phoneCode": "+261",
          "name": "Madagascar"
        },
        {
          "code": "MW",
          "flag": "mw",
          "phoneCode": "+265",
          "name": "Malawi"
        },
        {
          "code": "MY",
          "flag": "my",
          "phoneCode": "+60",
          "name": "Malaysia"
        },
        {
          "code": "MV",
          "flag": "mv",
          "phoneCode": "+960",
          "name": "Maldives"
        },
        {
          "code": "ML",
          "flag": "ml",
          "phoneCode": "+223",
          "name": "Mali"
        },
        {
          "code": "MT",
          "flag": "mt",
          "phoneCode": "+356",
          "name": "Malta"
        },
        {
          "code": "MH",
          "flag": "mh",
          "phoneCode": "+692",
          "name": "Marshall Islands"
        },
        {
          "code": "MR",
          "flag": "mr",
          "phoneCode": "+222",
          "name": "Mauritania"
        },
        {
          "code": "MU",
          "flag": "mu",
          "phoneCode": "+230",
          "name": "Mauritius"
        },
        {
          "code": "YT",
          "flag": "yt",
          "phoneCode": "+262",
          "name": "Mayotte"
        },
        {
          "code": "MX",
          "flag": "mx",
          "phoneCode": "+52",
          "name": "Mexico"
        },
        {
          "code": "FM",
          "flag": "fm",
          "phoneCode": "+691",
          "name": "Micronesia"
        },
        {
          "code": "MD",
          "flag": "md",
          "phoneCode": "+373",
          "name": "Moldova"
        },
        {
          "code": "MC",
          "flag": "mc",
          "phoneCode": "+377",
          "name": "Monaco"
        },
        {
          "code": "MN",
          "flag": "mn",
          "phoneCode": "+976",
          "name": "Mongolia"
        },
        {
          "code": "ME",
          "flag": "me",
          "phoneCode": "+382",
          "name": "Montenegro"
        },
        {
          "code": "MS",
          "flag": "ms",
          "phoneCode": "+1-664",
          "name": "Montserrat"
        },
        {
          "code": "MA",
          "flag": "ma",
          "phoneCode": "+212",
          "name": "Morocco"
        },
        {
          "code": "MZ",
          "flag": "mz",
          "phoneCode": "+258",
          "name": "Mozambique"
        },
        {
          "code": "MM",
          "flag": "mm",
          "phoneCode": "+95",
          "name": "Myanmar"
        },
        {
          "code": "NA",
          "flag": "na",
          "phoneCode": "+264",
          "name": "Namibia"
        },
        {
          "code": "NR",
          "flag": "nr",
          "phoneCode": "+674",
          "name": "Nauru"
        },
        {
          "code": "NP",
          "flag": "np",
          "phoneCode": "+977",
          "name": "Nepal"
        },
        {
          "code": "NL",
          "flag": "nl",
          "phoneCode": "+31",
          "name": "Netherlands"
        },
        {
          "code": "NC",
          "flag": "nc",
          "phoneCode": "+687",
          "name": "New Caledonia"
        },
        {
          "code": "NZ",
          "flag": "nz",
          "phoneCode": "+64",
          "name": "New Zealand"
        },
        {
          "code": "NI",
          "flag": "ni",
          "phoneCode": "+505",
          "name": "Nicaragua"
        },
        {
          "code": "NE",
          "flag": "ne",
          "phoneCode": "+227",
          "name": "Niger"
        },
        {
          "code": "NG",
          "flag": "ng",
          "phoneCode": "+234",
          "name": "Nigeria"
        },
        {
          "code": "NU",
          "flag": "nu",
          "phoneCode": "+683",
          "name": "Niue"
        },
        {
          "code": "NF",
          "flag": "nf",
          "phoneCode": "+672",
          "name": "Norfolk Island"
        },
        {
          "code": "MP",
          "flag": "mp",
          "phoneCode": "+1-670",
          "name": "Northern Mariana Islands"
        },
        {
          "code": "NO",
          "flag": "no",
          "phoneCode": "+47",
          "name": "Norway"
        },
        {
          "code": "OM",
          "flag": "om",
          "phoneCode": "+968",
          "name": "Oman"
        },
        {
          "code": "PK",
          "flag": "pk",
          "phoneCode": "+92",
          "name": "Pakistan"
        },
        {
          "code": "PW",
          "flag": "pw",
          "phoneCode": "+680",
          "name": "Palau"
        },
        {
          "code": "PS",
          "flag": "ps",
          "phoneCode": "+970",
          "name": "Palestine"
        },
        {
          "code": "PA",
          "flag": "pa",
          "phoneCode": "+507",
          "name": "Panama"
        },
        {
          "code": "PG",
          "flag": "pg",
          "phoneCode": "+675",
          "name": "Papua New Guinea"
        },
        {
          "code": "PY",
          "flag": "py",
          "phoneCode": "+595",
          "name": "Paraguay"
        },
        {
          "code": "PE",
          "flag": "pe",
          "phoneCode": "+51",
          "name": "Peru"
        },
        {
          "code": "PH",
          "flag": "ph",
          "phoneCode": "+63",
          "name": "Philippines"
        },
        {
          "code": "PN",
          "flag": "pn",
          "phoneCode": "+870",
          "name": "Pitcairn Islands"
        },
        {
          "code": "PL",
          "flag": "pl",
          "phoneCode": "+48",
          "name": "Poland"
        },
        {
          "code": "PT",
          "flag": "pt",
          "phoneCode": "+351",
          "name": "Portugal"
        },
        {
          "code": "PR",
          "flag": "pr",
          "phoneCode": "+1-787",
          "name": "Puerto Rico"
        },
        {
          "code": "QA",
          "flag": "qa",
          "phoneCode": "+974",
          "name": "Qatar"
        },
        {
          "code": "RE",
          "flag": "re",
          "phoneCode": "+262",
          "name": "Reunion"
        },
        {
          "code": "RO",
          "flag": "ro",
          "phoneCode": "+40",
          "name": "Romania"
        },
        {
          "code": "RU",
          "flag": "ru",
          "phoneCode": "+7",
          "name": "Russia"
        },
        {
          "code": "RW",
          "flag": "rw",
          "phoneCode": "+250",
          "name": "Rwanda"
        },
        {
          "code": "BL",
          "flag": "bl",
          "phoneCode": "+590",
          "name": "Saint Barthelemy"
        },
        {
          "code": "SH",
          "flag": "sh",
          "phoneCode": "+290",
          "name": "Saint Helena"
        },
        {
          "code": "KN",
          "flag": "kn",
          "phoneCode": "+1-869",
          "name": "Saint Kitts and Nevis"
        },
        {
          "code": "LC",
          "flag": "lc",
          "phoneCode": "+1-758",
          "name": "Saint Lucia"
        },
        {
          "code": "MF",
          "flag": "mf",
          "phoneCode": "+590",
          "name": "Saint Martin"
        },
        {
          "code": "PM",
          "flag": "pm",
          "phoneCode": "+508",
          "name": "Saint Pierre and Miquelon"
        },
        {
          "code": "VC",
          "flag": "vc",
          "phoneCode": "+1-784",
          "name": "Saint Vincent and the Grenadines"
        },
        {
          "code": "WS",
          "flag": "ws",
          "phoneCode": "+685",
          "name": "Samoa"
        },
        {
          "code": "SM",
          "flag": "sm",
          "phoneCode": "+378",
          "name": "San Marino"
        },
        {
          "code": "ST",
          "flag": "st",
          "phoneCode": "+239",
          "name": "Sao Tome and Principe"
        },
        {
          "code": "SA",
          "flag": "sa",
          "phoneCode": "+966",
          "name": "Saudi Arabia"
        },
        {
          "code": "SN",
          "flag": "sn",
          "phoneCode": "+221",
          "name": "Senegal"
        },
        {
          "code": "RS",
          "flag": "rs",
          "phoneCode": "+381",
          "name": "Serbia"
        },
        {
          "code": "SC",
          "flag": "sc",
          "phoneCode": "+248",
          "name": "Seychelles"
        },
        {
          "code": "SL",
          "flag": "sl",
          "phoneCode": "+232",
          "name": "Sierra Leone"
        },
        {
          "code": "SG",
          "flag": "sg",
          "phoneCode": "+65",
          "name": "Singapore"
        },
        {
          "code": "SX",
          "flag": "sx",
          "phoneCode": "+1-721",
          "name": "Sint Maarten"
        },
        {
          "code": "SK",
          "flag": "sk",
          "phoneCode": "+421",
          "name": "Slovakia"
        },
        {
          "code": "SI",
          "flag": "si",
          "phoneCode": "+386",
          "name": "Slovenia"
        },
        {
          "code": "SB",
          "flag": "sb",
          "phoneCode": "+677",
          "name": "Solomon Islands"
        },
        {
          "code": "SO",
          "flag": "so",
          "phoneCode": "+252",
          "name": "Somalia"
        },
        {
          "code": "ZA",
          "flag": "za",
          "phoneCode": "+27",
          "name": "South Africa"
        },
        {
          "code": "SS",
          "flag": "ss",
          "phoneCode": "+211",
          "name": "South Sudan"
        },
        {
          "code": "ES",
          "flag": "es",
          "phoneCode": "+34",
          "name": "Spain"
        },
        {
          "code": "LK",
          "flag": "lk",
          "phoneCode": "+94",
          "name": "Sri Lanka"
        },
        {
          "code": "SD",
          "flag": "sd",
          "phoneCode": "+249",
          "name": "Sudan"
        },
        {
          "code": "SR",
          "flag": "sr",
          "phoneCode": "+597",
          "name": "Suriname"
        },
        {
          "code": "SZ",
          "flag": "sz",
          "phoneCode": "+268",
          "name": "Swaziland"
        },
        {
          "code": "SE",
          "flag": "se",
          "phoneCode": "+46",
          "name": "Sweden"
        },
        {
          "code": "CH",
          "flag": "ch",
          "phoneCode": "+41",
          "name": "Switzerland"
        },
        {
          "code": "SY",
          "flag": "sy",
          "phoneCode": "+963",
          "name": "Syria"
        },
        {
          "code": "TW",
          "flag": "tw",
          "phoneCode": "+886",
          "name": "Taiwan"
        },
        {
          "code": "TJ",
          "flag": "tj",
          "phoneCode": "+992",
          "name": "Tajikistan"
        },
        {
          "code": "TZ",
          "flag": "tz",
          "phoneCode": "+255",
          "name": "Tanzania"
        },
        {
          "code": "TH",
          "flag": "th",
          "phoneCode": "+66",
          "name": "Thailand"
        },
        {
          "code": "TL",
          "flag": "tl",
          "phoneCode": "+670",
          "name": "Timor-Leste"
        },
        {
          "code": "TG",
          "flag": "tg",
          "phoneCode": "+228",
          "name": "Togo"
        },
        {
          "code": "TK",
          "flag": "tk",
          "phoneCode": "+690",
          "name": "Tokelau"
        },
        {
          "code": "TO",
          "flag": "to",
          "phoneCode": "+676",
          "name": "Tonga"
        },
        {
          "code": "TT",
          "flag": "tt",
          "phoneCode": "+1-868",
          "name": "Trinidad and Tobago"
        },
        {
          "code": "TN",
          "flag": "tn",
          "phoneCode": "+216",
          "name": "Tunisia"
        },
        {
          "code": "TR",
          "flag": "tr",
          "phoneCode": "+90",
          "name": "Turkey"
        },
        {
          "code": "TM",
          "flag": "tm",
          "phoneCode": "+993",
          "name": "Turkmenistan"
        },
        {
          "code": "TV",
          "flag": "tv",
          "phoneCode": "+688",
          "name": "Tuvalu"
        },
        {
          "code": "UG",
          "flag": "ug",
          "phoneCode": "+256",
          "name": "Uganda"
        },
        {
          "code": "UA",
          "flag": "ua",
          "phoneCode": "+380",
          "name": "Ukraine"
        },
        {
          "code": "AE",
          "flag": "ae",
          "phoneCode": "+971",
          "name": "United Arab Emirates"
        },
        {
          "code": "GB",
          "flag": "gb",
          "phoneCode": "+44",
          "name": "United Kingdom"
        },
        {
          "code": "US",
          "flag": "us",
          "phoneCode": "+1",
          "name": "United States"
        },
        {
          "code": "UY",
          "flag": "uy",
          "phoneCode": "+598",
          "name": "Uruguay"
        },
        {
          "code": "UZ",
          "flag": "uz",
          "phoneCode": "+998",
          "name": "Uzbekistan"
        },
        {
          "code": "VU",
          "flag": "vu",
          "phoneCode": "+678",
          "name": "Vanuatu"
        },
        {
          "code": "VE",
          "flag": "ve",
          "phoneCode": "+58",
          "name": "Venezuela"
        },
        {
          "code": "VN",
          "flag": "vn",
          "phoneCode": "+84",
          "name": "Vietnam"
        },
        {
          "code": "WF",
          "flag": "wf",
          "phoneCode": "+681",
          "name": "Wallis and Futuna"
        },
        {
          "code": "EH",
          "flag": "eh",
          "phoneCode": "+212",
          "name": "Western Sahara"
        },
        {
          "code": "YE",
          "flag": "ye",
          "phoneCode": "+967",
          "name": "Yemen"
        },
        {
          "code": "ZM",
          "flag": "zm",
          "phoneCode": "+260",
          "name": "Zambia"
        },
        {
          "code": "ZW",
          "flag": "zw",
          "phoneCode": "+263",
          "name": "Zimbabwe"
        }
      ];

      $('#country-select').countrySelector({
        countries: countries,
        onSelect: function(data) {
          var flagUrl = 'https://flagcdn.com/w80/' + data.flag + '.png';
          $('#country-flag').css('background-image', 'url(' + flagUrl + ')');
          $('#country-code').text(data.phoneCode);
          $('#phone-input').attr('placeholder', 'Enter phone number (' + data.phoneCode + ')');
        }
      });
    });
  </script>
</body>

</html>