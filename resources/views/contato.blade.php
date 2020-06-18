@extends('layouts.app')

@section('content')
 
<div class="row justify-content-center p-0 m-0 py-5">
    <div class="col-sm-6">
        <div class="card p-2">
            <div class="mx-auto mt-3">
                <h6 class="text-uppercase mb-4 font-weight-bold">Contato</h6>
                <p>
                <i class="fas fa-home mr-3"></i> Governador Milton Campos 352, Centro - Sete Lagoas</p>
                <p>  
                    <a href="mailto:contato@kicell7.com.br" style="color:black"><i class="fas fa-envelope mr-3"></i>contato@kitcell7.com.br</a>
                </p>
                <p>
                    <a href="tel:3198112141" style="color:black"><i class="fas fa-phone mr-3"></i>(31) 9811-2141</a>
                </p>
                <hr>
                <div class="row justify-content-center">
                    <a class="btn-floating btn-sm rgba-white-slight mx-1" href="https://www.facebook.com/kitcell.tels.7">
                        <i class="fab fa-2x fa-facebook-f" style="color:black"></i>
                    </a>                    
                    <a class="btn-floating btn-sm rgba-white-slight mx-1" href="https://www.instagram.com/kitcelll/">
                        <i class="fab fa-2x fa-instagram" style="color:black"></i>
                    </a>
                    <a class="btn-floating btn-sm rgba-white-slight mx-1" href="https://wa.me/553198112141">
                        <i class="fab fa-2x fa-whatsapp" style="color:black"></i>
                    </a>
                </div>            
                
            </div>
        </div>
    </div>
</div>


@endsection