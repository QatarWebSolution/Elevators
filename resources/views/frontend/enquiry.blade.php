@extends('frontend.master')
@push('styles')
@endpush
@push('scripts')
@endpush
@section('title', 'Page Title')
@section('content')
    <!-- #page-title -->
    <section id="page-title">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- .title -->
                    <div class="title pull-left">
                        <h1>Contact Us</h1>
                    </div>
                    <!-- /.title -->
                    <!-- .page-breadcumb -->
                    <div class="page-breadcumb pull-right">
                        <i class="fa fa-home"></i>
                        <a href="index.php">Home</a>
                        <i class="fa fa-angle-right"></i>
                        <a href="#">Contact</a>
                        <i class="fa fa-angle-right"></i>
                        <span>Enquiry Form</span>
                    </div>
                    <!-- /.page-breadcumb -->
                </div>
            </div>
        </div>
    </section>
    <!-- /#page-title -->
    <section id="contact-content" class="fullwidthall">
        <div class="container register">
            <div class="fulwidth">
                <div class="col-md-3 register-left">
                    <img src="https://image.ibb.co/n7oTvU/logo_white.png" alt=""/>
                    <h3>Enquirty With Us</h3>
                    <p>we haven’t any other activities. We supply and install all types of elevators : Towers (at high speeds of up to 6 m .s), Commercial Buildings, Villas and Elevators for special needs.</p>

                </div>
                <div class="col-md-9 register-right">
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane profile">
                            <form action="{{route('enquirySave')}}" method="post">
                                @csrf
                                <input type="hidden" name="type" value="enquiry">
                                <div class="row register-form">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Name<sup>*</sup></label>
                                        <input type="text" name="name" class="form-control" placeholder="Full Name" value="" />
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Telephone</label>
                                        <input type="number" name="phone" class="form-control" placeholder="Phone Number" value="" />
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Email<sup>*</sup></label>
                                        <input type="password" name="email" class="form-control" placeholder="Email Address" value="" />
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Company Name</label>
                                        <input type="password" name="company" class="form-control"  placeholder="Your Company Name" value="" />
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Number of Floors</label>
                                        <input type="number" name="Number_Of_Floors" class="form-control" placeholder="eg: 25" value="" />
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Cargo Elevators</label>
                                        <input type="text" name="Cargo_Elevators" class="form-control" placeholder="eg:" value="" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Types Of Elevators<sup>*</sup></label>
                                        <div class="lisinglabel">
                                            <label for="electricalele" class="leftfull">
                                                <input type="checkbox" id="electricalele"  name="Types_Of_Elevators" value="Electrical Elevators"/>
                                                Electrical Elevators
                                            </label>
                                            <label for="Hydraulic" class="leftfull">
                                                <input type="checkbox" id="Hydraulic" name="Types_Of_Elevators" value="Hydraulic Elevators" />
                                                Hydraulic Elevators
                                            </label>
                                        </div>
                                        <!-- This is hydraulic elevators section -->
                                        <div id="hydolic" class="iding" style="display: none">
                                            <h3>Hydraulic Elevators Speed</h3>
                                            {{--<form action="#">--}}
                                                <p>
                                                    <label>
                                                        <input name="Hydraulic_Elevators_Speed" value="Soft Start / Soft Stop" class="with-gap" type="radio" />
                                                        <span>Soft Start / Soft Stop</span>
                                                    </label>
                                                </p>
                                            {{--</form>--}}
                                        </div>
                                        <!-- End hydraulic elevators section -->
                                        <!-- This is Electrical elevators section -->
                                        <div id="electric" class="iding" style="display: none">
                                            <h3>Electrical Elevators</h3>
                                            {{--<form action="#">--}}
                                                <p>
                                                    <label>
                                                        <input name="Electrical_Elevators" value="Gearless" class="with-gap" type="radio" />
                                                        <span>Gearless</span>
                                                    </label>
                                                </p>
                                                <p>
                                                    <label>
                                                        <input name="Electrical_Elevators" value="Traction Machine" class="with-gap" type="radio" />
                                                        <span>Traction Machine</span>
                                                    </label>
                                                </p>
                                                <p>
                                                    <label>
                                                        <input class="with-gap" name="Electrical_Elevators" value="WVF" type="radio"  />
                                                        <span>WVF</span>
                                                    </label>
                                                </p>
                                                <p>
                                                    <label>
                                                        <input name="Electrical_Elevators" value="2Speed" type="radio" class="with-gap" />
                                                        <span>2Speed</span>
                                                    </label>
                                                </p>
                                            {{--</form>--}}
                                        </div>
                                        <!-- End Electrical elevators section -->
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Speed of Elevators</label>
                                        <div class="lisinglabel">
                                            <label for="espeed" class="leftfull">
                                                <input name="Speed_of_Elevators_Electrical Speed" value="Electrical Speed" type="checkbox" id="espeed" />
                                                Electrical Speed
                                            </label>
                                            <label for="hspeed" class="leftfull">
                                                <input name="Speed_of_Elevators_Hydraulic Speed" value="Hydraulic Speed" type="checkbox" id="hspeed" />
                                                Hydraulic Speed
                                            </label>
                                        </div>
                                        <!-- This is hydraulic elevators speed section -->
                                        <div id="hyspeed" class="iding" style="display: none">
                                            <h3>Hydraulic Elevators Speeds</h3>
                                            {{--<form action="#">--}}
                                                <p>
                                                    <label>
                                                        <input name="Hydraulic_Elevators_Speeds" value="40cm/s" class="with-gap" type="radio" />
                                                        <span>40cm/s</span>
                                                    </label>
                                                </p>
                                                <p>
                                                    <label>
                                                        <input name="Hydraulic_Elevators_Speeds" value="60cm/s" class="with-gap" type="radio" />
                                                        <span>60cm/s</span>
                                                    </label>
                                                </p>
                                                <p>
                                                    <label>
                                                        <input name="Hydraulic_Elevators_Speeds" value="80cm/s-1m/s" class="with-gap" type="radio" />
                                                        <span>80cm/s-1m/s</span>
                                                    </label>
                                                </p>
                                                <p>
                                                    <label>
                                                        <input name="Hydraulic_Elevators_Speeds" value="Others" class="with-gap" type="radio" />
                                                        <span>Others</span>
                                                    </label>
                                                </p>
                                            {{--</form>--}}
                                        </div>
                                        <!-- End hydraulic elevators speed section -->
                                        <!-- This is Electrical elevators speed section -->
                                        <div id="elespeed" class="iding" style="display: none">
                                            <h3>Electrical Elevators Speeds</h3>
                                            {{--<form action="#">--}}
                                                <p>
                                                    <label>
                                                        <input name="Electrical_Elevators_Speeds" value="1M" class="with-gap" type="radio" />
                                                        <span>1M </span>
                                                    </label>
                                                </p>
                                                <p>
                                                    <label>
                                                        <input name="Electrical_Elevators_Speeds" value="1.2M/S" class="with-gap" type="radio" />
                                                        <span>1.2M/S</span>
                                                    </label>
                                                </p>
                                                <p>
                                                    <label>
                                                        <input class="with-gap" name="Electrical_Elevators_Speeds" value="1.8M/S" type="radio"  />
                                                        <span>1.8M/S</span>
                                                    </label>
                                                </p>
                                                <p>
                                                    <label>
                                                        <input name="Electrical_Elevators_Speeds" value="Others" type="radio" class="with-gap" />
                                                        <span>Others</span>
                                                    </label>
                                                </p>

                                        </div>
                                        <!-- End Electrical elevators section -->
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <!-- This is Electrical elevators speed section -->
                                        <div id="construcation" class="iding">
                                            <h3>Construction</h3>
                                            <div class="ev">
                                                <div class="full">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Pit Depth</label>
                                                            <input type="text" name="Pit_Depth" class="form-control"  placeholder="" value="" />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label class="fullwidth">Drilling Place Doors</label>
                                                            <label>
                                                                <input name="Drilling_Place_Doors" value="Yes" class="with-gap" type="radio" />
                                                                <span>Yes </span>
                                                            </label>
                                                            <label>
                                                                <input name="Drilling_Place_Doors" value="No" class="with-gap" type="radio" />
                                                                <span>No </span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label class="fullwidth">Machine Room</label>
                                                        <label>
                                                            <input name="Machine_Room" value="Yes" class="with-gap" type="radio" />
                                                            <span>Yes </span>
                                                        </label>
                                                        <label>
                                                            <input name="Machine_Room" value="No" class="with-gap" type="radio" />
                                                            <span>No </span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label class="fullwidth">No Readiness</label>
                                                        <label>
                                                            <input name="No_Readiness" value="Steel Structure" class="with-gap" type="radio" />
                                                            <span>Steel Structure</span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-5">
                                                    <div class="form-group">
                                                        <label class="fullwidth">The Readiness of the Place</label>
                                                        <label>
                                                            <input name="The_Readiness_of_the_Place" value="Ready" class="with-gap" type="radio" />
                                                            <span>Ready </span>
                                                        </label>
                                                        <label>
                                                            <input name="The_Readiness_of_the_Place" value="Not Ready" class="with-gap" type="radio" />
                                                            <span>Not Ready </span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Electrical elevators section -->
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div id="construcation" class="iding">
                                        <h3>Accessories</h3>
                                        <div class="lisinglabel pd20">
                                            <label for="a1" class="leftfull">
                                                <input name="Accessories[Intercom]" value="Intercom" type="checkbox" id="a1" />
                                                Intercom
                                            </label>
                                            <label for="a2" class="leftfull">
                                                <input name="Accessories[Security Key]" value="Security Key" type="checkbox" id="a2" />
                                                Security Key
                                            </label>
                                            <label for="a3" class="leftfull">
                                                <input name="Accessories[USB]"  value="USB (electrical move elevators)" type="checkbox" id="a3" />
                                                USB (electrical move elevators)
                                            </label>
                                            <label for="a4" class="leftfull">
                                                <input name="Accessories[Mirror]" value="Mirror" type="checkbox" id="a4" />
                                                Mirror
                                            </label>
                                            <label for="a5" class="leftfull">
                                                <input name="Accessories[Overload Signal]" value="Overload Signal" type="checkbox" id="a5" />
                                                Overload Signal
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div id="construcation" class="iding">
                                        <h3>Steel Structure</h3>
                                        <div class="lisinglabel pd20">
                                            <label for="a11" class="leftfull">
                                                <input name="Steel_Structure[Stainless Steel Cladding]" value="Stainless Steel Cladding" type="checkbox" id="a11" />
                                                Stainless Steel Cladding
                                            </label>
                                            <label for="a12" class="leftfull">
                                                <input name="Steel_Structure[Stainless Steel with Glass]" value="Stainless Steel with Glass" type="checkbox" id="a12" />
                                                Stainless Steel with Glass
                                            </label>
                                            <label for="a13" class="leftfull">
                                                <input name="Steel_Structure[Formica]" value="Formica" type="checkbox" id="a13" />
                                                Formica
                                            </label>
                                            <label for="a14" class="leftfull">
                                                <input name="Steel_Structure[Paint Wood with Suitable Color]" value="Paint Wood with Suitable Color" type="checkbox" id="a14" />
                                                Paint Wood with Suitable Color
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Electrical Engine Capacity</label>
                                        <input name="Electrical_Engine_Capacity" type="text" class="form-control" placeholder="" value="" />
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Hydraulic Engine Capacity</label>
                                        <input name="Hydraulic_Engine_Capacity" type="text" class="form-control" placeholder="" value="" />
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Volume of Cabin</label>
                                        <input name="Volume_of_Cabin" type="text" class="form-control" placeholder="" value="" />
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div id="construcation" class="iding">
                                        <h3>Finished Cabin</h3>
                                        <div class="lisinglabel pd20">
                                            <label for="a111" class="leftfull">
                                                <input name="Finished_Cabin[Panorama Glass Insulator]" type="checkbox" id="a111" value="Panorama Glass Insulator"/>
                                                Panorama Glass Insulator
                                            </label>
                                            <label for="a122" class="leftfull">
                                                <input name="Finished_Cabin[Golden Stainless Steel]" type="checkbox" id="a122" value="Golden Stainless Steel"/>
                                                Golden Stainless Steel
                                            </label>
                                            <label for="a133" class="leftfull">
                                                <input name="Finished_Cabin[Silver Stainless Steel]" type="checkbox" id="a133" value="Silver Stainless Steel"/>
                                                Silver Stainless Steel
                                            </label>
                                            <label for="a144" class="leftfull">
                                                <input name="Finished_Cabin[Formica]" type="checkbox" id="a144" value="Formica" />
                                                Formica
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div id="construcation" class="iding">
                                        <h3>Doors</h3>
                                        <div class="lisinglabel pd20">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>Size Section</label>
                                                        <select class="form-control" name="Size_Section">
                                                            <option class="hidden">Please select Size</option>
                                                            <option value="70 cm">70 cm</option>
                                                            <option value="80 cm">80 cm</option>
                                                            <option value="100 cm">100 cm</option>
                                                            <option value="Others">Others</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>Type Doors</label>
                                                        <select class="form-control" name="Type_Doors">
                                                            <option class="hidden">Please select Doors</option>
                                                            <option value="Glass">Glass</option>
                                                            <option value="Stainless Steel Golden">Stainless Steel Golden</option>
                                                            <option value="Stainless Steel Silver">Stainless Steel Silver</option>
                                                            <option value="Paint">Paint</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>Opening Doors</label>
                                                        <select class="form-control" name="Opening_Doors">
                                                            <option class="hidden">Please select</option>
                                                            <option value="Center Opening">Center Opening</option>
                                                            <option value="Side Opening">Side Opening</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label>Desired Price</label>
                                                        <input name="Desired_Price" type="text" class="form-control" placeholder="" value="" />
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label>Size Shaft</label>
                                                        <input name="Size_Shaft" type="text" class="form-control" placeholder="" value="" />
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label>Over Head</label>
                                                        <input name="Over_Head" type="text" class="form-control" placeholder="" value="" />
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label>Observation</label>
                                                        <input name="Observation" type="text" class="form-control" placeholder="" value="" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <input type="submit" class="btnRegister"  value="Submit"/>
                                </div>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /#contact-content -->
    <!-- /#clients -->
@endsection
