 @include('healthcare.layouts.headermodule')
    <div class="wrapper">
        @include('healthcare.layouts.header')
        @include('healthcare.layouts.sidebar')
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
                                    <th class="poppins-medium zw_18">Coordinates</th>
                                    <th class="poppins-medium zw_18">Healthcare</th>
                                    <th class="poppins-medium zw_18" colspan="2"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($zones as $zone)
                                <tr>
                                    <td class="poppins-regular zw_14 zw_text_333333">{{ $zone->country->name }}</td>
                                    <td class="poppins-regular zw_14 zw_text_333333">{{ $zone->city->name }}</td>
                                    <td class="poppins-regular zw_14 zw_text_333333">{{ $zone->zones->name }}</td>
                                    <td class="poppins-regular zw_14 zw_text_333333">{{ $zone->coordinates }}</td>
                                    <td class="poppins-regular zw_14 zw_text_333333">@if(!empty($zone->serviceprovider) && !empty($zone->serviceprovider->Enname))
                                        {{ $zone->serviceprovider->Enname }}
                                    @endif
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

