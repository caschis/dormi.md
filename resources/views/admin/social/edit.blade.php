@extends('admin.layouts.master-soyuz')
@section('title',__('Edit Social Icon'))
@section('body')
@component('admin.component.breadcumb',['thirdactive' => 'active'])
@slot('heading')
{{ __('Edit Social Icon') }}
@endslot
@slot('menu1')
{{ __("Social Icon") }}
@endslot
@slot('menu2')
{{ __("Edit Social Icon") }}
@endslot
@slot('button')
<div class="col-md-6">
  <div class="widgetbar">
  <a href="{{url('admin/social')}}" class="btn btn-primary-rgba"><i class="feather icon-arrow-left mr-2"></i>{{ __("Back")}}</a>
  </div>
</div>
@endslot

@endcomponent
<div class="contentbar">
  <div class="row">
    
​
​
    <div class="col-lg-12">
      @if ($errors->any())
      <div class="alert alert-danger" role="alert">
        @foreach($errors->all() as $error)
        <p>{{ $error}}<button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span></button></p>
        @endforeach
      </div>
      @endif
      <div class="card m-b-30">
        <div class="card-header">
          <h5>{{__("Edit Social Icon")}} @if($row->icon == 'fb') {{__("Facebook")}} @elseif($row->icon == 'tw') {{__("Twitter")}} @else {{ ucfirst($row->icon) }} @endif </h5>
        </div>
        <div class="card-body">
          
          <!-- form start -->
          <form id="demo-form2" method="post" enctype="multipart/form-data" action="{{url('admin/social/'.$row->id)}}" data-parsley-validate class="form-horizontal form-label-left">
                        {{csrf_field()}}
                        {{method_field('PUT')}}
                       
                    <!-- row start -->
                    <div class="row">
                      
                      <!-- Url -->
                      <div class="col-md-6">
                          <div class="form-group">
                              <label class="text-dark">{{ __('Url') }} <span class="text-danger">*</span></label>
                              <input type="text" value="{{$row->url ?? ''}}" autofocus="" class="form-control @error('url') is-invalid @enderror" placeholder="http://" name="url" required="">
                          </div>
                      </div>

                      <!-- Description -->
                      <div class="col-md-6">
                          <div class="form-group">
                              <label class="text-dark">{{ __('Icon') }} <span class="text-danger">*</span></label>
                                <select name="icon" class="select2 form-control">
                                  <option value="youtube" {{ $row->icon == 'youtube' ? 'selected="selected"' : '' }}>{{ __("Youtube") }}</option>
                                  <option value="linkedin" {{ $row->icon == 'linkedin' ? 'selected="selected"' : '' }}>{{ __("LinkedIn") }}</option>
                                  <option value="pintrest" {{ $row->icon == 'pintrest' ? 'selected="selected"' : '' }}>{{ __("Pinterest") }}</option>
                                  <option value="rss" {{ $row->icon == 'rss' ? 'selected="selected"' : '' }} >{{ __('RSS Feed') }}</option>
                                  <option value="googleplus" {{ $row->icon == 'googleplus' ? 'selected="selected"' : '' }} >{{ __("Google+") }}</option>
                                  <option value="tw" {{ $row->icon == 'tw' ? 'selected="selected"' : '' }}>{{ __("Twitter") }}</option>
                                  <option value="fb" {{ $row->icon == 'fb' ? 'selected="selected"' : '' }} >{{ __('Facebook') }}</option>
                                  <option value="instagram" {{ $row->icon == 'instagram' ? 'selected="selected"' : '' }}>{{ __("Instagram") }}</option>
                                </select>
                                <small class="txt-desc">{{ __("Please choose icon") }}</small>
                          </div>
                      </div>

                        <!-- Status -->
                        <div class="form-group col-md-6">
                          <label for="exampleInputDetails">{{ __('Status') }} </label><br>
                          <label class="switch">
                            <input class="slider" type="checkbox" name="status" checked />
                            <span class="knob"></span>
                          </label><br>
                          <small>({{__("Please Choose Status")}}) </small>
                      </div>
                                    
                      <!-- create and close button -->
                      <div class="col-md-12">
                          <div class="form-group">
                              <button type="reset" class="btn btn-danger-rgba mr-1"><i class="fa fa-ban"></i> {{ __("Reset")}}</button>
                              <button type="submit" class="btn btn-primary-rgba"><i class="fa fa-check-circle"></i>
                              {{ __("Create")}}</button>
                          </div>
                      </div>

                    </div><!-- row end -->
                                              
                  </form>
                  <!-- form end -->

          </div>
        </div>
      </div>
    </div>
  </div>
</div>
  @endsection