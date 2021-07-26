@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card border-top border-left-0 border-right-0 border-bottom-0 border-danger overflow-hidden shadow sm:rounded-lg">                
                <div class="card-body">
                   <div class="row justify-content-center text-center">
                       <div class="col-md-4 ">
                            {{-- <img src="{{ asset('images/icon-share_2x.png') }}"  width="35%" "/ > --}}
                            <a href="http://203.151.143.173:8080/" target="_blank">
                                <img src="{{ asset('images/icon-share_2x.png') }}"  width="30%"/ >
                            </a>
                            <h5 class="my-3">ZURMO CRM</h5>
                       </div>
                        <div class="col-md-4">
                            <a href="http://ess.interlink.co.th/timeonline/default1.aspx" target="_blank">
                                <img src="{{ asset('images/add-v1.png') }}"  width="30%"/ >
                            </a>
                            <h5 class="my-3">Tiger e-HR</h5>
                       </div>
                        <div class="col-md-4">
                            <a href="http://203.151.143.173:8082/share" target="_blank">
                                <img src="{{ asset('images/icon-marketing_2x.png') }}"  width="30%"/ >
                            </a>
                            <h5 class="my-3">Alfresco</h5>                            
                       </div>
                   </div>
                   <br/>
                   <div class="row text-center">
                       <div class="col-md-4">
                           <a href="http://203.151.143.173:8078" target="_blank">
                             <img src="{{ asset('images/Optnet.png') }}"  width="30%"/ >
                           </a>
                            <h5 class="my-3">OptNET!</h5>                           
                       </div>
                        <div class="col-md-4">
                            <a href="http://203.151.143.172:8070/Preven/Asset01/login" target="_blank">
                                <img src="{{ asset('images/icon-recommended_2x.png') }}"  width="30%"/ >
                            </a>
                            <h5 class="my-3">AMS</h5>                            
                       </div>
                        <div class="col-md-4">
                            <a href="http://203.151.143.173:8069/web" target="_blank">
                                 <img src="{{ asset('images/icon-follow_2x.png') }}"  width="30%"/ >
                            </a>
                            <h5 class="my-3">ODOO ERP</h5>                            
                       </div>
                   </div>
                   <br/>
                   <div class="row text-center">
                       <div class="col-md-4">
                           <a href="http://203.151.143.173:8071/web/login" target="_blank">
                                <img src="{{ asset('images/icon-marketing_2x.png') }}"  width="30%"/ >
                            </a>
                            <h5 class="my-3">ODOO GPS</h5>                           
                       </div>
                        <div class="col-md-4">
                            <a href="http://202.44.236.202:99/login" target="_blank">
                                <img src="{{ asset('images/Book-icon-orange.png') }}"  width="30%"/ >
                            </a>
                            <h5 class="my-3">ITEL-Logistic</h5>                            
                        <div class="col-md-4">                           
                       </div>
                   </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
