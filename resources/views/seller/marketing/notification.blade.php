@extends('layouts.app')
@section('head')
@include('layouts.partials.headersection',['title'=> __('Notification Subscribers')])
@endsection
@section('content')
<div class="row">
  <div class="col-12 mt-2">
    <div class="card">
      <div class="card-body">
        @php
        $url=my_url();
        @endphp
        

        <form method="post" action="{{ route('seller.notification.delete') }}" class="basicform_with_reload">
          @csrf
          <div class="float-left mb-1">
            
            <div class="input-group">
              <select class="form-control" name="type">
                <option value="" >{{ __('Select Action') }}</option>
                <option value="delete" >{{ __('Delete Permanently') }}</option>

              </select>
              <div class="input-group-append">                                            
                <button class="btn btn-primary" type="submit">{{ __('Submit') }}</button>
              </div>
            </div>
            
          </div>
        
          
          <div class="table-responsive">
            <table class="table table-striped table-hover text-center table-borderless">
              <tbody>
                <thead>
                  <tr>
                    <th class="text-center pt-2">
                      <div class="custom-checkbox custom-checkbox-table custom-control">
                        <input type="checkbox" data-checkboxes="mygroup" data-checkbox-role="dad" class="custom-control-input" id="checkbox-all">
                        <label for="checkbox-all" class="custom-control-label">&nbsp;</label>
                      </div>
                    </th>
                    <th>{{ __('Token') }}</th>
                    <th>{{ __('Last Updated At') }}</th>
                  </tr>
                </thead>
              <tbody>
                @foreach ($posts as $row)
                <tr>
                  <td class="text-center">
                    <div class="custom-checkbox custom-control">
                      <input type="checkbox" data-checkboxes="mygroup" name="id[]" class="custom-control-input" value="{{ $row->id }}" id="media-{{ $row->id }}">
                      <label for="media-{{ $row->id }}" class="custom-control-label">&nbsp;</label>
                    </div>
                  </td>

                  <td>
                    {{ Str::limit($row->token,50) }}
                  </td>
                  <td>{{ $row->updated_at }}</td>
                </tr>
                @endforeach
              </tbody>
              <tfoot>
                <tr>
                    <th class="text-center pt-2">
                      <div class="custom-checkbox custom-checkbox-table custom-control">
                        <input type="checkbox" data-checkboxes="mygroup" data-checkbox-role="dad" class="custom-control-input" id="checkbox-all">
                        <label for="checkbox-all" class="custom-control-label">&nbsp;</label>
                      </div>
                    </th>
                    <th>{{ __('Token') }}</th>
                    <th>{{ __('Last Updated At') }}</th>
                  </tr>
             </tfoot>
           </table>
           {{ $posts->links('vendor.pagination.bootstrap-4') }}
         </div>
       </form>
     </div>
   </div>
 </div>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <form method="post" action="{{ route('seller.notification.post') }}">
        @csrf
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">{{ __('Push Notification To The Your Customers') }}</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <div class="from-group row mb-2">
        <label for="" class="col-lg-12">{{ __('Title') }} </label>
        <div class="col-lg-12">
          <input type="text" name="title" class="form-control" placeholder="{{ __('Enter notification title') }}">
        </div>
      </div>

      <div class="from-group row mb-2">
        <label for="" class="col-lg-12">{{__('Description')}} </label>
        <div class="col-lg-12">
          <textarea class=" form-control" name="description" maxlength="250" style="height:150px"></textarea>
        </div>
      </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">{{ __('Close') }}</button>
        <button type="submit" class="btn btn-primary basicbtn">{{ __('Submit') }}</button>
      </div>
    </form>
    </div>
  </div>
</div>
@endsection

@push('js')
<script src="{{ asset('assets/js/form.js') }}"></script>
@endpush