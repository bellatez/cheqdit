@section('title') 
New Organisation
@endsection 
@extends('layouts.main')
@section('style')

@endsection 
@section('rightbar-content')
<!-- Start Contentbar -->    
<div class="contentbar">
    <!-- Start row -->
    <div class="row">
        
        <!-- Start col -->
        <div class="col-lg-12">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Fill in details for new organisation</h5>
                </div>
                <div class="card-body">
                    <form v-on:submit.prevent='submit()' method="POST" action="{{ route('organisation.create') }}" v-model="formValid" ref="createForm">
                      @csrf
                      <div class="form-row">
                        <div class="col-md-12 mb-3">
                          <input type="text" class="form-control" placeholder="Organisation Name" v-model="name" :rules="(v) => !!v || '{{__('name is required')}}'" value="{{ old('name') }}">
                        </div>
                      </div>
                      <div class="form-row">
                        <div class="col-md-4 mb-3">
                          <input type="text" class="form-control" placeholder="Organisation's Website" v-model="website" :rules="(v) => !!v || '{{__('Website is required')}}'" value="{{ old('website') }}">
                        </div>
                        <div class="col-md-4 mb-3">
                          <input type="text" class="form-control" id="validationServer02" placeholder="Enter phone number" v-model="phone" :rules="[(v) => !!v || '{{__('name is required')}}', rules.phoneRules]" value="{{ old('phone') }}">
                        </div>
                        <div class="col-md-4 mb-3">
                          <div class="input-group">
                            <input type="email" class="form-control" placeholder="Enter email" v-model="email" :rules="[(v) => !!v || '{{__('email is required')}}', rules.emailRule]" value="{{ old('email') }}">
                          </div>
                        </div>
                      </div><div class="form-row">
                        <div class="col-md-4 mb-3">
                          <input type="text" class="form-control" placeholder="Organisation Address line 1" v-model="address1" :rules="(v) => !!v || '{{__('Address line 1 is required')}}'" value="{{ old('address1') }}">
                        </div>
                        <div class="col-md-4 mb-3">
                          <input type="text" class="form-control" placeholder="Organisation Address line 2"
                          value="{{ old('address2') }}">
                        </div>
                        <div class="col-md-4 mb-3">
                          <input type="text" class="form-control" placeholder="Organisation Address line 3" value="{{ old('address3') }}">
                        </div>
                      </div>

                      <div class="form-row">
                        <div class="col-md-4 mb-3">
                          <input type="text" class="form-control" placeholder="Organisation Postal code" v-model="name" :rules="[(v) => !!v || '{{__('Post code is required')}}', rules.postcodeRule]" value="{{ old('postcode') }}">
                        </div>
                        <div class="col-md-4 mb-3">
                        </div>
                        <div class="col-md-4 mb-3">
                        </div>
                      </div>
                      
                      <div class="form-group">
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" >
                          <label class="form-check-label">
                            Agree to terms and conditions
                          </label>
                        </div>
                      </div>
                      <button class="btn btn-primary" type="submit" disabled>Submit</button>
                    </form>
                </div>
            </div>
        </div>
        <!-- End col -->
        
    </div>   
    <!-- End row -->
</div>
<!-- End Contentbar -->
@endsection 
@section('script')

<script type="text/javascript">

  const vm = new Vue({
    el: '#app',

    mounted(){
    },
    data (){
      return {
        name:'',
        address1:'',  
        phone: '',
        email: '',
        address1: '',
        postcode: '',
        website: '',
        type: '',
        size: '',
        formValid:false,
        emailRule:[
            (v) => !!v || "{{__('alerts.form_validation.email')}}",
            function(value){
                if (/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,24}))$/
                    .test(value)){
                    return true;
                }
                else{
                    return "{{__('alerts.form_validation.invalid_email')}}";
                }
            }
        ],
        rules: {
            nameRule: function(value){
                if (/^[a-zA-Z.]*$/.test(value)){
                    return true;
                }
                else{
                    return "{{__('alerts.form_validation.name_char')}}";
                }
            },
            phoneRules: [
              (v) => !!v || "Phone number is required",
              (v) => (v && v.length >= 9) || "Phone number requires 9 digits",
            ],
        }
      }
    },
    methods :{
      submit(){
        this.$refs.createForm.$el.submit();
      },
    }
  });
  
</script>
@endsection 