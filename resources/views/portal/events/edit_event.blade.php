<!DOCTYPE html>
<html lang="en">


<head>

  <meta charset="utf-8" />
  <title>Admin | Edit Events</title>

  @extends('portal.layouts.master')
  @section('content')

  <!-- Page Body Start-->
  <div class="page-body-wrapper">
    <div class="page-body">
      <div class="container-fluid flowid">
        <div class="page-header">
          <div class="row">
            <div class="col">
              <div class="page-header-left">
                <h3>Edit Events Details</h3>

              </div>
            </div>

          </div>
        </div>
      </div>
      <!-- Container-fluid starts-->
      <div class="container-fluid flowid">
        <div class="row">
          <div class="col-sm-12">
            <div class="card">

              <div class="card-body">
                <form class="needs-validation" method="post" action="{{route('admin.update_event')}}" enctype="multipart/form-data" novalidate="">
                  <input type="hidden" id="hid_id" name="hid_id" value="{{$editedevents_data->id}}">
                  {{csrf_field()}}
                  <div class="form-row">
                    <div class="col-md-4 mb-3">
                      <div class="form-group">
                        <label for="formrow-inputState">Business Category</label>
                        <select id="business_categoryId" name="business_categoryId" class="form-control">
                          <option value="{{old('business_categoryId')}}">Select</option>
                          @foreach($businesserData as $businessName)
                          <option value="{{$businessName->id}}"  <?php echo $editedevents_data->business_id ==  $businessName->id ? "selected" : ""; ?>>{{$businessName->name}}</option>
                          @endforeach
                        </select>
                        @error('business_categoryId')
                        {{$message}}
                        @enderror
                      </div>
                    </div>
                    <div class="col-md-4 mb-3">
                      <label for="validationCustom05">Event Name</label>
                      <input class="form-control" id="name" name="name" value="{{$editedevents_data->name}}" type="text" placeholder="Business Name" required="">
                      @error('name')
                      {{$message}}
                      @enderror
                    </div>


                    <div class="col-md-4 mb-3">
                      <label for="validationCustom05">Contact Details</label>
                      <input class="form-control" id="contact_details" value="{{$editedevents_data->contact_details}}" name="contact_details" type="text" placeholder="Contact Details" required="">
                      @error('contact_details')
                      {{$message}}
                      @enderror
                    </div>

                  </div>

                  <div class="form-row">
                    <div class="col-md-4 mb-3">
                      <label for="validationCustom05">Details</label>
                      <input class="form-control" id="details" name="details" value="{{$editedevents_data->details}}" type="text" placeholder="Enter Details" required="">
                      @error('details')
                      {{$message}}
                      @enderror
                    </div>

                    <div class="col-md-4 mb-3">
                      <label for="validationCustom05">Address</label>
                      <input class="form-control" id="address" name="address" value="{{$editedevents_data->address}}" type="text" placeholder="Kindly Enter" required="">
                      @error('address')
                      {{$message}}
                      @enderror
                    </div>
                    <div class="col-md-4 mb-3">
                      <label for="validationCustom05">Start Date</label>
                      <div class="input-group">
                              <input class="datepicker-here form-control digits" id="start" name="start" value="{{$editedevents_data->start}}" type="text" placeholder="Kindly Enter" required="" data-language="en">
                            </div>
                      <!-- <input class="form-control" id="start" name="start" value="{{old('start')}}" type="text" placeholder="Starting Hour" required=""> -->
                      @error('start')
                      {{$message}}
                      @enderror
                    </div>

                  </div>

                  <div class="form-row">
                    <div class="col-md-4 mb-3">
                      <label for="validationCustom05">End Date</label>
                      <div class="input-group">
                              <input class="datepicker-here form-control digits" id="end" name="end" value="{{$editedevents_data->end}}" placeholder="Closing Hour" required="" type="text" data-language="en">
                            </div>
                     
                      @error('end')
                      {{$message}}
                      @enderror
                    </div>

                    <div class="col-md-4 mb-3">
                      <label for="validationCustom05">Frequency</label>
                      <input class="form-control" id="frequency" value="{{$editedevents_data->frequency}}" name="frequency" type="text" placeholder="Enter Frequency" required="">
                      @error('frequency')
                      {{$message}}
                      @enderror
                    </div>
                    <div class="col-md-4 mb-3">
                      <div class="form-group">
                        <label for="formrow-inputState">Event Category</label>
                        <select id="event_category_id" name="event_category_id" class="form-control">
                          <option value="">Select</option>
                          @foreach($eventerData as $produData)
                          <option value="{{$produData->id}}" <?php echo $editedevents_data->event_category_id ==  $produData->id ? "selected" : ""; ?>>{{$produData->name}}</option>
                          @endforeach
                        </select>
                        @error('end')
                        {{$message}}
                        @enderror
                      </div>
                    </div>

                  </div>
                  <div class="form-row">
                    <div class="col-md-4 mb-3">
                      <label for="validationCustom05">Booking Details</label>
                      <input class="form-control" id="booking_details" value="{{$editedevents_data->booking_details}}" name="booking_details" type="text" placeholder="Booking Details" required="">
                      @error('booking_details')
                      {{$message}}
                      @enderror
                    </div>
                    <div class="col-md-4 mb-3">
                      <label for="validationCustom05">Age Group</label>
                      <input class="form-control" id="age_group" value="{{$editedevents_data->age_group}}" name="age_group" type="text" placeholder="Provide Age Group" required="">
                      @error('age_group')
                      {{$message}}
                      @enderror
                    </div>
                    <div class="col-md-4 mb-3">
                      <label for="validationCustom05">Price</label>
                      <input class="form-control" id="price" value="{{$editedevents_data->price}}" name="price" type="text" placeholder="Enter Price" required="">
                      @error('price')
                      {{$message}}
                      @enderror
                    </div>
                  </div>

                  <div class="form-row">


                    <div class="col-md-4 mb-3">
                      <label for="validationCustom05">Image</label>
                      <div class="d-flex justify-content-center">
                        <div class="btn btn-mdb-color btn-rounded">
                        <img src="{{url($editedevents_data->image)}}" alt="people" class="evenblck" width="56" id="img-upload">

                          <input class="form-control eventimg"  type="file" id="image" value="" name="image" required="">
                          @error('image')
                          {{$message}}
                          @enderror
                        </div>
                      </div>
                    </div>
                   
                  </div>

                  <button class="btn btn-primary" id="submit_business" name="submit_business" type="submit">Submit</button>
                </form>
              </div>
            </div>


          </div>
        </div>
      </div>
      <!-- Container-fluid Ends-->
    </div>

    <script>
            $(document).ready(function() {
         
            });

            function readURL(input) {
        if (input.files && input.files[0]) {
          var reader = new FileReader();

          reader.onload = function(e) {
            $('#img-upload').attr('src', e.target.result);
          }

          reader.readAsDataURL(input.files[0]);
        }
      }

      $("#image").change(function() {
        readURL(this);
      });

         
        </script>
      

    @endsection