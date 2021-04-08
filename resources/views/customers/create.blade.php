
      @extends('layouts.app')
      @section('content')
          
     
              
            
       
        <section class="page-section masthead" id="contact">
            <div class="container">
                <!-- Contact Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Dodaj nową</h2>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Contact Section Form-->
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19.-->
                        <form action={{ route('klienci.store') }} method="POST"  id="contactForm" name="sentMessage" novalidate="novalidate">
                            {{ csrf_field() }}
                            <div class="control-group">
                                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                                    <label>Nazwa kleinta</label>
                                    <input class="form-control" name="name" id="name" type="text" placeholder="Nazwa klienta" required="required" data-validation-required-message="Wpisz nazwę klienta" />
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="control-group">
                                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                                    <label>Adres</label>
                                    <input class="form-control" name="address" id="address" type="string" placeholder="Adres" required="required" data-validation-required-message="Podaj adres" />
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="control-group">
                                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                                    <label>NIP</label>
                                    <input class="form-control" name="nip" id="nip" type="text" placeholder="NIP" required="required" data-validation-required-message="Podaj NIP" />
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            
                            <br />
                            <div id="success"></div>
                            <div class="form-group"><button class="btn btn-primary btn-xl" id="sendMessageButton" type="submit">Dodaj klienta</button></div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        @endsection