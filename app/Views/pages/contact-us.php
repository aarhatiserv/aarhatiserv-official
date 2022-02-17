<!-- contact us Section -->

<section class="d-block h-100 contactusSection" id="ContactUS">
    <div class="jumbotron jumbotron-fluid bg-transparent">
        <div class="row">
            <!-- <div>{notify}</div> -->
            <div class="col-xs-12 col-sm-12 col-md-8 col-lg-7">
                <div class="col-xs-12 col-sm-12 col-md-8">
                    <form class="form" action="/contactform" method="post" id="customersDetailsForm">
                        <div class={styles.contatForm}>
                            <div class="card border-0">
                                <div class="card-body ">
                                    <h3 class="card-title">Contact Form </h3>

                                    <div class="form-group p-3">
                                        <input type="text" name="name" class="form-control contactInput" placeholder="Name" />
                                    </div>
                                    <div class="form-group p-3">
                                        <input type="email" name="email" class="form-control contactInput" placeholder="Email" />
                                    </div>
                                    <div class="form-group p-3">
                                        <select name="services" class="form-control contactInput">
                                            <option name="cyber security">Cyber Security</option>
                                            <option name="SAAS">SAAS</option>
                                            <option name="Web Development">Web Development</option>
                                            <option name="APP Development">APP Development</option>
                                            <option name="Graphic Design">Graphic Design</option>
                                            <option name="Digital Marketing">Digital Marketing</option>
                                        </select>
                                    </div>
                                    <div class="form-group p-3">
                                        <textarea name="message" class="form-control contactInput" rows="3" placeholder="Type a message" style="max-height: 100px;"></textarea>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-6 ml-auto px-0">
                                <input type="submit" name="btn-send" value='Send' class="btn btn-block sendBtn py-2">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- contact us Section ends -->

            <div class="col-md-4 col-lg-5">
                <div class="row my-5 contactInfoCard">
                    <div class="col-md-8 d-flex flex-column">
                        <div class="contactPills py-1 my-3 text-center">
                            <div class="pillIcon d-block">
                                <i class="fa fa-map-marker"></i>
                            </div>
                            <h3 class="pillHeading">Address</h3>
                            <p class="text secondary cAddress">
                                AC 97/1 prafulla kanan(east) kestopur kolkata-700 101
                            </p>
                        </div>
                        <div class="contactPills py-1 my-3 text-center">
                            <div class="pillIcon">
                                <i class="fa fa-envelope"></i>
                            </div>
                            <h3 class="pillHeading">Email</h3>
                            <p class="text secondary cAddress">
                                Support@aarhatiserv.com
                            </p>
                        </div>
                        <div class="contactPills py-1 my-3 text-center">
                            <div class="pillIcon">
                                <i class="fa fa-phone"></i>
                            </div>
                            <h3 class="pillHeading">Phone</h3>
                            <p class="text secondary cAddress">
                                +9179083 82268
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>