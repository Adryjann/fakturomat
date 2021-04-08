
      @extends('layouts.app')

      @section('content')
          
      
        <section class="masthead page-section portfolio" id="portfolio">
            
            <div class="container">
                @if (session()->has('message'))
                    
               
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>{{session()->get('message')}}</strong> 
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  @endif 
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Lista faktur</h2>
                
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
               
                <table class="table table-striped">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nazwa klienta</th>
                        <th scope="col">Adres</th>
                        <th scope="col">NIP</th>
                        <th scope="col">Akcje</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($customers as $customer)
                        <tr>
                            <th scope="row">{{$customer->id}}</th>
                            <td>{{$customer->name}}</td>
                            <td>{{$customer->address}}</td>
                            <td>{{$customer->nip}}</td>
                            <td><a href="{{ route('klienci.edit', ['klienci' => $customer->id]) }}" class="btn btn-primary">Edytuj</a>
                            <form method="POST" action="{{ route('klienci.destroy', ['klienci' => $customer->id]) }}">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger">Usuń</button>
                            </form></td>

                         </tr>
                        @endforeach
                     
                     
                    </tbody>
                  </table>
            </div>
        </section>
        @endsection
           
           
               
 