
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
                        <form action={{ route('invoices.store') }} method="POST"  id="contactForm" name="sentMessage" novalidate="novalidate">
                            {{ csrf_field() }}
                            <div class="control-group">
                                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                                    <label>Numer faktury</label>
                                    <input class="form-control" name="number" id="number" type="text" placeholder="Numer faktury" required="required" data-validation-required-message="Wpisz numer faktury" />
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="control-group">
                                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                                    <label>Data wystawienia</label>
                                    <input class="form-control" name="date" id="date" type="date" placeholder="Data wystawienia" required="required" data-validation-required-message="Podaj datę" />
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="control-group">
                                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                                    <label>Kwota</label>
                                    <input class="form-control" name="total" id="total" type="text" placeholder="Kwota" required="required" data-validation-required-message="Podaj kwotę" />
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            
                            <br />
                            <div id="success"></div>
                            <div class="form-group"><button class="btn btn-primary btn-xl" id="sendMessageButton" type="submit">Dodaj fakturę</button></div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        @endsection