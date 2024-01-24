@extends('layout\main')

@section('main-contant')
<body class="sticky-header ">
    <!--[if lte IE 9]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  	<![endif]-->

    <div id="SHMU-preloader">
        <div class="loading-spinner">
            <div class="preloader-spin-1"></div>
            <div class="preloader-spin-2"></div>
        </div>
        <div class="preloader-close-btn-wraper">
            <span class="btn btn-primary preloader-close-btn">
                Cancel Preloader</span>
        </div>
    </div>

    <div id="main-wrapper" class="main-wrapper">

        <!--=====================================-->
        <!--=        Header Area Start       	=-->
        <!--=====================================-->
        <my-nav></my-nav>
        <!--=====================================-->
        <!--=       About Area Start      		=-->
        <!--=====================================-->
        <div class="edu-office-table-area office-of-the-registrar">
            <div class="container">
                <div class="row g-5">
                    <div class="col-lg-12" data-sal-delay="50" data-sal="slide-up" data-sal-duration="800">
                        <div class="office-content text-center">
                            <h1>Office of The Registrar</h1>
                            <table class="table table-bordered table-responsive table-striped">
                                <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Designation</th>
                                    <th scope="col">Office</th>
                                    <th scope="col">Contact Number</th>
                                    <th scope="col">Photograph</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Md. Abdur Rouf</td>
                                    <td>Registrar</td>
                                    <td>Office of the Registrar</td>
                                    <td>02478838752</td>
                                    <td><img src="assets/images/administration/office_of_the_register/Md.-Abdur-Rouf.jpg" alt="register_office"></td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Sheikh Sohel</td>
                                    <td>Section Officer</td>
                                    <td>Office of the Registrar</td>
                                    <td>01743855142</td>
                                    <td><img src="assets/images/administration/office_of_the_register/Sheikh-Sohel.jpg" alt="register_office_so"></td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Rawzia Khanom Akhi</td>
                                    <td>Administrative Officer</td>
                                    <td>Office of the Registrar</td>
                                    <td>01407207989</td>
                                    <td><img src="assets/images/administration/office_of_the_register/Rawzia-Khanom-Akhi.jpg" alt="register_office_ao"></td>
                                </tr>
                                <tr>
                                    <th scope="row">4</th>
                                    <td>Sheikh Anik Mahmud</td>
                                    <td>Assistant Store Officer</td>
                                    <td>Office of the Registrar</td>
                                    <td>01613338939</td>
                                    <td><img src="assets/images/administration/office_of_the_register/Sheikh-Anik-Mahmud.jpg" alt="register_office_aso"></td>
                                </tr>
                                <tr>
                                    <th scope="row">5</th>
                                    <td>Tapan Kumar Sarkar</td>
                                    <td>PA Cum Computer Operator</td>
                                    <td>Office of the Registrar</td>
                                    <td>01714808555</td>
                                    <td><img src="assets/images/administration/office_of_the_register/Tapan-Kumar-Sarkar.jpg" alt="register_office_pao"></td>
                                </tr>
                                <tr>
                                    <th scope="row">6</th>
                                    <td>Tarikul Islam Tufan</td>
                                    <td>Office Assistant cum Computer Typist</td>
                                    <td>Office of the Registrar</td>
                                    <td>01765779616</td>
                                    <td><img src="assets/images/administration/office_of_the_register/Tarikul-Islam-Tufan.jpg" alt="register_office_oat"></td>
                                </tr>
                                <tr>
                                    <th scope="row">7</th>
                                    <td>Nazmul Hasan</td>
                                    <td>Dispatch Writers</td>
                                    <td>Office of the Registrar</td>
                                    <td>01721724499</td>
                                    <td><img src="assets/images/administration/office_of_the_register/Nazmul-Hasan-rotated.jpg" alt="register_office_dw"></td>
                                </tr>
                                <tr>
                                    <th scope="row">8</th>
                                    <td>Shafiqul Islam</td>
                                    <td>Office Assistant</td>
                                    <td>Office of the Registrar</td>
                                    <td>01718305078</td>
                                    <td><img src="assets/images/administration/office_of_the_register/Shafiqul-Islam.jpg" alt="register_office_oa"></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <ul class="shape-group">
                <li class="shape-5">
                    <img class="rotateit" src="assets/images/about/shape-13.png" alt="Shape">
                </li>
                <li class="shape-6">
                    <span></span>
                </li>
            </ul>
        </div>
@endsection