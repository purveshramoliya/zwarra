 @include('admin.layouts.headermodule')
    <div class="wrapper">
        @include('admin.layouts.header')
        @include('admin.layouts.sidebar')
        <div class="content-wrapper">
            <section class="content-header">
                <div class="container-fluid">
                    <div id="map"></div>
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover text-nowrap zw_table">
                            <thead class="zw_bg_AF2245 zw_text_ffffff">
                                <tr>
                                    <th class="poppins-medium zw_18">Country</th>
                                    <th class="poppins-medium zw_18">City</th>
                                    <th class="poppins-medium zw_18">Zone</th>
                                    <th class="poppins-medium zw_18">Healthcare</th>
                                    <th class="poppins-medium zw_18" colspan="2"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($zones as $zone)
                                <tr>
                                    <td class="poppins-regular zw_14 zw_text_333333">@if(!empty($zone->country->name)){{ $zone->country->name }}@endif</td>
                                    <td class="poppins-regular zw_14 zw_text_333333">@if(!empty($zone->city->name)){{ $zone->city->name }}@endif</td>
                                    <td class="poppins-regular zw_14 zw_text_333333">@if(!empty($zone->zone->name)){{ $zone->zone->name }}@endif</td>
                                    <td class="poppins-regular zw_14 zw_text_333333">@if(!empty($zone->serviceprovider) && !empty($zone->serviceprovider->Enname))
                                        {{ $zone->serviceprovider->Enname }}
                                    @endif
                                    </td>
                                    <td class="poppins-regular zw_14 zw_text_333333">
                                       <form id="statusForm" class="statusForm">
                                        @csrf
                                        <input type="hidden" name="zid" id="zid" class="zid" value="{{ $zone->id }}">
                                        <input type="checkbox" data-toggle="toggle" data-size="sm" id="StatusUpdate" class="StatusUpdate" data-on="Active" data-off="In Active"  {{ $zone->Status ? 'checked' : '' }}> 
                                      </form> 
                                    </td>
                                    <td>
                                    <form action="{{ route('zones.destroy',$zone->id) }}" method="POST">
                                      @csrf
                                      @method('DELETE')
                                       <button type="submit" class="btn zw_text_AF2245 zw_a zw_24"><i class="fas fa-trash"></i></button>
                                    </form>
                                  </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>
        </div>
    </div>
    @include('admin.layouts.footer')
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
          id:  zid,
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

