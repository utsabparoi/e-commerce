@extends('layouts.front_template')

@section('content')
    <!--content-->
    <div class="content-top ">
        <div class="container ">
            <div class="spec ">
                <h3>Category Page</h3>
                <div class="ser-t">
                    <b></b>
                    <span><i></i></span>
                    <b class="line"></b>
                </div>
            </div>
        </div>
    </div>
    <main>
        <div class="container inner-cont">
            <div class="row">
                <div class="col-sm-6">
                    <div class="inner-sec-title-exception text-center">
                        <h2>{{ $department->department_name }}</h2>
                        <!-- <span class="divider"></span> -->
                    </div>
                </div>
                {{-- Department Searche Options --}}
                {{-- <div class="col-sm-6 dept">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="inputGroupSelect01">Select Department</label>
                        </div>
                        <select class="custom-select" id="inputGroupSelect01">
                            <option selected>Choose...</option>
                            <option value="1">Vascular Surgery</option>
                            <option value="2">Thoracic Surgery</option>
                            <option value="3">Pain Clinic</option>
                        </select>
                    </div>

                </div> --}}
            </div>
            <hr>
            <div class="row">
                <div class="col-sm-6 department">
                    <img src="{{ asset($department->department_image) }}" style="max-height: 450px;"
                        alt="{{ asset($department->department_name) }}">
                </div>
                <div class="col-sm-6 custom_entity">
                    <p class="text-justify ">
                        {!! $department->department_description !!}
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="dept-doc">
                    <h5>Consultation & Appointment</h5>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-3">
                    <!--Start single item-->
                    <div class="single-item text-center team-block-two">
                        <div class="inner-box  ">
                            <div class="image-box">
                                <figure class="image"><a href="#"><img
                                            src="{{ asset('frontend/images/doctors/team-4.jpg') }}" alt=""></a>
                                </figure>
                                <!--<ul class="social-links">-->
                                <!--    <li><a href="#">Appointment</a></li>-->
                                <!--    <li><a href="#">Doctor Details</a></li>-->
                                <!--</ul>-->
                            </div>
                            <div class="info-box">
                                <h5 class="name"><a href="#">Dr. Md Abdul Halim</a></h5>
                                <span class="designation">Consultant</span>
                                <p class="text-center info-box-dept-name">Internal Medicine</p>
                                <div>
                                    <a href="#" class="badge badge-secondary">Sat</a>
                                    <a href="#" class="badge badge-secondary">Sun</a>
                                    <a href="#" class="badge badge-danger">Tue</a>
                                    <a href="#" class="badge badge-secondary">Wed</a>
                                    <a href="#" class="badge badge-secondary">Thu</a>
                                </div>
                                <p class="app-time text-center">6:00 PM to 8:00 PM</p>
                                <div class="text-center mt-2">
                                    <a href="https://web.asgaralihospital.com/appointment"><button type="button"
                                            class="btn btn-primary btn-sm">Appointment</button></a>
                                    <button type="button" class="btn btn-info btn-sm" data-toggle="modal"
                                        data-target=".bd-example-modal-lg">Doctor Details</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End single item-->
                </div>
                <div class="col-sm-3">
                    <!--Start single item-->
                    <div class="single-item text-center team-block-two">
                        <div class="inner-box  ">
                            <div class="image-box">
                                <figure class="image"><a href="#"><img
                                            src="{{ asset('frontend/images/doctors/team-3.jpg') }}" alt=""></a>
                                </figure>
                                <!--<ul class="social-links">-->
                                <!--    <li><a href="#">Appointment</a></li>-->
                                <!--    <li><a href="#">Doctor Details</a></li>-->
                                <!--</ul>-->
                            </div>
                            <div class="info-box">
                                <h5 class="name"><a href="#">Dr. Samira Yasmeen Ahmed</a></h5>
                                <span class="designation">Consultant</span>
                                <p class="text-center info-box-dept-name">Internal Medicine</p>
                                <div>
                                    <a href="#" class="badge badge-secondary">Sat</a>
                                    <a href="#" class="badge badge-secondary">Sun</a>
                                    <a href="#" class="badge badge-danger">Mon</a>
                                    <a href="#" class="badge badge-secondary">Tue</a>
                                    <a href="#" class="badge badge-secondary">Wed</a>
                                    <a href="#" class="badge badge-secondary">Thu</a>
                                </div>
                                <p class="app-time text-center">6:00 PM to 8:00 PM</p>
                                <div class="text-center mt-2">
                                    <a href="https://web.asgaralihospital.com/appointment"><button type="button"
                                            class="btn btn-primary btn-sm">Appointment</button></a>
                                    <button type="button" class="btn btn-info btn-sm" data-toggle="modal"
                                        data-target=".bd-example-modal-lg">Doctor Details</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End single item-->
                    <!-- Modal -->

                    <div class="doc-profile-modal modal fade bd-example-modal-lg" tabindex="-1" role="dialog"
                        aria-labelledby="myLargeModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <!-- <h5 class="modal-title" id="exampleModalLongTitle">Dr. Md. Jilhaj Uddin
                                    </h5> -->
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <img class="doc-img" src="{{ asset('frontend/images/doctors/demo-doc.png') }}"
                                                alt="">
                                            <h3 class="doc-name">Dr. Md. Jilhaj Uddin</h3>
                                        </div>
                                        <div class="col-sm-8 doc-details">
                                            <p>MBBS, BCS (Health)</p>
                                            <p>MS (Cardiovascular)</p>
                                            <p>Specialist – Vascular Surgery</p>
                                            <p><img src="{{ asset('frontend/images/footer/hc-icon.png') }}"
                                                    alt=""> Dr. Md. Jilhaj Uddin obtained his MBBS degree from
                                                Rajshahi Medical College.</p>
                                            <p><img src="{{ asset('frontend/images/footer/hc-icon.png') }}"
                                                    alt=""> He received Trainings on Surgery from ‘Dhaka Medical
                                                College Hospital’, ‘Shaheed Suhrawardy Medical College Hospital’ and
                                                ‘BSMMU’.</p>
                                            <p><img src="{{ asset('frontend/images/footer/hc-icon.png') }}"
                                                    alt=""> Dr. Jilhaj successfully completed his MS degree in
                                                ‘Cardiovascular Surgery’ from ‘National Institute of Cardiovascular
                                                Diseases’ (NICVD) and joined in Govt. service through BCS Health.</p>
                                            <p><img src="{{ asset('frontend/images/footer/hc-icon.png') }}"
                                                    alt=""> Later he worked in Vascular Surgery Department of NICVD
                                                and enriched himself with Advanced Training on Vascular Surgery, LASER and
                                                Endovascular Intervention till June, 2020.</p>
                                            <!-- <p><img src="images/footer/hc-icon.png" alt=""> Presently Dr. Md. Jilhaj Uddin is at Asgar Ali Hospital as Specialist-Vascular Surgery and serving patients regularly.</p> -->
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <a href="https://web.asgaralihospital.com/appointment"><button type="button"
                                            class="btn btn-primary btn-sm">Make An Appointment</button></a>
                                    <button type="button" class="btn btn-secondary doc-close"
                                        data-dismiss="modal">Close</button>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Doctor Details Modal Ends -->
                </div>
            </div>
        </div>
    </main>
    <footer>
        @include('frontend.layout.footer')
    </footer>
@endsection
