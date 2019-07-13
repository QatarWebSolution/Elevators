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
                            <div class="row register-form">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Name<sup>*</sup></label>
                                        <input type="text" class="form-control" placeholder="Full Name" value="" />
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Telephone</label>
                                        <input type="number" class="form-control" placeholder="Phone Number" value="" />
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Email<sup>*</sup></label>
                                        <input type="password" class="form-control" placeholder="Email Address" value="" />
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Company Name</label>
                                        <input type="password" class="form-control"  placeholder="Your Company Name" value="" />
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Number of Floors</label>
                                        <input type="number" class="form-control" placeholder="eg: 25" value="" />
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Cargo Elevators</label>
                                        <input type="text" class="form-control" placeholder="eg:" value="" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Types Of Elevators<sup>*</sup></label>
                                        <div class="lisinglabel">
                                            <label for="electricalele" class="leftfull">
                                                <input type="checkbox" id="electricalele" />
                                                Electrical Elevators
                                            </label>
                                            <label for="Hydraulic" class="leftfull">
                                                <input type="checkbox" id="Hydraulic" />
                                                Hydraulic Elevators
                                            </label>
                                        </div>
                                        <!-- This is hydraulic elevators section -->
                                        <div id="hydolic" class="iding" style="display: none">
                                            <h3>Hydraulic Elevators Speed</h3>
                                            <form action="#">
                                                <p>
                                                    <label>
                                                        <input name="group22" class="with-gap" type="radio" />
                                                        <span>Soft Start / Soft Stop</span>
                                                    </label>
                                                </p>
                                            </form>
                                        </div>
                                        <!-- End hydraulic elevators section -->
                                        <!-- This is Electrical elevators section -->
                                        <div id="electric" class="iding" style="display: none">
                                            <h3>Electrical Elevators</h3>
                                            <form action="#">
                                                <p>
                                                    <label>
                                                        <input name="group1" class="with-gap" type="radio" />
                                                        <span>Gearless</span>
                                                    </label>
                                                </p>
                                                <p>
                                                    <label>
                                                        <input name="group1" class="with-gap" type="radio" />
                                                        <span>Traction Machine</span>
                                                    </label>
                                                </p>
                                                <p>
                                                    <label>
                                                        <input class="with-gap" name="group1" type="radio"  />
                                                        <span>WVF</span>
                                                    </label>
                                                </p>
                                                <p>
                                                    <label>
                                                        <input name="group1" type="radio" class="with-gap" />
                                                        <span>2Speed</span>
                                                    </label>
                                                </p>
                                            </form>
                                        </div>
                                        <!-- End Electrical elevators section -->
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Speed of Elevators</label>
                                        <div class="lisinglabel">
                                            <label for="espeed" class="leftfull">
                                                <input type="checkbox" id="espeed" />
                                                Electrical Speed
                                            </label>
                                            <label for="hspeed" class="leftfull">
                                                <input type="checkbox" id="hspeed" />
                                                Hydraulic Speed
                                            </label>
                                        </div>
                                        <!-- This is hydraulic elevators speed section -->
                                        <div id="hyspeed" class="iding" style="display: none">
                                            <h3>Hydraulic Elevators Speeds</h3>
                                            <form action="#">
                                                <p>
                                                    <label>
                                                        <input name="group01" class="with-gap" type="radio" />
                                                        <span>40cm/s</span>
                                                    </label>
                                                </p>
                                                <p>
                                                    <label>
                                                        <input name="group01" class="with-gap" type="radio" />
                                                        <span>60cm/s</span>
                                                    </label>
                                                </p>
                                                <p>
                                                    <label>
                                                        <input name="group01" class="with-gap" type="radio" />
                                                        <span>80cm/s-1m/s</span>
                                                    </label>
                                                </p>
                                                <p>
                                                    <label>
                                                        <input name="group01" class="with-gap" type="radio" />
                                                        <span>Others</span>
                                                    </label>
                                                </p>
                                            </form>
                                        </div>
                                        <!-- End hydraulic elevators speed section -->
                                        <!-- This is Electrical elevators speed section -->
                                        <div id="elespeed" class="iding" style="display: none">
                                            <h3>Electrical Elevators Speeds</h3>
                                            <form action="#">
                                                <p>
                                                    <label>
                                                        <input name="group001" class="with-gap" type="radio" />
                                                        <span>1M </span>
                                                    </label>
                                                </p>
                                                <p>
                                                    <label>
                                                        <input name="group001" class="with-gap" type="radio" />
                                                        <span>1.2M/S</span>
                                                    </label>
                                                </p>
                                                <p>
                                                    <label>
                                                        <input class="with-gap" name="group001" type="radio"  />
                                                        <span>1.8M/S</span>
                                                    </label>
                                                </p>
                                                <p>
                                                    <label>
                                                        <input name="group001" type="radio" class="with-gap" />
                                                        <span>Others</span>
                                                    </label>
                                                </p>
                                            </form>
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
                                                            <input type="text" class="form-control"  placeholder="" value="" />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label class="fullwidth">Drilling Place Doors</label>
                                                            <label>
                                                                <input name="12" class="with-gap" type="radio" />
                                                                <span>Yes </span>
                                                            </label>
                                                            <label>
                                                                <input name="12" class="with-gap" type="radio" />
                                                                <span>No </span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label class="fullwidth">Machine Room</label>
                                                        <label>
                                                            <input name="13" class="with-gap" type="radio" />
                                                            <span>Yes </span>
                                                        </label>
                                                        <label>
                                                            <input name="13" class="with-gap" type="radio" />
                                                            <span>No </span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label class="fullwidth">No Readiness</label>
                                                        <label>
                                                            <input name="14" class="with-gap" type="radio" />
                                                            <span>Steel Structure</span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-5">
                                                    <div class="form-group">
                                                        <label class="fullwidth">The Readiness of the Place</label>
                                                        <label>
                                                            <input name="16" class="with-gap" type="radio" />
                                                            <span>Ready </span>
                                                        </label>
                                                        <label>
                                                            <input name="16" class="with-gap" type="radio" />
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
                                                <input type="checkbox" id="a1" />
                                                Intercom
                                            </label>
                                            <label for="a2" class="leftfull">
                                                <input type="checkbox" id="a2" />
                                                Security Key
                                            </label>
                                            <label for="a3" class="leftfull">
                                                <input type="checkbox" id="a3" />
                                                USB (electrical move elevators)
                                            </label>
                                            <label for="a4" class="leftfull">
                                                <input type="checkbox" id="a4" />
                                                Mirror
                                            </label>
                                            <label for="a5" class="leftfull">
                                                <input type="checkbox" id="a5" />
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
                                                <input type="checkbox" id="a11" />
                                                Stainless Steel Cladding
                                            </label>
                                            <label for="a12" class="leftfull">
                                                <input type="checkbox" id="a12" />
                                                Stainless Steel with Glass
                                            </label>
                                            <label for="a13" class="leftfull">
                                                <input type="checkbox" id="a13" />
                                                Formica
                                            </label>
                                            <label for="a14" class="leftfull">
                                                <input type="checkbox" id="a14" />
                                                Paint Wood with Suitable Color
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Electrical Engine Capacity</label>
                                        <input type="text" class="form-control" placeholder="" value="" />
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Hydraulic Engine Capacity</label>
                                        <input type="text" class="form-control" placeholder="" value="" />
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Volume of Cabin</label>
                                        <input type="text" class="form-control" placeholder="" value="" />
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div id="construcation" class="iding">
                                        <h3>Finished Cabin</h3>
                                        <div class="lisinglabel pd20">
                                            <label for="a111" class="leftfull">
                                                <input type="checkbox" id="a111" />
                                                Panorama Glass Insulator
                                            </label>
                                            <label for="a122" class="leftfull">
                                                <input type="checkbox" id="a122" />
                                                Golden Stainless Steel
                                            </label>
                                            <label for="a133" class="leftfull">
                                                <input type="checkbox" id="a133" />
                                                Silver Stainless Steel
                                            </label>
                                            <label for="a144" class="leftfull">
                                                <input type="checkbox" id="a144" />
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
                                                        <select class="form-control">
                                                            <option class="hidden">Please select Size</option>
                                                            <option>70 cm</option>
                                                            <option>80 cm</option>
                                                            <option>100 cm</option>
                                                            <option>Others</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>Type Doors</label>
                                                        <select class="form-control">
                                                            <option class="hidden">Please select Doors</option>
                                                            <option>Glass</option>
                                                            <option>Stainless Steel Golden</option>
                                                            <option>Stainless Steel Silver</option>
                                                            <option>Paint</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>Opening Doors</label>
                                                        <select class="form-control">
                                                            <option class="hidden">Please select</option>
                                                            <option>Center Opening</option>
                                                            <option>Side Opening</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label>Desired Price</label>
                                                        <input type="text" class="form-control" placeholder="" value="" />
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label>Size Shaft</label>
                                                        <input type="text" class="form-control" placeholder="" value="" />
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label>Over Head</label>
                                                        <input type="text" class="form-control" placeholder="" value="" />
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label>Observation</label>
                                                        <input type="text" class="form-control" placeholder="" value="" />
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /#contact-content -->
    <!-- /#clients -->
@endsection
